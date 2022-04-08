<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo e(URL::asset('css/style.css')); ?>">
    <title>Hotel Management</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Logo</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo e(route('home')); ?>">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('about')); ?>">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('rooms.index')); ?>">Rooms</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('clients.create')); ?>">Add new client</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('clients.index')); ?>">Records</a>
              </li>
			  
			  <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('currentClients.index')); ?>">Current Clients</a>
              </li>
			  
			  
          </ul>
        </div>
      </nav>

      <?php if(session()->has('status')): ?>
          <div class="alert alert-success" role="alert">
              <?php echo e(session()->get('status')); ?>

          </div>
      <?php endif; ?>

  

    <div class="container p-4">
        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\Hotel-Management-using-Laravel\resources\views/layout.blade.php ENDPATH**/ ?>