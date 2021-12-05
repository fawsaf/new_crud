
<?php
    $data=[]; 
    if (isset($_POST['submit'])) {
        $id = $_GET['course_id'];
        $department = $_POST["dept"];
        $title = $_POST["title"];
        $credit = $_POST["credit"];

        $database = new mysqli("localhost", "root", "", "new_crud");
        echo "$department  $id";
        $query = "UPDATE course 
                SET dept='{$department}', 
                title='{$title}',
                credit='{$credit}'
                WHERE course_id=$id";
        $database->query($query);
        header("Location:read.php");
    }
    else if (isset($_GET['course_id'])) {
        $id = $_GET['course_id'];
        echo "$id";
        $database = new mysqli("localhost", "root", "", "new_crud");
        $query = "
            select * 
            from course 
            where course_id={$id}
        ";
        $result = $database->query($query);
        echo "<pre>";
        print_r($result);
        echo "</pre>";
        $data = $result->fetch_assoc();
    }

    
?>


<html>
    <head>
        <title>CRUD_Edit</title>
    </head>
    <body>
        
        <form action="edit_course.php?course_id=<?php echo $id; ?>" method="POST">
            <input type="text" name="dept"  value="<?php echo $data['dept']?>">
            <input type="text" name="title" value="<?php echo $data['title']?>">
            <input type="number" name="credit"  value="<?php echo $data['credit']?>">
            <input type="submit" name="submit" value="udpate">
        </form>
    </body>
    <a href="read.php">Cancel</a>
</html>