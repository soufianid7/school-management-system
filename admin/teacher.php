<?php
session_start();
if (isset($_SESSION['admin_id']) && isset($_SESSION['role'])) {

    if ($_SESSION['role']=='Admin') {
        include "../DB_connection.php";
        include "data/teacher.php";
        include "data/subject.php";
        $teachers=getallTeachers($conn);
        $subjects=getallSubjects($conn);
        echo "<pre>";
        print_r($subjects);
        echo "</pre>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Teacher</title>
    <link rel="stylesheet" href="../css/file.css">
    <link rel="icon" href="../logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body> 
    <?php
    include "inc/navbar.php";
    if ($teachers !=0) {
        

    ?>
    <div class="container mt-5">
        <a href="" class="btn btn-dark">Add New Teacher</a>
        <div class="table-responsive">
        <table class="table table-bordered mt-3 n-table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">ID</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Username</th>
                <th scope="col">Subject</th>
                <th scope="col">Grade</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($teachers as $teacher) { ?>
                <tr>
                <th scope="row">1</th>
                <td><?=$teacher['teacher_id']?></td>
                <td><?=$teacher['fname']?></td>
                <td><?=$teacher['lname']?></td>
                <td><?=$teacher['username']?></td>
                <td><?=$teacher['teacher_id']?></td>
                <td><?=$teacher['teacher_id']?></td>
                <td>
                    <a href="" class="btn btn-warning">Edit</a>
                    <a href="" class="btn btn-danger">Delete</a>
                </td>
                </tr>
                <?php }  ?>

            </tbody>
            </table>
        </div>
        <?php }else { ?>
            <div class="alert alert-info .w-450 m-5" role="alert">
            Empty
            </div>
        <?php } ?>

        
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script>
            $(document).ready(function(){
            $("#navLinks li:nth-child(2) a").addClass('active');
            });
        </script>
</body>
</html>

<?php 
}else {
    header("Location: ../login.php");
    exit;
}

}else {
    header("Location: ../login.php");
    exit;
}
?>