<?php
echo "<date>" . date("d-m-Y H:i:s") . "</date>";
$random = 12148;
$book="27";
$key = $random * 10;
$file = '../letteris_utf8.txt';
$verse_row=exec("awk '$4 == $key' $file|sed 's/[0-9]*//g;s/O//g;s/^[ \t]*//'");
echo '<p> The Verse is:<p dir="rtl" lang="he">',$verse_row,'</p>';

$file = '../Comments_utf8.txt';
include '../show_comments.php';

$file = '../Editornotes_utf8.txt';
include '../show_editor.php';

$file = '../Hebrew_utf8.txt';
include '../show_hebrew.php';


?>

