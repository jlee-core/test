const button = document.getElementById("btn");
const title = document.getElementById("title");
button.addEventListener("click", () => {
  title.textContent = "変更されました";
  title.style.color = "red";
});
const text = document.getElementById("myElement");
const myButton = document.getElementById("myButton");
myButton.addEventListener("click", function () {
  text.textContent = "新しいテキスト";
});

const list = document.getElementById("myList");
const listItem3 = document.getElementById("listItem3");
const buttonRemove = document.getElementById("myButtonRemove");
buttonRemove.addEventListener("click", function () {
  list.removeChild(listItem3);
});

// const listItem3 = document.getElementById("listItem3");
// const buttonRemove = document.getElementById("myButtonRemove");
// buttonRemove.addEventListener("click", function () {
//   listItem3.remove();
// });


document.querySelector('p').addEventListener('mouseover', (e) => {
  e.target.style.backgroundColor = 'red';
});

// // 画面をスクロールされる度にイベントを実行する
// const scrollHandler = () => {
//   console.log('スクロールされました！')
// }

// window.addEventListener(scroll, scrollHandler, false)

// // HTMLのid属性を取得する
// const button = document.getElementById('button')

// // 該当の要素がクリックされる度にイベントを実行する
// button.addEventListener('click', () => {
//   console.log('クリックされました！')
// })