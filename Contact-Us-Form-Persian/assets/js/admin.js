let warningText = document.querySelector('.login-text')
let emailInput = document.querySelector('.email')
let passwordInput = document.querySelector('.password')
let loginBtn = document.querySelector("#login-btn")

function clearText() {
    warningText.classList.add('invisible')
}

function showWarning() {
    warningText.classList.remove('invisible')
}

emailInput.addEventListener('focus', clearText)
passwordInput.addEventListener('focus', clearText)

loginBtn.addEventListener("click", (event) => {
    if (emailInput.value.length < 1 || passwordInput.value.length < 1) {
        showWarning();
    }
})
/* 
Developed by Hero Expert 
Telegram channel: @HeroExpert_ir
*/