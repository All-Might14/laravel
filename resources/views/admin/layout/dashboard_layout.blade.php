<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/6fb918a6d3.js" crossorigin="anonymous"></script>
<body style="background-color:sky;">
    <!-- {{--nav bar--}} -->

    <div class="container-fluid bg-dark d-flex justify-content-between p-3 border-secondary border-bottom position-sticky">
        <div class=" col-3">
            <h4 class="text-light">Logo</h4>
        </div>
        <div class=" d-flex col-4 justify-content-around ">
            <div class="col-8 ms-3">
                <input class="col-12 " type="text">
            </div>
            <div class=" me-5">
                <button class="btn btn-success btn-sm">search</button>
            </div>
        </div>
        <div class=" col-4 d-flex justify-content-around">
            <div>
                <a class="text-decoration-none text-light" href="">Login</a>
            </div>
            <div>
               <a class="text-decoration-none text-light" href="">About</a>
            </div>
          <div>
               <a class="text-decoration-none text-light " href="">Setting</a>
            </div>
           

        </div>
    </div>
    <!-- {{--nav bar end--}} -->

    <!-- {{--site bar--}} -->

    <div class="d-flex">
        <div class="bg-light  border border-secondary rounded-top border-bottom-0 " style="height:600px;width: 280px;margin;top: 70px;">
        
            <div >
                <br>
                <a class=" text-decoration-none text-dark p-4 " href=""><i class="fa-solid fa-user"></i>  Public</a><BR></BR>
                <a class=" text-decoration-none text-dark p-4 " href=""><i class="fa-solid fa-hand"></i> Abilities</a><BR></BR>
                <a class=" text-decoration-none text-dark p-4 " href=""><i class="fa-brands fa-paypal"></i>  Payment</a><BR></BR>
                <a class=" text-decoration-none text-dark p-4 " href=""><i class="fa-solid fa-circle-plus"></i>  Subscribe</a><BR></BR>
                <a class=" text-decoration-none text-dark p-4 " href=""><i class="fa-sharp fa-solid fa-bullhorn"></i>  Report</a><BR></BR>
                <BR></BR>
                <button class="btn btn-outline-success border-0 w-100 p-2 ">Home</button> 
                <button class="btn btn-outline-success border-0 w-100 p-2 ">Menu</button>
                <button class="btn btn-outline-success border-0 w-100 p-2 ">Contact</button>
            
            </div>
        
        </div>
        <div class="container-fluid ">
        @yield('category')
        </div>
    </div>


    <!-- {{--site bar end--}} -->
    
</body>
</html>