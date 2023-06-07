;

<?php $__env->startSection('title'); ?>
Edit Linux Article
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <form 
        method="post"
        action="/linux/<?php echo e($linux->id); ?>"
    >
        
        <?php echo csrf_field(); ?>
        <?php echo method_field("PUT"); ?>
        
        <div class="form-group">
            <label for="title">Article Title</label>
            <input 
                type="text" 
                class="form-control" 
                name="title"
                value="<?php echo e($linux->title); ?>"
            >
        </div>

        <div class="form-group">
            <label for="body">Article body</label>
            <textarea 
                name="body" 
                id="text-area" 
                cols="30"
                rows="3"
                class="form-control"
            ><?php echo e($linux->body); ?>

            </textarea>
        </div>

        <div class="form-group">
            <button class="btn btn-primary">
                Save
            </button>
            
        </div>
    </form>

    <div class="form-group">
        <a 
            class="btn btn-primary"
            href="/linux"
        >
            Cancel
        </a>
    </div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layout.theme", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ioss/Documents/j/laravel_blog-main/resources/views/linux/edit.blade.php ENDPATH**/ ?>