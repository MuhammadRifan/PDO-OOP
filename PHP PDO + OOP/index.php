<?php
  require_once 'controller.php';
  $blog = new Blog();
?>

<!DOCTYPE html>
<html>
  <head>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap-theme.min.css" rel="stylesheet">
    <title>PDO + OOP</title>
  </head>
  <body>
    <div class="container">
        <br>

        <div class="panel panel-primary">
            <div class="panel-heading">
                <a href="pages/add.php" class="btn btn-info">Create New Blog</a>
            </div>

            <div class="panel-body">
                <?php
                    $show = $blog->show();
                    $x = 1;
                    while ($row = $show->fetch(PDO::FETCH_ASSOC)) {
                ?>
                    <h4><?= $x++ ?>.&nbsp;&nbsp;<a href="pages/show.php?id=<?= $row['id'] ?>"><?= $row['title'] ?></a></h4>
                    <?= substr($row['content'], 0, 200) ?> ...

                    <a href="pages/show.php?id=<?= $row['id'] ?>">Read More</a><br><br>

                    <a href="pages/edit.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-warning">Edit</a>
                    <a href="pages/delete.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-danger">Hapus</a>
                    <br><br>
                <?php } ?>
            </div>
        </div>
    </div>
  </body>

  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
</html>
