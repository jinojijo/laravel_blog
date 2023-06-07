;

<?php $__env->startSection('title'); ?>
Laravel Articles
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    
    <a href="articles/create">Add new Article</a>
    <div class="table-responsive">
        <table class="table text-center">
            <thead>
            <tr>
                <th style="width: 10%;">Id</th>
                <th style="width: 45%;">Title</th>
                <th style="width: 45%;">Body</th>
                <th style="width: 45%;"></th>
            </tr>
            </thead>
            
            <tbody>
                <?php ($sr_no = 1); ?>
                <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                    <tr>
                        <td>
                            <?php echo e($sr_no); ?>

                        </td>
                        <td>
                            <a href="/articles/<?php echo e($item->id); ?>">
                                <?php echo e($item->title); ?>

                            </a>
                        </td>
                        <td>
                            <?php echo e($item->body); ?>

                        </td>

                        <td>
                            <a 
                                href="/articles/<?php echo e($item->id); ?>/edit"
                                class="btn btn-warning"
                            >
                                Edit
                            </a>
                        </td>
                    </tr>
                    <?php ($sr_no++); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>

        </table>
    </div>    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.theme', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ioss/Documents/j/laravel_blog-main/resources/views/articles/index.blade.php ENDPATH**/ ?>