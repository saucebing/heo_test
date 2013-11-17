$(document).ready(function(){
			$("#logout").click(function(){
					window.location.href="../Index/logout";
				});
			});

$(document).ready(function(){
			$("#poseTask").click(function(){
					window.location.href="../Task/poseTaskForm";
				});
			});

$(document).ready(function(){
			$("#viewMessage").click(function(){
				window.location.href="../Message/viewMessage";
				});
			});

var t = setTimeout("checkMessage()",3000);
function checkMessage()
{
	$.get("../Message/checkMessage",function(data,status){
		if(data == 1)
			$("#p_new_message").fadeIn();
		else
			$("#p_new_message").fadeOut();
		});
	t = setTimeout("checkMessage()",3000);
}
