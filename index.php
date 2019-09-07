<?php


if (isset($_POST['contactButton'])) {
    $name = $_POST['fullName'];
    $email = $_POST['emailAddress'];
    $title =  $_POST['title'];
    $message =  $_POST['message'] ;
    echo "<pre>Welcome " .$name. ", you are " .$email. " years old :)</pre>";
}


?>
