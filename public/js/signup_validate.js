class SignUpValidate {
  constructor(args) {
    this.email = args["email"];
    this.username = args["username"];
    this.password = args["password"];
  }

  hasValidEmail() {
    const regex_pattern = /[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/;
    if (this.email == "" || !regex_pattern.test(this.email)) {
      return false;
    }
    return true;
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

// lets start validating
$(".btn-signup").click(() => {
  let emailError = $("#signup-email-error");
  let usernameError = $("#signup-username-error");
  let passwordError = $("#signup-password-error");

  // resetting the errors
  emailError.text("");
  usernameError.text("");
  passwordError.text("");

  const args = {
    email: $("#signup-email").val(),
    username: $("#signup-username").val(),
    password: $("#signup-password").val()
  };

  const validate = new SignUpValidate(args);
  let isValid = true;

  if (!validate.hasValidEmail()) {
    const error = "Does not seems like a valid email. Isn't it?";
    validate.displayError(emailError, error);
    isValid = false;
  }

  if (!validate.hasValidUsername()) {
    const error = "Username atleast be 5 characters long";
    validate.displayError(usernameError, error);
    isValid = false;
  }

  if (!validate.hasValidPassword()) {
    const error = "Password atleast be 8 characters long";
    validate.displayError(passwordError, error);
    isValid = false;
  }

  return isValid;
});
