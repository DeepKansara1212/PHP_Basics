<?php

    // echo readfile("./Files/dictionary.txt");

        // Read a File
    // $myFile = fopen("./Files/dictionary.txt", 'r') or die("Unable to open file");
    // echo fread($myFile, filesize("./Files/dictionary.txt"));
    // fclose($myFile);

        // Write a File
    $myFile = fopen("./Files/createdFile.txt", 'w');
    $text = "Hello, This file is just created using File System";
    fwrite($myFile, $text);
    fclose($myFile);


    $myFile1 = fopen("./Files/createdFile.txt", 'w');
    $text1 = "Updated Text";
    fwrite($myFile1, $text1);
    fclose($myFile1);

    $myFile2 = fopen("./Files/createdFile.txt", 'a');
    $text2 = "\nThis file is created with 'a' mode.";
    fwrite($myFile2, $text2);
    fclose($myFile2);

?>