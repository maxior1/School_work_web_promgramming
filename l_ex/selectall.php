<?php
     $sql = "SELECT * FROM `products`";
     $rs = mysqli_query ($conn, $sql);
     while ($data = mysqli_fetch_array($rs)) {

     ?>
     <tr>
        <td> <?=$data['p_id'];?> </td>
        <td> <?=$data['p_name'];?> </td>
        <td> <?=$data['p_detail'];?> </td>
        <td> <?=$data['p_price'];?> </td>
        <td> <?=$data['p_stock'];?> </td>
        <td> <?=$data['c_id'];?> </td>
        <?php
              $p = $data['p_id'].".".$data['p_ext'];
        ?>
        
        <td><a href="imgs/<?=$p;?>">
            <img src="imgs/<?=$p;?>" width="50">
        </a></td>

        
        

     <?php
         }
         mysqli_close($conn);
     ?>

