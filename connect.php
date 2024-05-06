<?php
$connection = new mysqli('localhost', 'root', '', 'dbeconarf2');

if(!$connection){
    die (mysqli_error($mysqli));
}

?>