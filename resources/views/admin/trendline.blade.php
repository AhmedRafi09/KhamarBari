<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="topup.js"></script>



<script type="text/javascript">
	var chartData = {
    node:"graph",
    dataset: [122, 65, 80, 84, 33, 55, 95, 15, 268, 47, 72, 69],
    labels: ["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],
    pathcolor:"#288ed4",
    fillcolor:"#8e8e8e",
    xPadding: 0,
    yPadding: 0,
    ybreakperiod: 50
};

drawlineChart(chartData);

</script>
<canvas id="graph"></canvas>
