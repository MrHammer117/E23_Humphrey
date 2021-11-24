<!DOCTYPE html>
<html>
<head lang="en">
   <meta charset="utf-8">
   <title>PHP Form Processor</title>
		<link href="styles/styles.css" type="stylesheet" />
</head>
<body>


   <h1>Input from a form</h1>
   <h2>Display GET Data</h2>
<?php
$title = $_POST["author"];

if($_SERVER["REQUEST_METHOD"] == "POST")
{
  print_r($_POST);
}

  if (count($_GET) == 0){
	echo "<p><em>There are no GET variables</em></p>";
  } else {
	  foreach ($_GET as $key => $value)
	  {
	    echo "<strong>" . $key . "=</strong>" . $value . "</br>";
	  }

	  $checked = $_GET['index'];
	  for($i=0; $i < count($checked); $i++){
	    echo "Index " . $i . " Selected value=" . $checked[$i] . "<br/>";
	  }
  }

?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
?>
   <h2>Display POST Data</h2>
<?php

  if (count($_POST) == 0){
	echo "<p><em>There are no POST variables</em></p>";
  } else {
    foreach ($_POST as $key => $value)
	{
		echo "<strong>" . $key . "=</strong>" . $value . "</br>";
	}
  }
}
?>

</body>
</html>
