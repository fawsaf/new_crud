<?php

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $database = new mysqli("localhost", "root", "", "new_crud");
        $query = "delete from student where id={$id}";
        $database->query($query);
    }

    header("Location:read.php");
?>