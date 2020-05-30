$(document).ready(function(){
	var src ='lemon-img/signs.png';
	$('.navigator-img').click(function(){
		$(this).attr('src', src);
	});
	$('.navigator-burger').click(function(){
		$('.navigator-img').attr('src', src);
	});
});