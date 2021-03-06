<!DOCTYPE html>
<?php error_reporting(0);?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RunCulator</title>

    <?php // Database Connection & Visitor Browser Data
          require_once('connection/runculator_database_connection.php');
          require_once('_includes/get_visitor_data.php');
    ?>

    <link rel="apple-touch-icon" sizes="180x180" href="_images/favicon/apple-touch-icon.png">
    <link rel="icon" type="_images/favicon/png" sizes="32x32" href="_images/favicon/favicon-32x32.png">
    <link rel="icon" type="_images/png" sizes="16x16" href="_images/favicon/favicon-16x16.png">
    <link rel="manifest" href="_images/favicon/site.webmanifest">
    <link rel="mask-icon" href="_images/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- DEPENDENCIES & CSS -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
          crossorigin="anonymous">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">

    <!-- Analytics -->
    <?php include_once("_includes/analytics.php") ?>

    <!-- New Nav Bar -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
    <link href="css/pace2.css" rel="stylesheet" type="text/css" >

    <?php // Variables
    if(isset($_GET['time_hour'])) {$time_hour = $_GET['time_hour'];} else {$time_hour=0;}
    if(isset($_GET['time_min'])) {$time_min = $_GET['time_min'];} else {$time_min=0;}
    if(isset($_GET['time_sec'])) {$time_sec = $_GET['time_sec'];} else {$time_sec=0;}

    if(isset($_GET['distance'])) {$distance = $_GET['distance'];} else {$distance=0;}

    if(isset($_GET['time_hour_pace'])) {$pace_hour = $_GET['time_hour_pace'];} else {$pace_hour=0;}
    if(isset($_GET['time_min_pace'])) {$pace_min = $_GET['time_min_pace'];} else {$pace_min=0;}
    if(isset($_GET['time_sec_pace'])) {$pace_sec = $_GET['time_sec_pace'];} else {$pace_sec=0;}

    if(isset($_GET['metric_distance'])) {$metric_distance = $_GET['metric_distance'];
     if( $metric_distance=='km'){$metric_distance = 1;};
     if( $metric_distance=='mi'){$metric_distance = 1.60934;};
     } else {$metric_distance=1;}

     if(isset($_GET['metric_pace'])) {$metric_pace = $_GET['metric_pace'];
      if( $metric_pace=='km'){$metric_pace = 1;};
      if( $metric_pace=='mi'){$metric_pace = 1.60934;};
  } else {$metric_pace=1;};

    $total_time= (($time_hour * 3600) + ($time_min * 60) + ($time_sec));
    $total_pace = (($pace_hour * 3600) + ($pace_min * 60) + ($pace_sec))*$metric_pace;
    $total_distance =$total_time/$total_pace/$metric_distance;

    $kmh_final = (60/($total_time/($total_distance*$metric_distance) /60));
    $mih_final = (60/($total_time/($total_distance*$metric_distance) /60)/ 1.60934);

    $kmh_final_padded = sprintf('%0.2f', $kmh_final);
    $mih_final_padded = sprintf('%0.2f', $mih_final);
    ?>

</head>

<body background="_images/background.jpg"
   style="background-size:cover;
          height: 100%;
          background-position: center;
          background-repeat: no-repeat">

<style>
  html {
  background: url(images/bg.jpg) no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  height: 100%;
}
</style>

  <?php include("_includes/navigation2.php") ?>
   <?php //include("_includes/pa_antiadblock_2902714.php") ?>
     <?php //include("_includes/pa_antiadblock_2902793.php") ?>
         <?php //include("_includes/pa_antiadblock_2902878.php") ?>
<!-- HEADING TITLE !----------------------->
<div id="parent_container">

  <!-- Advertisement------------------------------------------------------------------------------------------------->
  <!-- Advertisement-------------------------------------------------------------------------------------------------

    <div id="child_container"
     style="
     margin:20px auto auto auto;  border: 4px solid #0099ff; background:white;
     color:white;
     border-radius: 10px 10px;
     background-color: rgb(0, 0, 0);
     background-color: rgba(0, 0, 0, 0.6);
     filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);
     -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)"">


     <div class="row">
       <div class="col-sm" style="text-align: center; padding:8px 15px 8px 15px">
        <h3 style="margin:2px; padding:4px">
        <a href="http://deloplen.com/afu.php?zoneid=2902726" target="_blank">To support RunCulator, please click on the <u>Advertisement</u></h3></a>
       </div>
      </div>
    </div>
     Advertisement------------------------------------------------------------------------------------------------->
    <!-- Advertisement------------------------------------------------------------------------------------------------->


 <h1 id="pace_title"style="text-align: center;  text-shadow: 2px 2px #0099ff;"> Distance Calculator</h1>
  <form action="" method="get" id="main_form" name="main_form">

      <?php //SUBMIT
      if(isset($_GET['submit_upload'])){
      // Establish connection to databse
      mysqli_select_db($runculator_database,"dbs45866");

         $sql = "INSERT dbs45866.distance_table SET

                         timestamp = CURRENT_TIMESTAMP,

                         user_agent    ='$user_agent',
                         device_type = '$device_type',
                         ip_address   = '$ip_address',
                         page_name    ='$page_name',

                         time_hour = '$_GET[time_hour]',
                         time_min = '$_GET[time_min]',
                         time_sec = '$_GET[time_sec]',

                         distance ='$total_distance',
                         metric_distance = '$_GET[metric_distance]',

                         pace_hour='$_GET[time_hour_pace]',
                         pace_min='$_GET[time_min_pace]',
                         pace_sec='$_GET[time_sec_pace]',
                         metric_pace = '$_GET[metric_pace]',

                         pace_kmh    ='$kmh_final',
                         pace_mih   = '$mih_final'  ";

                         mysqli_query($runculator_database,$sql);}

                         // echo "<script type='text/javascript'>alert('$user_agent');</script>";
                         // echo "<script type='text/javascript'>alert('$ip_address');</script>";
                         // echo "<script type='text/javascript'>alert('$page_name');</script>";
?>


      <div id="child_container"
       style="
        margin:15px auto auto auto;   border: 4px solid #0099ff; background:white;
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
<div id="duration" style="width:100%; ">
    <div style="width:80%; margin:auto; color:white;  padding-top:15px">
        <span style="font-weight:bold; font-size:20px">Duration</span>
    </div>

    <div id="time" style="width:80%; margin:auto; color:white">
        <div style="padding:0px 0  5px 0; float:left;  width:33%;"><span style="">Hours</span>
            <input id="hours_field" class="form-control" type="number"
                   onClick="this.select();"
                   onKeyPress="return check(event,value)" onInput="checkLength_hours()"
                   min="0" max="99" maxlength="2"
                   name="time_hour"value="<?php echo ($time_hour)?>"
                   style=" height:80px; font-size:40px; display: block; margin:0 auto; text-align:center">
        </div>

        <div style="padding:0 2px  5px 2px;float:left; width:34%;"><span style="">Minutes</span>
            <input id="minutes_field" class="form-control" type="number"
                   onClick="this.select();"
                   onKeyPress="return check(event,value)" onInput="checkLength_minutes()"
                   min="0" max="59" maxlength="2" name="time_min"
                   value="<?php echo ($time_min)?>"
                   style=" height:80px; font-size:40px; display: block; margin:0 auto; text-align:center">
        </div>

        <div style="padding:0 0  5px 0; float:left;  width:33%;"><span style="">Seconds</span>
            <input id="seconds_field" class="form-control" type="number"
                   onClick="this.select();"
                   onKeyPress="return check(event,value)" onInput="checkLength_seconds()"
                   min="0" max="59" maxlength="2" name="time_sec" value="<?php echo ($time_sec)?>"
                   style=" height:80px; font-size:40px; display: block; margin:0 auto; text-align:center">
        </div>
    </div>
</div>


  <!-- PACE !!!!!!!!!!!!!!!!!!!!!!!!!!!!----------------------->
  <div id="pace2" style="width:100%; ">
      <div style="width:80%; margin:auto; color:white;  ">
          <span  id="pace_legende_main" style="font-weight:bold; font-size:20px">Pace per <?php if($metric_pace==1){echo ("km");} else{echo ("mi");} ?></span>
      </div>

      <div id="time" style="width:80%; margin:auto; color:white; height:100px">
          <div style="padding:0px 0  1px 0; float:left;  width:33%;"><span style="">Hours</span>
              <input id="hours_field_pace" class="form-control" type="number"
                     onClick="this.select();"
                     onKeyPress="return check(event,value)" onInput="checkLength_hours()"
                     min="0" max="99" maxlength="2"
                     name="time_hour_pace"
                     value="<?php echo ($pace_hour)?>"
                     style=" height:80px; font-size:40px; display: block; margin:0 auto; text-align:center">
          </div>

          <div style="padding:0 2px  2px 1px;float:left; width:34%;"><span style="">Minutes</span>
              <input id="minutes_field_pace" class="form-control" type="number"
                     onClick="this.select();"
                     onKeyPress="return check(event,value)" onInput="checkLength_minutes()"
                     min="0" max="59" maxlength="2" name="time_min_pace"
                     value="<?php echo ($pace_min)?>"
                     style=" height:80px; font-size:40px; display: block; margin:0 auto; text-align:center">
          </div>

          <div style="padding:0 0  1px 0; float:left;  width:33%;"><span style="">Seconds</span>
              <input id="seconds_field_pace" class="form-control" type="number"
                     onClick="this.select();"
                     onKeyPress="return check(event,value)" onInput="checkLength_seconds()"
                     min="0" max="59" maxlength="2" name="time_sec_pace" value="<?php echo ($pace_sec)?>"
                     style=" height:80px; font-size:40px; display: block; margin:0 auto; text-align:center">
          </div>
            </div>


      <div class="btn-group" data-toggle="buttons"
           style="display: flex; margin : 0 auto; width:80%; text-align:center; height:45px" >
          <label  id="radio_pace_km_label" class="btn btn-primary <?php if($metric_pace==1) {?> active <?php ;} ?>"style="width:50%;">
            <input type="radio" name="metric_pace" value="km" <?php if($metric_pace==1) {?> checked <?php ;} ?>> Pace per km
          </label>

          <label  id="radio_pace_miles_label" class="btn btn-primary <?php if($metric_pace==1.60934) {?> active <?php ;} ?>" style="width:50%;">
            <input id="radio_pace_miles" type="radio" name="metric_pace" value="mi" <?php if($metric_pace==1.60934) {?> checked <?php ;} ?> > Pace per mile
          </label>
      </div>
  </div>


  <!--DISTANCE !!!!!-------------------------->
  <div id="distance" style="margin-top:5px">
    <div style="width:80%; margin:auto; color:red; " class="input-icon input-icon-right">
        <label for="inputState">
            <span id="distance_legende_main" style="font-size:20px; ">Distance in <?php if($metric_distance==1){echo ("Kilometers");} else{echo ("Miles");} ?></span>
        </label>
        <i id="distance_legende" style="color:black; font-size:40px; color:grey; text-align:right; padding-right:20px"><?php if($metric_distance==1){echo ("km");} else{echo ("mi");} ?></i>
        <input onKeyPress="return check(event,value)"
               onInput="checkLength_distance()" id="distance_input"
               type="number"step="any"  name="distance" class="form-control" min="0" max="9999"
               placeholder="e.g. 10" disabled

               style="height:80px; font-size:40px; display: block; margin : 0 auto; text-align:center; background-color : #d1d1d1"
               value="<?php echo (round ($total_distance,2)) ?>">
    </div>


   <div class="btn-group" data-toggle="buttons" style="display:flex; margin: 0 auto; width:80%; text-align:center; height:45px" >
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

$("#metric_distance_miles_label" ).click(function() {
document.getElementById("distance_legende_main").innerHTML = 'Distance in Miles';
// alert( "Handler for .click() called." );
});

//Distance Pace Radio Button
$("#metric_distance_kilometers_label" ).click(function() {
document.getElementById("distance_legende_main").innerHTML = 'Distance in Kilometers';
});

$("#radio_pace_miles_label" ).click(function() {
document.getElementById("pace_legende_main").innerHTML = 'Pace per mi';
// alert( "Handler for .click() called." );
});

//Distance Pace Radio Button
$("#radio_pace_km_label" ).click(function() {
document.getElementById("pace_legende_main").innerHTML = 'Pace per km';
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
<button type="submit" name="submit_upload" form="main_form" style="width:80%; height:50px; margin:10px auto 10px auto" class="btn btn-default btn-block btn-lg" value="Submit">Calculate</button>
</div>


<?php include("_includes/footer2.php") ?>
</body>
</html>
