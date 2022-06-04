$(function() {
    // Initialize form validation on the registration form.
    // It has the name attribute "registration"
    $("#login-form").validate({
      // Specify validation rules
      rules: {
        // The key name on the left side is the name attribute
        // of an input field. Validation rules are defined
        // on the right side
        username: {
          required: true,
      },
        password: {
          required: true,
        },
      },
      // Specify validation error messages
      messages: {
        username: {
          required: "Potrebno je upisati korisničko ime",
        },
        password: {
            required: "Potrebno je upisati lozinku",
        },
     },

      // Make sure the form is submitted to the destination defined
      // in the "action" attribute of the form when valid
      submitHandler: function(form) {
        form.submit();
      }
    });
  });