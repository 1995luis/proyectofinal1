
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>hotel emyli</title>
    <link rel=StyleSheet href="style.css" type="css/styles.css">
    <link rel="stylesheet" href="<?php  echo base_url().'css/style.css' ?>">
    </head>
  
  <body class="nav-collapse">
   <div id="container" class="row no-gutter">
   <div class="col-lg-4 col-md-6 ">
   <a href="<?php echo base_url().'index.php/hotel/cargarS' ?>" class="w3-bar w3-bar-item w3-button" >
   <img src="<?php echo base_url().'imagenes/jacuzzi.jpg'?>" class="img-responsive" style="padding: automatic" width="100" height="100" alt=""><h4>HotelEmily</h4></a>
    <svg width="130em" height="5em" viewBox="0 0 16 16" class="bi bi-building" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694L1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z"/>
  <path d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z"/></svg>
    
  <svg width="170em" height="5em" viewBox="0 0 16 16" class="bi bi-telephone-inbound" fill="" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M3.925 1.745a.636.636 0 0 0-.951-.059l-.97.97c-.453.453-.62 1.095-.421 1.658A16.47 16.47 0 0 0 5.49 10.51a16.47 16.47 0 0 0 6.196 3.907c.563.198 1.205.032 1.658-.421l.97-.97a.636.636 0 0 0-.06-.951l-2.162-1.682a.636.636 0 0 0-.544-.115l-2.052.513a1.636 1.636 0 0 1-1.554-.43L5.64 8.058a1.636 1.636 0 0 1-.43-1.554l.513-2.052a.636.636 0 0 0-.115-.544L3.925 1.745zM2.267.98a1.636 1.636 0 0 1 2.448.153l1.681 2.162c.309.396.418.913.296 1.4l-.513 2.053a.636.636 0 0 0 .167.604L8.65 9.654a.636.636 0 0 0 .604.167l2.052-.513a1.636 1.636 0 0 1 1.401.296l2.162 1.681c.777.604.849 1.753.153 2.448l-.97.97c-.693.693-1.73.998-2.697.658a17.471 17.471 0 0 1-6.571-4.144A17.47 17.47 0 0 1 .639 4.646c-.34-.967-.035-2.004.658-2.698l.97-.969zM15.854.146a.5.5 0 0 1 0 .708L11.707 5H14.5a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 1 0v2.793L15.146.146a.5.5 0 0 1 .708 0z"/>
</svg>
<svg width="140em" height="5em" viewBox="0 0 16 16" class="bi bi-people-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
</svg>
  </div>
  </div>
  
    <div id="container2" class="col-lg-8 col-md-8 col-sm-9 col-xs-6 flex-sm aling-items-center" >
    <nav class="navbar " id="navbar-user">
    <ul class="nav navbar-nav" id="navbar-user-nav">
    <ul class="navbar-nav mr-auto">
    <li class="visible-xs-block">

         <!-- CONTENIDO DE CONO CE MAS
   -->
   <a href="#" title="find host">
    <div class="col-lg-8 col-md-8 col-sm-9 col-xs-6 " >
   <div id="navbar-main-wrapper">
   <nav class="navbar" id="navbar-main">
   <div class="container nopadding-xs">
   <div style="padding:10px; background: #f7f7f7; border-bottom: solid 1px #ddd;" class="visible-xs-block">
  <!-- lo ques e
  
  -->
  <ul class="nav navbar-nav">
    <li class="dropdown dropdown-megamenu ">
    <a href="/en/info/how-it-works/workawayer" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
    <div class="mainnav-icon" style="">
    </div>Sucursales<span class="caret">
    </span>
    </a>
    <ul class="dropdown-menu">
    <li>
    <div class="row">
    <div class="col-sm-4 megamenu-content-col">
    <a href="/en/info/how-it-works/workawayer" class="megamenu-content-link">
    <div class="megamenu-content-img" style="background-image: url('')">
    </div>
    <div class="megamenu-content-img" style="background-image: url('jacuzzi.jpg')">
    <div class="megamenu-content-title">cali-valle del cauca</div>
    <div class="megamenu-content-text">medellin-antioquia</div>
    </a>
    </div>
    <div class="col-sm-4 megamenu-content-col">
    <a href="/en/info/how-it-works/host" class="megamenu-content-link">

    <div class="megamenu-content-img" stylev="background-image: url('<?php echo base_url().'imagenes/jacuzzi.jpg'?>')">
    </div>
    <div class="megamenu-content-title">estamos ubicado en la calle 492 g</div>
    <div class="megamenu-content-text">carr123#24-56</div>
    </a>
    </div>
    <div class="col-sm-4 megamenu-content-col">
    <a href="/en/info/information-language-learners" class="megamenu-content-link">
    <div class="megamenu-content-img" style="background-image: url('')">
    </div>
    <div class="megamenu-content-title">diagononal ala alcaldia </div>
    <div class="megamenu-content-text">diagonal al la regitradurai</div>
    </a>
    </div>

    </li>
    </ul>
    </li>


   
    <div style="padding: 15px; background: #f7f7f7; border-bottom: solid 1px #ddd;" class="visible-xs-block">
    </div>
   <div class="container">
    <ul class="dropdown-menu" style="width: 40%;">
    <li>
    <a href="#" data-toggle="modal" data-target="#modalLogin" data-login="" data-who="h">Login aHost</a>
    </li>
    </ul>
    </div>
    <ul class="nav navbar-nav">
    <li class="dropdown dropdown-megamenu ">
    <a href="/en/info/how-it-works/workawayer" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
    <div class="mainnav-icon" style="">
    </div>habitaciones<span class="caret">
    </span>
    </a>
    <ul class="dropdown-menu">
    <li>
    <div class="container">
    <div class="megamenu-content">
    <div class="row">
    <div class="col-sm-4 megamenu-content-col">
    <a href="/en/info/how-it-works/workawayer" class="megamenu-content-link">
    <div class="megamenu-content-img" style="background-image: url(../imagenes/jacuzzi.jpg)">
    </div>
    <div class="megamenu-content-title">modelo1-jaczzi</div>
    <div class="megamenu-content-text">cama doble vista al</div>
    </a>
    </div>
    <div class="col-sm-4 megamenu-content-col">
    <a href="/en/info/how-it-works/host" class="megamenu-content-link">
    <div class="megamenu-content-img" style="background-image: url('/gfx/menu/information-for-hosts.jpg')">
    </div>
    <div class="megamenu-content-title">modelo2suna,jacuzzi</div>
    <div class="megamenu-content-text">carr123#24-56</div>
    </a>
    </div>
    <div class="col-sm-4 megamenu-content-col">
    <a href="/en/info/information-language-learners" class="megamenu-content-link">
    <div class="megamenu-content-img" style="background-image: url('/gfx/menu/information-for-language-learners.jpg')">
    </div>
    <div class="megamenu-content-title">diagononal ala alcaldia </div>
    <div class="megamenu-content-text">diagonal al la regitradurai</div>
    

    </li>
    </ul>
    </li>
    
    <ul class="dropdown-menu">
    <li>
    <div class="container">
    <div class="megamenu-content">
    <div class="row">
    <div class="col-sm-4 megamenu-content-col">
    <a href="/en/account/workawayer/destinations" class="megamenu-content-link">
    <div class="megamenu-content-img" style="background-image: url('/gfx/menu/destinations.jpg')">
    </div>
    <div class="megamenu-content-title">Plan de metodo</div>
    <div class="megamenu-content-text">Map out your adventures</div>
    </a>
    </div>
    <div class="col-sm-4 megamenu-content-col">
    <a href="/en/community/travelbuddy" class="megamenu-content-link">
    <div class="megamenu-content-img" style="background-image: url('/gfx/menu/find-travelbuddy.jpg')">
    </div>
    <div class="megamenu-content-title">ecribos kp qie sea </div>
    <div class="megamenu-content-text">escribir cualquier cosa</div>
  
    <div class="col-sm-4 megamenu-content-col">
    <a href="/en/community/meet-other-workawayers" class="megamenu-content-link">
    <div class="megamenu-content-img" style="background-image: url('/gfx/menu/meetup.jpg')">
    </div>
    <div class="megamenu-content-title">lo QUESE A</div>
    <div class="megamenu-content-text">Meet up a</div>
    </a>
    </div>
    </div>
    </div>
    </div>
    </li>
    </ul>
    </li>
    <li class="dropdown dropdown-megamenu "><a href="/en/community" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><div class="mainnav-icon" style="background-image: url('/gfx/menu/travel-inspiration.svg')">
    </div>Our community
 <span class="caret"></span>
 </a><ul class="dropdown-menu" style="display: none;">
 <li>
 <div class="container">
 <div class="megamenu-content">
 <div class="row">
 <div class="col-sm-3 megamenu-content-col">
 <a href="/en/stories" class="megamenu-content-link">
 <div class="megamenu-content-img" style="background-image: url('/gfx/menu/workaway-blog.jpg')">
 </div>
 <div class="megamenu-content-title">COLOCAR ALGO</div>
 <div class="megamenu-content-text">escribamos lo que se 
</div>
</a>
</div>
<div class="col-sm-3 megamenu-content-col">
<a href="/en/community/ambassador" class="megamenu-content-link">
<div class="megamenu-content-img" style="background-image: url('/gfx/menu/workaway-ambassador.jpg')"></div><div class="megamenu-content-title">Workaway Ambassadors</div>
<div class="megamenu-content-text">lo que se
</div>
</a>
</div>
<div class="col-sm-3 megamenu-content-col">
<a href="/en/community/travel-photos" class="megamenu-content-link">
<div class="megamenu-content-img" style="background-image: url('/gfx/menu/workaway-photo-gallery.jpg')"></div>
<div class="megamenu-content-title">Workaway photo gallery</div>
<div class="megamenu-content-text">Explore the world through the lens of workawayers and hosts
</div>
</a>
</div>
<div class="col-sm-3 megamenu-content-col"><a href="https://www.workaway.tv" target="_blank" class="megamenu-content-link">
<div class="megamenu-content-img" style="background-image: url('/gfx/menu/workaway-tv.jpg')"></div>
<div class="megamenu-content-title">Workaway.tv</div>
<div class="megamenu-content-text">Watch vlogs &amp; videos showinstories
</div>
</a>
</div>
</div>
</div
></div>
</li></ul>
</li>
<li class="dropdown ">
<a href="/en/community/mission" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"
><div class="mainnav-icon" style="background-image: url('/gfx/menu/giving-back.svg')">
</div>MAYORIISTA<span class="caret"></span>
<ul class="dropdown-menu" style="display: none;"><li class=""><a href="/en/community/mission">Our Mission</a>
</li>
<li class=""><a href="https://www.workawayfoundation.org" target="_blank">COLOCAR ESTILOS</a>
</li>
<li class=""><a href="/en/info/un-development-goals">hagamos lo que sea</a>
</li>
<li class="">
<a href="https://www.kiva.org/team/workaway" target="_blank">Donations - Kiva</a>
</li>
<li class="">
<a href="/en/info/covid-19">COVID-19</a>
</li>
</ul>
</li>
</ul>
</div>
<div class="visible-xs-block">
<div class="flag-row">
<a href="/de" title="deutsch" class="languageSelector" data-lang="de" data-href="/de">
<img src="">
</a> &nbsp;
<img src="">
</a> &nbsp;<a href="/es" title="español" class="languageSelector" data-lang="es" data-href="/es">
<img src="">
</a> &nbsp;<a href="/pt" title="brazil" class="languageSelector" data-lang="pt" data-href="/pt">
<img src="">
</a> &nbsp;
<span id="setlang_resp"></span>
</div>
</div>
</div>
</nav>
</div>
</div>
   </a>
   </li>
   <div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="https://youtu.be/hK7EHGv35Dk" allowfullscreen></iframe>
</div>
   <li class="dropdown dropdown-megamenu ">
   <a href="/en/info/how-it-works/workawayer" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
   <div class="mainnav-icon" style="background-image: url('/gfx/menu/how-it-works.svg')">
   </div>contactanos<span class="caret">
   <li class="dropdown dropdown-megamenu "
   ><a href="/en/info/how-it-works/workawayer" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
   <div class="mainnav-icon" style="background-image: url('/gfx/menu/how-it-works.svg')">
   </div>
   <span class="caret">
   </span>
   </a>
   <ul class="dropdown-menu" style="display: none;">
   <li>
   </div>
   </div>
   </div>
   <div style="padding:10px; background: #f7f7f7; border-bottom: solid 1px #ddd;" class="visible-xs-block">
  
<div id="CybotCookiebotDialogBodyContenTitle" lang="en" dir="ltr" ng-non-bindable style="display : block: opacity: 1; top: 525px; width: 100px; height: auto;">

<div id="CybotCookiebotDialogBody">
    <div id="CybotCookiebotDialogPowerdbylink">
    <img id="CybotCookiebotDialogPowerdbyImage" src="https://www.gsnoticias.com/wp-content/uploads/2019/08/Hoteles-en-el-mar-.jpg" alt=""></div>

<div id="CybotCookiebotDialogBodyContent">
    <h2 id="CybotCookiebotDialogBodyContentTitle" lang="en">nosotros</h2>
    <div id="CybotCookiebotDialogBodyContentText" lang="en">Like most sites, Workaway uses cookies to help improve the website’s usability. Cookies providing anonymous info hels. &nbsp;You cons.</div>
    <div id="CybotCookiebotDialogBodyContentControls" style="display: none;"></div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <?php isset($mg) ? $msg: ''?>
  </body>
</html>