<html dir="rtl" lang="he">
<head>
  <link rel="stylesheet" href="EzraSIL-webfont.css" type="text/css">
  <meta content="text/html; charset=UTF-8" http-equiv="content-type">
</head>
<body>
<h2>
<?php

	// seed with microseconds
	function make_seed(){
		list($usec, $sec) = explode(' ', microtime());
		return (float) $sec + ((float) $usec * 100000);
	}

	srand(make_seed());
	$randval = rand();
// check the entire tanach
//for ($randval = 0; $randval <= 23212; $randval++) {
//    echo "The number is: $random <br>";
 
	$random = ($randval%23212)+1;
	

//$random=1..23213;


// print("</br><h5>Random value: " . $random ."</h5>");

$file = 'letteris_utf8.txt';

$word = $random . "0";
$searchfor = "\t" . $word . "\t";

// the following line prevents the browser from parsing this as HTML.
//header('Content-Type: text/plain');

// get the file contents, assuming the file to be readable (and exist)
$contents = file_get_contents($file);
// escape special characters in the query
$pattern = preg_quote($searchfor, '/');
// finalise the regular expression, matching the whole line
$pattern = "/^.*$pattern.*\$/m";
// search, and store all matching occurences in $matches
if(preg_match_all($pattern, $contents, $matches)){
//   echo "Found matches:\n";
$result = implode("\n",$matches[0]);
list($bk,$ch,$vr,$ax,$value,$verse) = explode("\t",$result);

$book = rtrim($bk,"O");
switch ($book) {
	case "30":
		$fullbook="Amos";
		$shortbook="Am";
		$hebbook="עמוס";
		break;
	case "27":
		$fullbook="Daniel";
		$shortbook="Dan";
		$hebbook="דניאל";
		break;
	case "05":
		$fullbook="Deuteronomy";
		$shortbook="Deut";
		$hebbook="דברים";
		break;
	case "17":
		$fullbook="Esther";
		$shortbook="Esth";
		$hebbook="אסתר";
		break;
	case "02":
		$fullbook="Exodus";
		$shortbook="Ex";
		$hebbook="שמות";
		break;
	case "26":
		$fullbook="Ezekiel";
		$shortbook="Ezek";
		$hebbook="יחזקאל";
		break;
	case "15":
		$fullbook="Ezra";
		$shortbook="Ezra";
		$hebbook="עזרא";
		break;
	case "01":
		$fullbook="Genesis";
		$shortbook="Gen";
		$hebbook="בראשית";
		break;
	case "35":
		$fullbook="Habakkuk";
		$shortbook="Hab";
		$hebbook="חבקוק";
		break;
	case "37":
		$fullbook="Haggai";
		$shortbook="Hag";
		$hebbook="חגי";
		break;
	case "28":
		$fullbook="Hosea";
		$shortbook="Hos";
		$hebbook="הושע";
		break;
	case "13":
		$fullbook="1 Chronicles";
		$shortbook="1Chr";
		$hebbook="דברי הימים א'";
		break;
	case "11":
		$fullbook="1 Kings";
		$shortbook="1Kings";
		$hebbook="מלכים א'";
		break;
	case "09":
		$fullbook="1 Samuel";
		$shortbook="1Sam";
		$hebbook="שמואל א'";
		break;
	case "14":
		$fullbook="2 Chronicles";
		$shortbook="2Chr";
		$hebbook="דברי הימים ב'";
		break;
	case "12":
		$fullbook="2 Kings";
		$shortbook="2Kings";
		$hebbook="מלכים ב'";
		break;
	case "10":
		$fullbook="2 Samuel";
		$shortbook="2Sam";
		$hebbook="שמואל ב'";
		break;
	case "23":
		$fullbook="Isaiah";
		$shortbook="Isa";
		$hebbook="ישעיה";
		break;
	case "24":
		$fullbook="Jeremiah";
		$shortbook="Jer";
		$hebbook="ירמיה";
		break;
	case "18":
		$fullbook="Job";
		$shortbook="Job";
		$hebbook="איוב";
		break;
	case "29":
		$fullbook="Joel";
		$shortbook="Joel";
		$hebbook="יואל";
		break;
	case "32":
		$fullbook="Jonah";
		$shortbook="Jon";
		$hebbook="יונה";
		break;
	case "06":
		$fullbook="Joshua";
		$shortbook="Josh";
		$hebbook="יהושע";
		break;
	case "07":
		$fullbook="Judges";
		$shortbook="Judg";
		$hebbook="שופטים";
		break;
	case "21":
		$fullbook="Ecclesiastes";
		$shortbook="Eccl";
		$hebbook="קהלת";
		break;
	case "25":
		$fullbook="Lamentations";
		$shortbook="Lam";
		$hebbook="איכה";
		break;
	case "03":
		$fullbook="Leviticus";
		$shortbook="Lev";
		$hebbook="ויקרא";
		break;
	case "39":
		$fullbook="Malachi";
		$shortbook="Mal";
		$hebbook="מלאכי";
		break;
	case "33":
		$fullbook="Micah";
		$shortbook="Mic";
		$hebbook="מיכה";
		break;
	case "34":
		$fullbook="Nahum";
		$shortbook="Nah";
		$hebbook="נחום";
		break;
	case "16":
		$fullbook="Nehemiah";
		$shortbook="Neh";
		$hebbook="נחמיה";
		break;
	case "04":
		$fullbook="Numbers";
		$shortbook="Num";
		$hebbook="במדבר";
		break;
	case "31":
		$fullbook="Obadiah";
		$shortbook="Ob";
		$hebbook="עובדיה";
		break;
	case "20":
		$fullbook="Proverbs";
		$shortbook="Prov";
		$hebbook="משלי";
		break;
	case "19":
		$fullbook="Psalms";
		$shortbook="Ps";
		$hebbook="תהילים";
		break;
	case "08":
		$fullbook="Ruth";
		$shortbook="Ruth";
		$hebbook="רות";
		break;
	case "22":
		$fullbook="Song of songs";
		$shortbook="Song";
		$hebbook="שיר השירים";
		break;
	case "38":
		$fullbook="Zechariah";
		$shortbook="Zech";
		$hebbook="זכריה";
		break;
	case "36":
		$fullbook="Zephaniah";
		$shortbook="Zeph";
		$hebbook="צפניה";
		break;
 }

   $b = " ספר:";
   $c = " פרק:";
   $v = " פסוק:";
   $white = array("\t","\n","\r","\0","\x0B");
   $numbers = " O0123456789";
   $pasuk = str_replace ($white, " ", $verse);
   $pasuk = trim ($pasuk, $numbers);

   echo "</br><h2>" . $pasuk . "</h2></br>";
   $home_url="http://geulah.org.il/Tanach/Tanach.xml";
   $url_output=$home_url . '?' . $shortbook . $ch . ':' . $vr . '-' . $vr;
//same place   $output_1='<a href="';
//new tab
   $output_1='<a target = ' . "'_blank'" . ' href="';
   $output_2='"/>';
   $output_3="</a>";

//   $text_output =$fullbook . ' ' . $ch . ' ' . $vr;
   $text_output=  "\n" . $b . $hebbook  . " " . $c . $ch . " " . $v . $vr . "<br>\n";
   
   echo($output_1 . $url_output . $output_2 . $text_output . $output_3);

   $url_output=$home_url . '?' . $shortbook . $ch . '-' . $ch;
   $text_output=  "\n" . $b . $hebbook  . " " . $c . $ch . "<br>\n";

   echo($output_1 . $url_output . $output_2 . $text_output . $output_3);
}
else{
         echo "No matches found";
 }
echo "<details><br>";

$home_eng_url="https://www.biblegateway.com/passage/?search=";
$fr_flag='<img title="français" src="files/fr.png" alt="French" width="16" height="11" />';
$il_flag='<img title="בעברית" src="files/il.png" alt="Hebrew" width="16" height="11" />';
$ru_flag='<img title="русски" src="files/ru.png" alt="Russian" width="16" height="11" />';
$en_flag='<img title="English" src="files/en.png" alt="English" width="16" height="11" />';

$version="NET"; $flag=$en_flag;
$en_url=$output_1 . $home_eng_url . $shortbook . $ch . ':' . $vr . '-' . $vr . '&version=' . $version . $output_2;

$version="BDS"; $flag=$fr_flag;
$fr_url=$output_1 . $home_eng_url . $shortbook . $ch . ':' . $vr . '-' . $vr . '&version=' . $version . $output_2;

$version="RUSV"; $flag=$ru_flag;
$ru_url=$output_1 . $home_eng_url . $shortbook . $ch . ':' . $vr . '-' . $vr . '&version=' . $version . $output_2;
?>
    <?= $en_url; ?>
	<image style="float:right;margin:5px;" title="English" src="files/en.png" alt="English" width="50px" height="50px"/></a>
	<?= $fr_url; ?>
	<image style="float:right;margin:5px;" title="français" src="files/fr.png" alt="French"" width="50px" height="50px"/></a>
	<?= $ru_url; ?>
	<image style="float:right;margin:5px;" title="русски" src="files/ru.png" alt="Russian"  width="50px" height="50px"/></a>

<?php
echo "<date>" . date("d-m-Y H:i:s") . "</date>";
$key = $random * 10;

// grep "3900" letteris_utf8.txt |grep 01O |grep 8|hexdump -C|grep af
//Comments_utf8.txt
// if $pasuk contains "af" then find pasuk's comment from Comments_utf8.txt 

//echo "<div style='visibility: hidden'>
//echo "<p> The number is:  $random </p>";
//echo "<p> The key is:  $key </p>";
echo '<p dir="rtl" lang="he">';
//awk '$4 == $key' Comments_utf8.txt
//awk '$4 == $key' letteris_utf8.txt

$comment_row=exec("awk '$4 == $key' Comments_utf8.txt");
$verse_row=exec("awk '$4 == $key' letteris_utf8.txt");
$editor_row=exec("awk '$4 == $key'Editornotes_utf8.txt");
echo "</p><p> The Verse is: $verse_row</p>";
echo "<p> The Comments are: $comment_row</p>";
echo "<p> The Editor\'s Comments are: $editor_row</p>";
echo "</details>"

//}
?>
</body>
</html>

