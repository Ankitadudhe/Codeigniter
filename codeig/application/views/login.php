<html>
<head>
   <title>Loginform | <?php echo $title; ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
 <div class="container">
 <br /><br /><br />
 <form method="post" action="<?php echo base_url(); ?>bill/">
  <div class="form-group">
   <label>Enter Customer Name </label>
   <input type="text" name="customername" class="form-control"/>
   </div>
   <div class="form-group">
   <label>Enter Password </label>
      <input type="password" name="password" class="form-control"/>
      <span class="text-danger"><?php echo form_error('customername'); ?></span>
   </div>
   <div class="form-group">
   <input type="submit" name="insert" value="Login" class="btn btn-info"/>
  </div>
   </form>
   </body>
   </html>