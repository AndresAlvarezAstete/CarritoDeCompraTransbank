

<?php $__env->startSection('title', 'Default'); ?>

<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
<h3>Details</h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
<li class="breadcrumb-item">Dashboard</li>
<li class="breadcrumb-item active">Details</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
 <div class="container" style="margin-top: 80px">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Order Details</li>
            </ol>
        </nav>
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-7">
                        <h4>Order Details</h4>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <h1>Your order was approved with the transaction ID: <?php echo e($compra_id); ?></h1>
                </div>
                <br>
                <a href="/" class="btn btn-dark">Home</a>
            </div>
        </div>
    </div>
<script type="text/javascript">
    var session_layout = '<?php echo e(session()->get('layout')); ?>';
</script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.simple.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Programacion\laragon\www\CubaStarter\resources\views//confirmacion.blade.php ENDPATH**/ ?>