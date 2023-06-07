;

<?php $__env->startSection('content'); ?>

    <a href="/articles">View All Articles</a>
    <h1>
        <?php echo e($article->title); ?>

    </h1>

    <p>
        <?php echo e($article->body); ?>

    </p>

    <form action="/articles/<?php echo e($article->id); ?>" method="post">

        <?php echo csrf_field(); ?>
        <?php echo method_field("DELETE"); ?>
        <button 
            class="btn btn-danger"
            onclick="return confirm('are you sure to delete the article')"
        >
            Delete Article
        </button>
    </form>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layout.theme", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ioss/Documents/j/laravel_blog-main/resources/views/articles/show.blade.php ENDPATH**/ ?>