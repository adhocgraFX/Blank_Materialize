<?php defined( '_JEXEC' ) or die; 

// variables
$app = JFactory::getApplication();
$doc = JFactory::getDocument(); 
$menu = $app->getMenu();
$active = $app->getMenu()->getActive();
$params = $app->getParams();
$pageclass = $params->get('pageclass_sfx');
$tpath = $this->baseurl.'/templates/'.$this->template;
$templateparams	= $app->getTemplate(true)->params;

// generator tag
$this->setGenerator(null);

// force latest IE & chrome frame
$doc->setMetadata('x-ua-compatible','IE=edge,chrome=1');

// js
JHtml::_('jquery.framework');
$doc->addScript($tpath.'/js/materialize.min.js');
$doc->addScript($tpath.'/js/logic.js'); // <- use for custom script

// css
$doc->addStyleSheet($tpath.'/css/materialize.css');
$doc->addStyleSheet($tpath.'/css/template.css');

?><!doctype html>

<html lang="<?php echo $this->language; ?>">

<head>
	<jdoc:include type="head" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<link rel="apple-touch-icon-precomposed" href="<?php echo $tpath; ?>/images/apple-touch-icon-57x57-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $tpath; ?>/images/apple-touch-icon-72x72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $tpath; ?>/images/apple-touch-icon-114x114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $tpath; ?>/images/apple-touch-icon-144x144-precomposed.png">
	<!-- Le HTML5 shim and media query for IE8 support -->
	<!--[if lt IE 9]>
	<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<script type="text/javascript" src="<?php echo $tpath; ?>/js/respond.min.js"></script>
	<![endif]-->
</head>
  
<body class="<?php echo (($menu->getActive() == $menu->getDefault()) ? ('front') : ('site')).' '.$active->alias.' '.$pageclass; ?>" role="document">

<div class="navbar-fixed">
<nav>
    <div class="nav-wrapper">
        <div class="col s12">
            <a href="<?php echo $this->baseurl ?>" class="brand-logo"><?php echo htmlspecialchars($app->getCfg('sitename')); ?></a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu"></i></a>

            <form>
                <div class="input-field col s12 right hide-on-med-and-down">
                    <input id="search" type="text" required>
                    <label for="search"><i class="mdi-action-search"></i></label>
                </div>
            </form>

            <ul class="right hide-on-med-and-down">
                <jdoc:include type="modules" name="nav" />
            </ul>

            <ul class="side-nav" id="mobile-demo">
                <jdoc:include type="modules" name="nav" />
            </ul>
        </div>
    </div>
</nav>
</div>

<div class="container">
    <div class="row">
        <div class="col s12 m6 l7">
            <jdoc:include type="modules" name="breadcrumbs" />
            <jdoc:include type="component" />
        </div>
        <div class="col s12 m6 l5">
            <jdoc:include type="modules" name="sidebar" style="card"  />
        </div>
    </div>
</div>

<footer class="page-footer">
    <div class="container">
        <div class="row">
            <div class="col s12">
                <jdoc:include type="modules" name="footer" />
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            <jdoc:include type="modules" name="footer" />
        </div>
    </div>
</footer>

    <jdoc:include type="modules" name="debug" />

</body>

</html>
