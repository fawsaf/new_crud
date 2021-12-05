
<?php
    $data=[]; 
    if (isset($_POST['submit'])) {
        $id = $_GET['id'];
        $dept_name = $_POST["dept_name"];
        $std_name = $_POST["std_name"];
        $nid = $_POST["nid"];
        $birth = $_POST["birth"];
        $address = $_POST["address"];
        echo "$std_name";

        $database = new mysqli("localhost", "root", "", "new_crud");
        $query = "UPDATE student 
                SET dept_name= '{$dept_name}',
                std_name='{$std_name}', 
                nid='{$nid}',
                birth= '{$birth}',
                address='{$address}'
                WHERE id=$id";
        $database->query($query);
         header("Location:read.php");
    }
    else if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $database = new mysqli("localhost", "root", "", "new_crud");
        $query = "
            select * 
            from student 
            where id={$id}
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
        
        <form action="edit_student.php?id=<?php echo $id; ?>" method="POST">
            <input type="text" name="dept_name" value="<?php echo $data['dept_name']?>">
            <input type="text" name="std_name" value="<?php echo $data['std_name']?>">
            <input type="text" name="nid" value="<?php echo $data['nid']?>">
            <input type="date" name="birth" value="<?php echo $data['birth']?>">
            <input type="text" name="address" value="<?php echo $data['address']?>">
            <input type="submit" name="submit" value="update">
        </form>
    </body>
    <a href="read.php">Cancel</a>
</html>