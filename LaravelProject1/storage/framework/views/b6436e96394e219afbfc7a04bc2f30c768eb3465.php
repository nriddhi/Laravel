<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<title>Userinfo</title>
</head>
<body>

<div class="container" style="width:350px; margin:0 auto;
margin-top:25px;">
	
<?php echo Form::open(array('route' => ['userinfo.update',$updateinfo->id], 'method' => 'PUT')); ?>



<div class="form-group">
    <label for="name">Enter Your name</label>
    <input type="text" class="form-control" value="<?php echo e($updateinfo -> name); ?>" name="name" placeholder="Enter name">
   
  </div>

  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" value="<?php echo e($updateinfo -> email); ?>" name= "email" placeholder="Enter email">
   
  </div>


  <div class="form-group">
    <label for="age">Age</label>
    <input type="number" class="form-control" value="<?php echo e($updateinfo -> age); ?>" name="age" placeholder="Enter age">
   
  </div>

<div class="form-group">
    <label for="exampleInputEmail1">Hometown</label>
    <input type="text" class="form-control" value="<?php echo e($updateinfo -> hometown); ?>" name="hometown" placeholder="Enter hometown">
   
  </div>

  <button type="submit" class="btn btn-primary">Update</button>
  
  </div>
  
<?php echo Form::close(); ?>


</div>


</body>
</html>