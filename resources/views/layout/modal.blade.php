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
