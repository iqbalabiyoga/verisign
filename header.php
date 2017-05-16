<head>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" /> </head>

<body>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script>
        $(document).ready(function () {
            $('ul.tabs').tabs();
        });
    </script>
    <script>
        $(document).ready(function () {
            $('ul.tabs').tabs('select_tab', 'tab_id');
        });
    </script>
    <nav class="cyan">
        <div class="nav-wrapper container"> <a href="#" class="brand-logo">VeriSigner</a> </div>
        <?php if(isset($_SESSION['user'])){?>
            <ul class="right">
                <li><a href="logout.php" class="waves-effect waves-light btn red">Logout</a></li>
            </ul>
        <?php } ?>
    </nav>