<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include_http_metas() ?>
        <?php include_metas() ?>
        <?php include_title() ?>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <?php include_stylesheets() ?>
        <?php include_javascripts() ?>

        <!-- IE6-8 support of HTML elements -->
        <!--[if lt IE 9]>
                <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <link rel="shortcut icon" href="/favicon.ico" />
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="/images/ico/apple-touch-icon-57-precomposed.png">
    </head>
    <body>
        <?php include_partial("main/menu") ?>
        <div class="container-fluid corps">
            <div class="content">
                <?php echo $sf_content ?>
            </div>
            <footer>
                <p>&copy; Company 2011</p> <?php // @EDIT ?>
            </footer>
        </div>
    </body>
</html>