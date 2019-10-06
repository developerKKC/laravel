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

    <h1 class="well well-lg">Ürün Taleplerim</h1>
    <div class="container">

        <?php $i=0 ?>

        <?php $__currentLoopData = $urun; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                <div class="table-bordered">
            <div class="media commnets">
                <a class="pull-left" href="urun/<?php echo $u->id; ?>">
                    <img src="<?php echo '/images/'.$u->filePath; ?>" width="200px">
                </a>
                <div class="media-body">
                    <h4 class="media-heading"><?php echo $u->title; ?></h4>
                    <p>Ürün Sahibi: <?php echo $sahip[$i]->name; ?>

                    </p>
                    <p>Durum:
                    <?php if($durum[$i]==0): ?>
                    Ürün sahibinin yanıtı bekleniyor
                            <?php $i=$i+1; ?>

                        <?php elseif($durum[$i]==1): ?>
                            Ürün sahibi ürünü size verdi
                        <?php  $i=$i+1 ?>



                         <?php elseif($durum[$i]==2): ?>
                         Ürün başka kullanıcıya verildi
                        <?php $i=$i+1 ?>
                        <?php endif; ?>
                    </p>
                </div>
            </div>




</div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>



    </div>
<?php $__env->stopSection(); ?>
</body>
</html>

<?php echo $__env->make('layouts.ust', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>