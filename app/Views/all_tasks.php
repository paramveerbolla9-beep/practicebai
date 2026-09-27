<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>All Tasks</title>
  <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body>
   <?= view('components/navbar') ?>



<?php foreach ($tasks as $task): ?>
  <div class ="task_card">  
    
  <h2><?= $task['title'] ?></h2>

  <p><?= $task['status'] ?></p>

  <p><?= $task['task_date'] ?></p>

  <p><?=$task['created_at']?></p>

</div>
<?php endforeach; ?>
  

</body>
</html>