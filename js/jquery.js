$(document).ready(function () {
  $(".form_valid").validate({
    rules: {
      email: {
        required: true,
        email: true,
      },

      password: {
        required: true,
        minlength: 8,
      },

      confirm_password: {
        required: true,
        equalTo: "#password",
      },
    },

    messages: {
      name: "*Required",
      email: {
        required: "*Required",
        email: "*Invalid email address",
      },

      password: {
        required: "*Required",
        minlength: "*Less than 8 chararcters",
      },

      confirm_password: {
        required: "*Required",
        equalTo: "*Password is not matching",
      },
    },
  });
});

// $(document).ready(function () {
//   $("#form_valid").validate({
//     rules: {
//       title: "required",
//     },

//     messages: {
//       title: "*Required",
//     },
//   });
// });
