<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

  <?php if(auth()->guard()->check()): ?>
  <p>Welcome you are logged in.</p>
  <form action="/logout" method="POST">
    <?php echo csrf_field(); ?>
    <button>Log out</button>
  </form>

  <div style="border: 3px solid black;">
    <h2>Your Profile Details</h2>
    <p><a href="/profile-details">View details</a></p>
  </div>

  <div style="border: 3px solid black;">
    <h2>Create a New Post</h2>
    <form action="/create-post" method="POST">
      <?php echo csrf_field(); ?>
      <input type="text" name="title" placeholder="post title">
      <textarea name="body" placeholder="body content..."></textarea>
      <button>Save Post</button>
    </form>
  </div>

  <div style="border: 3px solid black;">
    <h2>Your Posts</h2>
    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div style="background-color: gray; padding: 10px; margin: 10px;">
      <h3><?php echo e($post['title']); ?> by <?php echo e($post->user->name); ?></h3>
      <?php echo e($post['body']); ?>

      <p><a href="/edit-post/<?php echo e($post->id); ?>">Edit</a></p>
      <form action="/delete-post/<?php echo e($post->id); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>
        <button>Delete</button>
      </form>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>

  <?php else: ?>
  <div style="border: 3px solid black;">
    <h2>Register</h2>
    <form action="/register" method="POST">
      <?php echo csrf_field(); ?>
      <input name="name" type="text" placeholder="name">
      <input name="email" type="text" placeholder="email">
      <input name="password" type="password" placeholder="password">
      <button>Register</button>
    </form>
  </div>
  <div style="border: 3px solid black;">
    <h2>Login</h2>
    <form action="/login" method="POST">
      <?php echo csrf_field(); ?>
      <input name="loginname" type="text" placeholder="name">
      <input name="loginpassword" type="password" placeholder="password">
      <button>Log in</button>
    </form>
  </div>
  <?php endif; ?>


</body>
</html>
<?php /**PATH C:\Users\Customers PC\php-app\resources\views/home.blade.php ENDPATH**/ ?>