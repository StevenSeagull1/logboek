<?php
echo '<div class="gridcontainer">'; 


foreach ($logboek as $log)
{
    foreach ($log as $key=>$value) {
    echo '<div class="griditem">';
    echo "|$value";
    echo '&nbsp;';
    echo "<br>";
    require "secure/database.php";

    echo '</div>';
   
    }
}
echo "<a href= 'index.php/?action=delete&id=".$log["id"]."'>DELETE</a>";
?>