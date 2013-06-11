<?

	include("lib-standard.php");

	$page=new PHDiv();
	$page->setAttribute("style","border:2px dashed blue");

	$div=new PHDiv();
	$div->innerHTML="Hello!";
	$div->setAttribute("style","border:1px solid red")->title="Hover to see me!";
	$page->appendChild($div);

	$table=new PHTable();
	$table->border=2;
	for ($i=0;$i<10;$i++) {
		$row=new PHTr();
		for ($j=0;$j<10;$j++) {
			$cel=new PHTd();
			$cel->innerHTML=$i.",".$j;
			$row->appendChild($cel);
		}
		$table->appendChild($row);
	}
	$page->appendChild($table);

	$button=new PHInput();
	$button->type="button";
	$button->value="Click me!";
	$button->addEventListener("click",new PHFunction("alert('thanks!')"));
	$page->appendChild($button);

	$page->done();

?>