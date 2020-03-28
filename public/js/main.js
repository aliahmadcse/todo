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
    $("#email-error").text("");
    $("#username-error").text("");
    $("#password-error").text("");

    const email = $("#email").val();
    const username = $("#username").val();
    const password = $("#password").val();

    if (!is_valid_email(email)) {
      $("#email-error").text("Does not seems like a valid email. Isn't it?");
      is_valid = false;
    }

    if (!is_valid_username(username)) {
      $("#username-error").text("Username atleast be 5 characters long");
      is_valid = false;
    }

    if (!is_valid_password(password)) {
      $("#password-error").text("Password atleast be 8 characters long");
      is_valid = false;
    }

    return is_valid;
  });

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
