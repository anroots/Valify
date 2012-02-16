<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title><?=$title?></title>

    <meta name="viewport" content="width=device-width,initial-scale=1">

    <link rel="stylesheet" href="<?=URL::base()?>assets/shared/libs/bootstrap-2.0/css/bootstrap.min.css">
    <!-- end CSS-->

    <script src="<?=URL::base()?>assets/shared/js/libs/modernizr-2.0.6.min.js"></script>
    <script src="<?=URL::base()?>assets/shared/js/libs/jquery-1.7.1.min.js"></script>
    <script type="text/javascript">
        var base_url = '/';
    </script>
</head>

<body>


<div class="container-fluid">

    <!-- Main content -->
    <div class="row">
        <div class="span7 offset3">
            <div id="main">
                <?=$content?>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="row">
        <div class="span4 offset6">
            <footer>
                <?=Kohana::$config->load('app.title')?> version <?=Kohana::$config->load('app.version')?> |
                <a href="https://github.com/anroots/valify" title="GitHub">GitHub</a>
            </footer>
        </div>
    </div>

</div>
<script src="<?URL::base()?>assets/shared/libs/bootstrap-2.0/js/bootstrap.min.js" type="text/javascript"></script>
</html>