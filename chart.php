
<?php
include 'koneksi.php';

$label = ["WEEK 1","WEEK 2","WEEK 3","WEEK 4","WEEK 5","WEEK 6","WEEK 7","WEEK 8","WEEK 9","WEEK 10","WEEK 11","WEEK 12","WEEK 13","WEEK 14","WEEK 15","WEEK 16","WEEK 17","WEEK 18","WEEK 19","WEEK 20","WEEK 21","WEEK 22","WEEK 23","WEEK 24","WEEK 25","WEEK 26","WEEK 27","WEEK 28","WEEK 29","WEEK 30","WEEK 31","WEEK 32","WEEK 33","WEEK 34","WEEK 35","WEEK 36","WEEK 37","WEEK 38","WEEK 39","WEEK 40","WEEK 41","WEEK 42","WEEK 43","WEEK 44","WEEK 45","WEEK 46","WEEK 47","WEEK 48","WEEK 49","WEEK 50","WEEK 51","WEEK 52","WEEK 53"];


for($week = 1;$week < 54;$week++)
{
	$query = mysqli_query($con,"SELECT count(*) as numRecords, WEEK(`sample_recieve`) as weekNum FROM analisa WHERE nama='Rifki Zulkarnain'    AND WEEK(sample_recieve)='$week'");
    $row = $query->fetch_array();    
	$jumlah_produk[] = $row['numRecords'];
}

for($week1 = 1;$week1 < 54;$week1++)
{
	$query = mysqli_query($con,"SELECT count(*) as numRecords, WEEK(`sample_recieve`) as weekNum FROM analisa WHERE nama='Dita Hapsoro'   AND WEEK(sample_recieve)='$week1'");
    $row = $query->fetch_array();    
	$jumlah_produk1[] = $row['numRecords'];
}

for($week2 = 1;$week2 < 54;$week2++)
{
	$query = mysqli_query($con,"SELECT count(*) as numRecords, WEEK(`sample_recieve`) as weekNum FROM analisa WHERE nama='Yuki Astika Putrabagia'   AND WEEK(sample_recieve)='$week2'");
    $row = $query->fetch_array();    
	$jumlah_produk2[] = $row['numRecords'];
}
for($week8 = 1;$week8 < 54;$week8++)
{
	$query = mysqli_query($con,"SELECT count(*) as numRecords, WEEK(`sample_recieve`) as weekNum FROM analisa WHERE nama='Budi Supriatna'   AND WEEK(sample_recieve)='$week8'");
    $row = $query->fetch_array();    
	$jumlah_produk7[] = $row['numRecords'];
}



for($week3 = 1;$week3 < 54;$week3++)
{
	$query = mysqli_query($con,"SELECT count(*) as numRecords, WEEK(`sample_recieve`) as weekNum FROM analisa WHERE WEEK(sample_recieve)='$week3'");
    $row = $query->fetch_array();    
	$jumlah_produk3[] = $row['numRecords'];
}



for($week4 = 1;$week4 < 54;$week4++)
{
	$query = mysqli_query($con,"SELECT count(*) as numRecords, WEEK(`sample_recieve`) as weekNum FROM analisa WHERE nama='Rifki Zulkarnain' AND type='SMR'  AND WEEK(sample_recieve)='$week4'");
    $row = $query->fetch_array();    
	$jumlah_produk4[] = $row['numRecords'];
}

for($week5 = 1;$week5 < 54;$week5++)
{
	$query = mysqli_query($con,"SELECT count(*) as numRecords, WEEK(`sample_recieve`) as weekNum FROM analisa WHERE nama='Dita Hapsoro' AND type='SMR' AND WEEK(sample_recieve)='$week5'");
    $row = $query->fetch_array();    
	$jumlah_produk5[] = $row['numRecords'];
}

for($week6 = 1;$week6 < 54;$week6++)
{
	$query = mysqli_query($con,"SELECT count(*) as numRecords, WEEK(`sample_recieve`) as weekNum FROM analisa WHERE nama='Yuki Astika Putrabagia' AND type='SMR' AND WEEK(sample_recieve)='$week6'");
    $row = $query->fetch_array();    
	$jumlah_produk6[] = $row['numRecords'];
}

for($week7 = 1;$week7 < 54;$week7++)
{
	$query = mysqli_query($con,"SELECT count(*) as numRecords, WEEK(`sample_recieve`) as weekNum FROM analisa WHERE nama='Budi Supriatna' AND type='SMR' AND WEEK(sample_recieve)='$week7'");
    $row = $query->fetch_array();    
	$jumlah_produk8[] = $row['numRecords'];
}






for($hehe1 = 1;$hehe1 < 54;$hehe1++)
{
	$query = mysqli_query($con,"SELECT count(*) as numRecords, WEEK(`sample_recieve`) as weekNum FROM analisa WHERE nama='Rifki Zulkarnain' AND type='SIMPLE'  AND WEEK(sample_recieve)='$hehe1'");
    $row = $query->fetch_array();    
	$jumlah_produk10[] = $row['numRecords'];
}

for($hehe2 = 1;$hehe2 < 54;$hehe2++)
{
	$query = mysqli_query($con,"SELECT count(*) as numRecords, WEEK(`sample_recieve`) as weekNum FROM analisa WHERE nama='Dita Hapsoro' AND type='SIMPLE' AND WEEK(sample_recieve)='$hehe2'");
    $row = $query->fetch_array();    
	$jumlah_produk11[] = $row['numRecords'];
}

for($hehe3 = 1;$hehe3 < 54;$hehe3++)
{
	$query = mysqli_query($con,"SELECT count(*) as numRecords, WEEK(`sample_recieve`) as weekNum FROM analisa WHERE nama='Yuki Astika Putrabagia' AND type='SIMPLE' AND WEEK(sample_recieve)='$hehe3'");
    $row = $query->fetch_array();    
	$jumlah_produk12[] = $row['numRecords'];
}

for($hehe4 = 1;$hehe4 < 54;$hehe4++)
{
	$query = mysqli_query($con,"SELECT count(*) as numRecords, WEEK(`sample_recieve`) as weekNum FROM analisa WHERE nama='Budi Supriatna' AND type='SIMPLE' AND WEEK(sample_recieve)='$hehe4'");
    $row = $query->fetch_array();    
	$jumlah_produk13[] = $row['numRecords'];
}

?>
<?php 
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan con database
include 'koneksi.php';
?>




<!DOCTYPE html>
<html lang="en">

<head>
<link rel="icon" type="image/png" href="img/logo.ico"/>
<script type="text/javascript" src="Chart.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>analisa TEST</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../tkdn/css/bootstrap.min.css">
  <script src="../tkdn/js/jquery.min.js"></script>
  <script src="../tkdn/js/bootstrap.min.js"></script>
  <meta property="og:image" content="http://107.102.39.55/tkdn/images/chart.png" />
        <meta property="og:title" content="WEEKLY CHART analisa TASK" />
</head>
<style>

	table{
	border-collapse: collapse;
    border-radius: 7px;
    background-color:white;
    text-align: center;
    font-size: 12px;
    }
   th {
    text-align: center;
   }
a {
    text-transform: uppercase;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
  border-right:0px solid #ccc;
}

li:last-child {
  border-right: none;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #4CAF50;
}
</style>
<body style="background-color:#343a40;" >
<ul>
  <li><a class="active" href="../tkdn/user_admin.php">KEMBALI</a></li>
  <li style="float:right"><a href="../tkdn/export_excel.php">EXPORT KE EXCEL</a></li>
</ul>
</div>
</div>           
</div>    
<div class="parent-grid"> 
  <div class="parent-table">
  	<div class="child-table grid1">
		<div style="width: 99%;">
		<canvas id="myChart"></canvas>
	</div>	
	</div>
  </div> 
  </div>
</body>
<script>
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: <?php echo json_encode($label); ?>,
        datasets: [{
            label: 'TOTAL/WEEK',
            
            data: <?php echo json_encode($jumlah_produk3); ?>,
            type: 'line',
            backgroundColor: 'ranalisa(162, 218, 77, 0)',  
            borderColor:'ranalisa(255, 255, 255, 1)',
            borderWidth:1,
            pointRadius:4,
            pointBorderWidth:2,
            pointStyle:'line'
        },{
            
            label: 'Rifki Zulkarnain NORMAL',
            data: <?php echo json_encode($jumlah_produk); ?>,
            backgroundColor: 'ranalisa(33, 108, 155, 1)',
           
            stack:'stack 0'
            
        },{
          label: 'Rifki Zulkarnain SMR',
            data: <?php echo json_encode($jumlah_produk4); ?>,
            backgroundColor: 'ranalisa(77, 162, 218, 1)',
            stack:'stack 0',
            borderWidth:1,
            borderColor:'ranalisa(255, 255, 255, 1)'
        },{
          label: 'Rifki Zulkarnain SIMPLE',
            data: <?php echo json_encode($jumlah_produk10); ?>,
            backgroundColor: 'ranalisa(255, 255,255, 1)',
            stack:'stack 0',
            borderWidth:0,
            borderColor:'ranalisa(255, 255, 255, 1)'
        },{
            label: 'Dita Hapsoro NORMAL',
            data: <?php echo json_encode($jumlah_produk1); ?>,
            backgroundColor:'ranalisa(249, 0, 49, 1)',
            
            stack:'stack 1'
        },{
          label: 'Dita Hapsoro SMR',
            data: <?php echo json_encode($jumlah_produk5); ?>,
            backgroundColor:'ranalisa(255, 99, 132, 1)',
            stack:'stack 1',
            borderWidth:1,
            borderColor:'ranalisa(255, 255, 255, 1)'
        },{
          label: 'Dita Hapsoro SIMPLE',
            data: <?php echo json_encode($jumlah_produk11); ?>,
            backgroundColor: 'ranalisa(255, 255,255, 1)',
            stack:'stack 0',
            borderWidth:0,
            borderColor:'ranalisa(255, 255, 255, 1)'
        },{
            label: 'Yuki Astika Putrabagia NORMAL',
            data: <?php echo json_encode($jumlah_produk2); ?>,
            backgroundColor: 'ranalisa(108, 155, 33, 1)',  
            
            stack:'stack 2'





          },{
            
           
       
            label: 'Yuki Astika Putrabagia SMR',
            data: <?php echo json_encode($jumlah_produk6); ?>,
            backgroundColor: 'ranalisa(162, 218, 77, 1)', 
            stack:'stack 2',
            borderWidth:1,
            borderColor:'ranalisa(255, 255, 255, 1)'
          },{
            label: 'Yuki Astika Putrabagia SIMPLE',
            data: <?php echo json_encode($jumlah_produk12); ?>,
            backgroundColor: 'ranalisa(255, 255,255, 1)',
            stack:'stack 0',
            borderWidth:0,
            borderColor:'ranalisa(255, 255, 255, 1)'
        },{

            label: 'Budi Supriatna NORMAL',
            data: <?php echo json_encode($jumlah_produk7); ?>,
            backgroundColor: 'ranalisa(241, 155, 33, 1)',              
            stack:'stack 3'
          },{            
            label: 'Budi Supriatna SMR',
            data: <?php echo json_encode($jumlah_produk8); ?>,
            backgroundColor: 'ranalisa(247, 234, 23, 1)', 
            stack:'stack 3',
            borderWidth:1,
            borderColor:'ranalisa(255, 255, 255, 1)'  
          },{  
            label: 'Budi Supriatna SIMPLE',
            data: <?php echo json_encode($jumlah_produk13); ?>,
            backgroundColor: 'ranalisa(255, 255,255, 1)',
            stack:'stack 0',
            borderWidth:0,
            borderColor:'ranalisa(255, 255, 255, 1)'
        }]
        
    },
    options: {

        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
</html>