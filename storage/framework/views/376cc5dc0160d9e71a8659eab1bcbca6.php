<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/blog/blog" class="btn btn-outline-primary btn-sm">Go back</a>
                <h1 class="display-one"><?php echo e(ucfirst($post->title)); ?></h1>
                <p><?php echo $post->body; ?></p> 
                <hr>
                <a href="/blog/blog.edit/<?php echo e($post->id); ?>" class="btn btn-outline-primary">Edit Post</a>
                <br><br>
                <form id="delete-frm" class="" action="<?php echo e(route('blog.destroy', [$post->id])); ?>" method="get">
                    <?php echo method_field('DELETE'); ?>
                    <?php echo csrf_field(); ?>
                    <button class="btn btn-danger" type = "submit" name = "delete">Delete Post</button>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\LENOVO\be-exercise-1\resources\views/blog/show.blade.php ENDPATH**/ ?>