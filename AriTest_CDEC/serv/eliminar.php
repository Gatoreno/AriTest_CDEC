<?php include("../include/head.php");
require ("conexion.php");
?>

<br><br><br>

 <div class="container">
   <div class="row">

 <?php  $id = $_POST['id'];
  $sql = "DELETE FROM users WHERE id = $id";
  $resultado =  mysql_query($sql);


  if (mysqli_query($con, $sql)) {
     ?>

     <div class="col-sm-12" align="center">
       <h3>El usuario <b><?php echo $id ?> ha sido eliminado</b></h3>
       <a href="../dashboard/index.php">Regresar</a>
     </div>

     <?php
  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($con);
  }

  mysqli_close($con);
 ?>



   </div>
 </div>


 <?php include("../include/footer.php") ?>
