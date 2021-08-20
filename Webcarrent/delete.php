<?php 

    include_once('functions.php');

    if (isset($_GET['del'])) {
        $car_id = $_GET['del'];
        $deletedata = new DB_con();
        $sql = $deletedata->deletecar($car_id);
        

        

        if ($sql) {
            
            echo "<script>alert('Record Deleted Successfully!');</script>";
            echo "<script>window.location.href='allcar.php'</script>";
        }
    }

?>