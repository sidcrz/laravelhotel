<?php $__env->startSection('content'); ?>

<h2>Room List</h2>

<br>
<p>
    <a class="btn btn-primary" href="<?php echo e(route('rooms.create')); ?>">Add New Room</a>
    <a class="btn btn-primary" href="<?php echo e(route('clients.create')); ?>">Add New Clients</a>
    <a class="btn btn-primary" href="<?php echo e(route('available.index')); ?>">Available Rooms</a>
    <a class="btn btn-primary" href="<?php echo e(route('currentClients.index')); ?>">Current Clients</a>
</p>

 <table class="table table-dark" width="400px">
    <thead>
      <tr>
        <th scope="col">Room No</th>
        <th scope="col">Price</th>
        <th scope="col">People</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
      </tr>
    </thead>
    <tbody>
        <?php $__empty_1 = true; $__currentLoopData = $rooms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $room): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <tr>
                <td><?php echo e($room->room_no); ?></td>
                <td><?php echo e($room->price); ?></td>
                <td><?php echo e($room->people); ?></td>
            
                <td>
                    <a href="<?php echo e(route('rooms.edit', ['room' => $room->id])); ?>" class="btn btn-info btn-block">Edit</a>
                </td>
                <td>
                    <form action="<?php echo e(route('rooms.destroy', ['room' => $room->id])); ?>" 
                        onsubmit="return confirm('Are you sure?')" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button class="btn btn-danger btn-block" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            No Data Found
        <?php endif; ?>
    </tbody>
  </table>

  

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Hotel-Management-using-Laravel\resources\views/rooms/index.blade.php ENDPATH**/ ?>