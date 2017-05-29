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
            <div class="row">
                <div class="col l6 offset-l3 s12">
                    <form method="post" action="#" name="RegistForm">
                        <div class="row">
                            <div class="col s12 grey lighten-3 center-align">
                                <h5>Masuk ke <strong>Sistem</strong></h5> </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="username" name="username" type="text" class="validate" required>
                                <label data-error="invalid" for="username">Email *</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="password" name="password" type="password" class="validate" required>
                                <label data-error="invalid" for="password">Password *</label>
                            </div>
                        </div>
                        <div class="row center">
                            <button class="btn cyan waves-effect waves-light btn-large" type="submit" name="submit"><strong>Masuk</strong> </button>
                        </div>
                        <div class="row center-align">Belum punya akun? <a class="grey-text" href="daftar.php">Daftar</a> </div>
                         <div class="row center-align">Verifikasi Dokumen? <a class="grey-text" href="daftar.php">Klik di Sini</a> </div>
                    </form>
                </div>
            </div>
        </div>