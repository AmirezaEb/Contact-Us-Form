/* 
Developed by Hero Expert 
Telegram channel: @HeroExpert_ir
*/
const inputs = document.querySelectorAll(".input");
const nameDivElem = document.querySelector("#name-div");
const emailDivElem = document.querySelector("#email-div");
const phoneDivElem = document.querySelector("#phone-div");
const textDivElem = document.querySelector("#text-div");
const nameInputElem = document.querySelector("#name-input");
const emailInputElem = document.querySelector("#email-input");
const phoneInputElem = document.querySelector("#phone-input");
const textInputElem = document.querySelector("#text-input");
const submitBtn = document.querySelector('#submit-btn');

submitBtn.addEventListener('click', (event) => {

  if (nameInputElem.value.length < 1) {
    nameDivElem.classList.add('validate');
    event.preventDefault();
  }
  if (emailInputElem.value.length < 1) {
    emailDivElem.classList.add('validate');
    event.preventDefault();
  }
  if (textInputElem.value.length < 1) {
    textDivElem.classList.add('validate');
    event.preventDefault();
  }
})

function focusFunc() {
  let parent = this.parentNode;
  parent.classList.add("focus");
  parent.classList.remove("validate")
}

function blurFunc() {
  let parent = this.parentNode;
  if (this.value == "") {
    this.value = ''
    parent.classList.remove("focus");
  }
}

inputs.forEach((input) => {
  input.addEventListener("focus", focusFunc);
  input.addEventListener("blur", blurFunc);
});

phoneInputElem.addEventListener('keypress', (e) => {
  let word = e.keyCode;

  if (word < 48 || word > 57) {
    e.preventDefault();
  }
})
/* 
Developed by Hero Expert 
Telegram channel: @HeroExpert_ir
*/