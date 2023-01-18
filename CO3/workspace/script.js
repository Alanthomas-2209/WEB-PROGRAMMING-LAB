// let form = document.querySelector("form");
// form.addEventListener("submit", (e) => {
//   e.preventDefault();

let username = document.querySelector("#username");
let password = document.querySelector("#password");
let className = document.querySelector("#password-container");
function showError(msg) {
  let error_out = document.createElement("span");
  error_out.textContent = msg;
  className.appendChild(error_out);
  // password.parentNode.appendChild(error_out);
}
function validateForm() {
  flag = true;
  if (username.value == "") {
    let error_out = document.querySelector("#username_error");
    error_out.style.visibility = "visible";
    error_out.textContent = "username cannot be blank";
    flag = false;
  }
  if (username.value.match("[0-9]")) {
    let error_out = document.querySelector("#username_error");
    error_out.style.visibility = "visible";
    error_out.textContent = "username cannot contain a number";
    flag = false;
  }

  if (password.value == "") {
    showError("password cannot be blank");
    flag = false;
  }
  if (password.value.length < 8) {
    showError("must contain atleast 8 char");
    flag = false;
  }
  if (!password.value.match(/[A-Z]/)) {
    showError("there is a capital");
  }
  if (!password.value.match(/[0-9]/)) {
    showError("there is a number");
  }
  if (!password.value.match(/[a-z]/)) {
    showError("there is a lower");
  }
  if (!password.value.match(/[!@#$%^&*()]/)) {
    showError("there is a special");
  }

  if (flag) {
    let submit_btn = document.querySelector("#submit");
    submit_btn.click();
  }
  return flag;
}
// });
