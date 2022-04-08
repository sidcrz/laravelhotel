<?php $__env->startSection('content'); ?>


<h2 style="text-align:center;">New Client Entry</h2>
<br>
    
    

    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <form action="<?php echo e(route('clients.store')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input  name="name" placeholder="Enter Name" value="<?php echo e(old('name')); ?>" class="form-control">
                    </div>
            
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input  name="address" placeholder="Enter Address" value="<?php echo e(old('address')); ?>" class="form-control">
                    </div>
            
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input  name="phone" placeholder="Enter Phone Number" value="<?php echo e(old('phone')); ?>" class="form-control">
                    </div>
            
                    <div class="form-group">
                        <label>Select Your Room</label>
                        <select class="form-control" name="room_no">
                            <option>Enter Rooms</option>
                          
                            <?php $__currentLoopData = $rooms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $room): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          
                              <option value="<?php echo e($room->room_no); ?>"> 
                          
                                  <?php echo e($room->room_no); ?> 
                          
                              </option>
                          
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
                          
                          </select>
                    </div>
            
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input  name="price" placeholder="Enter Price" value="<?php echo e(old('price')); ?>" class="form-control">
                    </div>
            
                    <?php if($errors->any()): ?>
                        <div class="alert alert-danger">
                            <ul>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    <?php endif; ?>
            
                    <button type="submit" class="btn btn-info btn-block">Submit</button>
                </form>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Hotel-Management-using-Laravel\resources\views/clients/create.blade.php ENDPATH**/ ?>