<?php require_once '../controller.php'; ?>

<!DOCTYPE html>
<html>
  <head>
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/bootstrap-theme.min.css" rel="stylesheet">
    <title>PDO + OOP</title>
  </head>
  <body>
    <div class="container">
        <br>
        <a href="../index.php" class="btn btn-info">Back</a>
        <hr>

        <form method="post">
            <div class="form-group">
                <label>Title</label><br>
                <input type="name" name="title" class="form-control" required autofocus autocomplete="off">
            </div>

            <div class="form-group">
                <label>Content Blog</label><br>
                <textarea type="text" name="content" rows="17" cols="150" style="resize: vertical;" class="form-control" required></textarea>
            </div>

            <input type="submit" name="submit" value="Create" class="btn btn-primary">
        </form>
    </div>
  </body>

  <script src="../assets/js/jquery.min.js"></script>
  <script src="../assets/js/bootstrap.min.js"></script>
</html>

<?php
  if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];

    $blog = new Blog();
    $blog->add($title, $content);
  }
