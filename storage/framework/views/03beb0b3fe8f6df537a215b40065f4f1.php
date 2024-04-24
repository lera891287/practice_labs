<?php $__env->startSection('content'); ?>

    <h3 align="center" class="mt-5">Список предметов</h3>
    <div style="margin-top: 100px">
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Название предмета</th>



            </tr>
            </thead>

            <?php $__currentLoopData = $enducations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $enducation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <tr>
                    <td>
                        <?php echo e($enducation -> name_disciplins); ?>

                    </td>
                    <td>
                        <form method="POST" action="<?php echo e(route('enducations.destroy' , $enducation->id )); ?>">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-outline-danger">Удалить</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>

        <a href="<?php echo e(route('create_enducations')); ?>" class="btn btn-secondary"> Создать </a>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/pages/AllEnducations.blade.php ENDPATH**/ ?>