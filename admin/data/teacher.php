<?php
// all teachers
function getallTeachers($conn){
    $sql="select * from teacher";
    $stmt=$conn->prepare($sql);
        $stmt->execute();

        if($stmt->rowCount()>=1){
            $teachers=$stmt->fetchAll();
            return $teachers;
        }else{
            return 0;
        }
}

?>