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
});

$(".menu .item").tab();
$('#orderProgress').progress();