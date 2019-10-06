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
<?php $i=0 ?>
<?php $__env->startSection('icerik'); ?>
    <h1 class="well well-lg">Konuşma Detayı</h1>
    <div class="container">

<?php $__currentLoopData = $kelime; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
   <p> <?php echo $ad[$i]; ?>

    Kullanıcısının Mesajı:</p>
            <?php echo $k; ?>

            <?php echo Form::open(['method' => 'post','action'=>'YorumController@urunuver']); ?>

            <?php echo Form::hidden('uyeid', $idler[$i++]); ?>

            <?php echo Form::hidden('urunid', $urun); ?>

            <?php echo Form::hidden('kendiid', Auth::user()->id); ?>

            <?php echo Form::submit('Ürünü Kullanıcıya Ver', array( 'class'=>'btn btn-primary' )); ?>

            <?php echo Form::close(); ?>

<html><br></html>


<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

    </div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.ust', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>