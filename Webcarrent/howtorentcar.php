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
<body >
    
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
      <h1 class="mt-5" ><font color="#000000" size="10">How to rent</font> <font color="#8A2BE2" size="10">a car</font>  </h1>
        <br><hr>

        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/png/logo1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/png/03.jpg" class="d-block w-100" alt="...">
    </div>
   
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<br><hr><br>
         
<h1>ขั้นตอน<font color="#8A2BE2" >การเช่ารถ</font></h1><br>
        <div class="row row-cols-1 row-cols-md-2 g-4">
          <div class="col">
            <div class="card">
              <img src="img/png/โทรจอง.jpg" class="card-img-top" alt="..." width="100" height="350">
              <div class="card-body">
                <br>
                <h5 class="card-title"><font color="#8A2BE2" size="6">1. โทรจองรถ </font></h5>
                <p class="card-text">ลูกค้าโทรตรวจสอบสถานะรถได้โดยผ่านทางโทรศัทพ์ หรือผ่านข้อความทางLine</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <img src="img/png/โอนเงิน.jpg" class="card-img-top" alt="..." width="100" height="350">
              <div class="card-body">
              <br>
                <h5 class="card-title"><font color="#8A2BE2" size="6">2. โอนเงินค่าบริการและค่ามัดจำ</font></h5>
                <p class="card-text">เมื่อลูกค้าตกลงใช้บริการกับเราแล้ว ให้ลูกค้าโอนชำระค่าบริการ เพื่อยืนยันการใช้บริการ</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <img src="img/png/ใช้รถ.jpg" class="card-img-top" alt="..." width="100" height="350">
              <div class="card-body">
              <br>
                <h5 class="card-title"><font color="#8A2BE2" size="6">3. รับรถไปใช้งาน</font></h5>
                <p class="card-text">เมื่อถึงวันใช้บริการจะมีการเซ็นต์สัญญาการเช่าก่อนจะรับรถไปใช้ </p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <img src="img/png/คืนรถ.jpg" class="card-img-top" alt="..." width="100" height="350">
              <div class="card-body">
              <br>
                <h5 class="card-title"><font color="#8A2BE2" size="6">4. คืนรถ</font></h5>
                <p class="card-text">เมื่อครบกำหนดแล้ว ให้ลูกค้านำรถมาคืน พร้อมรับเงินมัดจำคืน</p>
              </div>
            </div>
          </div>
        </div>
      


          <!-- Footer -->
<footer class="text-center text-lg-start bg-ligth text-muted">
  <!-- Section: Social media -->
  <section
    class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
  >
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <!-- <span>Get connected with us on social networks:</span> -->
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>CarRental
          </h6>
          <p>
            บริการรถเช่าราคาพิเศษ รถสภาพดี ราคาถูก ราคาสบายกระเป๋า เก็บมัดจำต่ำ บริการดี 
            ให้บริการได้ทั้ง หาดใหญ่ สงขลา 5 จังหวัดชายแดนใต้  พร้อมบริการส่งรถ
          </p>
        </div>
        <!-- Grid column -->

       

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Useful links
          </h6>
          <p>
            <a href="allcar.php" class="text-reset">information</a>
          </p>
          <p>
            <a href="Payment.php" class="text-reset">payment</a>
          </p>
          <p>
            <a href="Address.php" class="text-reset">Contact</a>
          </p>
          <p>
            <a href="Carconditions.php" class="text-reset">Help</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Contact
          </h6>
          <p><i class="fas fa-home me-3"></i> 478/65 ม.2 ต.พะวง </p>
          <p><i class="fas fa-home me-3"></i> อ.เมืองสงขลา จ.สงขลา 90100</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            chanon.gee19631@gmail.com
          </p>
          <p><i class="fas fa-phone me-3"></i> 095-1066044</p>
          <p><i class="fas fa-print me-3"></i> 095-0281601</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2021 CarRental.
    
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
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