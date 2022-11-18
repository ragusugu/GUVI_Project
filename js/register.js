var signup = document.querySelector("#Signup");

signup.addEventListener("click", function (event) {
  event.preventDefault();

  let Fname = document.getElementById("firstName");
  let Lname = document.getElementById("lastName");
  var dob = document.getElementById("birthdayDate");
  var gender = document.getElementById("gender");
  var number = document.getElementById("phoneNumber");
  var email = document.getElementById("email");
  var pwd = document.getElementById("pwd");
  var cpwd = document.getElementById("cpwd");

  var formData = new FormData($("#myform")[0]);

  if (
    Fname != "" &&
    Lname != "" &&
    dob != "" &&
    gender != "" &&
    number != "" &&
    email != "" &&
    pwd != "" &&
    cpwd
  ) {
    $.ajax({
      type: "post",
      url: "./php/register.php",
      data: formData,
      contentType: false,
      processData: false,

      success: function (response) {
        console.log(response);
        if (response == "success") {
        }
      },
    });
  } else {
    alert("Please Provide all Information ");
  }
});

// alert("fgop")

// console.log(Fname.value+''+Lname+''+dob+''+gender+''+number+''+email+''+pwd+''+cpwd)

// $(document).ready(function ()
//  {
//     $("#myform").submit('click', function(event) {
//       //alert ("connected");
//       //console.log("working")

//       var formData = {
//         Fname: $("#firstName").val(),
//         Lname: $("#lastName").val(),
//         dob: $("#birthdayDate").val(),
//         gender:$("#gender").val(),
//         number:$("#phoneNumber").val(),
//         email: $("#email").val(),
//         pwd: $("#pwd").val(),
//         cpwd:$("#cpwd").val(),

//       };
//       console.log("working")

//       $.ajax({
//         type: "POST",
//         url: "./php/register.php",
//         data: formData,
//         dataType: "json",
//         encode: true,
//       }).done(function (data) {
//         console.log(data.value);
//       });

//       event.preventDefault();
//     });
//   });

//  $(document).ready(function () {

//   $('#Signup').on(function (e) {

//   e.preventDefault();
//    // alert('form was submitted');

//    var Fname=$("#firstName").val();
//  var Lname= $("#lastName").val();
//     var dob= $("#birthdayDate").val();
//    var  gender=$("#gender").val();
//    var number=$("#phoneNumber").val();
//    var email= $("#email").val();
//     var pwd= $("#pwd").val();
//     var cpwd=$("#cpwd").val();

//      console.log(Fname+''+Lname+''+dob+''+gender+''+number+''+email+''+pwd+''+cpwd)
//     // $.ajax({
//     //   type: 'post',
//     //   url: './php/register.php',
//     //   data: formData,
//     //   dataType: "json",
//     //           encode: true,
//     //         }).done(function (data) {
//     //           console.log(data.value);
//     //         });

//       // success: function () {
//       //   alert('form was submitted');
//       // }
//     });

//   });

// $(document).ready(function () {

//   });

//   signup.addEventListener("click",function (event) {
//     console.log("yes")

//     e.preventDefault();
//    // alert('form was submitted');

//    let Fname= document.getElementById('firstName')
//    let Lname= document.getElementById('lastName')
//    var dob= document.getElementById('birthdayDate')
//    var  gender= document.getElementById('gender')
//    var number= document.getElementById('phoneNumber')
//    var email= document.getElementById('email')
//     var pwd= document.getElementById('pwd')
//     var cpwd= document.getElementById('cpwd')

//       success: function () {
//         alert('form was submitted');
//       }
//     });

//     console.log("mama margaya")
//     console.log("working")
//     alert("hoiiu")
