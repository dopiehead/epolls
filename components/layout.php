<nav class="header-container">

<div class="logo-container">

LOGO

</div>


<ul class="link-container ">

   <li>Products <i class="fa fa-caret-down"></i></li>
   <li>Solutions <i class="fa fa-caret-down"></i></li>
   <li>Resources & Support <i class="fa fa-caret-down"></i></li>
   <li>Pricing</li>
  
   

</ul>


<div class="login-container ">

<ul>

<li>Login</li>
<li class='sign_up_link'>Sign up</li>

</ul>

</div>



<div class="menu-icon mr-2">
   <div class="bar bar1"></div>
   <div class="bar bar2"></div>
   <div class="bar bar3"></div>

         
 </div>






</nav>










 <div id="myform" class="overlay overlayParent">

     <div class="overlay-content">
    
     <a>Products <i class="fa fa-caret-down"></i></a>
   <a>Solutions <i class="fa fa-caret-down"></i></a>
   <a>Resources & Support <i class="fa fa-caret-down"></i></a>
   <a>Pricing</a>

             <?php if(isset($_SESSION['id']) && !empty($_SESSION['id'])){ ?>
            <a href="sign-in.php"><span class="login">Sign in</span></a>
            <?php } else { ?>
                <a href="sign-in.php"><span class="login">Sign in</span></a>
             <?php } ?>
       
     </div>
</div>


<script>

         $(".menu-icon").click(function(){

              $(this).toggleClass("close");

         $("#myform").toggleClass("overlayParent");

         });

</script>

