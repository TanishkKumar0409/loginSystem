function toggleForms() {
    var wrapper = document.getElementById("wrapper");
    var loginForm = document.getElementById("login-form");
    var registerForm = document.getElementById("register-form");

    var loginHeight = loginForm.scrollHeight + 30; // Increase login form height by 30px
    var registerHeight = registerForm.scrollHeight + 30; // Increase register form height by 30px

    if (loginForm.classList.contains("active")) {
      wrapper.style.height = `${loginHeight}px`;
      loginForm.classList.add("fade-out");
      setTimeout(function() {
        loginForm.classList.remove("active", "fade-out");
        registerForm.classList.add("active");
        wrapper.style.height = `${registerHeight}px`;
      }, 500);
    } else {
      wrapper.style.height = `${registerHeight}px`;
      registerForm.classList.add("fade-out");
      setTimeout(function() {
        registerForm.classList.remove("active", "fade-out");
        loginForm.classList.add("active");
        wrapper.style.height = `${loginHeight}px`;
      }, 500);
    }
  }

  // Set initial height of wrapper
  document.getElementById("wrapper").style.height = `${document.getElementById("login-form").scrollHeight + 30}px`; // Initial height with an increase of 30px
