 $('#form_input').submit(function(){

var message = $('#message').val();
var sender  = $('#sender').val();
var Pid = $('#recep').val();

//this sends the datafrom the page to the php file send
$.ajax({
url: 'scripts/php/send.php',
data:{sender: sender, message: message, Pid: Pid },
success: function(data){
	$('#feedback').html(data);

	$('#feedback').fadeIn('slow', function(){
		$('#feedback').fadeOut(6000);
	});

	$('#message').val('');
}
});


return false;
 });