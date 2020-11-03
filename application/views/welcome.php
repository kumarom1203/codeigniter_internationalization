<!DOCTYPE html>
<html lang="en">
<head>
  <title>Codeigniter-3.1.9</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
<h1 style="text-align: center;">Welcome</h1>
<a href="<?php echo base_url('Login/login');?>" class="btn btn-primary"> Login</a> 
<a href="<?php echo base_url('Login/signup');?>" class="btn btn-danger"> Signup</a>
</div>


<?php
    var_dump(lang('LANG000085'));
    $redirect =  (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $redirect = urlencode($redirect);
    $redirect = str_replace('%', '__-__', $redirect);

    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo $redirect;
    echo "<br>";
    $url = str_replace('__-__', '%', $redirect);
    $url = urldecode($url);
    echo $url;
    echo "<br>";
    echo "<br>";
    echo "<br>";

    $english = base_url('Languageswither/lang/english/').$redirect;
    $hindi = base_url('Languageswither/lang/hindi/').$redirect;
    $arabic = base_url('Languageswither/lang/arabic/').$redirect;
    $site_lang = @$this->session->userdata('site_lang');

    echo "<b>LLLL - ".$site_lang."</b>";
?>




<select name="cars" id="cars" onchange="location = this.value;">

  <option <?php if($site_lang == 'english') echo 'selected'?> value="<?php echo $english; ?>">English</option>
  <option <?php if($site_lang == 'hindi') echo 'selected'?> value="<?php echo $hindi; ?>">Hindi</option>
  <option <?php if($site_lang == 'arabic') echo 'selected'?> value="<?php echo $arabic; ?>">Arabic</option>

</select>



</body>
</html>
