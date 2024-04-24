<?php $__env->startSection('content'); ?>


    <div class="container">

        <h3 align="center" class="mt-5">Редактировать студента</h3>

        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">

                <div class="form-area">

                    <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <td>
                            <?php echo e($student -> name); ?>

                        </td>
                        <td><?php echo e($student->groups?->name_group); ?></td>
                        <form method="POST" action="<?php echo e(route('student.edit', $student->id)); ?>">

                            <?php echo csrf_field(); ?>

                            <div class="row">
                                <div class="col-md-3" style="width: 300px" >
                                    <label for="name">Имя студента</label>
                                    <input type="text" class="form-control" name="name" style="width: 100%; margin-top: 5px; height: 38px; padding: 6px 12px;">
                                </div>






                            </div>


                            <form method="POST" action="<?php echo e(route('student.update', $student->id)); ?>">

                                <?php echo csrf_field(); ?>
                                <?php echo method_field('PUT'); ?>

                                <button type="submit">Добавить</button>

                            </form>
                        </form>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/pages/editStudent.blade.php ENDPATH**/ ?>