<!DOCTYPE html>
<html lang="en" ng-app="kgApp">
<head>
	@include('layout.meta')
</head>
<body ng-controller="kgLandingCtrl">
	<div id="fb-root"></div>

	<!-- Following Menu -->
	<div class="ui large top secondary pointing fixed hidden menu">
	  @include('layout.menu')
	</div>

	<!-- modal -->


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
  	
	  <div class="ui inverted vertical center aligned segment">
	    @include('layout.menu')
	    
	    @yield('header')
	  </div>

	  @yield('content')
	  
	  @include('layout.footer')
	</div>
</body>
</html>
