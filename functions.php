<?php
  /* ===============================================
  # Cache Busting(キャッシュバスティング)
  =============================================== */
  function theme_enqueue_styles() {
    wp_enqueue_style(
      'mytheme-style',
      get_stylesheet_uri(),
      array(),
      wp_get_theme()->get( 'Version' )
    );
  }

  /* ================================================
  # 抜粋機能を固定ページに使えるように設定
  ================================================ */
  add_post_type_support( 'page','excerpt' );

  /* ===============================================
  # 抜粋文の文字数調整
  =============================================== */
  function cms_excerpt_more(){
    return '...';
  }
  add_filter( 'excerpt_more','cms_excerpt_more' );

  function new_excerpt_mblength($length){
    return 60;
  }
  add_filter('excerpt_mblength','new_excerpt_mblength');

  /* ===============================================
  # 管理バーの非表示
  =============================================== */
  //* htmlタグのmargin-top:32px !important;の消去
  add_filter('show_admin_bar','__return_false');

  /* ===============================================
  # 管理画面メニュー非表示
 =============================================== */
 function remove_menus(){
  remove_menu_page( 'edit-comments.php' ); // コメント
  }
  add_action( 'admin_menu', 'remove_menus', 999 );

  /* ===============================================
  # 管理画面左メニュー並び替え
  =============================================== */
  function wpse_custom_menu_order($menu_ord){
    if (!$menu_ord) return true;
      return array(
      'index.php', // ダッシュボード
      'upload.php', // メディア
      'edit.php?post_type=page', // 固定ページ
    );
  }
  add_filter( 'custom_menu_order', 'wpse_custom_menu_order', 10, 1 );
  add_filter( 'menu_order', 'wpse_custom_menu_order', 10, 1 );

  /* ===============================================
  # お知らせ表示数（topページ）
  =============================================== */
  function GetNewsPostsTop(){
    $args = array(
      'post_type' => 'post',
      'category_name' => 'news',
      'posts_per_page' => 1,
      'no_found_rows' => true,
    );
    $my_posts = get_posts($args);
    return $my_posts;
  }

  /* ===============================================
  # ページネーション
  =============================================== */
  /**
  * ページネーション出力関数
  * $paged : 現在のページ
  * $pages : 全ページ数
  * $range : 左右に何ページ表示するか
  * $show_only : 1ページしかない時に表示するかどうか
  */
  function pagination( $pages, $paged, $range = 2, $show_only = false ) {

    $pages = ( int ) $pages;    //float型で渡ってくるので明示的に int型 へ
    $paged = $paged ?: 1;       //get_query_var('paged')をそのまま投げても大丈夫なように

    //表示テキスト
    $text_first   = "|<<";
    $text_before  = "<<";
    $text_next    = ">>";
    $text_last    = ">>|";

    if ( $show_only && $pages === 1 ) {
      // １ページのみで表示設定が true の時
      echo '<div class="pagination"><span class="current pager">1</span></div>';
      return;
    }

    if ( $pages === 1 ) return;    // １ページのみで表示設定もない場合

    if ( 1 !== $pages ) {
      //２ページ以上の時
      echo '<div class="pagination">';

      if ( $paged > $range + 1 ) {
        // 「最初へ」 の表示
        echo '<a href="', get_pagenum_link(1) ,'" class="first">', $text_first ,'</a>';
      }

      if ( $paged > 1 ) {
        // 「前へ」 の表示
        echo '<a href="', get_pagenum_link( $paged - 1 ) ,'" class="prev">', $text_before ,'</a>';
      }

      for ( $i = 1; $i <= $pages; $i++ ) {
        if ( $i <= $paged + $range && $i >= $paged - $range ) {
          // $paged +- $range 以内であればページ番号を出力
          if ( $paged === $i ) {
            echo '<span class="current pager">', $i ,'</span>';
          } else {
            echo '<a href="', get_pagenum_link( $i ) ,'" class="pager">', $i ,'</a>';
          }
        }
      }

      if ( $paged < $pages ) {
        // 「次へ」 の表示
        echo '<a href="', get_pagenum_link( $paged + 1 ) ,'" class="next">', $text_next ,'</a>';
      }

      if ( $paged + $range < $pages ) {
        // 「最後へ」 の表示
        echo '<a href="', get_pagenum_link( $pages ) ,'" class="last">', $text_last ,'</a>';
      }
      echo '</div>';
    }
  }





// 固定ページ追加


function create_page_if_not_exists($slug, $title) {
    if (!get_page_by_path($slug)) {
        wp_insert_post([
            'post_title'   => $title,
            'post_name'    => $slug,
            'post_status'  => 'publish',
            'post_type'    => 'page',
        ]);
    }
}

function create_individual_pages() {
    $pages = [
        [
            'slug'    => 'about',
            'title'   => '会社概要',
        ],
        [
            'slug'    => 'contact',
            'title'   => 'お問い合わせ',
        ],
        [
            'slug'    => 'privacy',
            'title'   => 'プライバシーポリシー',
        ],
    ];

    foreach ($pages as $page) {
        create_page_if_not_exists($page['slug'], $page['title']);
    }
}
add_action('after_setup_theme', 'create_individual_pages');




// jQuery
function my_theme_enqueue_scripts() {
    // jQueryをフッターで読み込む（WordPressバンドル版）
    wp_enqueue_script('jquery', false, array(), false, true);
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts');




// news

function post_has_archive($args,$post_type){
    if('post' == $post_type){
      $args['rewrite'] = true;
      $args['has_archive'] = 'news';//スラッグ名
    }
    return $args;
}
add_filter('register_post_type_args','post_has_archive',10,2);

// WordPressのデフォルトの投稿アーカイブを「news」ページに設定
function custom_news_archive_page() {
    $news_page = get_page_by_path('news');
    if ($news_page) {
        // 「投稿ページ」の設定を「お知らせ」ページに自動設定
        update_option('page_for_posts', $news_page->ID);
        // 「フロントページの表示」を「固定ページ」に設定し、フロントページは設定しない（投稿ページが設定されるため）
        update_option('show_on_front', 'posts'); // この行で「最新の投稿」に設定
    }
}
add_action('init', 'custom_news_archive_page');

// パーマリンクを自動的に再生成する
function auto_flush_rewrite_rules() {
    global $wp_rewrite;
    $wp_rewrite->flush_rules();
}
add_action('init', 'auto_flush_rewrite_rules');



// アイキャッチ画像
add_theme_support("post-thumbnails");


// 管理バー非表示
add_filter( 'show_admin_bar', '__return_false' );

