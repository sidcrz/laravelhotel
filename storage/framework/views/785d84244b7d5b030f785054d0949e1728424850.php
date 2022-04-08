<?php $__env->startSection('content'); ?>

<h2>Current Client Records</h2>

<br>
<p>
    <a class="btn btn-primary" href="<?php echo e(route('clients.create')); ?>">Add New Clients</a>
    <a class="btn btn-primary" href="<?php echo e(route('available.index')); ?>">Available Rooms</a>
    <a class="btn btn-primary" href="<?php echo e(route('rooms.index')); ?>">Back</a>
</p>

 <table class="table table-dark" width="400px">
    <thead>
      <tr>
        <th scope="col">Name</th>
        <th scope="col">Address</th>
        <th scope="col">Room No</th>
        <th scope="col">Price</th>
        <th scope="col">Entry</th>
        <th scope="col"></th>
      </tr>
    </thead>
    
        <?php $__empty_1 = true; $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <tbody>
            <tr>              
                <td><?php echo e($client->name); ?></td>
                <td><?php echo e($client->address); ?></td>
                <td><?php echo e($client->room_no); ?></td>
                <td><?php echo e($client->price); ?></td>
                <td><?php echo e($client->created_at->format('Y-m-d')); ?></td>
                <td>
                    <a href="<?php echo e(route('currentClients.edit', ['client' => $client->id] )); ?>" onsubmit="return confirm('Are you sure?')" class="btn btn-info">Exit</a>
                </td>
            </tr>
        </tbody>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            No Data Found
        <?php endif; ?>
    
  </table>

  

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Hotel-Management-using-Laravel\resources\views/currentClients/index.blade.php ENDPATH**/ ?>