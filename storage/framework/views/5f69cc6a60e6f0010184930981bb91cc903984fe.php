<html>

<head>

    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<?php $__env->startSection('icerik'); ?>




    <div class="container"  >
        <div style="border-style:solid; border-color:#F2F2F2; background:#F2F2F2;" >
        <div class="row">


            <div class="col-sm-9 padding-right">

                    <div class="col-sm-5">
                        <div class="view-product">
                            <img src="<?php echo '/images/'.$images->filePath; ?>" alt="" width="100%"/>

                        </div>
                        <div id="similar-product" class="carousel slide" data-ride="carousel">



                        </div>

                    </div>
                    <div class="col-sm-7">
                        <div class="product-information"><!--/product-information-->

                            <h2><?php echo $images->title; ?></h2>
                            <p>Ürün ID: <?php echo $images->id; ?></p>
                            <?php if(Auth::guest() || $images->uyeid!=Auth::user()->id): ?>
                                <?php if($kontrol==0 || $kontrol==-1): ?>
                            <span>

                                <a href="<?php echo action('YorumController@aktar',$images->id); ?>">

                                <button action="<?php echo action('YorumController@aktar',$images->id); ?>" type="button" class="btn btn-fefault cart">

										İletişime Geç
									</button></a>

								</span>
                                    <?php else: ?> Ürün Kapanmıştır
                                    <?php endif; ?>
                            <?php endif; ?>
                            <p><b>Ürünün Sahibi:</b><?php echo $user->name; ?></p>
                            <p><b>Eklenme Tarihi:</b> <?php echo $images->created_at; ?></p>


                        </div><!--/product-information-->
                    </div>





            </div>
        </div>
            <div style="margin-bottom:400px">
           <h1>Açıklama:</h1>
            <?php echo $images->description; ?>

            </div>
        </div>

    </div>


<?php $__env->stopSection(); ?>
</body>





</html>

<?php echo $__env->make('layouts.ust', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>