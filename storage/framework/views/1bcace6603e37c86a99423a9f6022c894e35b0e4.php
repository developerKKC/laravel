<html>

<head>

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>

    <script>
        $( function() {

            $( "#date" ).datepicker({
                minDate: '0',
                dateFormat: "dd-mm-yy",
                altFormat: "yy-mm-dd",
                altField:"#tarihdb",
                monthNames: [ "Ocak", "Şubat", "Mart", "Nisan", "Mayıs", "Haziran", "Temmuz", "Ağustos", "Eylül", "Ekim", "Kasım", "Aralık" ],
                dayNamesMin: [ "Pa", "Pt", "Sl", "Ça", "Pe", "Cu", "Ct" ],
                firstDay:1
            });

        } );

    </script>
    </head>
<body>
<?php $__env->startSection('icerik'); ?>


    <div class="container">
        <div class="about section">
        <h2 class="title text-center" style="margin-top:100px">Araç Bul</h2>
        <?php if(isset($success)): ?>
            <div class="alert alert-success"> <?php echo e($success); ?> </div>
        <?php endif; ?>

        <?php echo Form::open(['action'=>'IlanController@ekle']); ?>


        <div class="form-group">

            <?php echo Form::label('Yükleme:'); ?>

            <?php echo Form::select('yukleme',$iller,null, ['class'=>'form-control']); ?>


        </div>

        <div class="form-group">
            <?php echo Form::label('İndirme:'); ?>

            <?php echo Form::select('indirme',$iller,null, ['class'=>'form-control']); ?>


        </div>

        <div class="form-group">
            <?php echo Form::label('Zaman:'); ?>

            <?php echo Form::text('datepicker', '', array('id' => 'date','class'=>'form-control')); ?>

            <?php echo Form::hidden('tarih','',array('id'=>'tarihdb')); ?>


        </div>
        <div class="form-group">
            <?php echo Form::label('İstenen Araç Tipi:'); ?>

            <?php echo Form::select('tip',array('Tır','Kamyon','Kamyonet',),'',['class'=>'form-control']); ?>


        </div>
        <div class="form-group">
            <?php echo Form::label('Hacim(m^3):'); ?>

            <?php echo Form::text('hacim',null, array('class'=>'form-control') ); ?>

        </div>
        <div class="form-group">
            <?php echo Form::label('Ağırlık(ton):'); ?>

            <?php echo Form::text('agirlik',null, array('class'=>'form-control') ); ?>

        </div>
        <div class="form-group">
            <?php echo Form::label('Açıklama:'); ?>

            <?php echo Form::textarea('aciklama',null, array('class'=>'form-control') ); ?>

        </div>
        <div style="margin-bottom:10%">
            <div class="form-group">
                <?php echo Form::submit('Teklif İste', array( 'class'=>'btn btn-danger form-control' )); ?>

            </div>
        </div>



        <?php echo Form::close(); ?>

        <div class="alert-warning">
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                <br> <?php echo e($error); ?>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
        </div>
            <!--<script type="text/javascript" src="/js/jquery-1.11.1.min.js"></script>
            <script type="text/javascript" src="/js/jquery-migrate-1.2.1.min.js"></script>
            <script type="text/javascript" src="/js/jquery.easing.1.3.js"></script>-->
            <script type="text/javascript" src="/js//bootstrapl.min.js"></script>
            <script type="text/javascript" src="/js/jquery.scrollTo.min.js"></script>
            <script type="text/javascript" src="/js/prism.js"></script>
            <script type="text/javascript" src="/js/mainl.js"></script>
            <script type="text/javascript" src="/js/jquery-migrate-1.2.1.min.js"></script>

</div>
</div>

<?php $__env->stopSection(); ?>
</body>

</html>
<?php echo $__env->make('layouts.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>