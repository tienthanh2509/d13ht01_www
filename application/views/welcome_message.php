<!DOCTYPE html>
<html lang="vi">
	<head>
		<!-- Các thẻ mô tả quan trọng -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>D13HT01 - Hệ Thống Thông Tin</title>

		<!-- Các thẻ mô tả bổ sung -->
		<meta name="description" content="Website lớp D13HT01 ngành hệ thống thông tin.">
		<meta name="keywords" content="d13ht01, httt, tdmu, cntt">
		<meta name="author" content="Phạm Tiến Thành">
		<meta name="developer" content="Phạm Tiến Thành">
		<meta name="robots" content="all">
		<meta name="generator" content="d13ht01.tk v1.0">

		<!-- Bootstrap -->
		<link href="<?php echo bower_url('bootstrap/dist/css/bootstrap.min.css'); ?>" rel="stylesheet">
		<!-- Font Awesome -->
		<link href="<?php echo bower_url('font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet">

		<!-- Custom CSS -->
		<link href="<?php echo assets_url('css/styles.css'); ?>" rel="stylesheet">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div id="wrap">
			<!-- BEGIN: Navbar -->
			<header class="navbar navbar-static-top navbar-default" id="top" role="banner">
				<div class="container">
					<div class="navbar-header">
						<button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#bs-navbar" aria-controls="bs-navbar" aria-expanded="false">
							<span class="sr-only">Menu</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a href="../" class="navbar-brand">D13HT01</a>
					</div>
					<nav id="bs-navbar" class="collapse navbar-collapse">
						<ul class="nav navbar-nav">
							<li<?php if (1): ?> class="active"<?php endif; ?>>
								<a href="<?php echo index_page(); ?>">Trang nhất</a>
							</li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li><a href="https://blog.d13ht01.tk" onclick="ga('send', 'event', 'Navbar', 'Community links', 'Blog');">Blog</a></li>
						</ul>
					</nav>
				</div>
			</header>
			<!-- END: Navbar -->

			<div class="container">
				<div class="row">
					<div class="col col-sm-6">
						<h1><a href="<?php echo index_page(); ?>" title="Lớp D13HT01 - Hệ thống thông tin - ĐH Thủ Dầu Một">D13HT01</a>
							<p class="lead">Học học - Học nữa - Học Mãi</p></h1>
					</div>
					<div class="col col-sm-6">
						<div class="well pull-right">
							<!--<img src="">-->
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col col-sm-12">
						<div class="panel">
							<div class="panel-body">
								Giáng sinh vui vẻ!  <span class="glyphicon glyphicon-heart-empty"></span>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- BEGIN: Thân trang -->
			<div class="container">
				<div class="row">
					<div class="col col-sm-3">
						<div id="sidebar">
							<div class="panel">
								<div class="panel-body">

								</div>
							</div>
						</div>
					</div>  
					<div class="col col-sm-9">
						<div class="panel">
							<div class="panel-body">
								<div class="embed-responsive embed-responsive-16by9">
									<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ETRP4F26qJU" frameborder="0" allowfullscreen></iframe>
								</div>
							</div>
						</div>
					</div> 
				</div>
			</div>

			<footer class="footer">
				<div class="container text-muted">
					<div class="row">
						<div class="col-md-6">
							<span class="pull-left">Copyright &copy; 2013-2015 <a href="https://d13ht01.tk">D13HT01</a></span>
						</div>
						<div class="col-md-6">
							<div class="pull-right">
								<span>Xử lý trong <strong>{elapsed_time}</strong> giây. <?php if (ENVIRONMENT === 'development'): ?>CodeIgniter <strong><?php echo CI_VERSION; ?></strong>.<?php endif; ?></span>
							</div>
						</div>
					</div>
					<div class="row hidden-xs">
						<div class="col-md-6">

						</div>
						<div class="col-md-6">
							<div class="pull-right">
								<span>Built with <i class="fa fa-heart text-danger"></i> by <a href="https://github.com/NgS0n" target="_blank">Thái Sơn</a>, <a href="https://github.com/tienthanh2509" target="_blank">Tiến Thành, Văn Trọng</a></span>
							</div>
						</div>
					</div>
				</div>
			</footer>

			<!-- Nhạc nền giáng sinh -->
			<!--<audio autoplay loop>
				<source src="http://vnjp.us/index_files/logo512.png" type="audio/mpeg">
				Trình duyệt không hỗ trợ html5
			</audio>-->

			<a id="scrollUp" href="#top" title="Lên đầu trang"></a>
		</div>

		<!-- BEGIN: JavaScript Footer -->
		<script src="<?php echo bower_url('jquery/dist/jquery.min.js'); ?>"></script>
		<script src="<?php echo bower_url('bootstrap/dist/js/bootstrap.min.js'); ?>"></script>

		<script src="<?php echo assets_url('js/scripts.js'); ?>"></script>

		<!-- Cuộn lên đầu -->
		<!--<script src="<?php echo bower_url('scrollup/dist/jquery.scrollUp.min.js'); ?>"></script>
		<script>
								$.scrollUp({
									animation: 'fade',
									activeOverlay: '#00ffff',
									scrollImg: {active: true, type: 'background', src: '<?php echo assets_url('images/top.png'); ?>'}
								});
		</script>-->
		<!-- END: JavaScript Footer -->
	</body>
</html>