
<html>
<?php
    session_start();
 if(!isset($_SESSION['user'])){
        header('Location:login.php');
    }
include 'header.php';    
  print_r($_SESSION);
?>

    <br>
    <br>
    <br>
    <div class="container center">
        <div class="row">
            <div class="col s12">
                <ul class="tabs">
                    <li class="tab col s3"><a class="" href="#test1">Tandai</a></li>
                    <li class="tab col s3"><a class="" href="#test2">Verifikasi</a></li>
                </ul>
            </div>
            <div id="test1" class="col s12">
                <h5>Tandai Dokumen</h5>
                <form action="upload.php" method="post" enctype="multipart/form-data">
                    <div class="file-field input-field container">
                        <div class="btn"> <span>File</span> </div>
                        <input type="file" name="fileToUpload" id="fileToUpload">
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text" placeholder="Upload one or more files"> </div>
                        <input class="waves-effect waves-light btn right" type="submit" value="Proses Berkas" name="submit"> </div>
                </form>
            </div>
            <div id="test2" class="col s12">
                <h5>Verifikasi Dokumen</h5>
          <!--  <form action="verify.php" method="post" enctype="multipart/form-data">
                    <div class="file-field input-field container">
                        <div class="btn"> <span>File</span> </div>
                        <input type="file" name="fileToUpload" id="fileToUpload">
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text" placeholder="Upload one or more files"> </div>
                        
                         <div class="btn"> <span>Signature</span> </div>
                        <input type="file" name="signature">
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text" placeholder="upload signature"> </div>
                        
                        <div class="btn"> <span>Public Key</span> </div>
                        <input type="file" name="pubkey">
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text" placeholder="upload public key"> </div>
                        <input class="waves-effect waves-light btn right" type="submit" value="Proses Berkas" name="submit"> </div>
                </form>-->
                
        <form method="post" action="verify.php" enctype="multipart/form-data">
            <input type="file" name="my_file[]" multiple>
            <input type="submit" value="Upload">
        </form>
                
            </div>
        </div>
    </div>
</html>