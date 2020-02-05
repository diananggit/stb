<?php
// https://stackoverflow.com/questions/43475937/how-to-insert-data-with-ajax-and-php-without-page-refresh
    $cars = $_POST['carArray'];
    $FirstName=$_POST['firstName'];

    //Used to test - it will print out the array
    print("<pre>");
    print_r($cars);
    print("</pre>");

    //Do something with $cars array and $FirstName variable
    insert();
?>