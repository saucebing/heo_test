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

$(document).ready(function(){
			$("#viewRankingList").click(function(){
				window.location.href="../Ranking/viewRankingList";
				});
			});

function activate_task_toggle(task_list_number)
{
	for(i = 0 ; i < task_list_number ; i ++)
	{
		$(".task_toggle" + i).click((function(j)
			{
				return function()
				{
					$(".task_info" + j).slideToggle();
				}
			})(i));
	}
}

function activate_user_toggle(user_list_number)
{
	for(i = 0 ; i < user_list_number ; i ++)
	{
		$(".user_toggle" + i).click((function(j)
			{
				return function()
				{
					$(".user_info" + j).slideToggle();
				}
			})(i));
	}
}

function activate_message_toggle(message_list_number)
{
	for(i = 0 ; i < message_list_number ; i ++)
	{
		$(".message_toggle" + i).click((function(j)
			{
				return function()
				{
					$(".message_info" + j).slideToggle();
				}
			})(i));
	}
}

function activate_ranking_toggle(ranking_list_number)
{
	for(i = 0 ; i < ranking_list_number ; i ++)
	{
		$(".ranking_toggle" + i).click((function(j)
			{
				return function()
				{
					$(".ranking_info" + j).slideToggle();
				}
			})(i));
	}
}

function hide_task_list(task_list_number){
	for(i = 0 ; i < task_list_number ; i ++)
	{
		$(".task_info" + i).css("display","None");
	}
}

function hide_user_list(task_user_number){
	for(i = 0 ; i < task_user_number ; i ++)
	{
		$(".user_info" + i).css("display","None");
	}
}

function hide_message_list(message_list_number){
	for(i = 0 ; i < message_list_number ; i ++)
	{
		$(".message_info" + i).css("display","None");
	}
}

function hide_ranking_list(ranking_list_number){
	for(i = 0 ; i < ranking_list_number ; i ++)
	{
		$(".ranking_info" + i).css("display","None");
	}
}

function init_list(task_list_number,user_list_number,message_list_number,ranking_list_number)
{
	activate_task_toggle(task_list_number);
	activate_user_toggle(user_list_number);
	activate_message_toggle(message_list_number);
	activate_ranking_toggle(ranking_list_number);
	hide_task_list(task_list_number);
	hide_user_list(user_list_number);
	hide_message_list(message_list_number);
	hide_ranking_list(ranking_list_number);
}
