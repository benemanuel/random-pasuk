<?php

	//$home_url="http://www.tanach.us/Server.html";
	$home_url="http://geulah.org.il/Tanach/Tanach.xml";
	$home_eng_url="https://www.biblegateway.com/passage/?search=";
	//seed with microseconds
	function make_seed(){
		list($usec, $sec) = explode(' ', microtime());
		return (float) $sec + ((float) $usec * 100000);
	}

	srand(make_seed());
	$randval = rand();
	//check the entire tanach
	$random=htmlspecialchars($_GET["random"]);
	echo "check page,  The number is: $random, http://geulah.org.il/random/check/?random=x, you can enter x from 0-23212";
	//$random = ($randval%23212);
//	echo "<div style='visibility: hidden'>The number is: $random</div><br>";
 
	$aline='bbbcccvvv';
	$v=$random*13; #"bbb ccc vvvCL"
	# beginning of verse
	$aline=file_get_contents('../bible.db',null,null,$v,13);
	$book=$aline[0] . $aline[1] . $aline[2];
	$chap=ltrim($aline[4] . $aline[5] . $aline[6],"0");
	$verse=ltrim($aline[8] . $aline[9] . $aline[10],"0");

switch ($book) {
	case "Amo":
		$fullbook="Amos";
		$shortbook="Am";
		$hebbook="עמוס";
		break;
	case "Dan":
		$fullbook="Daniel";
		$shortbook="Dan";
		$hebbook="דניאל";
		break;
	case "Deu":
		$fullbook="Deuteronomy";
		$shortbook="Deut";
		$hebbook="דברים";
		break;
	case "Est":
		$fullbook="Esther";
		$shortbook="Esth";
		$hebbook="אסתר";
		break;
	case "Exo":
		$fullbook="Exodus";
		$shortbook="Ex";
		$hebbook="שמות";
		break;
	case "Eze":
		$fullbook="Ezekiel";
		$shortbook="Ezek";
		$hebbook="יחזקאל";
		break;
	case "Ezr":
		$fullbook="Ezra";
		$shortbook="Ezra";
		$hebbook="עזרא";
		break;
	case "Gen":
		$fullbook="Genesis";
		$shortbook="Gen";
		$hebbook="בראשית";
		break;
	case "Hab":
		$fullbook="Habakkuk";
		$shortbook="Hab";
		$hebbook="חבקוק";
		break;
	case "Hag":
		$fullbook="Haggai";
		$shortbook="Hag";
		$hebbook="חגי";
		break;
	case "Hos":
		$fullbook="Hosea";
		$shortbook="Hos";
		$hebbook="הושע";
		break;
	case "1#C":
		$fullbook="1 Chronicles";
		$shortbook="1Chr";
		$hebbook="דברי הימים א'";
		break;
	case "1#K":
		$fullbook="1 Kings";
		$shortbook="1Kings";
		$hebbook="מלכים א'";
		break;
	case "1#S":
		$fullbook="1 Samuel";
		$shortbook="1Sam";
		$hebbook="שמואל א'";
		break;
	case "2#C":
		$fullbook="2 Chronicles";
		$shortbook="2Chr";
		$hebbook="דברי הימים ב'";
		break;
	case "2#K":
		$fullbook="2 Kings";
		$shortbook="2Kings";
		$hebbook="מלכים ב'";
		break;
	case "2#S":
		$fullbook="2 Samuel";
		$shortbook="2Sam";
		$hebbook="שמואל ב'";
		break;
	case "Isa":
		$fullbook="Isaiah";
		$shortbook="Isa";
		$hebbook="ישעיה";
		break;
	case "Jer":
		$fullbook="Jeremiah";
		$shortbook="Jer";
		$hebbook="ירמיה";
		break;
	case "Job":
		$fullbook="Job";
		$shortbook="Job";
		$hebbook="איוב";
		break;
	case "Joe":
		$fullbook="Joel";
		$shortbook="Joel";
		$hebbook="יואל";
		break;
	case "Jon":
		$fullbook="Jonah";
		$shortbook="Jon";
		$hebbook="יונה";
		break;
	case "Jos":
		$fullbook="Joshua";
		$shortbook="Josh";
		$hebbook="יהושע";
		break;
	case "Jud":
		$fullbook="Judges";
		$shortbook="Judg";
		$hebbook="שופטים";
		break;
	case "Ecc":
		$fullbook="Ecclesiastes";
		$shortbook="Eccl";
		$hebbook="קהלת";
		break;
	case "Lam":
		$fullbook="Lamentations";
		$shortbook="Lam";
		$hebbook="איכה";
		break;
	case "Lev":
		$fullbook="Leviticus";
		$shortbook="Lev";
		$hebbook="ויקרא";
		break;
	case "Mal":
		$fullbook="Malachi";
		$shortbook="Mal";
		$hebbook="מלאכי";
		break;
	case "Mic":
		$fullbook="Micah";
		$shortbook="Mic";
		$hebbook="מיכה";
		break;
	case "Nah":
		$fullbook="Nahum";
		$shortbook="Nah";
		$hebbook="נחום";
		break;
	case "Neh":
		$fullbook="Nehemiah";
		$shortbook="Neh";
		$hebbook="נחמיה";
		break;
	case "Num":
		$fullbook="Numbers";
		$shortbook="Num";
		$hebbook="במדבר";
		break;
	case "Oba":
		$fullbook="Obadiah";
		$shortbook="Ob";
		$hebbook="עובדיה";
		break;
	case "Pro":
		$fullbook="Proverbs";
		$shortbook="Prov";
		$hebbook="משלי";
		break;
	case "Psa":
		$fullbook="Psalms";
		$shortbook="Ps";
		$hebbook="תהילים";
		break;
	case "Rut":
		$fullbook="Ruth";
		$shortbook="Ruth";
		$hebbook="רות";
		break;
	case "Sos":
		$fullbook="ong of songs";
		$shortbook="Song";
		$hebbook="שיר השירים";
		break;
	case "Zec":
		$fullbook="Zechariah";
		$shortbook="Zech";
		$hebbook="זכריה";
		break;
	case "Zep":
		$fullbook="Zephaniah";
		$shortbook="Zeph";
		$hebbook="צפניה";
		break;
      default:
          echo "The number is: $random <br>The line is $aline";

		
 }


$text_output=$fullbook . ' ' . $chap . ', ' . $verse;
$text_output_heb=$hebbook." פרק ".$chap." פסוק ".$verse;


$fr_flag='<img title="français" src="../files/fr.png" alt="French" width="16" height="11" />';
$il_flag='<img title="בעברית" src="../files/il.png" alt="Hebrew" width="16" height="11" />';
$ru_flag='<img title="русски" src="../files/ru.png" alt="Russian" width="16" height="11" />';
$en_flag='<img title="English" src="../files/en.png" alt="English" width="16" height="11" />';

$output_1="<a href=";
$output_newtab="<a target = '_blank' href=";

$he_url_samepage=$output_1 . '"' . $home_url . '?' . $shortbook . $chap . ':' . $verse . '-' . $verse . '">';
$he_url=$output_newtab . '"' . $home_url . '?' . $shortbook . $chap . ':' . $verse . '-' . $verse . '">';
$he_url_samepage_full_chapter=$output_1 . '"' . $home_url . '?' . $shortbook . $chap . '-' . $chap . '">';

$version="CJB"; $flag=$en_flag;
$en_url=$output_newtab . '"' . $home_eng_url . $shortbook . $chap . ':' . $verse . '-' . $verse . '&version=' . $version . '">';

$version="BDS"; $flag=$fr_flag;
$fr_url=$output_newtab . '"' . $home_eng_url . $shortbook . $chap . ':' . $verse . '-' . $verse . '&version=' . $version . '">';

$version="RUSV"; $flag=$ru_flag;
$ru_url=$output_newtab . '"' . $home_eng_url . $shortbook . $chap . ':' . $verse . '-' . $verse . '&version=' . $version . '">';

$version="WLC;CJB;BDS;RUSV";
$all_url=$output_newtab . '"' . $home_eng_url . $shortbook . $chap . ':' . $verse . '-' . $verse . '&version=' . $version . '">';


?>
