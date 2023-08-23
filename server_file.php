<?php
if (isset($_GET['class'])) {
    $class = $_GET['class'];

    // Define file paths for different classes
    $filePathElectric = "Lists\\Electric.txt";
    $filePathCombustion = "Lists\\IC.txt";

    // Determine the appropriate file path based on the class value
    if ($class === 'electric') {
        $filePath = $filePathElectric;
    } elseif ($class === 'combustion') {
        $filePath = $filePathCombustion;
    }

    if (file_exists($filePath)) {
        header('Content-Type: text/plain');
        readfile($filePath);
    } else {
        echo "File not found.";
    }
} else {
    echo "Class parameter not specified.";
}
?>