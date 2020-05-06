<?php


    //open session to use session:
    session_start(); //to send the user's id to file


    ///////////////////////////////////////////////////////////
    //Editing the text
    $title = str_replace('#','-',$_POST['title']);
    $category = str_replace('#','-',$_POST['category']);
    $descrition = str_replace('#','-',$_POST['descrition']);

    //PHP_EOL to create a new line in file file.hd to salve the information
    $text = $_SESSION['id'] .'#' . $title . '#' . $category . '#' . $descrition . PHP_EOL;

    //open the file
    //a to register the information
    $file = fopen('file.hd','a');

    //write the information
    fwrite($file, $text);

    //close the file:
    fclose($file);

    header('Location: home.php')

?>