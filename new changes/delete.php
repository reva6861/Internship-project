<?php
 include "../database/db.php";
 if(isset($_GET['id'])){

            $id = $_GET['id'];
            $sql="DELETE FROM new_form where Doctor_id = $id";
            $result = mysqli_query($conn, $sql);
    

 }
?>