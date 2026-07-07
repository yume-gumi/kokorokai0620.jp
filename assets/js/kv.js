

const loading = document.querySelector(".loading");
const loadingLogo = document.querySelector(".loading__logo");
const loadingMask = document.querySelector(".loading__mask");
const loadingLogoItems = document.querySelectorAll(".loading__logo--item");
const loadingInner = document.querySelector(".loading__inner");

const kvPhoto = document.querySelector(".kv-photo .photo");
const kvCatchcopy = document.querySelectorAll(".kv-photo .catch_copy");

let index = 0;
const firstCount = 5; // 最初の5つ
const lastCount = 4;  // 最後の4つ

function showNextItem() {
    // 終了判定
    if (index === loadingLogoItems.length) {
        setTimeout(()=>{
            loadingLogo.classList.remove("loading__logo--expand");
        },500)
        return;
    }

    // 表示処理
    const item = loadingLogoItems[index];
    item.style.opacity = "1";
    item.style.translate = "0";
    
    index++;

    // 次のアイテムまでの待ち時間を決定
    let delay = 500; // デフォルト（中間の速度）

    if (index < firstCount) {
        delay = 500; // 最初の5つは遅く
    } else if (index > loadingLogoItems.length - lastCount) {
        delay = 250; // 最後の4つは速く
    }

    // 次のステップを予約
    setTimeout(showNextItem, delay);
}




// 設定値をまとめる
const CONFIG = {
    TOTAL_LOADING_MS: 6000,
    LOGO_DELAY_DEFAULT: 500,
    LOGO_DELAY_FAST: 250,
};

const isVisited = sessionStorage.getItem('hasVisited');


// 実行判定
if (isVisited) {
    loading.style.display = "none";
    loadingMask.classList.add("loading__mask--hidden");
    document.body.style.overflow = 'scroll';
    kvPhoto.classList.remove("photo--hidden");
    // キャッチコピーも即座に表示
    kvCatchcopy.forEach(el => el.classList.remove("catch_copy--hidden"));
} else {
    // 初回のみアニメーション開始
    showNextItem();

    window.onload = () => {
        setTimeout(() => {
            document.body.style.overflow = 'scroll';
            loadingMask.classList.add("loading__mask--hidden");

            setTimeout(() => {
                loading.style.display = "none";
                kvPhoto.classList.remove("photo--hidden");
                index = 0;

                const intervalId = setInterval(() => {
                    if (index == kvCatchcopy.length) {
                        clearInterval(intervalId);
                        return;
                    }
                    kvCatchcopy[index].classList.remove("catch_copy--hidden");
                    index++;
                }, 1000);

                // 【ここが重要！】アニメーションが完了した時点でフラグをセットする
                sessionStorage.setItem('hasVisited', 'true');

            }, 500);
        }, Math.max(0, 6000 - performance.now()));
    };
}