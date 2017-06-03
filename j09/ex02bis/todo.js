$(document).ready(function(){
$('#new').click(newTodo);
});
var count = 0;

function setTodoCookie(task, str){
	$.cookie(task + task.attr('id'), str);
	alert($.cookie(task+task.attr('id')));
	return;
}

function setTodo(task, str){
	$(task).append(str);
	return;
}

function newTodo(){
	var tabtask = $('.task');
	var list = $('#ft_list');
	var count = $(tabtask[0]).attr('id');
	var str;
	if (typeof count === 'undefined'){
		alert('undefined');
		count = 0;
	}
	else{
		count++;
	}
	var task = $('<div>').addClass('task').attr('id', count);
	if (str = prompt('Enter your task!!!'))
	{
		setTodo(task, str);
	 	setTodoCookie(task, str);
	}
	else{
		alert('Your task is empty (not valid)!');
	}
	list.append(task);
	count++;
	return;
}
