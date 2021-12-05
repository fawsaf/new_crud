<html>

    <head>
        <title>CRUD</title>
    </head>

    <body>
    <h2>Student Table</h2>
        <table border="1" cellspacing="0" cellpadding="5">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>dept_name</birthth>
                    <th> Student name</th>
                    <th> nid</th>
                    <th> birth</th>
                    <th> address</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $database = new mysqli("localhost", "root", "", "new_crud");
                    $query = "select * from student";

                    $result = $database->query($query);

                    $r = $result->num_rows;

                    for($i=0; $i<$r; $i++) {
                        $data = $result->fetch_assoc();
                        echo "
                            <tr>
                            <td>{$data['id']}</td>
                            <td>{$data['dept_name']}</td>
                            <td>{$data['std_name']}</td>
                            <td>{$data['nid']}</td>
                            <td>{$data['birth']}</td>
                            <td>{$data['address']}</td>
                            <td>
                            <a href='edit_student.php?id={$data['id']}'>Edit</a>
                            <a href='delete_student.php?id={$data['id']}'>Delete</a>
                            </td>
                            </tr>
                        ";
                    }

                    // echo "<pre>";
                    // print_r();
                    // echo "<pre>";
                ?>
            </tbody>
        </table>
        <br><br>
        <br><br>

        <h2>Teacher Table</h2>
        <table border="1" cellspacing="0" cellpadding="5">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>dept_name</birthth>
                    <th> teacher name</th>
                    <th> nid</th>
                    <th> birth</th>
                    <th> address</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $database = new mysqli("localhost", "root", "", "new_crud");
                    $query = "select * from teacher";

                    $result = $database->query($query);

                    $r = $result->num_rows;

                    for($i=0; $i<$r; $i++) {
                        $data = $result->fetch_assoc();
                        echo "
                            <tr>
                            <td>{$data['id']}</td>
                            <td>{$data['dept_name']}</td>
                            <td>{$data['t_name']}</td>
                            <td>{$data['nid']}</td>
                            <td>{$data['birth']}</td>
                            <td>{$data['address']}</td>
                            <td>
                            <a href='edit_teacher.php?id={$data['id']}'>Edit</a>
                            <a href='delete_teacher.php?id={$data['id']}'>Delete</a>
                            </td>
                            </tr>
                        ";
                    }

                    // echo "<pre>";
                    // print_r();
                    // echo "<pre>";
                ?>
            </tbody>
        </table>
        <br><br>
        <br><br>










        <h2>Course Table</h2>

        <table border="1" cellspacing="0" cellpadding="5">
            <thead>
                <tr>
                    <th>course_id</th>
                    <th> dept</th>
                    <th> title</th>
                    <th> credit</th>
                    <th>Assign_faculty</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $database = new mysqli("localhost", "root", "", "new_crud");
                    $query = "select * from course";

                    $result = $database->query($query);

                    $r = $result ? $result->num_rows : 0;

                    for($i=0; $i<$r; $i++) {
                        $data = $result->fetch_assoc();
                        echo "
                            <tr>
                            <td>{$data['course_id']}</td>
                            <td>{$data['dept']}</td>
                            <td>{$data['title']}</td>
                            <td>{$data['credit']}</td>
                            <td><a href='assign_faculty.php?course_id={$data['course_id']}'>Assign</a></td>
                            <td>
                            <a href='edit_course.php?course_id={$data['course_id']}'>Edit</a>
                            <a href='delete_course.php?course_id={$data['course_id']}'>Delete</a>
                            </td>
                            </tr>
                        ";
                    }

                    // echo "<pre>";
                    // print_r();
                    // echo "<pre>";
                ?>
            </tbody>
        </table>
        <font size="100px"><a href="create.php">Create</a>
    </body>

</html>