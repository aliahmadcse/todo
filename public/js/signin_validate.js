class SignInValidate {
  constructor(args) {
    this.username = args["username"];
    this.password = args["password"];
  }

  hasValidUsername() {
    if (this.username == "" || this.username.length < 5) {
      return false;
    }
    return true;
  }

  hasValidPassword() {
    if (this.password == "" || this.password.length < 8) {
      return false;
    }
    return true;
  }

  displayError(container, error) {
    container.text(error);
  }
}

// sign in form validations
$(".btn-signin").click(() => {
  let usernameError = $("#signin-username-error");
  let passwordError = $("#signin-password-error");

  // resetting the errors
  usernameError.text("");
  passwordError.text("");

  const args = {
    username: $("#signin-username").val(),
    password: $("#signin-password").val()
  };

  const validate = new SignInValidate(args);
  let isValid = true;

  if (!validate.hasValidUsername()) {
    const error = "Username isn't valid";
    validate.displayError(usernameError, error);
    isValid = false;
  }

  if (!validate.hasValidPassword()) {
    const error = "Password isn't valid";
    validate.displayError(passwordError, error);
    isValid = false;
  }

  return isValid;
});
