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

    <h1 class="well well-lg">Tamamlananlar</h1>
    <div class="container">


<?php $k=0?>
        <?php $__currentLoopData = $tamamlananlar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
            <div class="table-bordered">
                <div class="media commnets">

                    <div class="media-body">
                        <h4 class="media-heading">İlan ID :<?php echo $i->ilanid; ?></h4>

                        <h4 class="media-heading">Tarih :<?php echo $i->zaman; ?></h4>
                        <h4 class="media-heading">Hacim:<?php echo $i->hacim; ?></h4>
                        <h4 class="media-heading">Ağırlık :<?php echo $i->agirlik; ?></h4>
                        <h4 class="media-heading">Açıklama :<?php echo $i->aciklama; ?></h4>
                        <h4 class="media-heading">Yükleme :<?php echo $yukleme[$k]; ?></h4>
                        <h4 class="media-heading">İndirme :<?php echo $indirme[$k]; ?></h4>
                        <h4 class="media-heading">Tutar :<?php echo $i->miktar; ?> TL</h4>
                        <h4 class="media-heading">Nakliyeci Adi :<?php echo $nakliyeciadi[$k]; ?></h4>
                        <h4 class="media-heading">Nakliyeci Telefon :<?php echo $nakliyecitelefon[$k++]; ?></h4>



                    </div>
                </div>




            </div>
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