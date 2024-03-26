(function(){
  'use strict';
//どの部分化を定義
  var salary = document.getElementById('salary');//給与
  var sometaxx = document.getElementById('sometaxx');//一時所得
  var tax = document.getElementById('tax');//所得税
  var reset = document.getElementById('reset02');

  function checkInput() {
    // /^[1-9][0-9]*$/ 1桁目には1-9のどれか、2桁目以降があるなら0-9のどれかが1-9以降繰り返される(*)という正規表現
    //この正規表現にpriceもbuyもマッチしたら(入力値が数値かチェック)
    if(salary.value.match(/^[0-9][0-9]*$/) !== null && sometaxx.value.match(/^[1-9][0-9]*$/) !== null) {
        btn02.classList.remove('disabled02');//.disabledを外す
    } else {
      btn02.classList.add('disabled02');//マッチしてなかったら.disabledをつける
    }
  }

//ボタンクリックしたら実行
  btn02.addEventListener('click',function() {
//それぞれの計算を変数に
    var slA = (parseInt(salary.value) + parseInt(sometaxx.value)) ; //(給与 + 一時所得)
    var taxRate, deduction;
              if (slA <= 1950000) {
                taxRate = 0.05, deduction = 0;
              } else if (slA <= 3300000) {
                taxRate = 0.10, deduction = 97500;
              } else if (slA <= 6950000) {
                taxRate = 0.20, deduction = 427500;
              } else if (slA <= 9000000) {
                taxRate = 0.23, deduction = 636000;
              } else if (slA <= 18000000) {
                taxRate = 0.33, deduction = 1536000;
              } else if (slA <= 40000000) {
                taxRate = 0.40, deduction = 2796000;
              } else {
                taxRate = 0.45, deduction = 4796000;
              };
    var resulted = ((slA - deduction) * taxRate); //(総所得 - 控除) * 税率
    console.log(resulted);


//入力されるまでボタン押せないように
    if(this.classList.contains('disabled02') === true) {//.disabledが含まれていたら
      return;//処理を行わない
    }
//計算の結果
    tax.value = resulted;
    reset02.classList.remove('hidden02');//ボタンクリックされたら.hiddenを外す
  });
//salaryとsometaxxが入力されたらfunction checkInput()を実行
  salary.addEventListener('keyup', checkInput);
  sometaxx.addEventListener('keyup', checkInput);



//resetがクリックされた時の処理
  reset.addEventListener('click', function() {
    salary.value = '';//入力前の空の状態に
    sometaxx.value = '';
    tax.value = '';
    btn.classList.add('disabled02');//ボタンに.disabledをつけ初期状態に
    this.classList.add('hidden02');//resetに.hiddenをつけ初期状態に
  });

})();
