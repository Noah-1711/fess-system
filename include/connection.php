<?php
$username ="root";
$password ="";
$server ="localhost";
$db ="fees_system";


$con = mysqli_connect($server,$username,$password,$db);

if($con){
    // echo"connection successful";
    ?>
<script>
alert('Connection Successfull');
</script>

    <?php
}else{
    echo"no connection";
}

?>