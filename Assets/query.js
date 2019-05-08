$(document).ready(function (){

$('#Header').click(function(){
		$('html,body').animate({
        'scrollTop': $("#concon").offset().top},
        1000);
	});
});
