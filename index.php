<<<<<<< HEAD
<!DOCTYPE html>
<html>
<?php
    if(!isset($_SESSION['user'])){
        header('Location:login.php');
    }
include 'header.php';    
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
                        <input class="waves-effect waves-light btn right" type="submit" value="PROSES BERKAS" name="submit"> </div>
                </form>
            </div>
            <div id="test2" class="col s12">
                <h5>Verifikasi Dokumen</h5> </div>
        </div>
    </div>
=======
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>

<head>
    <title>Verisigner | verifikasi keaslian dokumen dengan mudah</title>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Lato:400,700,900,300' rel='stylesheet' type='text/css'>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href='css/custom.css' rel="stylesheet" type="text/css" media="all">
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/Chart.js"></script>
    <!-- //chart -->
    <script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#horizontalTab').easyResponsiveTabs({
                type: 'default', //Types: default, vertical, accordion           
                width: 'auto', //auto or any width like 600px
                fit: true // 100% fit in a container
            });
        });
    </script>
</head>

<body>
    <div class="content">
        <h1>VeriSigner</h1>
        <div class="main">
            <div class="profile-left wthree">
                <div class="sap_tabs">
                    <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                        <ul class="resp-tabs-list">
                            <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Sign</span></li>
                            <li class="resp-tab-item" aria-controls="tab_item-1" role="tab">
                                <h2><span>Verify</span></h2></li>
                            <div class="clear"> </div>
                        </ul>
                        <div class="resp-tabs-container">
                            <div class="tab-0 resp-tab-content" aria-labelledby="tab_item-0">
                                <div class="got">
                                    <h6>upload file yang ingin anda tandatangani</h6> </div>
                                <div class="login-top">
                                    <form method="post" enctype="multipart/form-data">
                                        <div class="container">
                                            <br />
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading"><strong>Upload files</strong> <small> </small></div>
                                                        <div class="panel-body">
                                                            <div class="input-group file-preview">
                                                                <input placeholder="" type="text" class="form-control file-preview-filename" disabled="disabled">
                                                                <!-- don't give a name === doesn't send on POST/GET --><span class="input-group-btn"> 
						<!-- file-preview-clear button -->
						<button type="button" class="btn btn-default file-preview-clear" style="display:none;"> <span class="glyphicon glyphicon-remove"></span> Clear </button>
                                                                <!-- file-preview-input -->
                                                                <div class="btn btn-default file-preview-input"> <span class="glyphicon glyphicon-folder-open"></span> <span class="file-preview-input-title">Browse</span>
                                                                    <input type="file" accept="text/cfg" name="input-file-preview" />
                                                                    <!-- rename it -->
                                                                </div>
                                                                <button type="button" class="btn btn-labeled btn-primary"> <span class="btn-label"><i class="glyphicon glyphicon-upload"></i> </span>Upload</button>
                                                                </span>
                                                            </div>
                                                            <!-- /input-group image-preview [TO HERE]-->
                                                            <br />
                                                            <!-- Drop Zone -->
                                                            <div class="panel panel-default">
                                                                <div class="row clearfix">
                                                                    <div class="col-md-12 column">
                                                                        <table class="table table-bordered table-hover" id="tab_logic">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th class="text-center"> File Name </th>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr> </tr>
                                                                                <tr id='addr1'></tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <br />
                                                            <!-- Progress Bar -->
                                                            <div class="progress">
                                                                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"> <span class="sr-only">60% Complete</span> </div>
                                                            </div>
                                                            <br /> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
                                    <div class="login-top sign-top">
                                        <form method="post" enctype="multipart/form-data">
                                            <div class="container">
                                                <br />
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading"><strong>Upload files</strong> <small> </small></div>
                                                            <div class="panel-body">
                                                                <div class="input-group file-preview">
                                                                    <input placeholder="" type="text" class="form-control file-preview-filename" disabled="disabled">
                                                                    <!-- don't give a name === doesn't send on POST/GET --><span class="input-group-btn"> 
						<!-- file-preview-clear button -->
						<button type="button" class="btn btn-default file-preview-clear" style="display:none;"> <span class="glyphicon glyphicon-remove"></span> Clear </button>
                                                                    <!-- file-preview-input -->
                                                                    <div class="btn btn-default file-preview-input"> <span class="glyphicon glyphicon-folder-open"></span> <span class="file-preview-input-title">Browse</span>
                                                                        <input type="file" accept="text/cfg" name="input-file-preview" />
                                                                        <!-- rename it -->
                                                                    </div>
                                                                    <button type="button" class="btn btn-labeled btn-primary"> <span class="btn-label"><i class="glyphicon glyphicon-upload"></i> </span>Upload</button>
                                                                    </span>
                                                                </div>
                                                                <!-- /input-group image-preview [TO HERE]-->
                                                                <br />
                                                                <!-- Drop Zone -->
                                                                <div class="panel panel-default">
                                                                    <div class="row clearfix">
                                                                        <div class="col-md-12 column">
                                                                            <table class="table table-bordered table-hover" id="tab_logic">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th class="text-center"> File Name </th>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr> </tr>
                                                                                    <tr id='addr1'></tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <br />
                                                                <!-- Progress Bar -->
                                                                <div class="progress">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"> <span class="sr-only">60% Complete</span> </div>
                                                                </div>
                                                                <br /> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        
                                </div>
                            </div>
                        </div>
                        <div class="clear"> </div>
                    </div>
                    
                </div>
                <div class="clear"> </div>
            </div>
            <p class="footer">&copy; 2016 Account Login Widget. All Rights Reserved | Design by <a href="http://w3layouts.com/"> W3layouts</a></p>
        </div>
>>>>>>> d50d1dd318c3af2ab6dc55cf522ce0dfe1aefa10
</body>

</html>