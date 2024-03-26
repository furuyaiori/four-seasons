(function(){
  'use strict';
//どの部分化を定義
  var income = document.getElementById('income');//総収入
  var used = document.getElementById('used');//総支出
  var sometax = document.getElementById('sometax');//一時所得
  var reset = document.getElementById('reset');

  function checkInput() {
    // /^[1-9][0-9]*$/ 1桁目には1-9のどれか、2桁目以降があるなら0-9のどれかが1-9以降繰り返される(*)という正規表現
    //この正規表現にpriceもbuyもマッチしたら(入力値が数値かチェック)
    if(income.value.match(/^[0-9][0-9]*$/) !== null && used.value.match(/^[1-9][0-9]*$/) !== null) {
        btn.classList.remove('disabled');//.disabledを外す
    } else {
      btn.classList.add('disabled');//マッチしてなかったら.disabledをつける
    }
  }

//ボタンクリックしたら実行
  btn.addEventListener('click',function() {
//それぞれの計算を変数に
    var result = ((income.value - used.value - 500000) / 2); //(総収入 - 総支出 - 特別控除) ÷ 2
    console.log(result);


//入力されるまでボタン押せないように
    if(this.classList.contains('disabled') === true) {//.disabledが含まれていたら
      return;//処理を行わない
    }
//計算の結果
    sometax.value = result;
    sometaxx.value = result;
    reset.classList.remove('hidden');//ボタンクリックされたら.hiddenを外す
  });
//incomeとusedが入力されたらfunction checkInput()を実行
  income.addEventListener('keyup', checkInput);
  used.addEventListener('keyup', checkInput);


//resetがクリックされた時の処理
  reset.addEventListener('click', function() {
    income.value = '';//入力前の空の状態に
    used.value = '';
    sometax.value = '';
    sometaxx.value = '';
    btn.classList.add('disabled');//ボタンに.disabledをつけ初期状態に
    this.classList.add('hidden');//resetに.hiddenをつけ初期状態に
  });

})();
