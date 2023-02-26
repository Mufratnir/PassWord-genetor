<?php
$password = "";
$charset = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $length = $_POST["length"];
  $upperCase = isset($_POST["upperCase"]) ? true : false;
  $lowerCase = isset($_POST["lowerCase"]) ? true : false;
  $numbers = isset($_POST["Number"]) ? true : false;
  $special_chars = isset($_POST["Special_Character"]) ? true : false;
  $mixed_chars = isset($_POST["mixed"]) ? true : false;
  if ($upperCase) $charset .= "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
  if ($lowerCase) $charset .= "abcdefghijklmnopqrstuvwxyz";
  if ($numbers) $charset .= "0123456789";
  if ($special_chars) $charset .= '!@#$%^&*()_+-={}[]|\\:;\"<>,.?/';
  if ($mixed_chars) $charset .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()_+-={}[]|\\:;\"<>,.?';

  $charset_length = strlen($charset);
  for ($i = 0; $i < $length; $i++) {
    $random_index = rand(0, $charset_length - 1);
    $password .= $charset[$random_index];
  }
}
?>

<!DOCTYPE html><!--  This site was created in Webflow. https://www.webflow.com  -->
<!--  Last Published: Fri Feb 24 2023 11:48:38 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="63f898ab71afc22f8e4ea135" data-wf-site="63f898ab71afc232dc4ea134">
<head>
  <meta charset="utf-8">
  <title>Password genaroted</title>
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href="css/webflow.css" rel="stylesheet" type="text/css">
  <link href="css/weboceans-groovy-site.webflow.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["PT Sans:400,400italic,700,700italic","Droid Sans:400,700","Lato:100,100italic,300,300italic,400,400italic,700,700italic,900,900italic"]  }});</script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link href="images/webclip.png" rel="apple-touch-icon">
</head>
<body>
  <div class="page-wrapper">
    <div class="password-genetor-div">
      <h1 class="heading">Password Generator</h1>
      <div class="w-form">
        <form  action="" method="POST" >
        <input type="number" class="text-field w-input" maxlength="256" type="number" id="length" name="length"  placeholder="Inter your cector" min="0" max="50" required>
        <input type="submit" value="Submit" data-wait="Please wait..." class="submit-button w-button">
        <div class="flex"><label class="w-checkbox checkbox-field">
        <input type="checkbox" name="upperCase" id="upperCase" value="1" class="w-checkbox-input checkbox"><span class="checkbox-label w-form-label" for="checkbox">ABC</span>
        </label><label class="w-checkbox checkbox-field">
        <input type="checkbox" name="lowerCase" id="lowerCase" value="1" class="w-checkbox-input checkbox">
        <span class="checkbox-label w-form-label" for="checkbox-5">abc</span></label><label class="w-checkbox checkbox-field">
        <input type="checkbox" name="Number" id="Number" value="1" class="w-checkbox-input checkbox">
        <span class="checkbox-label w-form-label" for="checkbox-4">123</span></label><label class="w-checkbox checkbox-field">
        <input type="checkbox" name="Special_Character" id="Special_Character" value="1" class="w-checkbox-input checkbox">
        <span class="checkbox-label w-form-label" for="checkbox-3">@!#$</span></label><label class="w-checkbox checkbox-field">
        <input type="checkbox" name="mixed" id="mixed" value="1" class="w-checkbox-input checkbox">
        <span class="checkbox-label w-form-label" for="checkbox-2">mixed</span></label></div>
        </form>
        <div class="w-form-fail">
          <div>Oops! Something went wrong while submitting the form.</div>
        </div>
      </div>
      <div class="out-put-div">
        <div><?php echo $password ?></div>
      </div>
    </div>
  </div>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=63f898ab71afc232dc4ea134" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>