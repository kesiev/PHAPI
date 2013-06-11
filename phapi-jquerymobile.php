<?php

	include("lib-jquery.php");

	$page=new PHDiv();
	$page->attr("data-role","page")->attr("data-theme","a");

	$header=new PHDiv();
	$header->attr("data-role","header");
	$header->html("<h1>Simple header</h1>");
	$page->append($header);

	$content=new PHDiv();
	$content->attr("data-role","content");
	$content->html('<ul data-role="listview" data-inset="true" data-dividertheme="b"><li data-role="list-divider">Options</li></ul>');
	$page->append($content);


	$footer=new PHDiv();
	$footer->attr("data-role","footer");
	$footer->html("<h4>Footer</h4>");
	$page->append($footer);

	$page->done();

?> 