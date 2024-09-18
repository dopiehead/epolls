<html lang="en">
<head>
    <meta charset="UTF-8">
  <?php include 'components/links.php'; ?>
  <link rel="stylesheet" href="assets/css/sign-in.css">
    <title>Sign in </title>
</head>
<body>

<?php include 'components/layout.php'?>

<div class="circle-container">
    <div class="outer-circle">
                <div class="inner-circle">

                 </div>
     </div>

</div>

    <div class="container mt-8">

    <div class="p-2">


          <div class="sign-in-container d-flex justify-content-center align-items-center">


             <div class="w-100 h-100">
                
             <img src="assets/img/sign-in.png" alt="">

             </div>





             <div class="d-block container">
              
              <div class="heading-container">
                <span><h6><b>Sign in</b></h6></span>
                <span><a class="text-secondary text-underline-underline" href="">I dont have an account</a></span>
              </div>


                  <input type="text" name="email" class="form-control" placeholder="Email">
                  <input type="password" name="password" class="form-control mt-2" placeholder="Password">
                  <div class="d-block">
                  <button type="submit" class="btn btn-continue mt-2 w-100">Continue</button>
                  <button type="submit" class="btn btn-google mt-3 w-100"><i class="fa-brands fa-google"></i> Sign in with google</button> 
                  <button type="submit" class="btn btn-facebook mt-2 w-100"><i class="fa-brands fa-facebook"></i> Sign in with Facebook</button>
                  </div>
                  <p class="text-sm">Lorem ipsum dolor sit amet consectetur. Viverra diam feugiat ac placerat sit feugiat orci. Bibendum sit eu semper sed nunc vitae lobortis purus. Maecenas pellentesque.</p>
                  
             </div>

            


         </div>


    </div>

    </div>
<br>

    <?php include 'components/footer.php'; ?>
</body>
</html>