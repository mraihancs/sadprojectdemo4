<?php
$server="localhost";
$username="root";
$password="";
$db="sadproject";
$conn = mysqli_connect($server,$username,$password,$db);
if($conn){
    ?>
<script>
   
    alert('Connected Successfully');
    </script>

<?php
}

else{
    die('Connection Unsuccessful'.mysqli_connect_error());
}


?>