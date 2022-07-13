<?php
 $current_time = date("h:i:s A");
 $current_date = date("d-m-Y");
 date_default_timezone_set('Asia/Kolkata');
 $server_time = date("h:i:s A");
?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8" />
 <!-- To refresh the browser every 1 second to sync the time with server-->
 <meta http-equiv="refresh" content="1">
 <title>Digital Clock</title>
 <style>
 h1, h2 {
 text-align: center;
 }
 </style>
</head>
<body>
 <h1>clock</h1>
 <h1><?php echo $current_time?></h1>
 <h2><?php echo 'Date: '.$current_date; ?></h2>
</body>
</html>