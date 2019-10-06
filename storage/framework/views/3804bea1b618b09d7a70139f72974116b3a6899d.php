<html>
<head>



</head>
<body>
<?php $__env->startSection('icerik'); ?>

    <h1 class="well well-lg">İletişim</h1>
    <div class="container">
        <?php if(isset($success)): ?>
            <div class="alert alert-success"> <?php echo e($success); ?> </div>
        <?php endif; ?>
        <?php echo Form::open(['action'=>'YorumController@ekle']); ?>

        <div class="form-group">
            <?php echo Form::label('mesaj', 'Ürün sahibiyle İletişim Kurun:'); ?>

            <?php echo Form::textarea('mesaj', null ); ?>

        </div>


            <?php echo Form::hidden('gonderenid', Auth::user()->id); ?>

            <?php echo Form::hidden('urunid',$urunn->id); ?>

            <?php echo Form::hidden('alanid',$urunn->uyeid); ?>


            <div class="form-group">
                <?php echo Form::submit('Gönder', array( 'class'=>'btn btn-danger form-control' )); ?>

            </div>
        <?php echo Form::close(); ?>

        <div class="alert-warning">
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                <br> <?php echo e($error); ?>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
        </div>
    <?php $__env->stopSection(); ?>
</body>

</html>
<?php echo $__env->make('layouts.ust', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>