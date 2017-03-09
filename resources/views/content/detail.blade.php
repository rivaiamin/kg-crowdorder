@extends('layout.site')

@section('content')
<div id="detailCampaign" class="ui container internally celled grid">
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
					<img src="http://files.katalogram.dev/book/cover/1.jpg" alt="" class="ui fluid image">
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
							<img src="http://files.katalogram.dev/book/file/57c62e0fa9d7a.jpg" alt="">
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
@endsection