<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row ">
            <div class="col-12 pt-2 ">
                 <div class="row justify-content-center">
                    <div class="col-8 text-center">
                        <h1 class="display-one ">My Leader</h1>
                        <p>List blogs about outstanding leaders in our society</p>
						<p>Enjoy reading. Know Your leader</p>
                    </div>
                    <div class="col-4 right-justify">
                        <p>Create new Post</p>
                        <a href="/blog/blog.create" class="btn btn-secondary btn-lg">Add a Blog</a>
                    </div>
                </div>                
                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="list-group col-8">
                    <ul>
                        <li class="list-group-item"><a href="./blog.show/<?php echo e($post->id); ?>"><?php echo e(ucfirst($post->title)); ?></a></li>
                    </ul>
					</div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					
       
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\LENOVO\be-exercise-1\resources\views/blog/blog.blade.php ENDPATH**/ ?>