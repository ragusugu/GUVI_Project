// function validation()  
//             {  
//                 var id=document.f1.email.value;  
//                 var ps=document.f1.password.value;  
//                 if(id.length=="" && ps.length=="") {  
//                     alert("Email and Password fields are empty");  
//                     return false;  
//                 }  
//                 else  
//                 {  
//                     if(id.length=="") {  
//                         alert("Email is empty");  
//                         return false;  
//                     }   
//                     if (ps.length=="") {  
//                     alert("Password field is empty");  
//                     return false;  
//                     }  
//                 }                             
//             }  

// $('#Login').live('click', function()
// {
//   $('.LoginResult').html('<span class="loader"><img src="img/loader.gif"> <span class="load_text">Loading ...</span></span>');
//     var data = $("#LoginForm").serialize();
//     $.ajax({
//     	type: "POST",
//     	url: "login.php",
//     	data: data,
//     	success: function(response) { 
//     		$('.LoginResult').html(response);
//     	},
//     	error:function(xhr, ajaxOptions, throwError) {
//     		alert("Not all fields filled in correctly.");
//     	}   	
//     // }); 
//    return false;
// });

// f$("#Login").click (function(){
// 	$.ajax({
// 		method:"POST",
// 		url:"php/login.php",
// 		data:$('#form').serialize(),
// 		success: function(msg){
// 			console.log(msg);
// 		},
// 		error: function(message){
// 			console.log(message);
// 		}
// 	});
// })

var login = document.querySelector("#Login");

login.addEventListener("click", function(event){
  event.preventDefault();

  var email= document.getElementById('email')   
  var pwd= document.getElementById('pwd')  
    var formData = {
      email: $("#email").val(),
      pwd: $("#pwd").val(),
      
    };

    
    $.ajax({
      type: "POST",
      url: "./php/login.php",
      data: formData,
      dataType: "json",
      encode: true,
    });

    //event.preventDefault();
  });


 