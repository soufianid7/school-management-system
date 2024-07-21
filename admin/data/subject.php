<?php
// all Subjects
function getallSubjects($conn){
    $sql="select * from subjects";
    $stmt=$conn->prepare($sql);
        $stmt->execute();

        if($stmt->rowCount()>=1){
            $subjects=$stmt->fetchAll();
            return $subjects;
        }else{
            return 0;
        }
}

?>