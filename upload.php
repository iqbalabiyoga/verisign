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
    $pubkey=$_SESSION['pubkey'];
    //create signature
    echo $private_key_pem;
openssl_sign($data, $signature, $private_key_pem, OPENSSL_ALGO_SHA256);
    $path='sign/'.$_SESSION['user'].$filename.'.dat';
    file_put_contents($path, $signature);
    
    $tandatangan=$path;
    if (file_exists($tandatangan)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($tandatangan).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($tandatangan);
    exit;
}
    
    if (file_exists($pubkey)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($pubkey).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($pubkey));
    readfile($pubkey);
    readfile($filename);
    exit;
}
}
echo file_get_contents($tandatangan);
header('Location:index.php');
?>