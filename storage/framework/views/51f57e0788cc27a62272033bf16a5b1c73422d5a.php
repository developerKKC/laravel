<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

</head>
<body>
<h1 class="well well-lg">Upload Image</h1>
<div class="container">
    <?php if(isset($success)): ?>
        <div class="alert alert-success"> <?php echo e($success); ?> </div>
    <?php endif; ?>
    <?php echo Form::open(['action'=>'ImageController@store', 'files'=>true]); ?>


    <div class="form-group">
        <?php echo Form::label('title', 'Title:'); ?>

        <?php echo Form::text('title', null, ['class'=>'form-control']); ?>

    </div>

    <div class="form-group">
        <?php echo Form::label('description', 'Description:'); ?>

        <?php echo Form::textarea('description', null, ['class'=>'form-control', 'rows'=>5] ); ?>

    </div>

    <div class="form-group">
        <?php echo Form::label('image', 'Choose an image'); ?>

        <?php echo Form::file('image'); ?>

    </div>

    <div class="form-group">
        <?php echo Form::submit('Save', array( 'class'=>'btn btn-danger form-control' )); ?>

    </div>

    <?php echo Form::close(); ?>

    <div class="alert-warning">
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
            <br> <?php echo e($error); ?>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    </div>
</div>
</body>
</html>
