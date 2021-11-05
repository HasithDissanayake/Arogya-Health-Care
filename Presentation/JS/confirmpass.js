var password = document.getElementById("Pass"),
    confirm_password = document.getElementById("CPass");

function validatePassword() {
    if (password.value != confirm_password.value) {
        confirm_password.setCustomValidity("Passwords Don't Match");
    } else {
        confirm_password.setCustomValidity('');
    }
}
Pass.onchange = validatePassword;
CPass.onkeyup = validatePassword;