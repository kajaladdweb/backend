<?php
     
    $weather = "";
    $error = "";
     
    if ($_GET['city']) {
         

         $apiData = file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=".$_GET['city']."&APPID=33ad56e25a85ff64d4982ed6117c5454");
        $weatherArray = json_decode($apiData, true);
         
        if ($weatherArray['cod'] == 200) {
         
            $weather = "The weather in ".$_GET['city']." is currently '".$weatherArray['weather'][0]['description']."'. ";
 
            // $tempInCelcius = intval($weatherArray['main']['temp'] - 273);
            $tempInCelcius =$weatherArray['main']['temp'] - 273;
 
            // $weather .= "<b>".$weatherArray['name'] The temperature is ".$tempInCelcius."&deg;C and the wind speed is ".$weatherArray['wind']['speed']."m/s.";
            $weatherArray = json_decode($apiData, true);
      $tempCelsius = $weatherArray['main']['temp'] - 273;
      $weather = "<b>".$weatherArray['name'].", ".$weatherArray['sys']['country']." : ".intval($tempCelsius)."&deg;C</b><br>";
      $weather .= "<b>Weather Condition : </b>".$weatherArray['weather']['0']['description']."<br>";
      $weather .= "<b>Atmosperic Pressure : </b>".$weatherArray['main']['pressure']."hPa<br> ";
      $weather .= "<b>Wind Speed : </b>".$weatherArray['wind']['speed']."meter/sec<br> ";
      $weather .= "<b>Cloudness : </b>".$weatherArray['clouds']['all']."%<br>";
      date_default_timezone_set('Asia/karachi');
      $sunrise = $weatherArray['sys']['sunrise'];
      $weather .= "<b>Sunrise : </b>" .date("g:i a", $sunrise)."<br>";
      $weather .= "<b>Current Time : </b>" .date("F j, Y, g:i a");

            
             
        } else {
             
            $error = "Could not find city - please try again.";
             
        }
         
    }
 
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
  <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
 
  <title>Weather App</title>
</head>
<body>
    <div class="container">
       
          <h1>What's The Weather?</h1>
           
           
           
          <form>
  <fieldset class="form-group">
    <label for="city">Enter the name of a city.</label>
    <input type="text" class="form-control" name="city" id="city" placeholder="Eg. London, Tokyo" value = "<?php echo $_GET['city']; ?>">
  </fieldset>
   
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
       
          <div id="weather">
            <?php
               
              if ($weather) {
                   
                  echo '<div class="alert alert-success" role="alert">
  '.$weather.'
</div>';
                   
              } else if ($error) {
                   
                  echo '<div class="alert alert-danger" role="alert">
  '.$error.'
</div>';
                   
              }
               
              ?></div>
      </div>
 
    <!-- jQuery first, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
</body>
</html>