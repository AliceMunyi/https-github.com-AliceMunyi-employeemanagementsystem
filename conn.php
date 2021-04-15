<?php

$conn=mysqli_connect('localhost','root','','test');


if ($conn==true){
    echo 'Connected Successfully';
}else{
    die("ERROR; Could not connect".mysqli_connect_error());
}
