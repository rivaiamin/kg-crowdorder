<!DOCTYPE html>
<html lang="en" ng-app="kgApp">
<head>
	<meta charset="UTF-8">
	<title>katalogram.com - New Innovation in The Publishing Industry</title>
	<meta name="author" content="KarsaKalana">
	<meta name="description" content="New Innovation in The Publishing Industry">
	<meta name="keyword" content="industri kreatif, penerbitan, percetakan, jual, beli, buku, komik, novel, novelis, penulis, author, pembaca, crowdorder, ">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

	<meta property="og:image" content="http://katalogram.com/public/img/pics/share.jpg">
	<meta property="og:url" content="http://katalogram.com">
	<meta property="og:title" content="New Innovation in The Publishing Industry">
	<meta property="og:type" content="website">
	<meta property="og:description" content="Platform Crowdorder yang berfungsi membantu author dalam menerbitkan karyanya dengan kekuatan kolektif para pembaca">
	<meta property="fb:app_id" content="1496399374007633">
	<meta name="google-signin-client_id" content="13356134084-ij596q95of0e79k0qa592btnpo8uvang.apps.googleusercontent.com">
	<!--<base href="/index.html">-->

	<link rel="shortcut icon" href="/public/img/kg_square.png">
	<!--<link href="/public/css/please-wait.css" rel="stylesheet">-->
	<link rel="stylesheet" href="/bower_components/semantic/dist/semantic.min.css">
	<link rel="stylesheet" href="/bower_components/circliful/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" href="/bower_components/circliful/css/jquery.circliful.css">
	<link rel="stylesheet" href="/public/css/kg.landing.min.css">
	<script src="/bower_components/jquery/dist/jquery.min.js"></script>
	<script src="/bower_components/semantic/dist/semantic.min.js"></script>
	<script src="/bower_components/circliful/js/jquery.circliful.min.js"></script>
	<style>
		svg .icon { font-family: Icons; }
		.ui.mini.stat.image { width: 40px; }
		.ui.mini.stat.image .ui.label { display: inline-flex; margin: 0 auto; padding: 0.3em; font-weight: 700; }
		.ui.image svg.circliful { width: 200%; margin: -20px; max-width: 200%; }
		.card .header { width: 105% }
		.card .menu { font-size: 0.8em; }
		.card .ui.menu .item { color: #888 }

		#orderProgress { margin: 1em 0 0; }
		#detailCampaign.ui.celled.grid>.row>.column { padding: 0; }
	</style>
</head>
<body ng-controller="kgLandingCtrl">
	<div id="fb-root"></div>

	<!-- Following Menu -->
	<div class="ui large top secondary pointing fixed hidden menu">
	  <div class="ui container">
		<a href="" class="item">
			<img src="public/img/kg_circle.png" alt="">
			<img class="ui image" src="public/img/katalogram_bk.png" width="100" alt="">
		</a>
		<div class="right item">
			<a class="toc item">
				<i class="sidebar icon"></i>
			</a>
			<a class="active item">Home</a>
			<a class="item">Work</a>
			<a class="item">Company</a>
			<a class="item">Careers</a>
		</div>
	  </div>
	</div>

	<!-- modal -->
	<div id="callAct" class="ui basic small modal">
	  <div class="center aligned header">Subscribe Untuk Informasi Lebih Lanjut</div>
	  <div class="content">
		<form name="subscribeForm" class="ui inverted form uk-text-center" ng-submit="subscribe(email)" novalidate>
			<div class="inline fields">
				<div class="twelve wide field">
					<div class="ui left icon input">
						<i class="mail icon"></i>
						<input type="email" name="email" ng-model="email" placeholder="Masukkan Email" required>
					</div>
				</div>
				<div class="four wide field">
					<button ng-disabled="!subscribeForm.$valid" ng-class="{'disabled loading':isAction}" type="submit" class="primary fluid ui button">
					<i class="send icon"></i> Kirim</button>
				</div>
			</div>
			  <div class="field">
				<div class="ui inverted horizontal divider">
					atau
				</div>
			  </div>

			 <div class="field">
				<a class="ui fluid facebook button" ng-click="authenticate('facebook')"><i class="facebook icon"></i> Subscribe</a>
			</div>
			 <div class="field">
				<a class="ui fluid google plus button" ng-click="authenticate('google')"><i class="google icon"></i> Subscribe</a>
			</div>
		</form>
	  </div>
	</div>

	<div id="shareAct" class="ui basic small modal">
	  <h1 class="ui icon center aligned header"><i class="thumbs up icon"></i> Terima Kasih atas Dukungannya</h1>
	  <div class="ui center aligned inverted content text container">
	  	<p>Yuk sebarkan juga ke kerabat kamu! </br>supaya mereka juga tahu kabar keren ini dan ikut mendukung!</p>
	  	<h5 class="ui inverted horizontal divider header">dengan</h5>
	  </div>
	  	<div class="ui center aligned action container">
			<a class="ui large ok facebook icon button" ng-click="shareTo('facebook')">
			  <i class="facebook icon"></i>
			</a>
			<a class="ui large ok twitter icon button" ng-click="shareTo('twitter')">
			  <i class="twitter icon"></i>
			</a>
			<a class="ui large ok google plus icon button" ng-click="shareTo('google')">
			  <i class="google plus icon"></i>
			</a>
			<a class="ui large ok green icon button" href="whatsapp://send?text=http://katalogram.com/landing.html">
				<i class="whatsapp icon"></i>
			</a>
			<a class="ui large ok icon button" href="http://line.me/R/msg/text/?http://katalogram.com/landing.html"><img class="ui huge icon" src="/public/img/icon/line_logo.png" alt=""></a>
	  	</div>
	</div>


	<!-- Sidebar Menu -->
	<div class="ui vertical inverted sidebar menu">
	  <div href="" class="item">
	  		<a href="" class="ui logo icon image">
				<img src="public/img/kg_white.png" width="50" alt="">
	  		</a>
	  		<a href="" class="ui logo icon image">
				<img src="public/img/katalogram.png" width="150" alt="">
	  		</a>
		</div>
		<a class="active item">Beranda</a>
		<a class="item">Tentang</a>
		<a class="item">FAQ</a>
		<a class="item">Tim</a>
	</div>


	<!-- Page Contents -->
	<div class="pusher">
	  <div class="ui inverted vertical center aligned segment">
	    <div class="ui container">
		  <div class="ui large secondary inverted pointing menu">
			<a href="" class="item">
				<img src="/public/img/kg_white.png" alt="">
				<img class="ui image" src="/public/img/katalogram.png" width="100" alt="">
			</a>
			<a href="" class="toc item"><img src="/public/img/kg_white.png" alt=""></a>
			<div class="right item">
				<a class="toc item">
					<i class="sidebar icon"></i>
				</a>
				<a class="active item">Beranda</a>
				<a class="item" href="">Tentang</a>
				<a class="item" href="">FAQ</a>
				<a class="item" href="">Tim</a>
			</div>
		  </div>
		</div>
	  </div>

	  <div id="detailCampaign" class="ui internally celled grid">
	  	<div class="row">
	  		<div class="thirteen wide column">
	  			<div class="row">
	  				<div class="ui fluid dimmable image dimmed" style="margin-bottom:-15px;">
						<div class="ui dimmer transition visible active" >
							<div class="content">
								<div class="center">
									<h1 class="ui inverted header">
										<div class="content">
											5 Menit Sebelum Tayang
										</div>
										<q class="sub header">
											Jual dan terbitkan karyamu dengan kekuatan <span class="kg-color-base">kolektif</span> secara <span class="kg-color-base">gratis</span>
										</q>
									</h1>
									<h4>

										<a class="ui inverted header" href="">@okto &amp; @matto </a>
									</h4>
									<div>
										  <a class="ui circular facebook icon button" ng-click="shareTo('facebook')">
										    <i class="facebook icon"></i>
										  </a>
										  <a class="ui circular twitter icon button" ng-click="shareTo('twitter')">
										    <i class="twitter icon"></i>
										  </a>
										  <a class="ui circular instagram icon button" ng-click="shareTo('google')">
										    <i class="instagram icon"></i>
										  </a>
									</div>
								</div>
							</div>
						</div>
						<img src="/storage/files/book/cover/1.jpg" alt="" class="ui fluid image">
					</div>
	  			</div>

				<div class="ui red small progress" data-percent="20" id="orderProgress">
					<div class="bar"><div class="progress"></div></div>
				</div>
				<div class="ui five item attached pointing menu" style="z-index:1001">
				  <a class="active item" data-tab="first">
					<i class="book icon"></i>
					Story
				  </a>
				  <a class="item" data-tab="second">
					<i class="cart icon"></i>
					Order
					<span class="ui label">10</span>
				  </a>
				  <a class="item" data-tab="third">
					<i class="flag icon"></i>
					Status
					<span class="ui label">Edit</span>
				  </a>
				  <a class="item">
					<i class="heart icon"></i>
					Favorite
					<span class="ui label">20</span>
				  </a>
				  <a class="item">
					<i class="comments icon"></i>
					Tanggapan
					<span class="ui label">10</span>
				  </a>
				</div>
				<div class="ui attached active tab segment" data-tab="first">
				  <div class="ui text container">
				  	<h3 class="ui horizontal divider header">Tentang</h3>
				  	<q>5 Menit Sebelum Tayang mengisahkan lika-liku kehidupan seorang editor stasiun televisi bernama Budi dengan segala suka dukanya dalam menghadapi dunia di balik layar pertelevisian Indonesia.</q>
				  	<h3 class="ui horizontal divider header">Gambar</h3>

				  	<div class="ui items">
				  		<div class="ui item">
				  			<div class="ui small image">
				  				<img src="/storage/files/book/file/57c62e0fa9d7a.jpg" alt="">
				  			</div>
				  			<div class="content">
				  				<a href="" class="header">Description</a>
				  				<div class="description">
				  					<p>Cute dogs come in a variety of shapes and sizes. Some cute dogs are cute for their adorable faces, others for their tiny stature, and even others for their massive size.</p>
        							<p>Many people also have their own barometers for what makes a cute dog.</p>
				  				</div>
				  			</div>
				  		</div>
				  	</div>
				  	<h3 class="ui horizontal divider header">Embed</h3>
				  	<div class="ui center aligned container">
				  		<iframe src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fveri.irawan.902%2Fvideos%2F1487311657953043%2F&show_text=0&width=400" width="400" height="400" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true"></iframe>
				  	</div>
				  </div>
				</div>
				<div class="ui attached tab segment" data-tab="second">
				  Second
				</div>
				<div class="ui attached tab segment" data-tab="third">
				  Third
				</div>
			</div>
			<div class="three wide column">
				<div class="ui attached center aligned segment">
				  <div id="order"></div>
				  <div class="ui center aligned horizontal statistic">
					  <div class="value">
						<i class="cart icon"></i> 20
					  </div>
					  <div class="label">
						 / 50 Order
					  </div>
				  </div>
				</div>
				<div class="ui segments">
				  <div class="ui attached segment">
					<h1 class="ui red header">
						<div class="content">Level 1</div>
						<div class="sub header"><i class="tag icon"></i> 35.000,- IDR</div>
					</h1>
					<div class="ui list">
					  <div class="item">
						<i class="check icon"></i>
						<div class="content">
						  1 Buku Cetak
						</div>
					  </div>
					</div>
					<button class="ui fluid red button"> <i class="shop icon"></i> Order</button>
				  </div>
				  <div class="ui orange segment">
					<h1 class="ui orange header">
						<div class="content">Level 2</div>
						<div class="sub header"><i class="tag icon"></i> 40.000,- IDR</div>
					</h1>
					<div class="ui list">
					  <div class="item">
						<i class="check icon"></i>
						<div class="content">
						  1 Buku Cetak
						</div>
					  </div>
					  <div class="item">
						<i class="check icon"></i>
						<div class="content">
						  1 Sticker
						</div>
					  </div>
					</div>
					<button class="ui fluid orange button"> <i class="shop icon"></i> Order</button>
				  </div>
				  <div class="ui yellow segment">
					<h1 class="ui yellow header">
						<div class="content">Level 3</div>
						<div class="sub header"><i class="tag icon"></i> 50.000,- IDR</div>
					</h1>
					<div class="ui list">
					  <div class="item">
						<i class="check icon"></i>
						<div class="content">
						  1 Buku Cetak
						</div>
					  </div>
					  <div class="item">
						<i class="check icon"></i>
						<div class="content">
						  1 Poster
						</div>
					  </div>
					  <div class="item">
						<i class="check icon"></i>
						<div class="content">
						  1 Pin
						</div>
					  </div>
					</div>
					<button class="ui fluid yellow button"> <i class="shop icon"></i> Order</button>
				  </div>
				  <div class="ui olive segment">
					<h1 class="ui olive header">
						<div class="content">Level 4</div>
						<div class="sub header"><i class="tag icon"></i> 70.000,- IDR</div>
					</h1>
					<div class="ui list">
					  <div class="item">
						<i class="check icon"></i>
						<div class="content">
						  1 Buku Cetak
						</div>
					  </div>
					  <div class="item">
						<i class="check icon"></i>
						<div class="content">
						  1 Gantungan Kunci
						</div>
					  </div>
					  <div class="item">
						<i class="check icon"></i>
						<div class="content">
						  1 Sticker Set
						</div>
					  </div>
					</div>
					<button class="ui fluid olive button"> <i class="shop icon"></i> Order</button>
				  </div>
				  <div class="ui green segment">
					<h1 class="ui green header">
						<div class="content">Level 5</div>
						<div class="sub header"><i class="tag icon"></i> 100.000,- IDR</div>
					</h1>
					<div class="ui list">
					  <div class="item">
						<i class="check icon"></i>
						<div class="content">
						  1 Buku Cetak
						</div>
					  </div>
					  <div class="item">
						<i class="check icon"></i>
						<div class="content">
						  1 Kaos
						</div>
					  </div>
					</div>
					<button class="ui fluid green button"> <i class="shop icon"></i> Order</button>
				  </div>
				</div>
			</div>
	  	</div>

	  </div>

	  <div class="ui inverted vertical footer segment">
		<div class="ui stackable center aligned inverted stackable grid container">
			<div class="three wide column">
			  <h4 class="ui inverted header">Katalogram</h4>
			  <div class="ui inverted link list">
				<a href="#" class="item">Tentang</a>
				<a href="#" class="item">Latar Belakang</a>
				<a href="#" class="item">Tahapan</a>
				<a href="#" class="item">FAQ</a>
			  </div>
			</div>
			<div class="three wide column">
			  <h4 class="ui inverted header">Tentang Kami</h4>
			  <div class="ui inverted link list">
				<a href="#" class="item">Team</a>
				<a href="#" class="item">Kontak</a>
				<a href="#" class="item">Ketentuan</a>
			  </div>
			</div>
			<div class="four wide column">
			  <h4 class="ui inverted header">Ikuti Terus Kami</h4>
			  <div class="ui inverted link list">
				<a href="https://facebook.com/katalogram" class="item"> <i class="inverted facebook icon"></i> <div class="content">https://facebook.com/katalogram</div></a>
				<a href="https://katalogram.tumblr.com" class="item"> <i class="inverted tumblr icon"></i> <div class="content">https://katalogram.tumblr.com</div></a>
				<a href="https://instagram.com/katalogram" class="item"> <i class="inverted instagram icon"></i> <div class="content">https://instagram.com/katalogram</div></a>
				<a href="https://twitter.com/katalogram" class="item"> <i class="inverted twitter icon"></i> <div class="content">https://twitter.com/katalogram</div></a>
			  </div>
			</div>
			<div class="six wide column">
	  		  <div class="ui inverted link list">
				<a href="#" class="item">
					<img src="/public/img/kg_white.png" width="40" alt="">
					<img class="ui image" src="/public/img/katalogram.png" width="200" alt="">
				</a>
			  </div>
			</div>
		</div>
	  </div>
	</div>
	<script>
		$("#moreAbout").click(function() {
			smartsupp('chat:open');
		})
		$('.cards .dimmable.image').dimmer({
		  on: 'hover'
		});
		$(".menu .item").tab();
		$('#orderProgress').progress();
		var stat = {
				animation: 1,
				animationStep: 6,
				foregroundBorderWidth: 8,
				backgroundBorderWidth: 2,
				percentageTextSize:50,
			};
		$( document ).ready(function() {
			stat.percent = 20;
			stat.foregroundColor = '#DB2828';
			$("#order").circliful(stat);
		});

	</script>
</body>
</html>
