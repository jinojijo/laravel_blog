;

<?php $__env->startSection('content'); ?>
    <form 
        method="post"
        action="/articles/<?php echo e($article->id); ?>"
    >
        
        <?php echo csrf_field(); ?>
        <?php echo method_field("PUT"); ?>
        
        <div class="form-group">
            <label for="title">Article Title</label>
            <input 
                type="text" 
                class="form-control" 
                name="title"
                value="<?php echo e($article->title); ?>"
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
            ><?php echo e($article->body); ?>

            </textarea>
        </div>

        <div class="form-group">
            <button class="btn btn-primary">
                Save
            </button>
            
        </div>
    </form>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layout.theme", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\programing\xampp\htdocs\laravel\blog\resources\views/articles/edit.blade.php ENDPATH**/ ?>