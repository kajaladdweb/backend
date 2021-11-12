<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sidebars/">

<!-- css  -->
    <link href="css/sidebars.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">

<!-- font awsome -->
    <script src="https://kit.fontawesome.com/cdb4175f0a.js" crossorigin="anonymous"></script>
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    
     

img{
  margin-left:10px;
  }
  
.img1
{
  margin-top: 70px;
  margin-left:50px;
}
.img1:hover
{

  transform:scale(1.1)
}


   
    </style>

</head>
<body>

    <!-- navbar started -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="dashboard.php"><img src="../images/pin.png" alt=""></a>
    </div>
    </nav>
    <!-- navbar ends -->


    <!-- sidebar starts -->
<main>

  <div class="flex-shrink-0 p-3 bg-white" style="width: 280px;">
    <ul class="list-unstyled ps-0">
      <li class="mb-1">
      
        <a href="dashboard1.php"><i class="fas fa-tachometer-alt"></i>Dashboard</a>  
        <hr>
      
        <!-- <div class="collapse show" id="home-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="#" class="link-dark rounded">Overview</a></li>
            <li><a href="#" class="link-dark rounded">Updates</a></li>
            <li><a href="#" class="link-dark rounded">Reports</a></li>
          </ul>
        </div> -->
      </li>
      <li class="mb-1">
        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
        Categories
        </button>
        <div class="collapse" id="dashboard-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="add_category.php" class="link-dark rounded">Add Category</a></li>
            <li><a href="view_category.php" class="link-dark rounded">View Category</a></li>
          </ul>
        </div>
      </li>
      <li class="mb-1">
        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
           Products
        </button>
        <div class="collapse" id="orders-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="add_prod.php" class="link-dark rounded">Add products</a></li>
            <li><a href="view_prod.php" class="link-dark rounded">View Products</a></li>
            
          </ul>
        </div>
    </li>
    </ul>
  </div>

  <div class="b-example-divider"> </div>
  <!-- images -->
   <div class="img1">
       <a href="women.php"><img src="../cozastore-master/images/product-08.jpg" alt="img1" height="400px" width="300px"></a> 
    </div>

    <div class="img1">
     <a href="men.php"><img src="../cozastore-master/images/product-11.jpg" alt="img2" height="400px" width="300px"></a> 
    </div>


    <div class="img1">
     <a href="accesories.php"><img src="../cozastore-master/images/product-15.jpg" alt="img3" height="400px" width="300px"></a> 
    </div>


</main>
<!-- sidebar ends -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="js/sidebars.js"></script>

    
</body>
</html>