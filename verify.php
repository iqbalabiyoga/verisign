<?php/*
session_start();
$target_file = basename($_FILES["fileToUpload"]["name"]);
$filename=basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
   
    $data=md5_file($target_file);
    //verify signature
    
$r = openssl_verify($data, $signature, $public_key_pem, "sha256WithRSAEncryption");
var_dump($r);*/
?>

<?php
            if (isset($_FILES['my_file'])) {
                $myFile = $_FILES['my_file']["name"];
                $fileCount = count($myFile);

                for ($i = 0; $i < $fileCount; $i++) {
                    $ext = pathinfo($myFile[$i],PATHINFO_EXTENSION);
                    if($ext == 'dat'){
                        $signature = file_get_contents($myFile[$i]);
                    }elseif($ext == 'pem'){
                        $public_key_pem = file_get_contents($myFile[$i]);
                    }else $data = md5_file($myFile[$i]);
                }
            $r = openssl_verify($data, $signature, $public_key_pem, "sha256WithRSAEncryption");
            if($r == 1){
                echo "berhasil";
            }
            }
        ?>