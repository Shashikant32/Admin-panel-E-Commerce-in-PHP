<?php

    include_once "../config/dbconnect.php";
    $order_id=$_POST['record'];
 
    $sql = "SELECT pay_status from orders where order_id='$order_id'"; 
    $result=$conn-> query($sql);


    $row=$result-> fetch_assoc();
    
    
    if($row["pay_status"]==0){
         $update = mysqli_query($conn,"UPDATE orders SET pay_status=1 where order_id='$order_id'");
    }
    else if($row["pay_status"]==1){
         $update = mysqli_query($conn,"UPDATE orders SET pay_status=0 where order_id='$order_id'");
    }
 
?>