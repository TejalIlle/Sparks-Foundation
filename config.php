<?php

$conn = mysqli_connect('localhost', 'root', '', 'sparks_bank');

if(!$conn){
    die("could not connect to database due to following error -->".mysqli_connect_error());
}
?>