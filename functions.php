<?php
/*  ===============================================
    #  Cache  Busting(キャッシュバスティング)
    ===============================================  */
function  theme_enqueue_styles()
{
  wp_enqueue_style(
    'mytheme-style',
    get_stylesheet_uri(),
    array(),
    wp_get_theme()->get('Version')
  );
}

/*  ================================================
    #  抜粋機能を固定ページに使えるように設定
    ================================================  */
add_post_type_support('page', 'excerpt');

/*  ===============================================
    #  抜粋文の文字数調整
    ===============================================  */
function  cms_excerpt_more()
{
  return  '...';
}
add_filter('excerpt_more', 'cms_excerpt_more');

function  new_excerpt_mblength($length)
{
  return  60;
}
add_filter('excerpt_mblength', 'new_excerpt_mblength');

/*  ===============================================
    #  管理バーの非表示
    ===============================================  */
//*  htmlタグのmargin-top:32px  !important;の消去
add_filter('show_admin_bar', '__return_false');

/*  ===============================================
    #  管理画面メニュー非表示
  ===============================================  */
function  remove_menus()
{
  remove_menu_page('edit-comments.php');  //  コメント
}
add_action('admin_menu',  'remove_menus',  999);

/*  ===============================================
    #  管理画面左メニュー並び替え
    ===============================================  */
function  wpse_custom_menu_order($menu_ord)
{
  if (!$menu_ord)  return  true;
  return  array(
    'index.php',  //  ダッシュボード
    'upload.php',  //  メディア
    'edit.php?post_type=page',  //  固定ページ
  );
}
add_filter('custom_menu_order',  'wpse_custom_menu_order',  10,  1);
add_filter('menu_order',  'wpse_custom_menu_order',  10,  1);

/*  ===============================================
    #  お知らせ表示数（topページ）
    ===============================================  */
function  GetNewsPostsTop()
{
  $args  =  array(
    'post_type'  =>  'post',
    'category_name'  =>  'news',
    'posts_per_page'  =>  1,
    'no_found_rows'  =>  true,
  );
  $my_posts  =  get_posts($args);
  return  $my_posts;
}

/*  ===============================================
    #  ページネーション
    ===============================================  */
/**
 *  ページネーション出力関数
 *  $paged  :  現在のページ
 *  $pages  :  全ページ数
 *  $range  :  左右に何ページ表示するか
 *  $show_only  :  1ページしかない時に表示するかどうか
 */
function  pagination($pages,  $paged,  $range  =  2,  $show_only  =  false)
{

  $pages  =  (int)  $pages;        //float型で渡ってくるので明示的に  int型  へ
  $paged  =  $paged  ?:  1;              //get_query_var('paged')をそのまま投げても大丈夫なように

  //表示テキスト
  $text_first      =  "|<<";
  $text_before    =  "<<";
  $text_next        =  ">>";
  $text_last        =  ">>|";

  if ($show_only  &&  $pages  ===  1) {
    //  １ページのみで表示設定が  true  の時
    echo  '<div  class="pagination"><span  class="current  pager">1</span></div>';
    return;
  }

  if ($pages  ===  1)  return;        //  １ページのみで表示設定もない場合

  if (1  !==  $pages) {
    //２ページ以上の時
    echo  '<div  class="pagination">';

    if ($paged  >  $range  +  1) {
      //  「最初へ」  の表示
      echo  '<a  href="',  get_pagenum_link(1), '"  class="first">',  $text_first, '</a>';
    }

    if ($paged  >  1) {
      //  「前へ」  の表示
      echo  '<a  href="',  get_pagenum_link($paged  -  1), '"  class="prev">',  $text_before, '</a>';
    }

    for ($i  =  1; $i  <=  $pages; $i++) {
      if ($i  <=  $paged  +  $range  &&  $i  >=  $paged  -  $range) {
        //  $paged  +-  $range  以内であればページ番号を出力
        if ($paged  ===  $i) {
          echo  '<span  class="current  pager">',  $i, '</span>';
        } else {
          echo  '<a  href="',  get_pagenum_link($i), '"  class="pager">',  $i, '</a>';
        }
      }
    }

    if ($paged  <  $pages) {
      //  「次へ」  の表示
      echo  '<a  href="',  get_pagenum_link($paged  +  1), '"  class="next">',  $text_next, '</a>';
    }

    if ($paged  +  $range  <  $pages) {
      //  「最後へ」  の表示
      echo  '<a  href="',  get_pagenum_link($pages), '"  class="last">',  $text_last, '</a>';
    }
    echo  '</div>';
  }
}





//  固定ページ追加

//  1.  関数を少し拡張：第3引数で親のIDを受け取れるようにします
function  create_page_if_not_exists($slug,  $title,  $parent_id  =  0)
{
  //  get_page_by_path  は階層を考慮するので  'service/plus'  の形式でチェック
  if (!get_page_by_path($slug)) {
    return  wp_insert_post([
      'post_title'      =>  $title,
      'post_name'        =>  basename($slug),  //  スラッグのみ抽出
      'post_status'    =>  'publish',
      'post_type'        =>  'page',
      'post_parent'    =>  $parent_id,
    ]);
  }
  //  既存ページがある場合はそのIDを返す
  $page  =  get_page_by_path($slug);
  return  $page->ID;
}

function  create_individual_pages()
{
  //  通常の固定ページ
  $pages  =  [
    ['slug'  =>  'top',      'title'  =>  'トップ'],
    ['slug'  =>  'about',      'title'  =>  '会社概要'],
    ['slug'  =>  'news',      'title'  =>  'お知らせ'],
    ['slug'  =>  'contact',  'title'  =>  'お問い合わせ'],
    ['slug'  =>  'privacy',  'title'  =>  'プライバシーポリシー'],
  ];

  foreach ($pages  as  $page) {
    create_page_if_not_exists($page['slug'],  $page['title']);
  }

  //  ---  ここから親子ページの作成  ---

  //  まずは親（service）を作成
  $parent_id  =  create_page_if_not_exists('service',  '事業内容');

  //  親のIDを使って子（plus）を作成
  if ($parent_id) {

    create_page_if_not_exists('service/ponte',  '就労支援B型　ぽんて',  $parent_id);
    create_page_if_not_exists('service/plus',  '就労支援B型　ぷらす',  $parent_id);
    create_page_if_not_exists('service/sakura',  '地域活動支援　さくら',  $parent_id);
    create_page_if_not_exists('service/ponte-pw',  '相談支援　ぽんて',  $parent_id);
  }
}
add_action('after_setup_theme',  'create_individual_pages');

//  ---  service  だけを  404  に飛ばす設定  ---
add_action('template_redirect',  function () {
  //  service  ページ本体（かつ子ページではない）の場合のみ  404
  if (is_page('service')) {
    global  $wp_query;
    $wp_query->set_404();
    status_header(404);
    nocache_headers();
    include(get_query_template('404'));
    die();
  }
});




//  jQuery
function  my_theme_enqueue_scripts()
{
  //  jQueryをフッターで読み込む（WordPressバンドル版）
  wp_enqueue_script('jquery',  false,  array(),  false,  true);
}
add_action('wp_enqueue_scripts',  'my_theme_enqueue_scripts');




//  パーマリンクを自動的に再生成する
function  auto_flush_rewrite_rules()
{
  global  $wp_rewrite;
  $wp_rewrite->flush_rules();
}
add_action('init',  'auto_flush_rewrite_rules');



//  アイキャッチ画像
add_theme_support("post-thumbnails");


//  管理バー非表示
add_filter('show_admin_bar',  '__return_false');


//  抜粋の文字数を制限する（お知らせ）

function my_excerpt_length($length) {
  return 30; // 表示したい文字数
}
add_filter('excerpt_mblength', 'my_excerpt_length');


/**
 * 投稿内の最初の画像を取得する関数
 */
function get_thumbnail() {
  global $post;
  
  // global $post が空（ループ外など）の場合は終了
  if ( !isset($post) ) return get_template_directory_uri() . '/images/default.png';

  $first_img = '';
  
  // 投稿内のHTMLから<img>タグを検索
  if ( preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches) ) {
      // 画像が見つかった場合、そのURLを取得
      $first_img = $matches[1][0];
  }

  if ($first_img) {
      return $first_img;
  } else {
      // デフォルト画像のパス
      return get_template_directory_uri() . '/assets/images/noimage.png';
  }
}

function get_site_meta($type) {
    $site_name = '一般社団法人こころ会';

    if (is_front_page()){
      $key = 'top';
    }elseif(is_page()){
      $key = get_post_field('post_name', get_post()); 
    }elseif(is_home()){
      $key = 'news';
    }elseif(is_single()){
      $key ="single";
    }else{
      $key = "default";
    }

    $meta_map = [
        'top' => [
          'title' => '【ふじみ野市】就労継続支援B型・相談支援｜一般社団法人こころ会', 
          'des' => '埼玉県ふじみ野市で就労継続支援B型、地域活動支援センター、相談支援を行う一般社団法人こころ会。一人ひとりの想いを大切に、安心して地域で暮らせる支援を提供しています。'
        ],
        'news' => [
          'title' => 'お知らせ｜一般社団法人こころ会' , 
          'des' => '一般社団法人こころ会からのお知らせ一覧です。事業所の活動報告や利用案内、最新情報を掲載しています。'
        ],
        'ponte' => [
          'title' => '就労継続支援B型ぽんて｜ふじみ野市の障がい者就労支援｜こころ会' , 
          'des' => 'ふじみ野市の就労継続支援B型「ぽんて」。一般就労が難しい方へ、軽作業や創作活動などを通じて働く機会を提供します。見学・体験利用も随時受付中です。'
        ],
        'plus' => [
          'title' => '就労継続支援B型ぷらす｜ふじみ野市の障がい者就労支援｜こころ会' , 
          'des' => 'ふじみ野市の就労継続支援B型「ぷらす」。一人ひとりの特性に合わせた支援で、安心して通える環境を整えています。自立に向けたサポートを行っています。'
        ],
        'sakura' => [
          'title' => '就地域活動支援センターさくら｜ふじみ野市の居場所支援｜こころ会' , 
          'des' => 'ふじみ野市の地域活動支援センター「さくら」。日中活動や交流を通じて、安心できる居場所と人とのつながりを支えます。'
        ],
        'ponte-pw' => [
          'title' => '相談支援ぽんて｜サービス等利用計画作成｜ふじみ野市｜こころ会' , 
          'des' => 'ふじみ野市の相談支援事業所「ぽんて」。サービス等利用計画の作成や福祉サービス利用のご相談をお受けしています。'
        ],
        'about' => [
          'title' => '会社概要｜一般社団法人こころ会｜ふじみ野市の障がい福祉法人' , 
          'des' => '一般社団法人こころ会の会社概要ページです。法人理念、所在地、事業内容などをご紹介します。'
        ],
        'contact' => [
          'title' => 'お問い合わせ｜見学・利用相談はこちら｜こころ会' , 
          'des' => '一般社団法人こころ会へのお問い合わせページです。見学予約、利用相談、各事業に関するご質問はこちらからご連絡ください。'
        ],
        'privacy' => [
          'title' => 'プライバシーポリシー｜一般社団法人こころ会' , 
          'des' => '一般社団法人こころ会の個人情報保護方針について掲載しています。'
        ],
        'single' => [
          'title' => get_the_title() .'|'. $site_name, 
          'des' => ''
        ],
        'default' => [
          'title' =>  $site_name, 
          'des' => ''
        ],
    ];

    $data = $meta_map[$key] ?? $meta_map['default'];
    return $data[$type] ?? '';
}