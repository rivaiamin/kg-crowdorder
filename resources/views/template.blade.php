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

	<link rel="shortcut icon" href="img/kg_square.png">
	<!--<link href="/public/css/please-wait.css" rel="stylesheet">-->
	<link rel="stylesheet" href="css/kg.min.css">
	<script src="js/lib.min.js"></script>
</head>
<body ng-controller="kgLandingCtrl">
	<div id="fb-root"></div>

	<!-- Following Menu -->
	<div class="ui large top secondary pointing fixed hidden menu">
	  <div class="ui container">
		<a href="" class="item">
			<img src="img/kg_circle.png" alt="">
			<img class="ui image" src="img/katalogram.png" width="100" alt="">
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
					<i class="ion-android-send icon"></i> Kirim</button>
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
			<a class="ui large ok icon button" href="http://line.me/R/msg/text/?http://katalogram.com/landing.html"><img class="ui huge icon" src="/img/icon/line_logo.png" alt=""></a>
	  	</div>
	</div>


	<!-- Sidebar Menu -->
	<div class="ui vertical inverted sidebar menu">
	  <div href="" class="item">
	  		<a href="" class="ui logo icon image">
				<img src="img/kg_white.png" width="50" alt="">
	  		</a>
	  		<a href="" class="ui logo icon image">
				<img src="img/katalogram.png" width="150" alt="">
	  		</a>
		</div>
		<a class="active item">Beranda</a>
		<a class="item">Tentang</a>
		<a class="item">FAQ</a>
		<a class="item">Tim</a>
	</div>


	<!-- Page Contents -->
	<div class="pusher">
	  <div class="ui inverted vertical masthead center aligned segment">
	    <div class="ui container">
		  <div class="ui large secondary inverted pointing menu">
			<a href="" class="item">
				<img src="/img/kg_white.png" alt="">
				<img class="ui image" src="/img/katalogram.png" width="100" alt="">
			</a>
			<a href="" class="toc item"><img src="/img/kg_white.png" alt=""></a>
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


		<div class="ui middle aligned stackable container">
	  	  <div class="row">
	  	  	<h1 class="ui icon inverted header">
	  	  		<img class="icon" src="/img/pics/hero.png" alt="">
	  	  	</h1>
	  	  	<h2 class="ui inverted header">
	  	  		<div class="content">
	  	  			New Innovation in The Publishing Industry
	  	  		</div>
				<div class="sub header">
					Jual dan terbitkan karyamu dengan kekuatan <span class="kg-color-base">kolektif</span> secara <span class="kg-color-base">gratis</span>
				</div>
	  	  	</h2>
	  	  	<div class="ui form">
				<div class="field">
					<div id="callActAnimate" class="shake infinite animated">
						<div id="callActBtn" class="ui huge primary button"><i class="ion-android-send icon"></i> Yuk Gabung! </div>
					</div>
				</div>
				  <div class="field">
			  		<div class="fb-like" data-href="https://www.facebook.com/katalogram" data-layout="button_count" data-action="recommend" data-size="small" data-show-faces="true" data-share="true"></div>
				  </div>
				  <!--<div class="field">
					<a class="ui facebook icon button" ng-click="shareTo('facebook')">
					  <i class="facebook icon"></i>
					</a>
					<a class="ui twitter icon button" ng-click="shareTo('twitter')">
					  <i class="twitter icon"></i>
					</a>
					<a class="ui google plus icon button" ng-click="shareTo('google')">
					  <i class="google plus icon"></i>
					</a>
					<a class="ui green icon button" href="whatsapp://send?text=http://katalogram.com/landing.html">
						<i class="whatsapp icon"></i>
					</a>
					<a class="ui icon button" href="http://line.me/R/msg/text/?http://katalogram.com/landing.html"><img class="ui huge icon" src="public/img/icon/line_logo.png" alt=""></a>
				  </div>-->
	  	  	</div>
	  	  </div>
		</div>
	  </div>

	  <div class="ui vertical segment">
	  	<div class="ui container">
	  		<div class="ui horizontal divider header">Terbaru</div>
	  		<div class="ui five stackable doubling link cards">
			  <div class="card">
			  	<div class="dimmable image">
				  <div class="ui dimmer">
					<div class="content">
					  <div class="center">
						<q>Kisah seorang editor TV Swasta yang mempertanyakan jalan hidupnya</q>
						<h4>
							<a href="">Ockto Baringbing</a>
						</h4>
					  </div>
					</div>
					<div class="content">
					</div>
				  </div>
				  <img src="http://files.katalogram.dev/book/icon/1.jpg">
				</div>
				<div class="content">
				  <div class="ui mini left floated stat image">
					<div id="order"></div>
					<span class="ui basic label"><i class="cart icon"></i> 10</span>
				  </div>
				  <div class="meta">Komik / Drama</div>
				  <h5 class="header">5 Menit Sebelum Tayang</h5>
				</div>
				<div class="ui mini bottom attached three item menu">
				  <a class="item">
					<i class="heart icon"></i>
					10
				  </a>
				  <a class="item">
					<i class="thumbs up icon"></i>
					9
				  </a>
				  <a class="item">
					<i class="thumbs down icon"></i>
					3
				  </a>
				</div>
			  </div>
			  <div class="card">
			  	<div class="dimmable image">
				  <div class="ui dimmer">
					<div class="content">
					  <div class="center">
						<q>Kisah seorang editor TV Swasta yang mempertanyakan jalan hidupnya</q>
						<h4>
							<a href="">Ockto Baringbing</a>
						</h4>
					  </div>
					</div>
					<div class="content">
					</div>
				  </div>
				  <img src="http://files.katalogram.dev/book/icon/3.jpg">
				</div>
				<div class="content">
			  	  <div class="ui mini left floated stat image">
					<div id="order2"></div>
					<span class="ui basic label"><i class="cart icon"></i> 60</span>
				  </div>
				  <div class="meta">Komik / Drama</div>
				  <div class="header">Jamu Sakti</div>
				</div>
				<div class="ui bottom attached three item menu">
				  <a class="item">
					<i class="heart icon"></i>
					10
				  </a>
				  <a class="item">
					<i class="thumbs up icon"></i>
					9
				  </a>
				  <a class="item">
					<i class="thumbs down icon"></i>
					3
				  </a>
				</div>
			  </div>
			  <div class="card">
			  	<div class="dimmable image">
				  <div class="ui dimmer">
					<div class="content">
					  <div class="center">
						<q>Kisah seorang editor TV Swasta yang mempertanyakan jalan hidupnya</q>
						<h4>
							<a href="">Ockto Baringbing</a>
						</h4>
					  </div>
					</div>
					<div class="content">
					</div>
				  </div>
				  <img src="http://files.katalogram.dev/book/icon/4.jpg">
				</div>
				<div class="content">
			  	  <div class="ui mini left floated stat image">
					<div id="order3"></div>
					<span class="ui basic label"><i class="cart icon"></i> 110</span>
				  </div>
				  <div class="meta">Komik / Drama</div>
				  <div class="header">Manungsa</div>
				</div>
				<div class="ui bottom attached three item menu">
				  <a class="item">
					<i class="heart icon"></i>
					10
				  </a>
				  <a class="item">
					<i class="thumbs up icon"></i>
					9
				  </a>
				  <a class="item">
					<i class="thumbs down icon"></i>
					3
				  </a>
				</div>
			  </div>
			  <div class="card">
			  	<div class="dimmable image">
				  <div class="ui dimmer">
					<div class="content">
					  <div class="center">
						<q>Kisah seorang editor TV Swasta yang mempertanyakan jalan hidupnya</q>
						<h4>
							<a href="">Ockto Baringbing</a>
						</h4>
					  </div>
					</div>
					<div class="content">
					</div>
				  </div>
				  <img src="http://files.katalogram.dev/book/icon/6.jpg">
				</div>
				<div class="content">
			  	  <div class="ui mini left floated stat image">
					<div id="order4"></div>
					<span class="ui basic label"><i class="cart icon"></i> 210</span>
				  </div>
				  <div class="meta">Komik / Drama</div>
				  <div class="header">Pavlichenko</div>
				</div>
				<div class="ui bottom attached three item menu">
				  <a class="item">
					<i class="heart icon"></i>
					10
				  </a>
				  <a class="item">
					<i class="thumbs up icon"></i>
					9
				  </a>
				  <a class="item">
					<i class="thumbs down icon"></i>
					3
				  </a>
				</div>
			  </div>
			  <div class="card">
			  	<div class="dimmable image">
				  <div class="ui dimmer">
					<div class="content">
					  <div class="center">
						<q>Kisah seorang editor TV Swasta yang mempertanyakan jalan hidupnya</q>
						<h4>
							<a href="">Ockto Baringbing</a>
						</h4>
					  </div>
					</div>
					<div class="content">
					</div>
				  </div>
				  <img src="http://files.katalogram.dev/book/icon/7.jpg">
				</div>
				<div class="content">
			  	  <div class="ui mini left floated stat image">
					<div id="order5"></div>
					<span class="ui basic label"><i class="cart icon"></i> 510</span>
				  </div>
				  <div class="meta">Komik / Drama</div>
				  <div class="header">Raibarong</div>
				</div>
				<div class="ui bottom attached three item menu">
				  <a class="item">
					<i class="heart icon"></i>
					10
				  </a>
				  <a class="item">
					<i class="thumbs up icon"></i>
					9
				  </a>
				  <a class="item">
					<i class="thumbs down icon"></i>
					3
				  </a>
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
					<img src="/img/kg_white.png" width="40" alt="">
					<img class="ui image" src="/img/katalogram.png" width="200" alt="">
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

			stat.percent = 40;
			stat.backgroundColor = '#DB2828';
			stat.foregroundColor = '#F2711C';
			$("#order2").circliful(stat);

			stat.percent = 60;
			stat.backgroundColor = '#F2711C';
			stat.foregroundColor = '#FBBD08';
			$("#order3").circliful(stat);

			stat.percent = 75;
			stat.backgroundColor = '#FBBD08';
			stat.foregroundColor = '#B5CC18';
			$("#order4").circliful(stat);

			stat.percent = 90;
			stat.backgroundColor = '#B5CC18';
			stat.foregroundColor = '#21BA45';
			$("#order5").circliful(stat);
		})
	</script>
</body>
</html>
