<script type="text/javascript">
	google.charts.load("current", {packages:["corechart"]});
	google.charts.setOnLoadCallback(drawChart);
	function drawChart() {
		var data = google.visualization.arrayToDataTable([
			["Element", "Density", { role: "style" } ],
			["<_500", {{ $price_less_500 }}, "#1BB7F1"],
			[">_500_&_<_1000", {{ $price_500_1000 }}, "#FFC300"],
			["<_1000_&_<_1500", {{ $price_1000_1500 }}, "#DAF7A6"],
			[">_1500", {{ $price_greater_1500 }}, "color: #C70039"]
			]);

		var view = new google.visualization.DataView(data);
		view.setColumns([0, 1,
			{ calc: "stringify",
			sourceColumn: 1,
			type: "string",
			role: "annotation" },
			2]);

		var options = {
			title: "পণ্যের মূল্য রেঞ্জ",
			width: 600,
			height: 350,
			bar: {groupWidth: "70%"},
			legend: { position: "bottom" },
		};
		var chart = new google.visualization.BarChart(document.getElementById("barchart_values"));
		chart.draw(view, options);
	}
</script>
<div id="barchart_values" style="width: 400px; height: 350px;"></div>
