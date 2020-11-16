
<div id="piechart"></div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
	// Load google charts
	google.charts.load('current', {'packages':['corechart']});
	google.charts.setOnLoadCallback(drawChart);

	//


	// Draw the chart and set the chart values
	function drawChart() {
		var data = google.visualization.arrayToDataTable([
			['Task', 'Hours per Day'],
			['Honey', {{ $honey }}],
			['Pickle', {{ $pickle }}],
			['Grocery', {{ $grocery }}],
			['DryFish', {{ $dry_fish }}]
			]);

	  	// Optional; add a title and set the width and height of the chart
	  	var options =
	  	{
	  		'title':'পণ্য ক্যাটাগরি %',
	  		'width':500,
	  		'height':350,
	  		'colors': ['#FFC300', '#DAF7A6', '#1BB7F1', '#C70039'],
	  		is3D: true,
	  		legend: { position: 'bottom' }
	  	};

	  	// Display the chart inside the <div> element with id="piechart"
	  	var chart = new google.visualization.PieChart(document.getElementById('piechart'));
	  	chart.draw(data, options);
	  }
</script>
