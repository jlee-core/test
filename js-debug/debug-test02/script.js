const hamburger = document.querySelector(".header__hamburger");
const lines = document.querySelectorAll(".header__hamburgerLine");
const text = document.querySelector(".header__hamburgerText");

hamburger.addEventListener("click", () => {
    if (lines.length >= 3) {
        lines[0].classList.toggle("is-active"); //一番上のライン
        lines[1].classList.toggle("is-active"); //真ん中のライン
        lines[2].classList.toggle("is-active"); //一番下のライン
    }

    if (text) {
        if (text.style.color === "rgb(255, 255, 255)") {
            text.style.color = "yellow";
        } else {
            text.style.color = "rgb(255, 255, 255)";
        }
    } else {
        console.error("text要素が見つかりません");
    }
});