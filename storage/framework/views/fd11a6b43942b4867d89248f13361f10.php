<?php $__env->startSection('content'); ?>


    <div class="container">

        <h3 align="center" class="mt-5">Добавить предмет</h3>

        <div class="row">
            <div class="col-md-3">
            </div>
                <div class="col-md-6">

                    <div class="form-area">
                        <form method="POST" action="<?php echo e(route('enducations.create')); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <div class="col-md-3" style="width: 600px">
                                    <label for="name_disciplins">Название предмета</label>
                                    <input type="text" class="form-control" name="name_disciplins">
                                </div>
                                
                                


                                

                            </div>


                            <div class="row">
                                <div class="col-md-12 mt-3">
                                    <input type="submit" class="btn btn-info" value="Добавить">
                                </div>

                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>

        <?php $__env->stopSection(); ?>


        <?php $__env->startPush('css'); ?>
            <style>
                .form-area{
                    padding: 20px;
                    margin-top: 20px;
                    background-color: #8e8e81;
                }

                .bi-trash-fill{
                    color:red;
                    font-size: 18px;
                }

                .bi-pencil{
                    color: #92afd1;
                    font-size: 18px;
                    margin-left: 20px;
                }
            </style>
    <?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/pages/CreateEnducations.blade.php ENDPATH**/ ?>