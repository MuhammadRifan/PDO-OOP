<?php
    require_once '../controller.php';

    $blog = new Blog();
    if (isset($_GET['id'])) {
      $edit = $blog->DeleteBlog($_GET['id']);
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
        <br>
        <a href="../index.php" class="btn btn-info">Back</a>
        <hr>

        <form method="post">
            Are You Sure To Delete This "<?= $row['title'] ?>" Blog ?
            <hr>
            <div class="form-group">
              <input type="submit" name="submit" value="Yes" class="btn btn-danger">
              <input type="submit" name="submit" value="No" class="btn btn-warning">
            </div>
        </form>
    </div>
  </body>

  <script src="../assets/js/jquery.min.js"></script>
  <script src="../assets/js/bootstrap.min.js"></script>
</html>

<?php
  if (isset($_POST['submit'])) {
    if ($_POST['submit'] == 'Yes') {

      $blog->DestroyBlog($_GET['id']);
    } else {
      header('Location: ../index.php');
    }
  }
