<!DOCTYPE html>
<html>
<?php 
    include 'header.php';
    include 'connect.php';
    include 'anti-inject.php';
?>
    <head><title>VeriSigner | Sign and Verify Your Document</title></head>

    <br>
    <br>
    <br>
    <?php if(isset($_POST['submit'])){
    $email=anti_injection($_POST['username']);
    $password=md5(anti_injection($_POST['password']));

$new_key_pair = openssl_pkey_new(array(
    "private_key_bits" => 2048,
    "private_key_type" => OPENSSL_KEYTYPE_RSA,
));
openssl_pkey_export($new_key_pair, $private_key_pem);

$details = openssl_pkey_get_details($new_key_pair);
$public_key_pem = $details['key'];


//save for later
    $pubpath='keys/'.$email.'-pub.pem';
    $privpath='keys/'.$email.'-priv.pem';
file_put_contents($privpath, $private_key_pem);
file_put_contents($pubpath, $public_key_pem);
    
    mysqli_query($con,"INSERT INTO pengguna(email, password, pubkey, privkey) VALUES ('$email','$password','$pubpath','$privpath')");
header('Location:login.php');
}
    ?>
        <div class="container">
            <div class="row">
                <div class="col l6 offset-l3 s12">
                    <form method="post" action="#" name="RegistForm">
                        <div class="row">
                            <div class="col s12 grey lighten-3 center-align">
                                <h5>Daftar ke <strong>Sistem</strong></h5> </div>
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
                        <div class="row center-align">Sudah punya akun? <a class="grey-text" href="login.php">Login</a> </div>
                    </form>
                </div>
            </div>
        </div>