// 引数に関数を指定する場合の例
// アロー関数を使用した例（function() {}としてもOK ）
setTimeout(() => {
  console.log('こんばんわ')
}, 1000)

// 変数として定義する

const worthlessTalk = function (greet) {
  return `${greet}, 今日はいい天気ですね！`
}