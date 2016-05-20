<?php
if(isset($_GET['device'])){

$filename = $_GET['device'].".txt";
$file = file($filename);

$count = count($file);
for($i = $count; $i-- > 0;) {
    echo $file[$i]; 
    echo "<br>"; 
}
}

?>
