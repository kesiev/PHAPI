<?

	include("lib-jquery.php");

	$body=new PHDiv(true);
	$body->html("Click this label!")->css("border","2px dashed red");
	$body->click(new PHFunction("alert('Hello there!')"))->height(30);
	$body->done();

?> 