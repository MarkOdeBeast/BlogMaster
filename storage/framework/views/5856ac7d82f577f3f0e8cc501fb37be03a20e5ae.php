<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>Edit Post</h1>
  <form action="/edit-post/<?php echo e($post->id); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <input type="text" name="title" value="<?php echo e($post->title); ?>">
    <textarea name="body"><?php echo e($post->body); ?></textarea>
    <button>Save Changes</button>
  </form>
</body>
</html><?php /**PATH C:\Users\Customers PC\php-app\resources\views/edit-post.blade.php ENDPATH**/ ?>