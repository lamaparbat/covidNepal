<!DOCTYPE html>
<html>
<head>
	<title>CovidNepal</title>
  <link rel="icon" type="text/css" href="https://image.flaticon.com/icons/png/512/3353/3353700.png">
	<!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand ml-5" href="#">CovidNepal</a>
  <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mt-1 ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">HOME<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">ABOUT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">SERVICES</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">CONTACT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">HELP</a>
      </li>
    </ul>
  </div>
</nav><br>

<!-- preloader -->
<div id="preloader"></div>

<!-- main covid information -->
<div class="container main">
  <div class="row">
    <!-- daily update nav -->
    <div class="col-sm-3 p-4" id="update">
      <h6 class="list-group-item pt-2 pl-2 pr-3 mb-3" id="title"><b>Daily Update</b><h6>
      <h6 class="list-group-item pt-2 pl-2 pr-3 mb-2" id="province_btn">Province Cases<h6>
      <h6 class="list-group-item pt-2 pl-2 pr-3 mb-2" id="district_btn">District Cases<h6>
      <h6 class="list-group-item pt-2 pl-2 pr-3 mb-2" id="gender_btn">Gender Cases<h6>
      <h6 class="list-group-item pt-2 pl-2 pr-3 mb-2" id="deaths_btn">Deaths<h6>
    </div>
    <!-- /end of daily update nav  -->
    <!-- data (Main page) -->
    <div class="col-sm-9" id="data">
      <h2 class="mt-4"><b>Covid-19 Summary Of Nepal 2021</b></h2>
      <p class="text-dark">The official Nepal government website for data and insights on coronavirus (COVID-19).</p>
      <!-- vaccination -->
      <div class="row pt-3" id="vaccination">
        <div class="col-sm-12">
          <div class="row">
            <div class="col-sm-7 pt-4">
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="https://english.onlinekhabar.com/wp-content/uploads/2021/04/Covid_Bheri-Hospita-3.jpg" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="https://img.i-scmp.com/cdn-cgi/image/fit=contain,width=1098,format=auto/sites/default/files/styles/1200x800/public/d8/images/methode/2021/05/20/353e5ef2-b8a4-11eb-9461-e80e43f535ad_image_hires_112750.jpg?itok=nO_thZAP&v=1621481280" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="https://i.natgeofe.com/n/c657b123-3c66-473c-a2e3-6558cdc38091/Trav%20Nepal%20Covid%20AP_21130407190475.jpg" alt="Third slide">
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
            <!-- col-md-5 graph -->
            <div class="col-sm-5 pt-5">
              <div class="mt-5" id="piechart_3d"></div>
            </div>

          </div>
        </div>
      </div><br>
      <!-- TESTED CASE -->
      <div class="row bg-white" id="cases">
        <div class="col-sm-4 bg-light p-4 border border-white">
          <h5 class="text-secondary">Cases</h5>
          <h4><b>Positive & Negative Cases</b></h4>
          <p class="text-secondary mb-4">Latest data provided on 23 June 2021</p>
          <div class="d-flex">
            <div class="mr-5">
              <h5>Total +ve Case</h5>
              <p id="postive_case"></p>
            </div>
            <div>
              <h5>Total -ve Case</h5>
              <p id="negative_case"></p>
            </div>
          </div>
          <br>
        </div>
        <!-- COVID DEATH -->
        <div class="col-sm-4 bg-light p-4 border border-white">
          <h5 class="text-secondary">Deaths</h5>
          <h4><b>COVID-19 Patient Deaths</b></h4>
          <p class="text-secondary mb-4">Latest data provided on 23 June 2021</p>
          <h5>Total</h5>
          <p id="deaths"></p>
        </div>
        <!-- COVID isolation and recovered -->
        <div class="col-sm-4 bg-light p-4 border border-white">
          <h5 class="text-secondary">Quarantine</h5>
          <h4><b>Isolation & Recovered</b></h4>
          <p class="text-secondary mb-4">Latest data provided on 23 June 2021</p>
          <div class="d-flex">
            <div class="mr-5">
              <h5>Total Isolation</h5>
              <p id="isolation">
            </div>
            <div>
              <h5>Total Recovered</h5>
              <p id="recovered"></p>
            </div>
          </div>
        </div>
    </div>
  </div>
  <!-- /end of data -> col-md-9 -->

  <!-- province data page -> col-md-9 -->
    <div class="col-sm-9" id="province">
      <h2 class="mt-4"><b>Province Covid-19 Data Records</b></h2>
      <!-- curve chart map -->
      <div class="row">
        <div class="col-md-12">
          <div id="curve_chart"></div>
        </div>
      </div>
      <!-- /end of curve chart map -->
    </div>
  <!-- /end ofprovince data page -->

  <!-- province data page -> col-md-9 -->
    <div class="col-sm-9" id="district">
      <h2 class="mt-4"><b>District Covid-19 Data Records</b></h2>
      <!-- curve chart map -->
      <div class="row">
        <div class="col-md-12">
          <div id="curve_chart"></div>
        </div>
      </div>
      <!-- /end of curve chart map -->
    </div>
  <!-- /end ofprovince data page -->

  <!-- province data page -> col-md-9 -->
    <div class="col-sm-9" id="gender">
      <h2 class="mt-4"><b>Gender Covid-19 Data Records</b></h2>
      <!-- curve chart map -->
      <div class="row">
        <div class="col-md-12">
          <div id="curve_chart"></div>
        </div>
      </div>
      <!-- /end of curve chart map -->
    </div>
  <!-- /end ofprovince data page -->

</div>
</div><br>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- graph + geochart -->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<!-- covid API -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="script.js"></script>
<script src="chart.js"></script>
<script src="provinceChart.js"></script>
</body>
</html>