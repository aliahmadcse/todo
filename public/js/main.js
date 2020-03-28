$(document).ready(function() {
  // nav-bar
  $("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
  });

  const page_wrapper = $(".page-wrapper");
  $(".container-fluid").append(page_wrapper);

  // sign up form validation
  $(".btn-sign-up").click(function() {
    let is_valid = true;
    let email_error = $("#email-error");
    let username_error = $("#username-error");
    let password_error = $("#password-error");

    const email = $("#email").val();
    const username = $("#username").val();
    const password = $("#password").val();

    // resetting errors
    email_error.text("");
    username_error.text("");
    password_error.text("");

    if (!is_valid_email(email)) {
      const error_str = "Does not seems like a valid email. Isn't it?";
      display_error(error_str, email_error);
      is_valid = false;
    }

    if (!is_valid_username(username)) {
      const error_str = "Username atleast be 5 characters long";
      display_error(error_str, username_error);
      is_valid = false;
    }

    if (!is_valid_password(password)) {
      const error_str = "Password atleast be 8 characters long";
      display_error(error_str, password_error);
      is_valid = false;
    }

    return is_valid;
  });

  const display_error = (error, element) => {
    element.text(error);
  };

  const is_valid_email = email => {
    const regex_pattern = /[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/;
    if (email == "" || !regex_pattern.test(email)) {
      return false;
    }
    return true;
  };

  const is_valid_username = username => {
    if (username == "" || username.length < 5) {
      return false;
    }
    return true;
  };

  const is_valid_password = password => {
    if (password == "" || password.length < 8) {
      return false;
    }
    return true;
  };

  // end of document ready function
});
