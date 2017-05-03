<?php

  class Blog
  {
    public function __construct()
    {
      $this->db = new PDO('mysql:host=localhost;dbname=magang_pdo_oop', "root", "");
    }

    public function show()
    {
      $sql = "SELECT * FROM blog";
      $result = $this->db->query($sql);
      return $result;
    }

    public function add($title, $content)
    {
      $sql = "INSERT INTO blog (title, content) VALUES ('$title', '$content')";
      $result = $this->db->query($sql);
      if ($result) {
        return header('Location: ../index.php');
      } else {
        return 'Gagal';
      }
    }

    public function EditBlog($id)
    {
      $sql = "SELECT * FROM blog WHERE id = $id";
      $result = $this->db->query($sql);
      return $result;
    }

    public function UpdateBlog($title, $content, $id)
    {
      $sql = "UPDATE blog SET title='$title', content='$content' WHERE id = $id";
      $result = $this->db->query($sql);
      if ($result) {
        return header('Location: ../index.php');
      } else {
        return 'Gagal';
      }
    }

    public function DeleteBlog($id)
    {
      $sql = "SELECT * FROM blog WHERE id = $id";
      $result = $this->db->query($sql);
      return $result;
    }

    public function DestroyBlog($id)
    {
      $sql = "DELETE FROM blog WHERE id = $id";
      $result = $this->db->query($sql);
      if ($result) {
        return header('Location: ../index.php');
      } else {
        return 'Gagal';
      }
    }
  }
