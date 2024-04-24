<?php $__env->startSection('content'); ?>

    <h3 align="center" class="mt-5">Список студентов</h3>
    <div style="margin-top: 100px">
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Имя студента</th>



            </tr>
            </thead>

            <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <tr>
                    <td>
                        <?php echo e($student -> name); ?>

                    </td>
                    <td><?php echo e($student->groups?->name_group); ?></td>

                    <td>
                        <form method="POST" action="<?php echo e(route('student.edit', $student->id)); ?>">

                            <?php echo csrf_field(); ?>

                            <a href="<?php echo e(route('student.edit', $student->id)); ?>" class="btn btn-secondary" > Изменить </a>
                        </form>
                    </td>
                    <td>
                        <form method="POST" action="<?php echo e(route('student.destroy' , $student->id )); ?>">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-outline-danger">Удалить</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </table>

        <a href="<?php echo e(route('create_students')); ?>" class="btn btn-secondary"> Создать </a>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/pages/AllStudents.blade.php ENDPATH**/ ?>