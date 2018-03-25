<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>GSTRATES | 2018</title>
    <style type="text/css">
      input::-webkit-input-placeholder {
      color: #000000 !important;
      }
      input:-moz-placeholder { /* Firefox 18- */
      color: #000000 !important; 
      }
      input::-moz-placeholder {  /* Firefox 19+ */
      color: #000000 !important; 
      }
      input:-ms-input-placeholder { 
      color: #000000 !important; 
      }
    </style>
    <!-- BOOTSTRAP CORE CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap-grid.css" rel="stylesheet">
    <link href="bootstrap/css/floating-labels.css" rel="stylesheet">
    <!-- SCRIPT FILE FOR ALERTS -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <style type="text/css">
      .rwo-margin{
        display: block;
        word-break: break-all;
        overflow-wrap: break-word;
      }
    </style>
 </head>
<body>

<?php 
session_start();
include 'header.php'; ?>

<div class="container">
<div class="row" style="padding-top: 40%;">
  <div id="carouselExampleIndicators" class="carousel slide justified" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active" ></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1" ></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2" ></li>
  </ol>
  <div class="carousel-inner" >
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/slide1.jpg" alt="First slide" style="height: 400px;">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/slide2.jpg" alt="Second slide" style="height: 400px;">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/slide3.png" alt="Third slide" style="height: 400px;">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

</div>

  <br/><br/><br/>


<div class="row">
  <div class="col-md-12">
    

  <p> GST is a single tax on the supply of goods and services, right from the manufacturer to the consumer. Credits of input taxes paid at each stage will be available in the subsequent stage of value addition, which makes GST essentially a tax only on value addition at each stage. The final consumer will thus bear only the GST charged by the last dealer in the supply chain, with set-off benefits at all the previous stages.</p></br>
  <p><b>The benefits of GST can be summarized as under:</b>
  </br>
  <b>For business and industry</b>
  <li> Easy compliance: A robust and comprehensive IT system would be the foundation of the GST regime in India. Therefore, all tax payer services such as registrations, returns, payments, etc. would be available to the taxpayers online, which would make compliance easy and transparent.</li>

  <li> Uniformity of tax rates and structures: GST will ensure that indirect tax rates and structures are common across the country, thereby increasing certainty and ease of doing business. In other words, GST would make doing business in the country tax neutral, irrespective of the choice of place of doing business.
  </li>
 
  <li> Removal of cascading: A system of seamless tax-credits throughout the value-chain, and across boundaries of States, would ensure that there is minimal cascading of taxes. This would reduce hidden costs of doing business.
  </li>

  <li>Improved competitiveness: Reduction in transaction costs of doing business would eventually lead to an improved competitiveness for the trade and industry.
  </li>

  <li>Gain to manufacturers and exporters: The subsuming of major Central and State taxes in GST, complete and comprehensive set-off of input goods and services and phasing out of Central Sales Tax (CST) would reduce the cost of locally manufactured goods and services. This will increase the competitiveness of Indian goods and services in the international market and give boost to Indian exports. The uniformity in tax rates and procedures across the country will also go a long way in reducing the compliance cost.</li>

</div>

</div>
</div>

<script src="bootstrap/js/jquery-3.2.1.slim.min.js"></script>
<script>window.jQuery || document.write('<script src="bootstrap/js/jquery-slim.min.js"><\/script>')</script>
<script src="bootstrap/js/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript">
  $('.carousel').carousel({
  interval: 2500
})
</script>
</body>
</html>
