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
<h1 style="text-align: center;">Welcome- <?php echo $this->session->userdata('name');?></h1>
  <?php
    print_r($data);
  ?>
</div>

</body>
</html>
