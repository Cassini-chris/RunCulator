<!DOCTYPE html>
<?php error_reporting(0);?>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>RunCulator</title>

    <?php // error_reporting(0); // Turn off all error reporting
          require_once('connection/runculator_database_connection.php');
          session_start();

          // get user details
                  $user_agent = $_SERVER['HTTP_USER_AGENT']; //user browser
                  $ip_address = $_SERVER["REMOTE_ADDR"];     // user ip adderss
                  $page_name = $_SERVER["SCRIPT_NAME"];      // page the user looking


                    function isMobileDevice() {
                        return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
                    }
                    if(isMobileDevice()){
                        $device_type =  "mobile";
                    }
                    else {
                        $device_type= "desktop";
                    }
    ?>

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
   <?php //include("_includes/pa_antiadblock_2902714.php") ?>
     <?php //include("_includes/pa_antiadblock_2902793.php") ?>
         <?php //include("_includes/pa_antiadblock_2902878.php") ?>



<!-- HEADING TITLE !----------------------->
<div id="parent_container">

  <!-- Advertisement------------------------------------------------------------------------------------------------->
  <!-- Advertisement------------------------------------------------------------------------------------------------->
  <script type="text/javascript" src="//deloplen.com/apu.php?zoneid=2902722" async data-cfasync="false"></script>

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
    <!-- Advertisement------------------------------------------------------------------------------------------------->
    <!-- Advertisement------------------------------------------------------------------------------------------------->

   <h1 id="pace_title"style="text-align: center;font-size:50px; text-shadow: 2px 2px #0099ff; "> Eliud Kipchoge World Record Marathon Pace</h1>



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



<table style="text-align: center;margin: 10px auto 10px auto;  ; color:white;" border=0 cellpadding=0 cellspacing=0 width=363 style='border-collapse:
    collapse;table-layout:fixed;width:272pt'>
    <col class=xl6527059 width=69 style='mso-width-source:userset;mso-width-alt:
    2523;width:52pt'>
    <col class=xl6527059 width=155 style='mso-width-source:userset;mso-width-alt:
    5668;width:116pt'>
    <col class=xl6527059 width=139 style='mso-width-source:userset;mso-width-alt:
    5083;width:104pt'>
    <tr height=20 style='height:15.0pt'>
     <td height=20 class=xl7827059 width=69 style='height:15.0pt;width:52pt'>Kilometer</td>
     <td class=xl7827059 width=155 style='border-left:none;width:116pt'>Pace per
     km</td>
     <td class=xl7827059 width=139 style='border-left:none;width:104pt'>Duration</td>
    </tr>
    <tr height=20 style='height:15.0pt'>
     <td height=20 class=xl6627059 style='height:15.0pt;border-top:none'>1</td>
     <td class=xl6727059 style='border-top:none;border-left:none'>2:53min/k</td>
     <td class=xl6827059 style='border-top:none;border-left:none'>0:02:53</td>
    </tr>
    <tr height=20 style='height:15.0pt'>
     <td height=20 class=xl6627059 style='height:15.0pt;border-top:none'>2</td>
     <td class=xl6727059 style='border-top:none;border-left:none'>2:53min/k</td>
     <td class=xl6827059 style='border-top:none;border-left:none'>0:05:46</td>
    </tr>
    <tr height=20 style='height:15.0pt'>
     <td height=20 class=xl6627059 style='height:15.0pt;border-top:none'>3</td>
     <td class=xl6727059 style='border-top:none;border-left:none'>2:53min/k</td>
     <td class=xl6827059 style='border-top:none;border-left:none'>0:08:39</td>
    </tr>
    <tr height=20 style='height:15.0pt'>
     <td height=20 class=xl6627059 style='height:15.0pt;border-top:none'>4</td>
     <td class=xl6727059 style='border-top:none;border-left:none'>2:53min/k</td>
     <td class=xl6827059 style='border-top:none;border-left:none'>0:11:32</td>
    </tr>
    <tr height=20 style='height:15.0pt'>
     <td height=20 class=xl6927059 style='height:15.0pt;border-top:none'>5</td>
     <td class=xl7027059 style='border-top:none;border-left:none'>2:53min/k</td>
     <td class=xl7127059 style='border-top:none;border-left:none'>0:14:25</td>
    </tr>
    <tr height=20 style='height:15.0pt'>
     <td height=20 class=xl6627059 style='height:15.0pt;border-top:none'>6</td>
     <td class=xl6727059 style='border-top:none;border-left:none'>2:53min/k</td>
     <td class=xl6827059 style='border-top:none;border-left:none'>0:17:18</td>
    </tr>
    <tr height=20 style='height:15.0pt'>
     <td height=20 class=xl6627059 style='height:15.0pt;border-top:none'>7</td>
     <td class=xl6727059 style='border-top:none;border-left:none'>2:53min/k</td>
     <td class=xl6827059 style='border-top:none;border-left:none'>0:20:11</td>
    </tr>
    <tr height=20 style='height:15.0pt'>
     <td height=20 class=xl6627059 style='height:15.0pt;border-top:none'>8</td>
     <td class=xl6727059 style='border-top:none;border-left:none'>2:53min/k</td>
     <td class=xl6827059 style='border-top:none;border-left:none'>0:23:04</td>
    </tr>
    <tr height=20 style='height:15.0pt'>
     <td height=20 class=xl6627059 style='height:15.0pt;border-top:none'>9</td>
     <td class=xl6727059 style='border-top:none;border-left:none'>2:53min/k</td>
     <td class=xl6827059 style='border-top:none;border-left:none'>0:25:57</td>
    </tr>
    <tr height=20 style='height:15.0pt'>
     <td height=20 class=xl7227059 style='height:15.0pt;border-top:none'>10</td>
     <td class=xl7327059 style='border-top:none;border-left:none'>2:53min/k</td>
     <td class=xl7427059 style='border-top:none;border-left:none'>0:28:50</td>
    </tr>
    <tr height=20 style='height:15.0pt'>
     <td height=20 class=xl6627059 style='height:15.0pt;border-top:none'>11</td>
     <td class=xl6727059 style='border-top:none;border-left:none'>2:53min/k</td>
     <td class=xl6827059 style='border-top:none;border-left:none'>0:31:43</td>
    </tr>
    <tr height=20 style='height:15.0pt'>
     <td height=20 class=xl6627059 style='height:15.0pt;border-top:none'>12</td>
     <td class=xl6727059 style='border-top:none;border-left:none'>2:53min/k</td>
     <td class=xl6827059 style='border-top:none;border-left:none'>0:34:36</td>
    </tr>
    <tr height=20 style='height:15.0pt'>
     <td height=20 class=xl6627059 style='height:15.0pt;border-top:none'>13</td>
     <td class=xl6727059 style='border-top:none;border-left:none'>2:53min/k</td>
     <td class=xl6827059 style='border-top:none;border-left:none'>0:37:29</td>
    </tr>
    <tr height=20 style='height:15.0pt'>
     <td height=20 class=xl6627059 style='height:15.0pt;border-top:none'>14</td>
     <td class=xl6727059 style='border-top:none;border-left:none'>2:53min/k</td>
     <td class=xl6827059 style='border-top:none;border-left:none'>0:40:21</td>
    </tr>
    <tr height=20 style='height:15.0pt'>
     <td height=20 class=xl6627059 style='height:15.0pt;border-top:none'>15</td>
     <td class=xl6727059 style='border-top:none;border-left:none'>2:53min/k</td>
     <td class=xl6827059 style='border-top:none;border-left:none'>0:43:14</td>
    </tr>
    <tr height=20 style='height:15.0pt'>
     <td height=20 class=xl6627059 style='height:15.0pt;border-top:none'>16</td>
     <td class=xl6727059 style='border-top:none;border-left:none'>2:53min/k</td>
     <td class=xl6827059 style='border-top:none;border-left:none'>0:46:07</td>
    </tr>
    <tr height=20 style='height:15.0pt'>
     <td height=20 class=xl6627059 style='height:15.0pt;border-top:none'>17</td>
     <td class=xl6727059 style='border-top:none;border-left:none'>2:53min/k</td>
     <td class=xl6827059 style='border-top:none;border-left:none'>0:49:00</td>
    </tr>
    <tr height=20 style='height:15.0pt'>
     <td height=20 class=xl6627059 style='height:15.0pt;border-top:none'>18</td>
     <td class=xl6727059 style='border-top:none;border-left:none'>2:53min/k</td>
     <td class=xl6827059 style='border-top:none;border-left:none'>0:51:53</td>
    </tr>
    <tr height=20 style='height:15.0pt'>
     <td height=20 class=xl6627059 style='height:15.0pt;border-top:none'>19</td>
     <td class=xl6727059 style='border-top:none;border-left:none'>2:53min/k</td>
     <td class=xl6827059 style='border-top:none;border-left:none'>0:54:46</td>
    </tr>
    <tr height=20 style='height:15.0pt'>
     <td height=20 class=xl7227059 style='height:15.0pt;border-top:none'>20</td>
     <td class=xl7327059 style='border-top:none;border-left:none'>2:53min/k</td>
     <td class=xl7427059 style='border-top:none;border-left:none'>0:57:39</td>
    </tr>
    <tr height=20 style='height:15.0pt'>
     <td height=20 class=xl6627059 style='height:15.0pt;border-top:none'>21</td>
     <td class=xl6727059 style='border-top:none;border-left:none'>2:53min/k</td>
     <td class=xl6827059 style='border-top:none;border-left:none'>1:00:32</td>
    </tr>
    <tr height=20 style='height:15.0pt'>
     <td height=20 class=xl6627059 style='height:15.0pt;border-top:none'>22</td>
     <td class=xl6727059 style='border-top:none;border-left:none'>2:53min/k</td>
     <td class=xl6827059 style='border-top:none;border-left:none'>1:03:25</td>
    </tr>
    <tr height=20 style='height:15.0pt'>
     <td height=20 class=xl6627059 style='height:15.0pt;border-top:none'>23</td>
     <td class=xl6727059 style='border-top:none;border-left:none'>2:53min/k</td>
     <td class=xl6827059 style='border-top:none;border-left:none'>1:06:18</td>
    </tr>
    <tr height=20 style='height:15.0pt'>
     <td height=20 class=xl6627059 style='height:15.0pt;border-top:none'>24</td>
     <td class=xl6727059 style='border-top:none;border-left:none'>2:53min/k</td>
     <td class=xl6827059 style='border-top:none;border-left:none'>1:09:11</td>
    </tr>
    <tr height=20 style='height:15.0pt'>
     <td height=20 class=xl6627059 style='height:15.0pt;border-top:none'>25</td>
     <td class=xl6727059 style='border-top:none;border-left:none'>2:53min/k</td>
     <td class=xl6827059 style='border-top:none;border-left:none'>1:12:04</td>
    </tr>
    <tr height=20 style='height:15.0pt'>
     <td height=20 class=xl6627059 style='height:15.0pt;border-top:none'>26</td>
     <td class=xl6727059 style='border-top:none;border-left:none'>2:53min/k</td>
     <td class=xl6827059 style='border-top:none;border-left:none'>1:14:57</td>
    </tr>
    <tr height=20 style='height:15.0pt'>
     <td height=20 class=xl6627059 style='height:15.0pt;border-top:none'>27</td>
     <td class=xl6727059 style='border-top:none;border-left:none'>2:53min/k</td>
     <td class=xl6827059 style='border-top:none;border-left:none'>1:17:50</td>
    </tr>
    <tr height=20 style='height:15.0pt'>
     <td height=20 class=xl6627059 style='height:15.0pt;border-top:none'>28</td>
     <td class=xl6727059 style='border-top:none;border-left:none'>2:53min/k</td>
     <td class=xl6827059 style='border-top:none;border-left:none'>1:20:43</td>
    </tr>
    <tr height=20 style='height:15.0pt'>
     <td height=20 class=xl6627059 style='height:15.0pt;border-top:none'>29</td>
     <td class=xl6727059 style='border-top:none;border-left:none'>2:53min/k</td>
     <td class=xl6827059 style='border-top:none;border-left:none'>1:23:36</td>
    </tr>
    <tr height=20 style='height:15.0pt'>
     <td height=20 class=xl7227059 style='height:15.0pt;border-top:none'>30</td>
     <td class=xl7327059 style='border-top:none;border-left:none'>2:53min/k</td>
     <td class=xl7427059 style='border-top:none;border-left:none'>1:26:29</td>
    </tr>
    <tr height=20 style='height:15.0pt'>
     <td height=20 class=xl6627059 style='height:15.0pt;border-top:none'>31</td>
     <td class=xl6727059 style='border-top:none;border-left:none'>2:53min/k</td>
     <td class=xl6827059 style='border-top:none;border-left:none'>1:29:22</td>
    </tr>
    <tr height=20 style='height:15.0pt'>
     <td height=20 class=xl6627059 style='height:15.0pt;border-top:none'>32</td>
     <td class=xl6727059 style='border-top:none;border-left:none'>2:53min/k</td>
     <td class=xl6827059 style='border-top:none;border-left:none'>1:32:15</td>
    </tr>
    <tr height=20 style='height:15.0pt'>
     <td height=20 class=xl6627059 style='height:15.0pt;border-top:none'>33</td>
     <td class=xl6727059 style='border-top:none;border-left:none'>2:53min/k</td>
     <td class=xl6827059 style='border-top:none;border-left:none'>1:35:08</td>
    </tr>
    <tr height=20 style='height:15.0pt'>
     <td height=20 class=xl6627059 style='height:15.0pt;border-top:none'>34</td>
     <td class=xl6727059 style='border-top:none;border-left:none'>2:53min/k</td>
     <td class=xl6827059 style='border-top:none;border-left:none'>1:38:01</td>
    </tr>
    <tr height=20 style='height:15.0pt'>
     <td height=20 class=xl6627059 style='height:15.0pt;border-top:none'>35</td>
     <td class=xl6727059 style='border-top:none;border-left:none'>2:53min/k</td>
     <td class=xl6827059 style='border-top:none;border-left:none'>1:40:54</td>
    </tr>
    <tr height=20 style='height:15.0pt'>
     <td height=20 class=xl6627059 style='height:15.0pt;border-top:none'>36</td>
     <td class=xl6727059 style='border-top:none;border-left:none'>2:53min/k</td>
     <td class=xl6827059 style='border-top:none;border-left:none'>1:43:47</td>
    </tr>
    <tr height=20 style='height:15.0pt'>
     <td height=20 class=xl6627059 style='height:15.0pt;border-top:none'>37</td>
     <td class=xl6727059 style='border-top:none;border-left:none'>2:53min/k</td>
     <td class=xl6827059 style='border-top:none;border-left:none'>1:46:40</td>
    </tr>
    <tr height=20 style='height:15.0pt'>
     <td height=20 class=xl6627059 style='height:15.0pt;border-top:none'>38</td>
     <td class=xl6727059 style='border-top:none;border-left:none'>2:53min/k</td>
     <td class=xl6827059 style='border-top:none;border-left:none'>1:49:33</td>
    </tr>
    <tr height=20 style='height:15.0pt'>
     <td height=20 class=xl6627059 style='height:15.0pt;border-top:none'>39</td>
     <td class=xl6727059 style='border-top:none;border-left:none'>2:53min/k</td>
     <td class=xl6827059 style='border-top:none;border-left:none'>1:52:26</td>
    </tr>
    <tr height=20 style='height:15.0pt'>
     <td height=20 class=xl7227059 style='height:15.0pt;border-top:none'>40</td>
     <td class=xl7327059 style='border-top:none;border-left:none'>2:53min/k</td>
     <td class=xl7427059 style='border-top:none;border-left:none'>1:55:18</td>
    </tr>
    <tr height=20 style='height:15.0pt'>
     <td height=20 class=xl6627059 style='height:15.0pt;border-top:none'>41</td>
     <td class=xl6727059 style='border-top:none;border-left:none'>2:53min/k</td>
     <td class=xl6827059 style='border-top:none;border-left:none'>1:58:11</td>
    </tr>
    <tr height=20 style='height:15.0pt'>
     <td height=20 class=xl6627059 style='height:15.0pt;border-top:none'>42</td>
     <td class=xl6727059 style='border-top:none;border-left:none'>2:53min/k</td>
     <td class=xl6827059 style='border-top:none;border-left:none'>2:01:04</td>
    </tr>
    <tr height=20 style='height:15.0pt'>
     <td height=20 class=xl7527059 style='height:15.0pt;border-top:none'>42.2</td>
     <td class=xl7627059 style='border-top:none;border-left:none'>2:53min/k</td>
     <td class=xl7727059 style='border-top:none;border-left:none'>2:01:39</td>

    </tr>





   </table>
   <p style="text-align:center; color:#f6ffc9"> *Eliud Kipchoge World Record Marathon Pace (Berlin 2018)</p>

</div>


<?php include("_includes/footer.php") ?>
</body>
