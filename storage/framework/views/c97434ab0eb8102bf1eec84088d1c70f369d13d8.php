
 
<?php $__env->startSection('contenu'); ?>
    <br>
    <div class="container">
        <div class="row card text-dark bg-white">
            <h4 class="card-header">Role</h4>
            <div class="card-body">
                <form action="<?php echo e(url('roles')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <input type="text" class="form-control  <?php $__errorArgs = ['libelle'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="libelle" id="libelle" placeholder="Libelle du role" value="<?php echo e(old('libelle')); ?>">
                        <?php $__errorArgs = ['libelle'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                   
                    <button type="submit" class="btn btn-secondary">Envoyer !</button>
                </form>
            </div>
        </div>
    </div>



<div class="card">
        <header class="card-header">
            <p class="card-header-title">Roles</p>
        </header>
        <div class="card-content">
            <div class="content">
                <table class="table is-hoverable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Libelle</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($role->id); ?></td>
                                <td><strong><?php echo e($role->libelle); ?></strong></td>
                                <td><a class="button is-primary" href="<?php echo e(route('roles.show', $role->id)); ?>">Voir</a></td>
                                <td><a class="button is-warning" href="<?php echo e(route('roles.edit', $role->id)); ?>">Modifier</a></td>
                                <td>
                                    <form action="<?php echo e(route('roles.destroy', $role->id)); ?>" method="post">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button class="button is-danger" type="submit">Supprimer</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Admin\Documents\MINE\Private\workspace\laamp_immo\resources\views/role.blade.php ENDPATH**/ ?>