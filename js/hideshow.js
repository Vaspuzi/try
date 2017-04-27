$(document).ready(function(){
$('#continual').hide();
});

$('.rm').click(function(){
$('#continual').toggle(1000);
});

$(':input').focusin(function(){
$(this).css("background-color","silver").css("color","white");
}).blur(function(){
	$(':input').css("background-color","white");
});
