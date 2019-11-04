<?
if (isset($GET['delete-role'];)) {
          $id = $GET['delete-role'];
          mysql_query($data, "DELETE FROM role WHERE id = '$role'");
          header("location:admin.php?role berhasil di delete");
        }