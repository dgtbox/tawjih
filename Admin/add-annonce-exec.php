<?php
$tit = $_POST['tit'];
$sub = $_POST['sub'];
$img = 0;
if(isset($_FILES['fl'])&&$_FILES["fl"]["size"]!=0) {
    $fileextension = strtolower(pathinfo($_FILES["fl"]["name"], PATHINFO_EXTENSION));
    if($fileextension == "jpg"){
    $img = 1;}
}
$cont = $_POST['cont'];

include('conn.php');

$stmt = $coni->prepare("INSERT INTO annonces(title, sub, content,image) VALUES (?, ?, ?, ?)");
$stmt->bind_param('sssi', $tit, $sub, $cont, $img);
$stmt->execute();
$id = $coni->insert_id;
$target_dir = "../etudients\assets\images\annonce/";
$fileextension = strtolower(pathinfo($_FILES["fl"]["name"], PATHINFO_EXTENSION));
$new_name = $id.".".$fileextension; // New file name
$target_file = $target_dir . $new_name;
$uploadOk = 1;
if(isset($_FILES['fl'])&&$_FILES["fl"]["size"]!=0)
{
    if ($_FILES["fl"]["size"] > 25165824) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

if($fileextension != "jpg") {
 
    echo "Sorry, only JPG files are allowed.";
    $uploadOk = 0;   
    header('location: add-article.php');
}

if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fl"]["tmp_name"], $target_file)) {
        header("location: list-article.php");
    }
}
}
else
{
    header("location: list-article.php");
}
?>