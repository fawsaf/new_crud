<html>
    <head>
        <title>CRUD</title>
    </head>
    <body>

        <?php
            if (isset($_POST["submitting"])) {
                $dept_name = $_POST["dept_name"];
                $student_name = $_POST["std_name"];
                $nid = $_POST["nid"];
                $birth = $_POST["birth"];
                $address = $_POST["address"];

                echo "$student_name";

                //$database = new mysqli("localhost", "root", "", "crud");
                $connect= mysqli_connect("localhost", "root", "", "new_crud");
                $query = "insert into student(dept_name,std_name, nid,birth,address) values('{$dept_name}', '{$student_name}',
                                                                              '{$nid}','{$birth}','{$address}')";
                //$database->query($query);
                
                echo $query;

                if(mysqli_query($connect, $query)){

                    echo " Created Successfully";
                }
                    

                    
            }

            if (isset($_POST["submit"])) {
                $dept_name = $_POST["dept_name"];
                $teacher_name = $_POST["t_name"];
                $nid = $_POST["nid"];
                $birth = $_POST["birth"];
                $address = $_POST["address"];

                echo "$teacher_name";

                //$database = new mysqli("localhost", "root", "", "crud");
                $connect= mysqli_connect("localhost", "root", "", "new_crud");
                $query = "insert into teacher(dept_name,t_name, nid,birth,address) values('{$dept_name}', '{$teacher_name}',
                                                                              '{$nid}','{$birth}','{$address}')";
                //$database->query($query);
                
                echo $query;

                if(mysqli_query($connect, $query)){

                    echo " Created Successfully";
                }
                    

                    
            }

            if (isset($_POST["submission"])) {
                
                
                $department = $_POST["dept"];
                $title = $_POST["title"];
                $credit = $_POST["credit"];

                echo "$title";

                //$database = new mysqli("localhost", "root", "", "crud");
                $connect= mysqli_connect("localhost", "root", "", "new_crud");
                $query = "insert into course(dept,title,credit) values('{$department}', '{$title}', '{$credit}')";
                echo $query;
                //$database->query($query);
                if(mysqli_query($connect, $query)){

                    echo " Created Successfully";
                }
                    

                    
            }
            
        ?>
        <h2>Student Information</h2>
        <form action="create.php" method="POST">
            <input type="text" name="dept_name" placeholder="Enter dept_name">
            <input type="text" name="std_name" placeholder="Enter student name">
            <input type="text" name="nid" placeholder="Enter nid">
            <input type="date" name="birth" placeholder="Enter birth-date">
            <input type="text" name="address" placeholder="Enter address">
            <input type="submit" name="submitting" value="Submitting">
        </form>
        <br><br>
        <br><br>
            
        <h2>Teacher Information</h2>
        <form action="create.php" method="POST">
            <input type="text" name="dept_name" placeholder="Enter dept_name">
            <input type="text" name="t_name" placeholder="Enter teacher name">
            <input type="text" name="nid" placeholder="Enter nid">
            <input type="date" name="birth" placeholder="Enter birth-date">
            <input type="text" name="address" placeholder="Enter address">
            <input type="submit" name="submit" value="Submit">
        </form>
        <br><br>
        <br><br>

        
        <h2>Course Information</h2>
        <form action="create.php" method="POST">
            
            <input type="text" name="dept" placeholder="Enter department name">
            <input type="text" name="title" placeholder="Enter course name">
            <input type="number" name="credit" placeholder="Enter credit">
            <input type="submit" name="submission" value="Submission">
        </form>

        <a href="read.php">Read</a>
    </body>
</html>