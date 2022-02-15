<?php
$answer = 0;
//$file = 'Editornotes_utf8.txt';

$row = 0;
if (($fh = fopen($file, "r")) !== FALSE) {
    while ((($data = fgetcsv($fh, 0, ",")) !== FALSE)  & ($answer == 0)) {
     $row++;
     $value = $data[3];
//    echo $key," ", $row," ", $value," ", $answer, PHP_EOL;
    if ($key < $value)
     {
      $answer = 1;
     }
    if ($key == $value)
     {
//      $book = $data[0];
//      $chap = $data[1];
//      $verse = $data[2];
      $text = $data[4];
      echo '<p> The Editor\'s Comments are:<p dir="rtl" lang="he">';
      echo $text . PHP_EOL;
      echo '</p>';
     }  
    }
    fclose($fh);
}
?>


