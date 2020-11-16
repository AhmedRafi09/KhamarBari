<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
	google.charts.load('current', {'packages':['corechart']});
	google.charts.setOnLoadCallback(drawChart);

	function drawChart() {

		var data = google.visualization.arrayToDataTable([
			['Task', 'Hours per Day'],
			['<_500', {{ $price_less_500 }}],
			['>_500_&_<_1000', {{ $price_500_1000 }}],
			['<_1000_&_<_1500', {{ $price_1000_1500 }}],
			['>_1500', {{ $price_greater_1500 }}]
			]);

		var options = {
			title: 'পণ্যের মূল্য রেঞ্জ %',
			pieHole: 0.5,
			width: 700,
			height: 350,
			legend: { position: 'bottom' },
			'colors': ['#1BB7F1', '#C70039', '#DAF7A6', '#FFC300'],
		};

		var chart = new google.visualization.PieChart(document.getElementById('donut_single'));
		chart.draw(data, options);
	}
</script>
</head>

<div id="donut_single" style="width: 700px; height: 350px;"></div>
