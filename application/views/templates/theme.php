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

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script type="text/javascript">
        var base_url = '<?=URL::base()?>';
        var site_id = <?=Model_Site::current()->id?>;
    </script>
</head>

<body style="padding-top: 10px;">

<!-- Main content -->
<div class="container">
    <div class="row">
        <div class="span2">
            <h1>
                <?=Kohana::$config->load('app.title')?>
            </h1>
        </div>
        <div class="span3 offset6 well">
            <label for="site_id" class="help-block">
                <?=__('Select a site...')?>
            </label>
            <?=Form::select('site_id', $sites, Model_Site::current()->id, array('id' => 'site_id'))?>
        </div>
    </div>
    <div id="main">
        <?=$content?>
    </div>
</div>

<!-- Footer -->
<div class="row">
    <div class="span4 offset6">
        <footer class="help-block">
            <?=Kohana::$config->load('app.title')?> version <?=Kohana::$config->load('app.version')?> |
            <a href="https://github.com/anroots/valify" title="GitHub">GitHub</a>
            <a href="http://www.w3.org/html/logo/">
                <img src="http://www.w3.org/html/logo/badge/html5-badge-h-css3-semantics.png" width="165"
                     height="64" alt="HTML5 Powered with CSS3 / Styling, and Semantics"
                     title="HTML5 Powered with CSS3 / Styling, and Semantics">
            </a>
        </footer>
    </div>
</div>

<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<?=Assets::render(Assets::SCRIPT)?>
</body>
</html>