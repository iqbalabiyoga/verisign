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