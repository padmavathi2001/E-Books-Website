
<!DOCTYPE html>
<html>
<head>
	<title>Display</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
   

     <?php 



include 'db_conn.php';
include 'ind.php';


$query = "SELECT * FROM data ORDER by id ASC";
          $res = mysqli_query($conn,  $query);
?>

<br>
          <table>
          <tr>
              <th>Topic Name</th>
              <th>Download</th>
          </tr>

<?php

          if (mysqli_num_rows($res) > 0) {
      ?>        

  <?php
          	while ($row = mysqli_fetch_assoc($res)) {  ?>
             
             <tr>
               
               <td><?php echo $row['name'];?></td>
<td>
<button><a href="uploads/<?=$row['file_url']?>">Download</a></button>
</td>

           </tr>



          		
    <?php } 
  }?>
			  
</body>
</html>
