<html>
    <head>
        <title>Crud Application -Create user </title>
 <link rel="stylesheet" type="text/css" href="<?php echo base_url().'Asset/css/bootstrap.min.css';?>">
</head>
<body>
<div class="navbar navbar-dark bg-dark">
<div class="container">
  <a href="#" class="navbar-brand">CRUD APPLICATION</a>
</div>
</div>
 <div class="container" style="padding-top: 10px;">
 <h3>Create User </h3>
 <div class="row">
 <form method="post" name="createUser" action="<?php echo base_url().'users/create';?>">
 <div class="col-md-12">
 <div class="form-group">
   <label>Usename</label>
   <input type="text" name="username" values="" class="form-control">
<?php echo form_error('username'); ?>
</div>
<div class="form-group">
   <label>Password</label>
   <input type="text" name="password" values="" class="form-control">
 <?php echo form_error('password'); ?>

</div>
<div class="form-group">
<button class="btn btn-primary">Create</button>
<a href="" class="btn-secondary btn">cancel</a>
</div>
</div>

</div>
</form>
</div>
</body>
    </html>