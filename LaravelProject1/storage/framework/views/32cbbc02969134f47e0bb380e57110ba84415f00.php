<!DOCTYPE html>
<html>
<head>
	<title>All userinfo</title>
<link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>
<body>

<div class="container">
    <div class="row col-md-6 col-md-offset-2 custyle">
    
    <table class="table table-striped custab">
    <thead>
    <a href="userinfo/create" class="btn btn-primary btn-xs pull-right"><b>+</b> Add new categories</a>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Age</th>
            <th>Hometown</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>

    <?php $__currentLoopData = $alldata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>

            <tr>
                <td><?php echo e($data -> id); ?></td>
                <td><?php echo e($data -> name); ?></td>
                <td><?php echo e($data -> email); ?></td>
                <td><?php echo e($data -> age); ?></td>
                <td><?php echo e($data -> hometown); ?></td>
                
                <td class="text-center"><a class='btn btn-info btn-xs' style="margin-bottom:5px" href="<?php echo e(route('userinfo.edit',$data->id)); ?>"><span class="glyphicon glyphicon-edit"></span> Edit</a> 
                
                
<?php echo Form::open(array('route' => ['userinfo.destroy',$data->id], 'method' => 'delete')); ?>


<?php echo Form::hidden('id', $data-> id); ?>


<?php echo Form::submit('Delete', ['class' => 'btn btn-danger glyphicon glyphicon-edit']); ?>



<?php echo Form::close(); ?>





            </tr>

           <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
            
    </table>

  <?php echo $alldata -> render();; ?>


    </div>
</div>

</body>
</html>