$(document).ready(function(){
			$("#cancel").click(function(){
				window.location.href="../Index/index";
				});
			});

var t = setTimeout("fun()",1000);
function fun(){
	myDate = new Date();
	document.getElementByIdx_x("availabletime").value = myDate;
			};
