<html>
<head>
    


    <link rel="stylesheet" href="css/deneme.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->


</head>
<body>

<?php $__env->startSection('icerik'); ?>
    <div class="col-sm-9 padding-right">
        <div class="features_items"><!--features_items-->
            <h2 class="title text-center">Arama Sonucu</h2>
            <?php $__currentLoopData = $bul; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                <div class="col-sm-4">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <a href="<?php echo action('ImageController@goster',$image->id); ?>">
                                    <img src="<?php echo '/images/'.$image->filePath; ?>" alt="" />
                                    <h2><?php echo $image->title; ?></h2>

                                    <a href="<?php echo action('ImageController@goster',$image->id); ?>" class="btn btn-default">İncele</a></a>
                            </div>

                        </div>

                    </div>
                </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
        </div>

    </div>


<?php $__env->stopSection(); ?>

</body>
</html>
<?php echo $__env->make('layouts.ust', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>