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
  <meta content="text/html; charset=UTF-8" http-equiv="content-type">
</head>
<body>


<?php echo '<a href=' . $dq . $home_url . '?' . $shortbook . $chap . ':' . $verse . '-' . $verse . $dq . 'target="_blank">' . $shortbook . $chap . ':' . $verse . "/" . $text_output_heb . '</a>'; ?>

<?php
  /* 
 if(empty($pol))
 { $pol="manual";
 }
 echo  'random number value ' . $random . ' date:' . $pol . '<br>';
  */
?>

</body></html>
