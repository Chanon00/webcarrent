<?php 

    include_once('functions.php');

    $insertdata = new DB_con();

    if (isset($_POST['insert'])) {
        $car_name = $_POST['car_name'];
        $car_license = $_POST['car_license'];
        $car_color = $_POST['car_color'];
        $car_status = $_POST['car_status'];
        $car_brand = $_POST['car_brand'];
        $car_price = $_POST['car_price'];
        $car_note = $_POST['car_note'];
        
        $sql = $insertdata->insertcar($car_name ,$car_license ,$car_color ,$car_status ,$car_brand ,$car_price ,$car_note);

        if ($sql) {
            echo "<script>alert('Record Inserted Successfully!');</script>";
            echo "<script>window.location.href='allcar.php'</script>";
        } else {
            echo "<script>alert('Something went wrong! Please try again!');</script>";
            echo "<script>window.location.href='insertcar.php'</script>";
        }
       
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car rental</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" 
        crossorigin="anonymous">
    <link ral="stalysheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="js/bootstrap.min.js">
    
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark " style="background-color:blueviolet">  <!--navbar-->
    <div class="container-fluid">
      <a class="navbar-brand " href="index.htm">
                <img src="../Webcarrent/img/car-rental.svg" alt="logo" width="70" height="60" 
                class="d-inline-block align-text-between  me-3 ">CarRental      
                <!-- logo navbar -->
                <!-- <span class="navbar-brand mb-5 h1">CarRental</span> -->
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>  
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-md-1">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.htm">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="Carconditions.php">Car rental conditions</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="howtorentcar.php">How to rent a car</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="Payment.php">Payment</a>   
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="Address.php">Contact</a>   
                  </li>
                </ul>
                
      </div>
    </div>
  </nav>
    <div class="container">
        
        <h1 class="mt-5">Insert <font color="#8A2BE2">Car</font></h1>
        <hr>
        <form action="" method="post">
            <div class="mb-3">
                <label for="car_name" class="form-label">name</label>
                <input type="text" class="form-control" name="car_name" required>
            </div>
            <div class="mb-3">
                <label for="car_license" class="form-label">license</label>
                <input type="text" class="form-control" name="car_license" required>
            </div>
            <div class="mb-3">
                <label for="car_color" class="form-label">color</label>
                <!-- <input type="text" class="form-control" name="car_color" required> -->
                <select class="form-control" name="car_color" required>
                    <option selected>เลือก</option>
                    <?php 
                        $dropdowncolor = new DB_con;
                        $sql = $dropdowncolor->fetchdatacolor();
                        
                            foreach($sql as $car_color){
                                echo "
                                    <option value = '{$car_color['color_id']}'>{$car_color['color_name']}</option>
                                ";
                        }
                     
                    ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="car_status" class="form-label">status</label>
                <!-- <input type="text" class="form-control" name="car_status" required> -->
                <select class="form-control" name="car_status" required>
                    <option selected>เลือก</option>
                    <?php 
                        $dropdownst = new DB_con;
                        $sql = $dropdownst->fetchdatastatus();
                        
                            foreach($sql as $car_status){
                                echo "
                                    <option value = '{$car_status['carstatus_id']}'>{$car_status['carstatus_name']}</option>
                                ";
                        }
                     
                    ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="car_brand" class="form-label">brand</label>
                <!-- <input type="text" class="form-control" name="car_brand" required> -->
                <select class="form-control" name="car_brand" required>
                    <option selected>เลือก</option>
                    <?php 
                        $dropdownbr = new DB_con;
                        $sql = $dropdownbr->fetchdatabrand();
                        
                            foreach($sql as $car_brand){
                                echo "
                                    <option value = '{$car_brand['br_id']}'>{$car_brand['br_name']}</option>
                                ";
                        }
                     
                    ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="car_price" class="form-label">price</label>
                <!-- <input type="text" class="form-control" name="car_price" required> -->
                <select class="form-control" name="car_price" required >
                    <option selected>เลือก</option>
                    <?php 
                        $dropdownprice = new DB_con;
                        $sql = $dropdownprice->fetchdataprice();
                        
                            foreach($sql as $car_price){
                                echo "
                                    <option value = '{$car_price['price_id']}'>{$car_price['price_name']}</option>
                                ";
                        }
                     
                    ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="car_note" class="form-label">note</label>
                <input type="text" class="form-control" name="car_note" >
            </div>
            <button type="submit" name="insert" class="btn btn-success">Insert</button>
            <a href="allcar.php" class="btn btn-primary ">Go Back</a>
        </form>
        <br><br><br><br><br>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" 
            integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" 
            crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" 
            integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" 
            crossorigin="anonymous">
    </script>
</body>
</html>