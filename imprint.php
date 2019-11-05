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
   <h1 id="pace_title"style="text-align: center;  text-shadow: 2px 2px #0099ff;"> RunCulator</h1>

      <div id="child_container"
       style="

        margin:auto;  border: 4px solid #0099ff; background:white;
        border-radius: 30px 10px;
        background-color: rgb(0, 0, 0);
        background-color: rgba(0, 0, 0, 0.6);
        filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);
        -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";
       ">

<div style="padding:5px 0 0px 15px; color:white; width:auto; margin:auto; text-align:center">
  <div id="Home" style="margin-left:20px; margin-right:20px;color:#F0FFFF">
    <h1 style="padding:30px 0 0px 0">Imprint</h1>
    <div id="logo"><img src="_images/r3.png" name="Logo"  id="Logo" width="80px" height="80px" style="margin: 0 0 10px 0"></div>
  </div>

 <div id="Imprint_left">
       <span><strong>Developer:</strong>
       Dr. Christoph Mittendorf <br />
       <strong>Location:</strong>
       Munich,
       Germany</span><br />

   <span><strong>Internet: </strong>
       <a href="https://www.runculator.com/">https://www.runculator.com</a> </span><br />

       <span><strong>Contact:</strong>
       E-Mail: <a href="mailto:hello@runculator.com">hello@runculator.com</a> </span>

 </div>
</div>

<div id="Line" style="margin-top:30px"></div>
<div id="info" ; style="color:#666; text-align:center">- We make your Runs count -</div>

    </div>
 </div>
 </div>




<?php include("_includes/footer.php") ?>
</body>
