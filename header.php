<!DOCTYPE html>

<!--[if lt IE 9]><html class="ie"><![endif]-->
<!--[if gte IE 9]><!--><html><!--<![endif]-->

<head>
	<title><? bloginfo('name') ?></title>
	<meta charset="<? bloginfo('charset') ?>"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>

	<!--[if lt IE 9]>
		<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<? wp_head() ?>
</head>
<body <? body_class() ?>>
<?
if(get_view('header')){
	require(get_view('header'));
}
?>