// var baseUrl = "http://localhost/developer-support/index.php/"
// // var baseUrl = "https://w1761369.users.ecs.westminster.ac.uk/developer-support/index.php/"
//
// $(document).ready(function() {
//     $("#signup-btn").click(function(event) {
//         event.preventDefault();
//
//         var firstName = $("input#firstName").val();
//         var lastName = $("input#lastName").val();
//         var username = $("input#username").val();
//         var email = $("input#email").val();
//         var password = $("input#password").val();
//
//         $.ajax({
//             method: "POST",
//             url: baseUrl + "api/users/signup",
//             datatype: 'JSON',
//             data: {
//                 first_name: firstName,
//                 last_name: lastName,
//                 username: username,
//                 email: email,
//                 password: password
//             },
//         }).done(function(data) {
//             alert("Signup Successful");
//             $("input#firstName").val("");
//             $("input#lastName").val("");
//             $("input#username").val("");
//             $("input#email").val("");
//             $("input#password").val("");
//         });
//     });
// });

function createQuestion() {

}

// <!--        <script>-->
// <!---->
// <!--        // var User = Backbone.Model.extends({-->
// <!--        //     uri: "<php echo base_url(); ?>api/users/signup",-->
// <!--        //     defaults: {-->
// <!--        //         first_name: null,-->
// <!--        //         last_name: null,-->
// <!--        //         username: null,-->
// <!--        //         email: null,-->
// <!--        //         password: null-->
// <!--        //     },-->
// <!--        //     isValid: function() {-->
// <!--        //         if (this.get('first_name') == '') {-->
// <!--        //             alert('First Name field is empty.')-->
// <!--        //             return FALSE;-->
// <!--        //         } else if (this.get('last_name') == '') {-->
// <!--        //             alert('Last Name field is empty.')-->
// <!--        //             return FALSE;-->
// <!--        //         } else if (this.get('username') == '') {-->
// <!--        //             alert('Username field is empty.')-->
// <!--        //             return FALSE;-->
// <!--        //         } else if (this.get('email') == '') {-->
// <!--        //             alert('Email field is empty.')-->
// <!--        //             return FALSE;-->
// <!--        //         } else if (this.get('password') == '') {-->
// <!--        //             alert('Password field is empty.')-->
// <!--        //             return FALSE;-->
// <!--        //         } else {-->
// <!--        //             return TRUE;-->
// <!--        //         }-->
// <!--        //     },-->
// <!--        // });-->
// <!---->
// <!--        // var Signup = Backbone.View.extends({-->
// <!--        //     model: User,-->
// <!--        //     events: {-->
// <!--        //         'click #signup-btn': 'signup'-->
// <!--        //     },-->
// <!--        //     signup: function(e) {-->
// <!--        //         e.preventDefault();-->
// <!---->
// <!--        //         var user = new User({-->
// <!--        //             first_name: $('#firstName').val(),-->
// <!--        //             last_name: $('#lastName').val(),-->
// <!--        //             username: $('#username').val(),-->
// <!--        //             email: $('#email').val(),-->
// <!--        //             password: $('#password').val()-->
// <!--        //         });-->
// <!---->
// <!--        //         if (user.isValid()) {-->
// <!--        //             user.save({}, {-->
// <!--        //                 async: FALSE,-->
// <!--        //                 contentType: 'application/json',-->
// <!--        //                 dataType: 'text',-->
// <!--        //                 success: function(model, response) {-->
// <!--        //                     alert('Succesfully created the User');-->
// <!--        //                     window.location.href =-->
// <!--        //                         "<?php //echo base_url(); ?>//index.php/users/signup";
// //        //                 }
// //        //             });
// //        //         }
// //        //     },
// //        // });
// //
// //        // var signup = new Signup({
// //        //     el: $('#signup-form')
// //        // });
// //
// -->
