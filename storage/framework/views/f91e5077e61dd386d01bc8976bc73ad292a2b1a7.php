<?php $__env->startSection('content'); ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Immobilier
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo e(url('/appartements')); ?>">Appartements</a>
           <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Biens</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Locataire</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Comptabilité</a>
      </li>
    </ul>
    
  </div>
</nav>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Admin\Documents\MINE\Private\workspace\laamp_immo\resources\views/home.blade.php ENDPATH**/ ?>