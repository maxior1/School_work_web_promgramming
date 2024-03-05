<?php
     $sql = "SELECT * FROM `perso`";
     $rs = mysqli_query ($conn, $sql);
     while ($data = mysqli_fetch_array($rs)) {

     ?>
     <tr>
         <td> <?=$data['id'];?> </td>
         <td> <?=$data['first_name'];?> </td>
         <td> <?=$data['last_name'];?> </td>
         <td> <?=$data['email'];?> </td>
         <td> <?=$data['gender'];?> </td>
         <td> <?=$data['ip_address'];?> </td>
         <td> <?=$data['job_title'];?> </td>
         <td> <?=$data['country'];?> </td>
         
         <td><a href="<?=$data['avatar'];?>">Avatar</a></td>
     </tr>

     <?php
         }
         mysqli_close($conn);
     ?>

