count = 0;
document.addEventListener("DOMContentLoaded", reloadTodo);
function reloadTodo(){
	var tab = document.cookie.split(';');
	var length = tab.length -1;
	var i = 0;
	while (i < length){
		loadTodo(tab[i],i);
		i++;
	}
	return;
}
function loadTodo(str, i){
	var page = document.getElementById('ft_list');
	var todo = document.createElement('div');
	count = parseInt(str.split('|')[1], 10);
	setTodo(todo);
	str = str.split('=');
	message = document.createTextNode(str[1]);
	todo.appendChild(message);
	page.prepend(todo);
	return;
}
function setTodo(todo){
	todo.style.backgroundColor = '#BFEBE9';
	todo.style.border = '1px solid black';
	todo.style.marginTop = '1px';
	todo.setAttribute("id", count);
	todo.setAttribute("class","task");
	todo.addEventListener('click', removeTodo);
	return;
}

function newTodo(){
	tabtask = document.getElementsByClassName('task');
	if (tabtask.length){
		count = parseInt(tabtask[0].getAttribute('id'), 10) + 1;
	}
	else {
		count = 0;
	}
	var i = 0;
	var str = "";
	while (i == 0 || (str && !str.match("^[a-zA-Z0-9 ()\.\/]{1,}$"))){
		if (!i){
			var str = prompt("Enter your task !!!");
			i++;
		}
		else{
			var str = prompt("Enter your task (characters not alowed)!!!");
		}
		if (!str){
			alert('Your task is empty (not valid)')
			return;
		}
	}
	var page = document.getElementById('ft_list');
	var todo = document.createElement('div');
	setTodo(todo);
	document.cookie = 'task: |'+ count +'|='+ str;
	message = document.createTextNode(str);
	todo.appendChild(message);
	page.prepend(todo);
	count++;
	return;
}

function removeTodoCookie(todo){
	id = todo.getAttribute('id');
	document.cookie = "task: |"+ id +"|=; expires=Thu, 01 Jan 1970 00:00:00 UTC";
	return;
}

function removeTodo(){
	var todo = this;
	var page = document.getElementById('ft_list');
	if(confirm("Do you realy want to delete this task ??")){
		page.removeChild(todo);
		removeTodoCookie(todo);
	}
	return;
}
