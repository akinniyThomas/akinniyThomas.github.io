<?php
if (isset($_POST['contactButton'])) {
    $name = $_POST['fullName'];
    $email = $_POST['emailAddress'];
    $title =  $_POST['title'];
    $message =  $_POST['message'] ;
    $data = "Name: ".$name."/nEmail: ".$email."/nTitle: ".$title."/nMessage: ".$message."/n/n/n";
    $fp = fopen('data.txt', 'a');
    fwrite($fp, $data);
    fclose($fp);
    echo $data;
}
?>
