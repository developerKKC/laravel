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

    <h1 class="well well-lg">Sonuçlar</h1>
    <div class="container">

        <?php $i=0 ?>
<?php if($bulunan=='[]'): ?>
   <p>Sonuç bulunamadı</p>
<?php endif; ?>
        <?php $__currentLoopData = $bulunan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                <?php if($kisi[$i]->id!=Auth::id()){?>
            <div class="table-bordered">

                <div class="media commnets">

                    <div class="media-body">

                        <h4 class="media-heading">İlan ID :<?php echo $b->id; ?></h4>
                        <h4 class="media-heading">İlan Sahibi :<?php echo $kisi[$i]->name; ?></h4>
                        <h4 class="media-heading">Yükleme :<?php echo $yuksehir; ?></h4>
                        <h4 class="media-heading">İndirme :<?php echo $insehir[$i]; ?></h4>
                        <h4 class="media-heading">Tarih :<?php echo $b->zaman; ?></h4>
                        <h4 class="media-heading">Hacim:<?php echo $b->hacim; ?></h4>
                        <h4 class="media-heading">Ağırlık :<?php echo $b->agirlik; ?></h4>
                        <h4 class="media-heading">Açıklama :<?php echo $b->aciklama; ?></h4>
                        <h4 class="media-heading">En Uygun Teklif :<?php echo $enuygun[$i]; ?></h4>

                        <?php echo Form::open(['method' => 'POST', 'action'=>'TeklifController@ekle']); ?>



                        <?php echo Form::hidden('ilanid',$b->id); ?>

                        <h4 class="media-heading"><?php echo Form::text('miktar','miktar giriniz'); ?> TL</h4>
                        <?php echo Form::submit('Teklif Ver', array( 'class'=>'btn btn-primary' )); ?>

                                        <?php echo Form::close(); ?>




                    </div>

                </div>




            </div>
                    <?php  } ?>
                    <?php $i=$i+1; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>



    </div>
    <script type="text/javascript" src="/js//bootstrapl.min.js"></script>
    <script type="text/javascript" src="/js/jquery.scrollTo.min.js"></script>
    <script type="text/javascript" src="/js/prism.js"></script>
    <script type="text/javascript" src="/js/mainl.js"></script>
<?php $__env->stopSection(); ?>
</body>
</html>

<?php echo $__env->make('layouts.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>