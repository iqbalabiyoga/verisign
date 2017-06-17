<?php 

//if(isset($_SESSION['user'])){
//    header('Location:index.php');
//}

include 'header.php';
include 'connect.php';
include 'anti-inject.php';
?>
    <br>
    <br>
    <br>
    <?php
if(isset($_POST['submit'])){
    $email=anti_injection($_POST['username']);
    $password=md5(anti_injection($_POST['password']));
    $data=mysqli_fetch_array(mysqli_query($con,"select * from pengguna where email='$email' and password='$password'"));
    if($data>0){
        session_start();
        $_SESSION['user']=$data['email'];
        $_SESSION['privkey']=$data['privkey'];
        $_SESSION['pubkey']=$data['pubkey'];
        header('Location:index.php');
    }
}
    ?>
        <div class="container">
            <div id="test2" class="col s12">
                <h5>Verifikasi Dokumen</h5>
                <form method="post" action="verify.php" enctype="multipart/form-data">
                    <input type="file" name="my_file[]" multiple>
                    <input type="submit" value="Upload"> </form>
            </div>
        </div>