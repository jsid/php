
<head>
<meta content="he" http-equiv="Content-Language">
</head>

<?php
if(isset($_POST['field1']) && isset($_POST['field2']) && isset($_POST['field3'])) {

$volt=($_POST['field1'] * 256 + $_POST['field2']) * 5 / 1024;
$volt=round($volt, 3);
$a2="<!DOCTYPE html><br><html><br>" . $volt . " V<br>input=" . $_POST['field3'] . "<br><html>";	
$fp = fopen("project_2.php", "w");
fwrite($fp, $a2);
fclose($fp);

echo $volt . " V  input=" . $_POST['field3'];

}

?>

