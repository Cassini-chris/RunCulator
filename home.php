<?php error_reporting(0);?>

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



<?php include_once("_includes/analytics.php") ?>
</head>

<body background="_images/background.jpg" style="background-size:cover">

<?php include("_includes/navigation.php") ?>

<!-- HEADING TITLE !----------------------->
<div id="parent_container">
   <h1 id="pace_title"style="text-align: center;  text-shadow: 2px 2px #0099ff;"> Sports Calculator</h1>



      <div id="child_container"
       style="
        margin:auto;  border: 4px solid #0099ff; background:white;
        border-radius: 30px 10px;
        background-color: rgb(0, 0, 0);
        /* RGBa with 0.6 opacity */
        background-color: rgba(0, 0, 0, 0.6);
        /* For IE 5.5 - 7*/
        filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);
        /* For IE 8*/
        -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";
       ">

<div style="padding:5px 0 0 15px">
<h1 style="color:#F0FFFF"> Why RunCulator</h1>
<p style="color:#F0FFFF">
    RunCulator is a website primarily for athletes that provides an Easy to use and Mobile Friendly </br>>> Pace, Distance, Duration Calculator for runners and cyclists.
</br></p>

<h1 style="color:#F0FFFF">Who Uses a RunCulator?</h1/>
<p style="color:#F0FFFF">
Sports calculators are useful for both new athletes and professional athletes.
</p>
<h1 style="color:#F0FFFF">
What Can You Calculate with a RunCulator?
</h1>
<p style="color:#F0FFFF">
(1) Determine how fast your pace should be if you have a certain finish time.</br>
(2) Determine the pace of your workout.</br>
(3) Determine the possibe distance of your run.</br>
(4) Convert Miles to Kilometers // Kilometers to Miles</br>
</br>

</p>

<style>
a:link {
color:white;
  text-decoration: none;
}

a:visited {
  text-decoration: none;
}

a:hover {
  text-decoration: underline;
}

a:active {
  text-decoration: underline;
}
</style>

<div style="height:100px">
<div
style="
 border: 2px solid #0099ff;  height:40px;
 width: 120px;
 float:left;
 border-radius: 50px 50px;
 margin: 10px 50px 10px 50px;
 padding:0px;
 line-height: 40px;
 color:white">
<p style="text-align: center"><a href="duration.php">DURATION</a></p>
</div>

<div
style="
float:left;
 width: 120px;
 border: 2px solid #0099ff;  height:40px;
 border-radius: 50px 50px;
 margin: 10px 50px 10px 50px;
 padding:0px;
 line-height: 40px;
 color:white">
<p style="text-align: center"><a style="color" href="distance.php">DISTANCE</a></p>
</div>

<div
style="
float:left;
 border: 2px solid #0099ff;  height:40px;
  width: 120px;
 border-radius: 50px 50px;
 margin: 10px 50px 10px 50px;
 padding:0px;
 line-height: 40px;
 color:white">
<p style="text-align: center"><a style="color" href="pace.php">PACE</a></p>
</div>

</div>


<h4 style="color:white">Sports-Bonkers!</h4>

</div>
 </div>




</form>


</body>

<style>
#sticky {
  width:100%;

  padding-right:20px;

  color:white;
  font-weight:bold;
  font-size:20px;
  text-align:right;
  position:absolute; /*Here's what sticks it*/
  bottom:0;          /*to the bottom of the body/page*/
  left:0;            /*and to the left of the body/page.*/
}
</style>
<footer id="sticky">by Christoph Mittendorf</footer>
