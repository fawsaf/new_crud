<?php

    if (isset($_GET['course_id'])) {
        $id = $_GET['course_id'];
        $database = new mysqli("localhost", "root", "", "new_crud");
        $query = "delete from course where course_id={$id}";
        $database->query($query);
    }

    header("Location:read.php");
?>