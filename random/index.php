<?php
if ( isset( $argv ) ) {
  parse_str(
	    join( "&", array_slice( $argv, 1 )
		  ), $_GET );
}

if (!empty($_GET['random'])) {$random=$_GET['random'];} else {$random=-1;}

$dq ='"';
include 'random_pasuk.php';

$url= $dq . $home_url . '?' . $shortbook . $chap . ':' . $verse . '-' . $verse . $dq;

?>
<html>
<title><?php echo $shortbook . $chap . ':' . $verse . "/" . $text_output_heb; ?></title>

<head>
  <link rel="stylesheet" href="EzraSIL-webfont.css" type="text/css">
  <meta content="text/html; charset=UTF-8" http-equiv="content-type">
</head>

<style>
#nav
{
background-color: red;
float: left;
width: 200px;
position:relative;
font-size: xx-large;
}


#container
{
width:1000px;
position:relative;
}

#detail{
  //For center align
  margin-left: auto;
  margin-right: auto;
  // For grow & shrink as per screen size change values as per your requirements
  width: 80%;
  height: 50%;
 font-size: large;
}
</style>

<hr>
<body>
  
<?php /* echo '<a href=' . $dq . $home_url . '?' . $shortbook . $chap . ':' . $verse . '-' . $verse . $dq . 'target="_blank">' . $shortbook . $chap . ':' . $verse . "/" . $text_output_heb . '</a>'; 


 if(empty($pol))
 { $pol="manual";
 }
 echo  'random number value ' . $random . ' date:' . $pol . '<br>';
  */
?>

<div id="container">
<div id="nav">
    <ul><?=$he_url_samepage; ?>Pasuk</a> </ul>
    <ul><?=$he_url_samepage_full_chapter; ?>Perek</a> </ul>
    <ul><?="<a href='".$whereami."'>New חדש</a>"?> </ul>
</div>
<div id="detail">

        <?= '<a target = "_blank"  href=' . $dq . 'http://geulah.org.il/random/?random=' . $random . $dq . '>'; ?>
	<image style="float:right;margin:5px;" title="בעברית" src="../files/il.png" alt="Hebrew" width="50px" height="50px"/></a>
        <?= $en_url; ?>
	<image style="float:right;margin:5px;" title="English" src="../files/en.png" alt="English" width="50px" height="50px"/></a>
	<?= $fr_url; ?>
	<image style="float:right;margin:5px;" title="français" src="../files/fr.png" alt="French"" width="50px" height="50px"/></a>
	<?= $ru_url; ?>
	<image style="float:right;margin:5px;" title="русски" src="../files/ru.png" alt="Russian"  width="50px" height="50px"/></a>
    <a target = '_blank' href="form1.php">	
	<image style="float:right;margin:5px;" title="multi" src="../files/earth180.png" alt="Multi"  width="50px" height="50px"/></a>

        <h3><?= $text_output_heb ?></h3>
        <p><?= $text_output ?></p>
    <hr>
</div>
</div>


<object data= <?='"'. $home_url . '?' . $shortbook . $chap . ':' . $verse . '-' . $verse . '"' ?>
 width="1000" height="500">
<embed src=  <?='"'. $home_url . '?' . $shortbook . $chap . ':' . $verse . '-' . $verse . '"' ?> width="1000" height="500"> </embed>
 Error: Embedded data could not be displayed. 
</object>

<?php
$cookie_name = "language";

if(!isset($_COOKIE[$cookie_name]))
	{
  #echo "Cookie named '" . $cookie_name . "' is not set! <br>";
} else {
	$version = $_COOKIE[$cookie_name];
    echo "<object data=" . '"' . $home_eng_url . '?' . $shortbook . $chap . ':' . $verse . '-' . $verse . '&version=' . $version . '"' . 'width="1000" height="500">';
    echo "<embed src=" . '"' . $home_eng_url . '?' . $shortbook . $chap . ':' . $verse . '-' . $verse . '&version=' . $version . '"' . 'width="1000" height="500"> </embed>';
    echo " Error: Embedded data could not be displayed."; 
    echo "</object>";
  # echo "Cookie named '" . $cookie_name . "' is " . $name . "<br>";
}
echo  date("d-m-Y H:i:s");
echo "<div style='visibility: hidden'>The number is: $random </div><br>";

?>
</body></html>

