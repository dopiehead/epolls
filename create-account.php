<html lang="en">
<head>
    <meta charset="UTF-8">
  <?php include 'components/links.php'; ?>
  <link rel="stylesheet" href="assets/css/create-account.css">
    <title>Sign in </title>
</head>
<body>

<?php include 'components/layout.php'?>



    <div class="container mt-8">

    <div class="p-2">


          <div class="sign-in-container d-flex justify-content-center align-items-center">


             <div class="w-100 h-100">
                
             <img src="assets/img/frame.jpg" alt="">

             </div>





             <div class="d-block container">
              
              <div class="heading-container">
                <span><h6><b class="text-danger">Sign up</b></h6></span>
                <span><a class="text-secondary text-underline-underline" href="">Already have an account?</a></span>
              </div>

              <button type="submit" class="btn btn-google mt-3 w-100"><i class="fa-brands fa-google"></i> Sign up with google</button> 
                  <button type="submit" class="btn btn-facebook mt-2 w-100"><i class="fa-brands fa-facebook"></i> Sign up with Facebook</button>
                   
                  <div class="m-2 text-center">
                  <input type="checkbox"><span class="text-secondary text-sm ml-1">Agree with terms & conditions</span>
                  </div>
                  
                  <button type="submit" class="btn btn-continue mt-2 w-100">Continue</button>
                  <div class="d-block mt-3">
                  <input type="text" name="surname" class="form-control" placeholder="Surname">
                  <input type="text" name="first_name" class="form-control mt-2" placeholder="First name">
                  <input type="text" name="password" class="form-control mt-2" placeholder="Password">
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