<?php
// $host = "awseb-e-22krcvmr22-stack-awsebrdsdatabase-2hf8vmagdiga.cg8j0mlhknbk.eu-west-1.rds.amazonaws.com";
// $admin = "goldadmin";
// $password = "12345678";
// $port = 3306;


$link = mysqli_connect($host="localhost", $admin="root", $password="", $port=null);
mysqli_select_db($link,"gold_chart");
$test = array();
$count = 0;
$res = mysqli_query($link,"select * from gold_graph");
while ($row = mysqli_fetch_array($res)) {
    $test[$count]["label"] = $row["Label"];
    $test[$count]["y"] = $row["Amount"];
    $count = $count+1;
}

?>
<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function() {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2",
	title:{
		text: "Gold Reserves"
	},
	axisY: {
		title: "Gold Reserves (in tonnes)"
	},
	data: [{
		type: "column",
		yValueFormatString: "#,##0.## tonnes",
		dataPoints: <?php echo json_encode($test, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();

}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
<button onClick="window.location.reload();">Refresh Page</button>
<a href="database.php">
<button>Go to Database</button>
</a>
</body>
</html>   