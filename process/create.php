<?php

if(isset($_POST['btn']) && $_POST['btn'] == 'save'){
    $fileName = $_POST['fileName'].'.txt';
    $mesage = $_POST['notepad'];
    $filePath = './'.$fileName;

    $file = fopen($fileName, 'w+');
    fwrite($file, $mesage);

    if(file_exists($filePath)){
        $fn = basename($fileName);
        $fs = filesize($filePath);

        //Output headers.
        header('Cache-Control: private');
        header('Content-Type: application/stream');
        header("Content-Length: ".$fs);
        header("Content-Disposition: attachment; filename=".$fn);

        // Output file.
        readfile ($filePath);                   
        exit();
        }
    else {
        die('The provided file path is not valid.');
    }
    
    header('location:../index.php');

}

?>