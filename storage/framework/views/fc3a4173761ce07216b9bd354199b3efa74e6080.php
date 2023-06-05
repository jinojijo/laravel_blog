;

<?php $__env->startSection('content'); ?>
    <form 
        method="post"
        action="/articles"
    >
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="title">Article Title</label>
            <input type="text" class="form-control" name="title" value="<?php echo e(old("title")); ?>">

            
            

            <?php $__errorArgs = ["title"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p style="color:red">
                    <?php echo e($errors->first("title")); ?>

                </p> 
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

        </div>

        <div class="form-group">
            <label for="body">Article body</label>
            <textarea 
                name="body" 
                id="text-area" 
                cols="30"
                rows="3"
                class="form-control"
            >
                <?php echo e(old("body")); ?>

            </textarea>

            <?php if( $errors->has("body")): ?>
                <p style="color:red">
                    <?php echo e($errors->first("body")); ?>

                </p>    
            <?php endif; ?>

        </div>

        <div class="form-group">
            <button class="btn btn-primary">
                Save
            </button>
            
        </div>
    </form>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layout.theme", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\programing\xampp\htdocs\laravel\blog\resources\views/articles/create.blade.php ENDPATH**/ ?>