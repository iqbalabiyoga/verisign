<?php
session_start();
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$filename=basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
    $data=md5_file($target_file);
    $private_key_pem=file_get_contents($_SESSION['privkey']);
    //create signature
    echo $private_key_pem;
openssl_sign($data, $signature, $private_key_pem, OPENSSL_ALGO_SHA256);
    $path='sign/'.$_SESSION['user'].$filename.'.dat';
    file_put_contents($path, $signature);
}
echo "<h3>Tanda Tangan Berhasil!</h3>";
header('Location:index.php');
?>