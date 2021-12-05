
<?php
    if (isset($_GET['course_id']) && isset($_GET['teacher_id'])) {
        $c_id = $_GET['course_id'];
        $t_id = $_GET['teacher_id'];

        $database = new mysqli("localhost", "root", "", "new_crud");

        $query = "update teacher set course_id={$c_id} where ID={$t_id}";

        // echo $query;

        $database->query($query);

        header("Location:read.php");
    }
    else if (isset($_GET['course_id'])) {
        $id = $_GET['course_id'];
        $data=[]; 
            
        $database = new mysqli("localhost", "root", "", "new_crud");
        $query = "select * from teacher";
        // echo $query;
        $result = $database->query($query);  
        $r = $result->num_rows;
        for($i=0; $i<$r; $i++) {
            $data = $result->fetch_assoc();
            echo "<a href=\"assign_faculty.php?course_id={$id}&&teacher_id={$data['id']}\">{$data['t_name']}</a><br>";
        }
    }
    
?>