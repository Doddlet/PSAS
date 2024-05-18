<!DOCTYPE html>
<html>

<head>
    <title>PSAS Akhtar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
</head>

<body>

    <h3 class="card-header p-3"><i class="fa-solid fa-user"></i>PSAS Akhtar </h3>
    <div class="card-body">
        <a href="<?php echo e(route('outlets.create')); ?>" class="btn"><i class="fa-solid fa-plus">Tambah</i></a>
        <table class="table table-bordered mt-3">
            <tr>
                <th>ID</th>
                <th>Code</th>
                <th>Name</th>
                <th>Status</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Created_at</th>
                <th>update_at</th>
                <th>Action</th>
            </tr>
            <?php
            $id =1;
            ?>
            <?php $__currentLoopData = $outlets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $outlet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($id++); ?></td>
                <td><?php echo e($outlet->code); ?></td>
                <td><?php echo e($outlet->name); ?></td>
                <td><?php echo e($outlet->status); ?></td>
                <td><?php echo e($outlet->address); ?></td>
                <td><?php echo e($outlet->phone); ?></td>
                <td><?php echo e($outlet->created_at); ?></td>
                <td><?php echo e($outlet->updated_at); ?></td>
                <td>
                    <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                        action="<?php echo e(route('outlets.destroy', $outlet->id)); ?>" method="POST">
                        <a href="<?php echo e(route('outlets.edit', $outlet->id)); ?>" class="btn"><i
                                class="fa-solid fa-pen-to-square"></i></a>
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="btn"><i class="fa-solid fa-trash"></i></button>
                    </form>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
        <?php echo e($outlets->links()); ?>

    </div>

    <footer style="position: fixed; bottom: 0; width: 100%; background-color: rgb(165, 245, 237); text-align:center;">
        Laravel v<?php echo e(Illuminate\Foundation\Application::VERSION); ?> (PHP v<?php echo e(PHP_VERSION); ?>) by Akhtar
        Programming 11
    </footer>
</body>

</html><?php /**PATH C:\xampp8.2\htdocs\psasAkhtar\resources\views/outlets/index.blade.php ENDPATH**/ ?>