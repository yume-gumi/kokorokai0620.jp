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
# jQuery
=============================================== */
jQuery(function () {

  // topへ戻るボタン（スクロールで戻る）
  $(document).ready(function(){
    $("#page_top").click(function(){
      $("html, body").animate({scrollTop: 0}, "slow");
      return false;
    });
  });
  

});

/* ===============================================
# JS
=============================================== */

// ハンバーガーメニュー
const ham = document.querySelector('#js-hamburger');
const nav = document.querySelector('#js-nav');

ham.addEventListener('click', function () {

  ham.classList.toggle('active');
  nav.classList.toggle('active');

});