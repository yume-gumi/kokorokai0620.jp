
document.body.style.overflow = 'hidden';

if (history.scrollRestoration) {
    history.scrollRestoration = 'manual';
}
// GSAPを使ったヌルヌル動くバージョン
var images = document.getElementsByTagName('img');
const loadingMask = document.querySelector(".loading__mask");
const loadingLogo = document.querySelector(".loading__logo");
const loadingInner = document.querySelector(".loading__inner");
const loadingPercent = document.querySelector(".loading__percent");
var percentText = document.getElementById('percent-text');
percentText.innerHTML = 0

var imgCount = 0;
var totalImages = images.length || 1;
var proxy = { value: 0 }; // GSAPで数値をアニメーションさせるためのダミーオブジェクト

// 画像監視
for (var i = 0; i < images.length; i++) {
    if (images[i].complete) { imgCount++; } 
    else {
        var img = new Image();
        img.onload = img.onerror = function() { imgCount++; updateProgress(); };
        img.src = images[i].src;
    }
}
// 初回実行
updateProgress();

function updateProgress() {


    var target = (imgCount / totalImages) * 100;

    // ★追加：最初の1秒でふわっと表示させるアニメーション
    gsap.to([loadingLogo, loadingPercent], {
        opacity: 1,
        y: 0,           // ちょっと下から上に浮き上がらせるなら
        duration: .5,    // 1秒かけて
        ease: "power2.out"
    });

    // GSAPで数値をなめらかに変化させる
    gsap.to(proxy, {
        value: target,
        duration: 4,      // 4秒かけて目標値へ
        delay: 1.5,         // ★ここで「何秒止めておくか」を指定（例: 2秒）
        ease: "expo.out", 
        onStart: function() {
            // アニメーション開始時に何か処理をしたい場合はここ
        },
        onUpdate: function() {
            var current = proxy.value;
            var displayInt = Math.floor(current);
            if (percentText) percentText.innerHTML = displayInt;

            moveElements(current);
        }
    });
}

function moveLogo(val) {
    const margin = 14;
    const pW = loadingInner.clientWidth;
    const pH = loadingInner.clientHeight;
    const tH = pH - loadingLogo.clientHeight - (margin * 2);
    const tW = pW - loadingLogo.clientWidth;

    // GSAPの「set」を使って位置を更新。transformを使うとより滑らかになります
    if (val < 33) {
        gsap.set(loadingLogo, { left: "auto", right: 0, bottom: "auto", top: margin + (val / 33 * tH) });
    } else if (val < 66) {
        gsap.set(loadingLogo, { top: "auto", bottom: margin, left: "auto", right: ((val - 33) / 33 * tW) });
    } else {
        gsap.set(loadingLogo, { right: "auto", left: 0, bottom: "auto", top: (margin + tH) - ((val - 66) / 34 * tH) });
    }

}

/**
 * 数字の移動：右から左へ横断する（左右マージン180px）
 */
function moveLoadingText(val) {
    if (!loadingPercent || !loadingInner) return;

    const margin = 180; // 左右のマージン
    const loadingInnerWidth = loadingInner.clientWidth;
    const loadingPercentWidth = loadingPercent.clientWidth;

    const travelWidth = loadingInnerWidth - (margin * 2) - loadingPercentWidth;

    const currentRight = margin + (travelWidth / 100 * val);

    gsap.set(loadingPercent, {
        display: 'block',
        left: "auto",
        right: currentRight + "px",
        // 指定の通り top 48px に配置
        top: "48px",
        yPercent: -50,
    });
}

function moveElements(val) {

    // ロゴの移動関数
    moveLogo(val);

    // 数字の移動関数（切り出し）
    moveLoadingText(val);

    // 終了判定
    if (val >= 100) {
        document.body.style.overflow = 'scroll';
        loadingMask.classList.add("hidden");
        loadingPercent.style.opacity="0";
        loadingLogo.style.opacity="0";
    }
}
