// инициализируем все переменные...
var string = "";
var usernameInput;
var passwordInput;
//этот парень будет указывать на текущий выбранный инпут
var currentInput;
var radios;

function keyboardPressed(value) {
  string += value;

  //нажми в браузере Ф12, и потом зайди в консоль. увидишь как меняется стринг
  console.log(string);

  // короче в этом радиосе есть два элемента так ведь?
  // это массив. тут я проверяю, выбран ли первый элемент этого массива?
  // мы знаем, что первый элемент это юзернейм, поэтому если этот иф сработает, то все ок
  if (radios[0].checked) {
    currentInput.value = string
  // а тут уже полюбак остается только пассворд, так что
  } else {
    currentInput.value = string
  }
}

// эта функция зовется тогда, когда загрузиась вся страница,
// то как она вызывается можешь найти в html <body onload=...>
function docIsLoaded() {
  // спервах достаем оба инпута, чтобы к ним как-то обращаться
  usernameInput = document.getElementById("user");
  passwordInput = document.getElementById("pass");

  // но все операции будет делать этот товаришь, который по дефолту стоит на юзернэйме (как и радио)
  currentInput = usernameInput;

  // достаем радио
  radios = document.getElementsByName("chosenInput");


  // здесь я даю им так называемый ивент листенер, то есть функция, которая будет происходить каждый раз
  // когда они кликаются. И каждый раз когда они кликаются, стринг будет очищаться и идти туда куда надо
  // даю им обеим разные функции, потому что потому что
  radios[0].onclick = function() {
    string="";
    currentInput = usernameInput;
  }
  radios[1].onclick = function() {
    string=""
    currentInput = passwordInput;
  }
}
