import './bootstrap';
var signinBtn = document.getElementById("signinBtn")
var signupBtn = document.getElementById("signupBtn")
var loginBox = document.getElementById("loginBox")
var signupBox = document.getElementById("signupBox")
var loginForm = document.getElementById("loginFormm")
var signupForm = document.getElementById("signupFormm")
var signupVisibility = document.getElementById("signupVisibility")
var loginVisibility = document.getElementById("loginVisibility")
var fakeSignupDiv = document.getElementById("fakeSignupDiv")
var fakeSigninDiv = document.getElementById("fakeSigninDiv")
var centerBox = document.getElementsByClassName("centeredBox")[0]

signinBtn.onclick = function () {
  if (window.innerWidth > 1120) {
    signupVisibility.setAttribute("class", "out")
    setTimeout(() => {
      fakeSignupDiv.setAttribute("class", "toLeft")
      signupBox.style.display = "block"
      signupForm.style.display = "none"
    }, 300)

    setTimeout(() => {
      loginBox.style.display = "none"
      loginForm.style.display = "block"
      loginVisibility.setAttribute("class", "inn")
      fakeSignupDiv.setAttribute("class", "")
    }, 1300)
  } else {
    signupVisibility.setAttribute("class", "out")
    setTimeout(() => {
      centerBox.style.flexDirection = "column"
      loginVisibility.setAttribute("class", "inn")
      loginForm.style.display = "block"
      signupForm.style.display = "none"
      signupBox.style.display = "block"
      loginBox.style.display = "none"
    }, 500)
  }
}

signupBtn.onclick = function () {
  if (window.innerWidth > 1120) {
    loginVisibility.setAttribute("class", "outt")
    setTimeout(() => {
      fakeSigninDiv.setAttribute("class", "toRight")
      loginBox.style.display = "block"
      loginForm.style.display = "none"
    }, 300)

    setTimeout(() => {
      signupForm.style.display = "block"
      signupBox.style.display = "none"
      signupVisibility.setAttribute("class", "in")
      fakeSigninDiv.setAttribute("class", "")
    }, 1300)
  } else {
    loginVisibility.setAttribute("class", "out")
    setTimeout(() => {
      signupVisibility.setAttribute("class", "inn")
      centerBox.style.flexDirection = "column-reverse"
      loginForm.style.display = "none"
      signupForm.style.display = "block"
      signupBox.style.display = "none"
      loginBox.style.display = "block"
    }, 500)
  }
}
