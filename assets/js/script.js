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

// /* ===============================================
// # ヘッダースクロールで上部固定
// =============================================== */

// /* script.js 修正案 */
// window.addEventListener('scroll', function() {
//   const header = document.querySelector('header'); 
//   const scrollY = window.pageYOffset || document.documentElement.scrollTop;
  
//   if (scrollY > 200) { // 少し余裕を持って判定
//     header.classList.add('header-sticky');
//   } else if (scrollY < 10) { // 消すときはもっと上で
//   header.classList.remove('header-sticky');
// }
// });



/* ===============================================
# ハンバーガーメニュー
=============================================== */

const ham = document.querySelector('#js-hamburger');
const nav = document.querySelector('.header_nav__sp');
const header = document.querySelector('header');

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

const topBtn = document.querySelector('#back-page-top');
const footerTop = document.querySelector('#footer_top');

window.addEventListener('scroll', () => {
  const scrollY = window.pageYOffset;
  const triggerHeight = 72; // どれくらいスクロールしたら表示するか

  // 1. まず表示・非表示だけを判定
  if (scrollY > triggerHeight) {
    topBtn.classList.add('is-show');
  } else {
    topBtn.classList.remove('is-show');
  }

  // 2. 止まる位置（#footer_top の上端）を判定
  // getBoundingClientRect().top は画面内での相対位置なのでスクロール量を足す
  const footerRect = footerTop.getBoundingClientRect();
  const footerTopPos = footerRect.top + scrollY;
  const windowBottom = scrollY + window.innerHeight;

  // #footer_topのエリア内に画面が入ったら止める
  if (windowBottom >= (footerTopPos + footerTop.offsetHeight)) {
    topBtn.classList.add('is-stopped');
  } else {
    topBtn.classList.remove('is-stopped');
  }
});