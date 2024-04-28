<?php
 include_once('../config.php');
 session_start();
 $query = "DELETE FROM selection WHERE sel_id=$_GET[jid]";
$result = mysqli_query($db1,$query);
if($result) {
    echo "<h3 style='color: green;'> You have successfully rejected this offer.</h3>";
    exit;
}
else{
    echo "<h3 style='color: red;'> Failed to reject the selected job!</h3>";
    exit;
}
?>