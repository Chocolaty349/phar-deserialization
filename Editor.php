<?php
include 'PDFGenerator.php';
class Editor {
public function __construct() {
    global $argv;
    $this->image = @file_get_contents ($argv[1]);
    // $argv[1] - is there so you can run all this code locally
    // Think of it as the file name of the image you want to add to the document
    if ($this->image) {
        echo "File found! \n";
    } else {
        echo "File not found! \n";
    }
}                                                                                        
}
$obj = new Editor();
?>