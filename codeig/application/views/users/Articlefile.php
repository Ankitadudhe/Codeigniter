<html>
<head>
    <title>Article Form </title>
<?php echo form_open('admin/index'); ?>
</head>
<body>
    <div class="container" style="margin-top:20px"> 
    <h1>Article Form </h1>
    <form action="base_url('')">
        <div class="form-group">
            <label for="email" >Email address: </label>
            <input type="email" class="form-control" id="email">
        </div>
        <div class="form-group">
            <label for="pwd">Password: </label>
            <input type="password" class="form-control" id="pwd">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
        </body>
</html>