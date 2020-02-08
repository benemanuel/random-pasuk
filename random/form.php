<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
$cookie_name = "language";
$nameErr = $setErr = "Some Error";
$name = "NET";
$set = "set";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $set = test_input($_POST["set"]);
    $name = test_input($_POST["name"]);
  }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Language: <input type="text" name="name" value="<?php echo $name;?>">
<!--  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  Set/Unset Default:
  <input type="radio" name="set" <?php if (isset($set) && $set=="unset") echo "checked";?> value="unset">Unset
  <input type="radio" name="set" <?php if (isset($set) && $set=="set") echo "checked";?> value="set">Set
<!--  <span class="error">* <?php echo $setErr;?></span>
-->
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php

if(!isset($_COOKIE[$cookie_name])) {
echo "Cookie named '" . $cookie_name . "' is not set! <br>";// define variables and set to empty values

}

	
echo "<h2>Your Input:</h2>";
if ($name == "") {
    $set = "set";
    $name = "NET";
  }
echo "Language:" . $name;
echo "<br>";
echo "Set:" . $set;
if ($set == "set") {
    $cookie_value = $name;
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/random"); // 86400 = 1 day
   } else {
   $cookie_value = "";
   setcookie($cookie_name, $cookie_value, time() -1);
   }

?>
<br>
  List of available languages are the codes listed in the second column (versions) in parentheses below	
	<image  title="multi" src="../Images/earth180.png" alt="Multi"  width="50px" height="50px"/></a>

<?php

    echo "<object data=" . '"https://www.biblegateway.com/versions/"' . 'width="1000" height="500">';
    echo "<embed src=" . '"https://www.biblegateway.com/versions/"' . 'width="1000" height="500"> </embed>';
    echo " Error: Embedded data could not be displayed."; 
    echo "</object>";

?>
</body>
</html>
