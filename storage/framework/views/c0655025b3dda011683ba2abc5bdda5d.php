<?php $__env->startSection('content'); ?>
    <div class="container">
        <h3 align="center" class="mt-5">Список студентов</h3>
        <div class = "row">
            <div class="col-md-2"></div>

                </div>
            </div>

    </div>
    <div style="margin-top: 100px">
        <table class="table mt-5">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Фамилия</th>

                <th scope="col">Предмет</th>
                <th scope="col">Оценка</th>

            </tr>
            </thead>

            <?php $__currentLoopData = $stEn; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php $__currentLoopData = $student[1]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dis): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <tr>
                        <td scope="col">
                            <?php echo e($student[0]); ?>

                        </td>
                        <td scope="col">
                            <?php echo e($dis['disciplina']); ?>

                        </td>
                        <td scope="col">
                            <?php echo e($dis['grad']); ?>


                        </td>


                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>

        <a href="<?php echo e(route('pages.create')); ?>" class="btn btn-secondary"> Поставить оценку </a>


<?php $__env->stopSection(); ?>


<?php $__env->startPush('css'); ?>
    <style>
        .form-area{
            padding: 20px;
            margin-top: 20px;
            background-color: #d1d1ea;
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/pages/index.blade.php ENDPATH**/ ?>