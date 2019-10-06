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

    <h1 class="well well-lg">Tekliflerim</h1>
    <div class="container">


<?php $s=0 ?>
        <?php $__currentLoopData = $teklifler; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
            <div class="table-bordered">
                <div class="media commnets">

                    <div class="media-body">
                        <h4 class="media-heading">İlan ID :<?php echo $i->ilanid; ?></h4>
                        <h4 class="media-heading">Yükleme:<?php echo $yukleme[$s]; ?></h4>
                        <h4 class="media-heading">İndirme:<?php echo $indirme[$s]; ?></h4>
                        <h4 class="media-heading">En Uygun Teklif:<?php echo $enuygun[$s]; ?> TL</h4>
                        <h4 class="media-heading"><?php echo $bilgilendirme[$s]; ?></h4>
<?php if($bilgilendirme[$s]=='Yeni bir teklif yapabilirsiniz'): ?>
                            <?php echo Form::open(['method' => 'POST', 'action'=>'TeklifController@teklifguncelle']); ?>

                            <?php echo Form::hidden('ilanid',$i->ilanid); ?>

                            <h4 class="media-heading"><?php echo Form::text('miktar','miktar giriniz'); ?></h4>
                            <?php echo Form::submit('Teklif Ver', array( 'class'=>'btn btn-primary' )); ?>

                            <?php echo Form::close(); ?>

                        <?php endif; ?>
                        <?php $s++ ?>

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