$(document).ready(function(){
	$("#login_button").click(function(){
	var username = $("#login_user").val();
	var thepassword = $("#login_password").val();
	$.ajax({
		type:'POST',
		url:'inc/loginto.php',
		data:{
		username:username,
		thepassword:thepassword
		},
		dataType:'JSON',
		beforeSend:function(){
		document.getElementById('register_loading').innerHTML="<img class='container_loginindex_loading_image' src='img/loading.gif'>";
		},
		success:function(rep){
		if(rep !=="nothing"){
		if(rep !=="usernamenot"){
		if(rep !=="password"){
		if(rep !=="ban"){
                if(rep !=="wban"){
		document.location.href="index.php";}
                if(rep == "wban"){
		document.getElementById('register_loading').innerHTML="";
		document.getElementById('register_loading').innerHTML="<div class='container_login_msg'> This username does not exists</div>";}
		}if(rep == "ban"){
			document.getElementById('register_loading').innerHTML="";
			document.getElementById('register_loading').innerHTML="<div class='container_login_msg'>Banned For Making Multiple accounts in the same IP</div>";}
		}if(rep == "password"){
			document.getElementById('register_loading').innerHTML="";
			document.getElementById('register_loading').innerHTML="<div class='container_login_msg'>The password is wrong.</div>";}
		}if(rep == "usernamenot"){
			document.getElementById('register_loading').innerHTML="";
			document.getElementById('register_loading').innerHTML="<div class='container_login_msg'>The username does not exists.</div>";}
		}if(rep == "nothing"){
			document.getElementById('register_loading').innerHTML="";
			document.getElementById('register_loading').innerHTML="<div class='container_login_msg'>You must fill out all the fields.</div>";}
}
});
});
});