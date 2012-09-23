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

    <link rel="stylesheet" href="<?=URL::base()?>assets/css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=URL::base()?>assets/css/bootstrap/css/bootstrap-responsive.min.css">

    <style type="text/css">
        body {
            margin-top: 60px;
        }
    </style>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script type="text/javascript">
        var base_url = '<?=URL::base()?>';
        var site_id = <?=Model_Site::current()->id?>;
    </script>
</head>
<body>

<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="brand" href="<?=URL::base()?>">
				<?=Kohana::$config->load('app.title')?>
                <small>
                    v<?=Kohana::$config->load('app.version')?>
                </small>
            </a>

            <ul class="nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-arrow-down"></i> <?=__('Tracked Sites')?> <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
						<?foreach ($sites as $site): ?>
                        <li>
                            <a href="<?=URL::base()?>?site_id=<?=$site->pk()?>">
                                <i class="icon-share-alt"></i> <?=$site->name()?>
                                (<?=$site->last_check()->errors?>)
                            </a>
                        </li>
						<? endforeach?>
                    </ul>
                </li>
	            <li>
                    <a href="http://validator.w3.org/check?uri=<?=urlencode(Model_Site::current()->url)?>">
	                    <i class="icon-check"></i> <?=__('Check Now')?>
                    </a>
	            </li>
            </ul>
            <ul class="nav pull-right">
                <li>
                    <a href="https://github.com/anroots/Valify">
                        <i class="icon-random"></i> <?=__('Fork me on GitHub')?>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="container">
	<?=$content?>
</div>

<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript" src="<?=URL::base()?>assets/css/bootstrap/js/bootstrap.min.js"></script>
<?=Assets::render(Assets::SCRIPT)?>
</body>
</html>