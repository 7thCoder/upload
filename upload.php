<!-- 
    // if(isset($_POST['submit'])){
    //     $file = $_FILES['file'];

    //     $fileName = $_FILES['file']['name'];
    //     $fileTmpName = $_FILES['file']['tmp_name'];
    //     $fileSize = $_FILES['file']['size'];
    //     $fileError = $_FILES['file']['error'];
    //     $fileType = $_FILES['file']['type'];

    //     $fileExt = explode('.',$fileName);
    //     $fileActualExt = strtolower(end($fileExt));
        
    //     $fileDestination = 'uploads/'.$fileName;
    //     move_uploaded_file($fileTmpName, $fileDestination);
    //     echo 'success';
    //     header("Location: index.php?uploadsuccess");

<?php
if(isset($_POST["submit"])){
    $file = $target_dir.$_FILES["file"]["name"];

    echo "name".$_FILES["file"]["tmp_name"];
}
?>