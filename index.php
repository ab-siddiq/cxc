<?php
$dom = simplexml_load_file("student.xml");

foreach($dom->student as $s)
{
	echo "<h3>$s->name<br/>  $s->id <br/> $s->cgpa </h3>";
	echo "<h3><u>Courses Taken:</u></h3>";
	
	foreach($s->courses->course as $c){
		echo $c->courseName." "."|"." ".$c->section." "."|"." ".$c->grade."<br>";
		
	}echo "===============================================";
	
}

?>