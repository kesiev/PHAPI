PHAPI - DOM Api to PHP
======================

PHAPI is a little experiment: it automatically creates a PHP interface to Javascript/DOM objects and allow some DOM creation and manipulation server side.
It supports JQuery integration... since it was for free and fun.
Why I've done that? Because is fun.

How to use PHAPI:
=================

- Make an empty HTML page
- If you want, load JQuery/JQuery mobile
- Change your body tag with:

```html
	<body onload="PHAPI.makeApi(["div","span",...])">
```

- Copy/paste the PHP code from the page or the console logs to a new file.
- Include the PHP library file in your PHP script and start using it. You can create objects and call methods like in JS.

```php
	include("copypastedfile.php");
	$page=new PHDiv();
	$page->setAttribute("style","border:2px dashed blue");
	$div=new PHDiv();
	$div->innerHTML="Hello!";
	$div->addEventListener("click",new PHFunction("alert('thanks!')"));
	$div->setAttribute("style","border:1px solid red")->title="Hover to see me!";
	$page->appendChild($div);
```

- Once your page is ready, call "done" on the main object before exiting.

```php
	$page->done();
```

- Call your script via PHAPI:

```javascript
	PHAPI.call("<your script URL>",document.body)
```
- Have fun.
