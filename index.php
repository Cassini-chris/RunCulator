<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>RunCulator</title>

    <link rel="apple-touch-icon" sizes="180x180" href="_images/favicon/apple-touch-icon.png">
    <link rel="icon" type="_images/favicon/png" sizes="32x32" href="_images/favicon/favicon-32x32.png">
    <link rel="icon" type="_images/png" sizes="16x16" href="_images/favicon/favicon-16x16.png">
    <link rel="manifest" href="_images/favicon/site.webmanifest">
    <link rel="mask-icon" href="_images/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- Bootstrap ORIGINAL -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="_javascript/picker.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="css/pace2.css" rel="stylesheet" type="text/css" >

    <?php // Variables
    if(isset($_GET['time_hour'])) {$time_hour = $_GET['time_hour'];} else {$time_hour=0;}
    if(isset($_GET['time_min'])) {$time_min = $_GET['time_min'];} else {$time_min=0;}
    if(isset($_GET['time_sec'])) {$time_sec = $_GET['time_sec'];} else {$time_sec=0;}

    if(isset($_GET['distance'])) {$distance = $_GET['distance'];} else {$distance=0;}

    if(isset($_GET['pace_hour'])) {$pace_hour = $_GET['pace_hour'];} else {$pace_hour=0;}
    if(isset($_GET['pace_min'])) {$pace_min = $_GET['pace_min'];} else {$pace_min=0;}
    if(isset($_GET['pace_sec'])) {$pace_sec = $_GET['pace_hour'];} else {$pace_sec=0;}

    if(isset($_GET['metric_distance'])) {$metric_distance = $_GET['metric_distance'];
     if( $metric_distance=='km'){$metric_distance = 1;};
     if( $metric_distance=='mi'){$metric_distance = 1.60934;};
     } else {$metric_distance=1;}

     if(isset($_GET['metric_pace'])) {$metric_pace = $_GET['metric_pace'];
      if( $metric_pace=='km'){$metric_pace = 1;};
      if( $metric_pace=='mi'){$metric_pace = 1.60934;};
      } else {$metric_pace=1;}

    $total_time = (($time_hour * 3600) + ($time_min * 60) + ($time_sec));
    if($distance==0){$distance=1;
    $pace_kmh = gmdate('H:i:s',($total_time / ($distance *$metric_distance)));
    $pace_mih = gmdate('H:i:s',(($total_time / ($distance*$metric_distance))*$metric_pace));} else {
    $pace_kmh = gmdate('H:i:s',($total_time / ($distance *$metric_distance)));
    $pace_mih = gmdate('H:i:s',(($total_time / ($distance*$metric_distance))*$metric_pace));}

    ?>

</head>

<body background="_images/background.jpg">

    <nav class="navbar">
      <div class="container-fluid"  >
        <div class="navbar-header">
          <a  style="color:white"class="navbar-brand" href="http://www.runculator.com">RunCulator</a>
        </div>
      </div>
    </nav>

<!-- HEADING TITLE !----------------------->
<div id="parent_container">
   <h1 id="pace_title"style="text-align: center;  text-shadow: 2px 2px #0099ff;"> Pace Calculator</h1>
  <form action="" method="get" id="main_form" name="main_form">
      <div id="child_container"
       style="
        margin:auto;  border: 4px solid #0099ff; background:white;
        border-radius: 50px 20px;
        background-color: rgb(0, 0, 0);
        /* RGBa with 0.6 opacity */
        background-color: rgba(0, 0, 0, 0.6);
        /* For IE 5.5 - 7*/
        filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);
        /* For IE 8*/
        -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";
       ">


<!-- DURATION !!!!!!!!!!!!!!!!!!!!!!!!!!!!----------------------->
<div id="duration" style="width:100%">
    <div style="width:80%; margin:auto; color:white;  padding-top:15px">
        <span style="font-weight:bold; font-size:20px">Duration</span>
    </div>

    <div id="time" style="width:80%; margin:auto;height:150px; color:white">
        <div style="padding:0px 0  5px 0; float:left;  width:33%;"><span style="">Hours</span>
            <input id="hours_field" class="form-control" type="number"
                   onKeyPress="return check(event,value)" onInput="checkLength_hours()"
                   min="0" max="99" maxlength="2"
                   name="time_hour"value="<?php echo ($time_hour)?>"
                   style=" height:80px; font-size:40px; display: block; margin:0 auto; text-align:center">
        </div>

        <div style="padding:0 2px  5px 2px;float:left; width:33%;"><span style="">Minutes</span>
            <input id="minutes_field" class="form-control" type="number"
                   onKeyPress="return check(event,value)" onInput="checkLength_minutes()"
                   min="0" max="59" maxlength="2" name="time_min"
                   value="<?php echo ($time_min)?>"
                   style=" height:80px; font-size:40px; display: block; margin:0 auto; text-align:center">
        </div>

        <div style="padding:0 0  5px 0; float:left;  width:33%;"><span style="">Seconds</span>
            <input id="seconds_field" class="form-control" type="number"
                   onKeyPress="return check(event,value)" onInput="checkLength_seconds()"
                   min="0" max="59" maxlength="2" name="time_sec" value="<?php echo ($time_sec)?>"
                   style=" height:80px; font-size:40px; display: block; margin:0 auto; text-align:center">
        </div>
    </div>
</div>

<!--DISTANCE !!!!!-------------------------->
<div id="distance">
  <div style="width:80%; margin:auto; color:white" class="input-icon input-icon-right">
      <label for="inputState">
          <span style="font-weight:bold; font-size:20px">Distance</span>
      </label>
      <i id="distance_legende" style="color:black; font-size:40px; color:grey"><?php if($metric_distance==1){echo ("km");} else{echo ("mi");} ?></i>
      <input onKeyPress="return check(event,value)"
             onInput="checkLength_distance()" id="distance_input"
             type="number"step="any"  name="distance" class="form-control" min="0" max="9999"
             placeholder="e.g. 10"
             style="height:80px; font-size:40px; display: block; margin : 0 auto; text-align:center"
             value="<?php echo $distance ?>">
  </div>


 <div class="btn-group" data-toggle="buttons" style="display:block; margin: 0 auto; width:80%; text-align:center; height:80px" >
   <label id="metric_distance_kilometers_label"class="btn btn-primary <?php if($metric_distance==1) {?> active <?php ;} ?>"style="width:50%; ">
     <input id="metric_distance_kilometers" type="radio" name="metric_distance"
            value="km" <?php if($metric_distance==1) {?> checked <?php ;} ?>> Kilometers<br>
   </label>

   <label id="metric_distance_miles_label" class="btn btn-primary <?php if($metric_distance==1.60934) {?> active <?php ;} ?>" style="width:50%;">
     <input  id="metric_distance_miles" type="radio" name="metric_distance"
             value="mi" <?php if($metric_distance==1.60934) {?> checked <?php ;} ?>> Miles
   </label>
 </div>
</div>


<!--PACE !!!!!-------------------------->
<div id="pace">

    <div style="width:80%; margin:auto; color:white">
       <label for="inputState"><span style="font-weight:bold; font-size:20px">Pace</span></label>
       <input type="text" name="pace" id="pace_field" class="form-control"
              placeholder="10" style="height:80px; font-size:40px; display:block; margin:0 auto; text-align:center"
              value="<?php echo ($pace_mih) ; if($metric_pace==1){?> km/h <?php ;}else {?> mi/h <?php ;}?>" disabled>
    </div>

    <div class="btn-group" data-toggle="buttons" style="display: block; margin : 0 auto; width:80%; text-align:center; height:80px" >
        <label class="btn btn-primary <?php if($metric_pace==1) {?> active <?php ;} ?>"style="width:50%;">
          <input style=" font-size:40px; display: block; margin:0 auto; width:80%; text-align:center"
                 type="radio" name="metric_pace" value="km" <?php if($metric_pace==1) {?> checked <?php ;} ?>> Kilometers<br>
        </label>

        <label  id="radio_pace_miles_label" class="btn btn-primary <?php if($metric_pace==1.60934) {?> active <?php ;} ?>" style="width:50%;">
          <input id="radio_pace_miles" type="radio" name="metric_pace" value="mi" <?php if($metric_pace==1.60934) {?> checked <?php ;} ?> > Miles
        </label>
    </div>
  </div>

<script type="text/javascript">

//////////Jquery for button click on radio buttons (use label)
//Distance Miles Radio Button
$("#metric_distance_miles_label" ).click(function() {
document.getElementById("distance_legende").innerHTML = 'mi';
// alert( "Handler for .click() called." );
});

//Distance Pace Radio Button
$("#metric_distance_kilometers_label" ).click(function() {
document.getElementById("distance_legende").innerHTML = 'km';
});


function check(e,value)
{
    //Check Charater
    var unicode=e.charCode? e.charCode : e.keyCode;
    if (value.indexOf(".") != -1)if( unicode == 46 )return false;
    if (unicode!=8)if((unicode<48||unicode>57)&&unicode!=46)return false;
}

////////////// Function for Distance
function checkLength_distance()
{
    var fieldLength = document.getElementById('distance_input').value.length;

    if(fieldLength <= 4){
        return true;
    }
    else
    {
        var str = document.getElementById('distance_input').value;
        str = str.substring(0, str.length - 1);
        document.getElementById('distance_input').value = str;
    }
}

////////////// Functions for Duration - HOURS / MIN / SEC
function checkLength_hours()
{
    var fieldLength = document.getElementById('hours_field').value.length;
    if(fieldLength <= 2){
        return true;
    }
    else
    {
        var str = document.getElementById('hours_field').value;
        str = str.substring(0, str.length - 1);
        document.getElementById('hours_field').value = str;
    }
}

function checkLength_minutes()
{
    var fieldLength = document.getElementById('minutes_field').value.length;
    if(fieldLength <= 2){
        return true;
    }
    else
    {
        var str = document.getElementById('minutes_field').value;
        str = str.substring(0, str.length - 1);
        document.getElementById('minutes_field').value = str;
    }
}

function checkLength_seconds()
{
    var fieldLength = document.getElementById('seconds_field').value.length;
    if(fieldLength <= 2){
        return true;
    }
    else
    {
        var str = document.getElementById('seconds_field').value;
        str = str.substring(0, str.length - 1);
        document.getElementById('seconds_field').value = str;
    }
}
</script>
</form>
<button type="submit" form="main_form" style="width:80%; height:50px; margin:10px auto 10px auto" class="btn btn-default btn-block btn-lg" value="Submit">Calculate</button>

</body>
