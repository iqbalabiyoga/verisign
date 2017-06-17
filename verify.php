<?php
if(!isset($_SESSION)){
    session_start();
}
            if (isset($_FILES['my_file'])) {
                $myFile = $_FILES['my_file']["name"];
                $fileCount = count($myFile);
                $target_dir = "verify/";
                for ($i = 0; $i < $fileCount; $i++) {
                    $ext = pathinfo($myFile[$i],PATHINFO_EXTENSION);
                    $target_file = $target_dir . basename($_FILES["my_file"]["name"][$i]);
                    move_uploaded_file($_FILES["my_file"]["tmp_name"][$i], $target_file);
                    if($ext == 'dat'){
                        $signature = file_get_contents($target_dir.$myFile[$i]);
                    }elseif($ext == 'pem'){
                        $signer=basename($_FILES["my_file"]["name"][$i]);
                        $public_key_pem = file_get_contents($target_dir.$myFile[$i]);
                    }else {
                        $filename=basename($_FILES["my_file"]["name"][$i]);
                        $data = md5_file($target_dir.$myFile[$i]);
                }}
            $_SESSION['filename']=$filename;
            $_SESSION['filehash']=$data;
            $_SESSION['sign']=$signature;
            $_SESSION['signer']=$signer;
            $r = openssl_verify($data, $signature, $public_key_pem, "sha256WithRSAEncryption");
            if($r){
                header('Location:terverifikasi.php');
            }
                else header('Location:invalid.php');
            }
        ?>