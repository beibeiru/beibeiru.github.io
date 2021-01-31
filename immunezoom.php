<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
<head> 
    <title>ImmuneZoom</title>
	
    <link type="text/css" rel="stylesheet" href="./css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="./css/style.css">
	
    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
</head>
	
<body data-spy="scroll" data-target="#header" style="">
	
<div id="header" class="navbar-fixed-top navbar navbar-default navbar-inverse" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
        <a href="https://immunezoom.github.io/" class="navbar-brand">Immune Zoom</a>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li class="">Immunology Online Seminar Series</li>
      </div>
    </div>
</div>

<div class="container">
<section>
<!--<img src="./me.jpg" id="imgme" class="img-rounded">-->
<div>
<h3>Immunology Online Seminar Series</h3>
    <p>
    Thursday 9-10:30 am or 9-10:30pm (Beijing Time)
    </p>
</div>
</section>

<section>
<h3>Speaker lineup</h3>
<div>
    <h4>2020</h4>

    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Date</th>
          <th>Time</th>
          <th>Speaker</th>
          <th>Institute</th>
          <th>Title</th>
          <th>Hosted by</th>
        </tr>
      </thead>
      <tbody>
	
	 <?php
         $row = 1;
         if (($handle = fopen("immunezoom2020.csv", "r")) !== FALSE) {
             while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                 $num = count($data);
                 echo "<p> $num fields in line $row: <br /></p>\n";
                 $row++;
                 for ($c=0; $c < $num; $c++) {
                     echo $data[$c] . "<br />\n";
                 }
             }
             fclose($handle);
         }
         ?>
	      
        <tr>
          <td>2014 - 2018</td>
          <td>Doctor of Philosophy (PhD)</td>
          <td>2014 - 2018</td>
          <td>Doctor of Philosophy (PhD)</td>
          <td><a href="https://www.hku.hk/" target="_blank">The University of Hong Kong (HKU)</a></td>
          <td><a href="https://www.hku.hk/" target="_blank">The University of Hong Kong (HKU)</a></td>
        </tr>
       
      </tbody>
    </table>

</div>
</section>

	

<br/>
<br/>
<br/>
</div>

</body>
</html>
