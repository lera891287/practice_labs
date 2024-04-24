<?php $__env->startSection('content'); ?>


    <div class="container">

        <h3 align="center" class="mt-5">Добавить студента</h3>

        <div class="row">
            <div class="col-md-2">
            </div>
                <div class="col-md-8">

                    <div class="form-area">
                        <form method="POST" action="<?php echo e(route('student.create')); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <div class="col-md-3" style="width: 300px">
                                    <div style="display: flex; justify-content: space-between;">
                                        <label for="name" style="width: 100%;">Имя студента</label>
                                    </div>
                                    <input type="text" class="form-control" name="name" style="height: 38px; padding: 6px 12px; margin-top: 5px;">
                                </div>
                                <div class="col-md-3" style="width: 300px">
                                    <div style="display: flex; justify-content: space-between;">
                                        <label for="name_group" style="width: 100%;">Группа</label>
                                    </div>
                                    <input type="text" class="form-control" name="name_group" style="height: 38px; padding: 6px 12px; margin-top: 5px;">
                                    
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/pages/CreateStudent.blade.php ENDPATH**/ ?>