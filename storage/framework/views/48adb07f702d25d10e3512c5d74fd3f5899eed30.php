<?php $__env->startSection('content'); ?>
<div class="container">  
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">Edit admin info</div>

        <div class="panel-body">

          <?php if(count($errors) > 0): ?>
            <div class="alert alert-danger">
              <strong>Whoops!</strong> There were some problems with your input.<br><br>
              <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </ul>
            </div>
          <?php endif; ?>

          <form action="<?php echo e(URL('admin/admins/'.$admin->id)); ?>" enctype="multipart/form-data" method="POST">
           <input name="_method" type="hidden" value="PUT">
            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
       user name：     <input type="text" name="name" class="form-control" required="required" value="<?php echo e($admin->name); ?>">
            <br>
      Email address： <input type="text" name="email" class="form-control" required="required" value="<?php echo e($admin->email); ?>">
            <br>
                        Password：<input type="password" name="password" class="form-control" required="required">
            <br>
             Confirm your password：<input type="password" name="password_confirmation" class="form-control" required="required">
            <button class="btn btn-lg btn-info">Edit admin</button>
          </form>

        </div>
      </div>
    </div>
  </div>
</div>  
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>