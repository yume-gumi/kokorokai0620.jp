/* ===============================================
# 幅375px未満はviewportを固定する
=============================================== */
const switchViewport = () => {
  let viewport = document.querySelector('meta[name="viewport"]');
  if (viewport === null) {
    return;
  }
  const value =
    window.outerWidth > 375
      ? 'width=device-width,initial-scale=1'
      : 'width=375';
  if (viewport.getAttribute('content') !== value) {
    viewport.setAttribute('content', value);
  }
};
window.addEventListener('resize', switchViewport);
switchViewport();

/* ===============================================
# ヘッダースクロールで上部固定
=============================================== */

window.addEventListener('scroll', function() {
  const header = document.querySelector('.js-header');
  const headerHeight = header.offsetHeight; // 72pxを取得
  const scrollY = window.pageYOffset || document.documentElement.scrollTop;
  
  // 閾値を100からheaderHeight（72）に変更
  if (scrollY > headerHeight) {
    header.classList.add('header-sticky');
    // 固定された分、コンテンツが上に跳ねないように余白を追加
    document.body.style.marginTop = headerHeight + 'px';
  } else {
    header.classList.remove('header-sticky');
    // 余白をリセット（'72'ではなく'0'または元の値に。単位'px'も必須）
    document.body.style.marginTop = '0px'; 
  }
});



/* ===============================================
# ハンバーガーメニュー
=============================================== */

const ham = document.querySelector('#js-hamburger');
const nav = document.querySelector('#js-nav');
const header = document.querySelector('#js-header');

ham.addEventListener('click', function () {

  ham.classList.toggle('active');
  nav.classList.toggle('active');
  header.classList.toggle('active');

});



/* ===============================================
# アコーディオンメニュー
=============================================== */

const qa = document.querySelectorAll(".js-ac"); 

function acToggle(e) { // ① 引数 e を受け取る
  e.preventDefault();  // ② リンクの「上に戻る」動きを止める

  const content = this.nextElementSibling;
  content.classList.toggle("is-open");

  const qaElement = this; // 変数名の重複を避けるためqaElementに変更
  qaElement.classList.toggle('is-open');
}

for (let i = 0; i < qa.length; i++) { 
  qa[i].addEventListener("click", acToggle);
}



/* ===============================================
# topへ戻るボタン（スクロールで戻る）
=============================================== */

// 外側の枠組み（親要素）を取得
const buttonWrapper = document.querySelector('#back-page-top');

// クリックイベント（中のボタンが押されても反応するように）
buttonWrapper.addEventListener('click', () => {
  window.scroll({ 
    top: 0, 
    behavior: "smooth"
  });
});

// スクロールイベント
window.addEventListener('scroll', () => {
  // 72px以上スクロールしたら親要素にクラスを付与
  if (window.scrollY > 72) {
    buttonWrapper.classList.add('is-active');
  } else {
    buttonWrapper.classList.remove('is-active');
  }
});