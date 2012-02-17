<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">

    <title><?=$title?></title>

    <meta name="viewport" content="width=device-width,initial-scale=1">

    <link rel="stylesheet" href="<?=URL::base()?>assets/css/bootstrap2.css">
    <!-- end CSS-->

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script type="text/javascript">
        var base_url = '<?=URL::base()?>';
        var site_id = 1;
    </script>
</head>

<body>


<div class="container-fluid">

    <!-- Main content -->
    <div class="row">
        <div class="span6 offset4">
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
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<?=Assets::render(Assets::SCRIPT)?>
</html>