<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo e(asset('css/style-reset.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('css/style-navbar.css')); ?>">
<?php echo $__env->yieldContent('extra-css'); ?>
<?php echo $__env->yieldContent('title'); ?>
<script>
            function toggleNav() {
                var x=document.getElementsByTagName('nav');
                if (x.style.display === "block") {
                    x.style.display ="none";
                }
                else {
                    x.style.display="block";
                }
            }
</script><?php /**PATH C:\xampp\htdocs\magazinfinal\resources\views/partials/head.blade.php ENDPATH**/ ?>