<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Hyperloop - Go Supersonic</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="materialize/js/materialize.js"></script>

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="materialize/css/materialize.css" media="screen,projection" />
  <link rel="stylesheet" href="index.css">
</head>

<body>
  <!-- Load main javascript. -->
  <script type="text/javascript" src="index.js"></script>

  <!-- Navigation -->
  <div id="navigation">
    <nav>
      <div class="nav-wrapper">
        <a href="#"><img src="photos/logo.png" class="logo brand-logo"></a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a id="who-we-are" class="waves-effect waves-light btn" href="#">Who we are</a></li>
          <li><a id="capsules" class="waves-effect waves-light btn" href="#">Capsules</a></li>
          <li><a id="routes" class="waves-effect waves-light btn" href="#">Routes</a></li>
          <li><a id="schedule" class="waves-effect waves-light btn" href="#">Schedule</a></li>
          <li><a id="tickets" class="waves-effect waves-light btn" href="#">Tickets</a></li>
          <li><a id="log-in" class="btn2" href="#">Log in</a></li>
        </ul>
      </div>
    </nav>
  </div>

  <!-- Home -->
  <div id="home">
    <h1 id="home-title">Hyperloop</h1>
    <h4 id="home-subtitle">Go supersonic</h4>
    <div id="desc-box">
      <p id="home-description">A new age of affordable transportation capsules that can hit 1200km/h.</p>
    </div>
    <a id="learn" class="waves-effect waves-light btn-large" href="#">Learn more</a>
  </div>

  <!-- Who we are -->
  <div id="wwa">
    <img id="wwa-img" src="photos/about_us.png">
  </div>

  <!-- Capsules -->
  <div id="caps">
    <div id="caps-car" class="carousel carousel-slider">
      <a class="carousel-item" href="#one!"><img src="photos/infinity.png"></a>
      <a class="carousel-item" href="#two!"><img src="photos/thunderbird.png"></a>
      <a class="carousel-item" href="#three!"><img src="photos/falcon.png"></a>
    </div>
  </div>

  <!-- Routes -->
  <div id="rts">
    <div id="rts-dur"></div>
    <div class="row">
      <form id="rts-form" class="col s12">
        <div class="row">
          <div class="input-field col s6">
            <i class="material-icons prefix">add_location</i>
            <input id="from" name="from" type="text">
            <label for="from">From</label>
          </div>
          <div id="to_div" class="input-field col s6">
            <i class="material-icons prefix">arrow_forward</i>
            <input id="to" name="to" type="text">
            <label for="to">To</label>
            <a id="rts-submit" class="waves-effect waves-light btn-large">Submit</a>
          </div>
        </div>
      </form>
    </div>
    <div>
      <p id="rts-dur-desc">Explore the routes and their duration.</p>
      <a id="rts-list" class="waves-effect waves-light btn-large modal-trigger" href="#modal1">See all the routes</a>
    </div>
    <div id="modal1" class="modal">
      <div class="modal-content">
      <table class="striped centered">
        <thead>
          <tr>
            <th>STATION ID</th>
            <th>CITY</th>
            <th>COUNTRY</th>
            <th></th>
            <th>STATION ID</th>
            <th>CITY</th>
            <th>COUNTRY</th>
          </tr>
        </thead>
        <tbody id="rts-tbody"></tbody>
      </table>
      </div>
    </div>
  </div>

  <!-- Schedule -->
  <div id="sch">
    <table class="striped centered">
      <thead>
        <tr>
          <th>CAPSULE ID</th>
          <th>DEPARTURING STATION</th>
          <th>ARRIVING STATION</th>
          <th>DATE</th>
          <th>DEPARTURING TIME</th>
          <th>ARRIVING TIME</th>
        </tr>
      </thead>
      <tbody id="sch-tbody"></tbody>
    </table>
  </div>

  <!-- Tickets -->
  <div id="tck">
    <div class="row">
        <form id="tck-form" class="col s12">
          <div class="row">
            <div class="input-field col s6">
              <i class="material-icons prefix">add_location</i>
              <input id="tck-from" name="from" type="text">
              <label for="tck-from">From</label>
            </div>
            <div id="to_div" class="input-field col s6">
              <i class="material-icons prefix">arrow_forward</i>
              <input id="tck-to" name="to" type="text">
              <label for="tck-to">To</label>
              <a id="tck-submit" class="waves-effect waves-light btn-large modal-trigger" href="#modal2">Submit</a>
            </div>
          </div>
        </form>
      </div>
      <div>
        <p id="tck-desc" class="center-align">Explore tickets and prices on your preferred route.</p>
      </div>
      <div id="modal2" class="modal">
        <div class="modal-content">
          <table id="tck-table" class="striped centered">
            <thead>
              <tr>
                <th>DATE</th>
                <th>DEPARTURING TIME</th>
                <th>ARRIVING TIME</th>
                <th>SEAT NO.</th>
                <th>CLASS</th>
                <th>PRICE</th>
                <th></th>
              </tr>
            </thead>
            <tbody id="tck-tbody"></tbody>
          </table>
      </div>
    </div>
  </div>

  <!-- Log in -->
  <div id="lgn">
    <div class="row">
        <form id="lgn-form" class="col s12">
          <div class="row">
            <div class="input-field col s6">
              <i class="material-icons prefix">person</i>
              <input id="lgn-driver" name="to" type="text">
              <label for="lgn-driver">Driver ID</label>
              <a id="lgn-submit" class="waves-effect waves-light btn-large modal-trigger" href="#modal3">Submit</a>
            </div>
          </div>
        </form>
      </div>
      <div>
        <p id="lgn-desc">Check your work schedule.</p>
        <p id="lgn-sub-desc">(Only for authorized Hyperloop drivers.)</p>
      </div>
      <div id="modal3" class="modal">
        <div class="modal-content">
          <table id="lgn-table" class="striped centered">
            <thead>
              <tr>
                <th>DRIVER ID</th>
                <th>FIRST NAME</th>
                <th>LAST NAME</th>
                <th>CAPSULE ID</th>
                <th>CAPSULE NAME</th>
                <th>ROUTE ID</th>
                <th>DATE</th>
                <th>DEPARTURING TIME</th>
                <th>ARRIVING TIME</th>
              </tr>
            </thead>
            <tbody id="lgn-tbody"></tbody>
          </table>
      </div>
    </div>
  </div>
</body>

</html>