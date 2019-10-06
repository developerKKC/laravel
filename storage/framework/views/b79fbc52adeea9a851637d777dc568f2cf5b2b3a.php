<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="/css/bootstrap.min.css" rel="stylesheet">


    
</head>
<body>
<?php $__env->startSection('icerik'); ?>
<h1 class="well well-lg">Ürün Ekleme</h1>
<div class="container">
    <?php if(isset($success)): ?>
        <div class="alert alert-success"> <?php echo e($success); ?> </div>
    <?php endif; ?>
    <?php echo Form::open(['action'=>'ImageController@store', 'files'=>true]); ?>


    <div class="form-group">
        <?php echo Form::label('title', 'Ürün İsmi:'); ?>

        <?php echo Form::text('title', null, ['class'=>'form-control']); ?>

    </div>

        <div class="form-group">
            <?php echo Form::label('kategori', 'Kategori:'); ?>

            <?php echo Form::select('kategori', array('Elektronik','Ev ve Bahce','Bebek ve Cocuk','Film, Kitap ve Müzik','Spor, Eglence ve Oyunlar','Moda ve Aksesuar','Kirtasiye ve Ofis','Diger'),'', ['class'=>'form-control']); ?>

        </div>

        <div class="form-group">
        <?php echo Form::label('description', 'Açıklama:'); ?>

        <?php echo Form::textarea('description', null, ['class'=>'form-control', 'rows'=>5] ); ?>

    </div>

    <div class="form-group">
        <?php echo Form::label('image', 'Ürün resmi ekle'); ?>

        <?php echo Form::file('image'); ?>

    </div>
<div style="margin-bottom:10%">
    <div class="form-group">
        <?php echo Form::submit('Ekle', array( 'class'=>'btn btn-danger form-control' )); ?>

    </div>
</div>
        <?php echo Form::hidden('uyeid', Auth::user()->id); ?>

    <?php echo Form::close(); ?>

    <div class="alert-warning">
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
            <br> <?php echo e($error); ?>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    </div>
</div>
    <?php $__env->stopSection(); ?>
</body>
</html>

<?php echo $__env->make('layouts.ust', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>