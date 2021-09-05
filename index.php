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
    <link href="https://fonts.googleapis.com/css?family=Dosis&display=swap" rel="stylesheet">
    <!-- Custom -->
    <link href="css/pace2.css" rel="stylesheet" type="text/css" >
    <!-- Analytics -->
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
     <?php include_once("_includes/analytics.php") ?>

    <!-- New Nav Bar -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script>
      (adsbygoogle = window.adsbygoogle || []).push({
        google_ad_client: "ca-pub-3842615578259450",
        enable_page_level_ads: true
      });
    </script>

    <style>
      a:link {color:white; text-decoration: none;}
      a:visited {text-decoration: none}
      a:hover {text-decoration: underline;}
      a:active {text-decoration: underline;}
    </style>

</head>

<body background="_images/background.jpg" style="background-size:cover">

<!-- Navigation !----------------------->
 <?php include("_includes/navigation2.php") ?>
 <?php // error_reporting(0); // Turn off all error reporting
       require_once('connection/runculator_database_connection.php');
 ?>

  <?php #include("_includes/pa_antiadblock_2902714.php") ?>
    <?php #include("_includes/pa_antiadblock_2902793.php") ?>
        <?php #include("_includes/pa_antiadblock_2902878.php") ?>


<!-- HEADING TITLE !----------------------->
<div id="parent_container">

  <!-- TRAIL RACES HEADDING------------------------------------------------------------------------------------------------->
   <div id="child_container_off" class="container"
    style="
    padding-top:2px;
    margin:20px auto 10px auto;  border: 4px solid #0099ff; background:white; color:white;
    border-radius: 10px 10px; background-color: rgb(0, 0, 0); background-color: rgba(0, 0, 0, 0.6);
     filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);
    -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)"">

     <div class="row">
      <div class="col-sm" style="text-align: center; padding:8px 15px 8px 15px; ">

   <h3 style="margin:2px; font-family: 'Dosis', sans-serif; padding:4px">

     <?php $random_quote = rand(1, 7);
      if ($random_quote == 1)
      { echo ("'When that gun goes off, I try to get from the start line to the finish line as fast as I can.' </h3><span>Zach Miller</span>");}
elseif ($random_quote == 2)
      { echo ("'Anything is possible.' </h3><span>IRONMAN</span>");}
elseif ($random_quote == 3)
      { echo ("'The major goal is to finish the race, but there is always the ultimate goal.' </h3><span>David Laney</span>");}
elseif ($random_quote == 4)
      { echo ("'Mountains do what they do - They put things into perspective.' </h3><span>David Laney</span>");}
elseif ($random_quote == 5)
      { echo ("'I just want to do my best - The overall gist of it is that when I get to the line there is nothing left.' </h3><span>Zach Miller</span>");}
elseif ($random_quote == 6)
      { echo ("'I typically just know it is gonna be a roller coaster.' </h3><span>David Laney</span>");}
elseif ($random_quote == 7)
      { echo ("'In life, the idea is to be happy.' </h3><span>Eliud Kipchoge</span>");}
 ?>

      </div>
     </div>
   </div>
   <!-- ### END----------------------------------------------------------------------------------------------->

  <!-- <h1 id="pace_title"style="text-align: center;  text-shadow: 2px 2px #0099ff">Sports Calculator</h1>-->

  <style>
    .panel-body {
      box-shadow: 0 10px 16px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      margin-bottom: 10px;
      margin-top: 10px;
      border-radius:25px;
    }

    .bordershadow {
      position: relative;
      border-radius: 5px;
      transition: all 0.3s ease-in-out;
      border-radius:25px;
    }

    .bordershadow::after {
      content: '';
      position: absolute;
      z-index: -1;
      transition: opacity 0.3s ease-in-out;
    }

    /* Scale up the box */
    .bordershadow:hover {
      transform: scale(1.1, 1.1);
    }
  </style>

<div id="child_container_off" class="container" style="margin-bottom:10px; padding-bottom:10px; padding-top:10px">
  <div class="panel-body bordershadow">
  <style>
   #landing_page_pic {
     border:4px solid #0099ff;
     border-radius:25px;
   }
 </style>
<img id="landing_page_pic" src="_images/landing_page_pic.png" class="img-fluid" alt="Responsive image">
</div>
</div>

 <!-- FIRST TEST BOX------------------------------------------------------------------------------------------------->
<div id="child_container_off" class="container"
 style="
  margin:auto;  border: 4px solid #0099ff; background:white;
  border-radius: 30px 10px;
  padding-top:10px;
  background-color: rgb(0, 0, 0);
  background-color: rgba(0, 0, 0, 0.6);
  filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);
  -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";
 ">

<div style="padding:5px 0 0 15px">
  <h1 style="color:#F0FFFF">Why RunCulator</h1>
  <p style="color:#F0FFFF">RunCulator is an app that provides an Easy to use and Mobile Friendly >> Pace, Distance, Duration Calculator.
    </br>
  </p>

<div id="textt">
  <h1 style="color:#F0FFFF">Who Uses RunCulator?</h1/>
  <p style="color:#F0FFFF">Sports calculators are useful for both new athletes and professional athletes.</p>
  <h1 style="color:#F0FFFF">What Can You Calculate with RunCulator?</h1>
  <p style="color:#F0FFFF">
    (1) Determine how fast your pace should be if you have a <a href="duration.php">certain FINISH TIME</a>.</br>
    (2) Determine the <a href="pace.php">PACE</a> of your workout.</br>
    (3) Determine the possibe <a href="distance.php">DISTANCE</a> of your run.</br>
    <a class="scroll"> (4) <u>Convert</u> mph to km/h // km/h to mph. </a></br>

<script>
    $(".scroll").click(function() {
        $('html,body').animate({
            scrollTop: $(".second").offset().top},
            'slow');
    });
</script>

    <a style="color:#f6ffc9" href="wr.php"> >> Check Eliud Kipchoge World Record Marathon Pace.</a>
    </br>
  </p>
</div>
</div>
</div>
<!-- ### END------------------------------------------------------------------------------------------------->


<!-- SELECT CALCULATOR------------------------------------------------------------------------------------------------->
<div id="child_container_off" class="container"
style="
 padding-top:10px;
 margin:20px auto auto auto;  border: 4px solid #0099ff; background:white;
 border-radius: 30px 10px;
 background-color: rgb(0, 0, 0);
 background-color: rgba(0, 0, 0, 0.6);
 filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);
 -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)"">

  <h3 style="text-align: center; color:#F0FFFF">Select calculator...</h3>

<div class="row">
  <div class="col-sm" style="text-align: center">
   <a style="text-align:center;  width:300px; margin:10px" class="btn btn-primary"  href="distance.php">DISTANCE</a>
  </div>

  <div class="col-sm" style="text-align: center">
   <a style="text-align:center;  width:300px; margin:10px" class="btn btn-primary"  href="pace.php">PACE</a>
  </div>

  <div class="col-sm" style="text-align: center">
   <a style="text-align:center;  width:300px; margin:10px" class="btn btn-primary"  href="duration.php">DURATION</a>
  </div>
  </div>
 </div>
<!-- ### END------------------------------------------------------------------------------------------------->



<!-- ADVERTISEMENT BOX-------------------------------------------------------------------------------------------------
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
  ### END------------------------------------------------------------------------------------------------->

  <!-- KMH vs MILES CALCULATOR---------------------------------------------------------------------------------------------->
  <div id="child_container_off" class="container"
  style="
   margin:20px auto auto auto;  border: 4px solid #0099ff; background:white;
   color:white;
   padding-top:10px;
   border-radius: 30px 10px;
   background-color: rgb(0, 0, 0);
   background-color: rgba(0, 0, 0, 0.6);
   filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);
   -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)"">

   <div class="row">
     <div class="col-sm" style="text-align: center">
      <h3 style="margin:2px">Calculate mph in km/h and vice versa.</h3>
     </div>
    </div>

     <div class="row">
       <div class="col-sm" style="text-align: center">
         <div>
           <input type="radio" name="mph" id="kmhToMph"checked=""/>
            <label for="kmhToMph">km/h in mph</label>
         </div>
       </div>
    </div>

    <div class="row">
      <div class="col-sm" style="text-align: center">
        <div>
          <input type="radio" name="mph" id="mphToKmh" />
           <label for="mphToKmh">mph in km/h</label>
        </div>
      </div>
   </div>

     <div class="row">
       <div class="col-sm" style="text-align: center">
         <input style="margin:0px; padding:5px; text-align: center" type="number" name="calcValue" id="calcValue" pattern="[0-9]" placeholder="0.00" />
         <input style="margin:0px" type="submit" name="mph" class="btn btn-primary"  id="calculate" checked="" value="Calculate"/>
      </div>
     </div>

    <div style="text-align:center; margin-top:10px" class="result"><h5 id="result">Result: <!-- -->0.00<!-- --> <!-- -->km/h</h5></div>
   </div>

  <script>

  $("#calculate").click(function() {

  var metric_distance= 1.60934;
  var speed = document.getElementById("calcValue").value;

  if (document.getElementById("mphToKmh").checked) {
    var result = speed * metric_distance;
    var unit = " km/h"
  }
  else if(document.getElementById("kmhToMph").checked) {
    var result = speed / metric_distance;
    var unit = " mph"
  };

  result_final = result.toFixed(2);
  document.getElementById("result").innerHTML = "Result: " + result_final + unit;
  });
  </script>

  </div>



 <!-- TRAIL RACES HEADDING------------------------------------------------------------------------------------------------->
  <div id="child_container_off" class="container"
   style="
   padding-top:0px;
   margin:20px auto auto auto;  border: 4px solid #0099ff; background:white; color:white;
   border-radius: 10px 10px; background-color: rgb(0, 0, 0); background-color: rgba(0, 0, 0, 0.6);
    filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);
   -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)"">

    <div class="row">
     <div class="col-sm" style="text-align: center; padding:8px 15px 8px 15px">
      <h3 style="margin:2px; padding:4px">  <a href="../events.php">Trail Races</a></h3>
     </div>
    </div>
  </div>
  <!-- ### END------------------------------------------------------------------------------------------------->

 <!-- TRAIL RUN BOX _____ Database Start------------------------------------------------------------------------------------------------->
 <div id="child_container_off" class="container"
  style="
  margin:20px auto auto auto;
  border: 4px solid #0099ff;
  background:white;
  padding-top:10px;
  color:white;
  border-radius: 10px 10px;
  background-color: rgb(0, 0, 0);
  background-color: rgba(0, 0, 0, 0.6);
  filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);
  -ms-filter: 'progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)';
  overflow: hidden;
  background-size: cover; background-position: center; background-image: url('../_images/green2.jpg');
  ">

  <!-- Heading----------->
   <div class="row" style="margin:auto" >

     <div class="col" style="text-align: center; padding:8px 4px 4px 4px; border-bottom:1px solid lightgrey">
       <h5 class="small_h">Trail Series</h5>
     </div>

     <div class="col" style="text-align: center; padding:8px 4px 4px 4px; border-bottom:1px solid lightgrey">
       <h5 class="small_h">Distance</h5>
     </div>

     <div class="col" style="text-align: center; padding:8px 4px 4px 4px; border-bottom:1px solid lightgrey">
       <h5 class="small_h">Country</h5>
     </div>

     <div id="not_mobile" class="col" style="text-align: center; padding:8px 4px 4px 4px; border-bottom:1px solid lightgrey">
       <h5 class="small_h">Climb</h5>
     </div>

     <div class="col" style="text-align: center; padding:8px 4px 4px 4px; border-bottom:1px solid lightgrey">
       <h5 class="small_h">Date</h5>
     </div>

     <div class="col" style="text-align: center; padding:8px 4px 4px 4px; border-bottom:1px solid lightgrey">
       <h5 class="small_h">Days left</h5>
     </div>
   </div>

 <?php //<!--Query Database-->

 $today = date("Y-m-d");

 // Check connection
 $query =  "SELECT * FROM dbs45866.events_table where event_type = 'Trail' AND date > '$today' ORDER BY date ASC";
 $result = mysqli_query($runculator_database, $query);

 if (mysqli_num_rows($result) > 0) {
     // output data of each row
     while($row = mysqli_fetch_assoc($result)) {
?>
<!-- event----------->
        <div class="row" style="margin:auto">
          <div class="col" style="text-align: center; padding:4px 4px 4px 4px">
             <p class="small_p" style="color:blue"><!--Date of Event----------->
                <a href="<?php echo $row["website"] ?>" target="_blank">
                <u><?php echo $row["event_name"] ?></u>
               </a>
             </p>
          </div>

<!--Distance----------->
          <div class="col" style="text-align: center; padding:4px 4px 4px 4px">
            <p class="small_p">
            <?php $distance = $row["distance"];
                  echo $distance , "km";;
            ?></p>
          </div>

<!--Country of Event----------->
         <div class="col" style="text-align: center; padding:4px 4px 4px 4px">
           <p class="small_p">
           <?php $event_country = $row["country"];
                 #echo $event_country
           ?></p>
             <img style="width:25px; height:25px" title="<?php echo $event_country?>" src="<?php echo '_images/flags_rec/', $row["country"],'.png' ?>">
         </div>


<!--Elevation----------->
          <div id="not_mobile" class="col" style="text-align: center; padding:4px 4px 4px 4px">
            <p class="small_p">
            <?php $elevation = $row["climb"];
                  echo $elevation , "m";
            ?></p>
          </div>



<!--Date of Event----------->
          <div class="col" style="text-align: center; padding:4px 4px 4px 4px">
            <p class="small_p">
            <?php $event_date = $row["date"];
                  $event_date = date("M, d, Y", strtotime($event_date));
                  echo $event_date
            ?></p>
          </div>


<!--Date Difference in days----------->
          <div class="col" style="text-align: center; padding:4px 4px 4px 4px">
           <p class="small_p">
           <?php $today = new DateTime(date("M d Y "));
                 $event_date_str = new DateTime($row["date"]);
                 $dDiff = $today->diff($event_date_str);
                 echo $dDiff->format('%r%a');
           ?></p>
          </div>
         </div>

<?php }
 } else {
     echo "0 results";
 }
// mysqli_close($runculator_database);
 ?>

</div>
 <!-- Database End------------------------------------------------------------------------------------------------->

 <!-- Marathon Major------------------------------------------------------------------------------------------------->
 <!-- MARATHON HEADDING------------------------------------------------------------------------------------------------->
  <div id="child_container_off" class="container"
   style="
   padding-top:0px;
   margin:20px auto auto auto;  border: 4px solid #0099ff; background:white; color:white;
   border-radius: 10px 10px; background-color: rgb(0, 0, 0); background-color: rgba(0, 0, 0, 0.6);
    filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);
   -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)"">

    <div class="row">
     <div class="col-sm" style="text-align: center; padding:8px 15px 8px 15px">
      <h3 style="margin:2px; padding:4px">  <a href="../events.php">Marathon Races</a></h3>
     </div>
    </div>
  </div>
  <!-- ### END------------------------------------------------------------------------------------------------->

 <div id="child_container_off" class="container"
  style="
  margin:20px auto auto auto;  border: 4px solid #0099ff; background:white;
  color:white;
  padding-top:10px;
  border-radius: 10px 10px;
  background-color: rgb(0, 0, 0);
  background-color: rgba(0, 0, 0, 0.6);
  filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);
  -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)"">

 <!-- Heading----------->
  <div class="row" style="margin:auto" >
    <div class="col" style="text-align: center; padding:8px 4px 4px 4px; border-bottom:1px solid lightgrey">
      <h5 class="small_h">Major Series</h5>
    </div>

    <div class="col" style="text-align: center; padding:8px 4px 4px 4px; border-bottom:1px solid lightgrey">
      <h5 class="small_h">Country</h5>
    </div>

    <div class="col" style="text-align: center; padding:8px 4px 4px 4px; border-bottom:1px solid lightgrey">
      <h5 class="small_h">Date</h5>
    </div>

    <div class="col" style="text-align: center; padding:8px 4px 4px 4px; border-bottom:1px solid lightgrey">
      <h5 class="small_h">Days left</h5>
    </div>
  </div>

     <?php //<!--Query Database-->
     $today = date("Y-m-d");
     $query =  "SELECT * FROM dbs45866.events_table WHERE event_type = 'Marathon' AND date > '$today' ORDER BY date ASC";
     $result = mysqli_query($runculator_database, $query);

     if (mysqli_num_rows($result) > 0) {
         // output data of each row
         while($row = mysqli_fetch_assoc($result)) {
     ?>
     <!-- event----------->
            <div class="row" style="margin:auto">
              <div class="col" style="text-align: center; padding:4px 4px 4px 4px">
                 <p class="small_p" style="color:blue"><!--Date of Event----------->
                    <a href="<?php echo $row["website"] ?>" target="_blank">
                    <u><?php echo $row["event_name"] ?></u>
                   </a>
                 </p>
              </div>

    <!--Country of Event----------->
             <div class="col" style="text-align: center; padding:4px 4px 4px 4px">
               <p class="small_p">
               <?php $event_country = $row["country"];
                     #echo $event_country
               ?></p>
                <img style="width:25px; height:25px" title="<?php echo $event_country?>" src="<?php echo '_images/flags_rec/', $row["country"],'.png' ?>">
             </div>

     <!--Date of Event----------->
              <div class="col" style="text-align: center; padding:4px 4px 4px 4px">
                <p class="small_p">
                <?php $event_date = $row["date"];
                      $event_date = date("M, d, Y", strtotime($event_date));
                      echo $event_date
                ?></p>
              </div>


     <!--Date Difference in days----------->
              <div class="col" style="text-align: center; padding:4px 4px 4px 4px">
               <p class="small_p">
               <?php $today = new DateTime(date("M d Y "));
                     $event_date_str = new DateTime($row["date"]);
                     $dDiff = $today->diff($event_date_str);
                     echo $dDiff->format('%r%a');
               ?></p>
              </div>
             </div>

     <?php }
     } else {
         echo "0 results";
     }
     #mysqli_close($runculator_database);
     ?>

     </div>
     <!-- Database End------------------------------------------------------------------------------------------------->

     <!-- IRONMAN RACES HEADDING------------------------------------------------------------------------------------------------->
      <div id="child_container_off" class="container"
       style="
       padding-top:0px;
       margin:20px auto auto auto;  border: 4px solid #0099ff; background:white; color:white;
       border-radius: 10px 10px; background-color: rgb(0, 0, 0); background-color: rgba(0, 0, 0, 0.6);
        filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);
       -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)"">

        <div class="row">
         <div class="col-sm" style="text-align: center; padding:8px 15px 8px 15px">
          <h3 style="margin:2px; padding:4px">  <a href="../events.php">IRONMAN Races</a></h3>
         </div>
        </div>
      </div>
      <!-- ### END------------------------------------------------------------------------------------------------->

     <!--IRONMAN  BOX _____ Database Start------------------------------------------------------------------------------------------------->
     <div id="child_container_off" class="container"
      style="
      margin:20px auto auto auto;
      padding-top:10px;
      border: 4px solid #0099ff;
      background:white;
      color:white;
      border-radius: 10px 10px;
      background-color: rgb(0, 0, 0);
      background-color: rgba(0, 0, 0, 0.6);
      filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);
      -ms-filter: 'progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)';
      overflow: hidden;

      ">

      <!-- Heading----------->
       <div class="row" style="margin:auto" >

         <div class="col-3" style="text-align: center; padding:8px 4px 4px 4px; border-bottom:1px solid lightgrey">
           <h5 class="small_h">IRONMAN</h5>
         </div>

         <div class="col-3" style="text-align: center; padding:8px 4px 4px 4px; border-bottom:1px solid lightgrey">
           <h5 class="small_h">City</h5>
         </div>

         <div class="col-2" style="text-align: center; padding:8px 4px 4px 4px; border-bottom:1px solid lightgrey">
           <h5 class="small_h">Country</h5>
         </div>


         <div class="col-2" style="text-align: center; padding:8px 4px 4px 4px; border-bottom:1px solid lightgrey">
           <h5 class="small_h">Date</h5>
         </div>

         <div class="col-2" style="text-align: center; padding:8px 4px 4px 4px; border-bottom:1px solid lightgrey">
           <h5 class="small_h">Days left</h5>
         </div>
       </div>

     <?php //<!--Query Database-->

     // Check connection
     $today = date("Y-m-d");
     $query =  "SELECT * FROM dbs45866.events_table
                WHERE event_type = 'IRONMAN' AND date > '$today'
                ORDER BY date ASC ";
     $result = mysqli_query($runculator_database, $query);

     if (mysqli_num_rows($result) > 0) {
         // output data of each row
         while($row = mysqli_fetch_assoc($result)) {
     ?>
     <!-- event----------->
            <div class="row" style="margin:auto">
              <div class="col-3" style="text-align: center; padding:4px 4px 4px 4px; border-bottom:1px solid lightgrey">
                 <p class="small_p" style="color:blue"><!--Date of Event----------->
                    <a href="<?php echo $row["website"] ?>" target="_blank">
                    <u><?php $ironman_event_short = str_replace('IRONMAN ',"IM ",$row["event_name"]);


                    echo $ironman_event_short ?></u>
                   </a>
                 </p>
              </div>

     <!--City----------->
              <div class="col-3" style="text-align: center; padding:4px 4px 4px 4px; border-bottom:1px solid lightgrey">
                <p class="small_p">
                <?php $city = $row["city"];
                      echo $city;
                ?></p>
              </div>

     <!--Country of Event----------->
             <div class="col-2" style="text-align: center; padding:4px 4px 4px 4px; border-bottom:1px solid lightgrey">
               <p class="small_p">
               <?php $event_country = $row["country"];
                     #echo $event_country
               ?></p>
                <img style="width:25px; height:25px" title="<?php echo $event_country?>" src="<?php echo '_images/flags_rec/', $row["country"],'.png' ?>">
             </div>



     <!--Date of Event----------->
              <div class="col-2" style="text-align: center; padding:4px 4px 4px 4px; border-bottom:1px solid lightgrey">
                <p class="small_p">
                <?php $event_date = $row["date"];
                      $event_date = date("M, d, Y", strtotime($event_date));
                      echo $event_date
                ?></p>
              </div>


     <!--Date Difference in days----------->
              <div class="col-2" style="text-align: center; padding:4px 4px 4px 4px; border-bottom:1px solid lightgrey">
               <p class="small_p">
               <?php $today = new DateTime(date("M d Y "));
                     $event_date_str = new DateTime($row["date"]);
                     $dDiff = $today->diff($event_date_str);
                     echo $dDiff->format('%r%a');
               ?></p>
              </div>
             </div>

     <?php }
     } else {
         echo "0 results";
     }
      mysqli_close($runculator_database);
     ?>

     </div>
   <!-- Database End------------------------------------------------------------------------------------------------->



<div id="child_container_off" class="container"
 style="
  margin:20px auto auto auto;  border: 4px solid #0099ff; background:white;
  border-radius: 10px 10px;
   padding-top:10px;
  background-color: rgb(0, 0, 0);
  /* RGBa with 0.6 opacity */  background-color: rgba(0, 0, 0, 0.6);
  /* For IE 5.5 - 7*/  filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);
  /* For IE 8*/  -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";
 ">

<p style="color:#F0FFFF; padding:10px"><b>Note:</b> In running, pace is usually defined as the number of minutes it takes to cover a mile or kilometer. Pacing is often a critical aspect of endurance events. Some coaches advocate training at a combination of specific paces related to one's fitness in order to stimulate various physiological improvements.</p>
</div>
</div>
</div>
</div>
</div>

<?php include("_includes/footer.php") ?>
</body>
