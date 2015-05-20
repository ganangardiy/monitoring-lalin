<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Sistem Monitoring Lalu Lintas Universitas Negeri Semarang</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

	<!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
	<!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
	<!--script src="js/less-1.3.3.min.js"></script-->
	<!--append ‘#!watch’ to the browser URL, then refresh the page. -->
	
	<link href="<?=base_url();?>asset/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?=base_url();?>asset/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link href="<?=base_url();?>asset/css/style.css" rel="stylesheet">
	<link href="<?=base_url();?>asset/css/sticky.css" rel="stylesheet">

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
  <![endif]-->

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?=base_url();?>asset/img/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?=base_url();?>asset/img/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?=base_url();?>asset/img/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-57-precomposed.png">
  <link rel="shortcut icon" href="<?=base_url();?>asset/img/favicon.png">
  
	<script type="text/javascript" src="<?=base_url();?>asset/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?=base_url();?>asset/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?=base_url();?>asset/js/scripts.js"></script>
	<script type="text/javascript">
	$(document).ready(function () {
			$('ul.nav > li').click(function (e) {
				e.preventDefault();
				$('ul.nav > li').removeClass('active');
				$(this).addClass('active');                
			});            
		});
	</script>
	
	<script>
	$(document).ready(function(){
	$('a').click(function(){
		$("#content").load('index.php/welcome/'+ $(this).data('id'));
	  });
	});
	</script>
	<script>
	function open_win() 
	{
	window.open('<?=base_url();?>index.php/welcome/stream','','width=370,height=320')
	}
	</script>
	
</head>

 <style type='text/css'>
		
#content { height: 300px;}       
 </style>

<body>
<div class="container">
	<div class="row">
		<div class="span8">
			<div class="page-header">
				<h1>
					Sistem Monitoring Lalu Lintas  <br><small>
					<?php foreach ($tagline as $dat) {?>
					<?php echo $dat->tagline;?>
					<?php } ?></small>
				</h1>
			</div>
		</div>
	</div>
	<div class="row">