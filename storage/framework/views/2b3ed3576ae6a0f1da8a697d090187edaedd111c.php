<?php $__env->startSection('icerik'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Kayıt Ol</div>
                    <div class="panel-body">
                        <?php echo Form::open(['action'=>'NakliyeciController@ekle']); ?>


                            <?php echo e(csrf_field()); ?>



                            <div class="form-group<?php echo e($errors->has('tip') ? ' has-error' : ''); ?>">
                                <label for="tip" class="col-md-4 control-label">Tip</label>

                                <div class="col-md-6">

                                    <select id="tip" class="form-control" name="tip" value="<?php echo e(old('tip')); ?>" required autofocus>
                                        <option value="0">Tır</option>
                                        <option value="1">Kamyon</option>
                                        <option value="2">Kamyonet</option>
                                    </select>

                                    <?php if($errors->has('tip')): ?>
                                        <span class="help-block">
                                        <strong><?php echo e($errors->first('tip')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group<?php echo e($errors->has('plaka') ? ' has-error' : ''); ?>">
                                <label for="plaka" class="col-md-4 control-label">Plaka</label>

                                <div class="col-md-6">
                                    <input id="plaka" type="text" class="form-control" name="plaka" value="<?php echo e(old('plaka')); ?>" required autofocus>

                                    <?php if($errors->has('plaka')): ?>
                                        <span class="help-block">
                                        <strong><?php echo e($errors->first('plaka')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Nakliyeci Ol
                                    </button>
                                </div>
                            </div>
                        <?php echo Form::close(); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="/js//bootstrapl.min.js"></script>
    <script type="text/javascript" src="/js/jquery.scrollTo.min.js"></script>
    <script type="text/javascript" src="/js/prism.js"></script>
    <script type="text/javascript" src="/js/mainl.js"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>