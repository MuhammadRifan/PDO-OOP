<?php
    require_once '../controller.php';

    $blog = new Blog();
    if (isset($_GET['id'])) {
      $edit = $blog->EditBlog($_GET['id']);
      $row = $edit->fetch(PDO::FETCH_ASSOC);
    }
?>

<!DOCTYPE html>
<html>
  <head>
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/bootstrap-theme.min.css" rel="stylesheet">
    <title>PDO + OOP</title>
  </head>
  <body>
    <div class="container">
        <h1 class="text-center"><?= $row['title'] ?></h1>
        <br>

        <p><?= nl2br($row['content']) ?></p>
        <br>

        <a href="../index.php" class="btn btn-primary">Back</a>
    </div>
  </body>

  <script src="../assets/js/jquery.min.js"></script>
  <script src="../assets/js/bootstrap.min.js"></script>
</html>

<?php
  if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];

    $blog->UpdateBlog($title, $content, $_GET['id']);
  }
