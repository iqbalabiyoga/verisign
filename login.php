<?php 
if(isset($_SESSION['user'])){
    header('Location:index.php');
}
include 'header.php';
include 'connect.php';
?>
<br>
<br>
<br>
<?php if(isset($_POST['kirim'])){
    $email=$_POST['username'];
    $password=$_POST['password'];
    $data=mysqli_fetch_array(mysqli_query($con,"select * from pengguna where username='$username' and password='$password'"));
    if(isset($data)){
        $pubkey=$data['pubkey'];
        $privkey=$data['privkey'];
    }
    
}?>
<div class="container">
        <div class="row">
            <div class="col l6 offset-l3 s12">
                <form method="post" action="#" name="RegistForm"> 
                    <div class="row">
                        <div class="col s12 grey lighten-3 center-align">
                            <h5>Masuk ke <strong>Sistem</strong></h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12" >
                            <input  id="username" name="username" type="text" class="validate" required>
                            <label data-error="invalid" for="username">Email *</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12" >
                            <input id="password" name="password" type="password" class="validate" required>
                            <label data-error="invalid" for="password">Password *</label>
                        </div>
                    </div>
                    <div class="row center">
                        <button class="btn cyan waves-effect waves-light btn-large" type="submit" name="submit"><strong>Masuk</strong>
                        </button>
                    </div>


                    <div class="row center-align">
                        Belum punya akun?
                        <a class="grey-text" href="daftar.php"> Daftar sekarang</a>      
                    </div>

                </form>
            </div>
        </div>
</div>