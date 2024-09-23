<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/dashboard/dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat|sofia|Trirong|Poppins">
    <script src="../assets/js/jquery-3.2.1.min.js"></script>
<script src="../assets/js/sweetalert.min.js"></script>
<script src="../assets/js/flickity.pkgd.min.js"></script>
    <link rel="stylesheet" href="../assets/css/footer.css">
    <link rel="stylesheet" href="../assets/css/dashboard/survey_questions.css">
    <title>dashboard</title>
</head>
<body>

<div class="user-bar py-3 px-2">
    
     <div class="nav-container">

         <div>
             logo               
         </div>

     </div>

     <div class="tav">
              <a href="#"class="text-dark text-underline-none mr-2">Home</a>

              <a href="#"class="text-dark text-underline-none">Pricing</a>
     </div>

     <div class="create-survey">

         <div>

             <a href=""><i class="fa fa-bell"></i></a>

             <a href=""class="text-dark text-underline-none">Create Poll</a>

             <a href="" class="bg-dark text-white px-3 py-2 rounded-pill">Create Survey</a>

             <a href="" class="text-dark text-underline-none">Jane Doe <i classs="fa fa-caret-down"></i></a>


         </div>


     </div>

</div>

<!-- end of header -->

<div class="container survey-home">

      <h6 class="border-bottom pb-2">Topic </h6>



<div class="bg-info text-center text-white w-100 p-3 mt-3 fw-bold d-flex justify-content-center align-items-center">

<p class="w-50 text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi quidem atque molestias aperiam, ducimus sed temporibus vero!
</p>

</div>

<ul>

 <li>
   <h6>Lorem ipsum dolor sit amet</h6>
   <p class="text-sm w-50">Lorem ipsum dolor sit amet consectetur. Arcu non facilisis ac morbi odio faucibus congue morbi. Cras gravida sit ut neque justo mauris neque elementum feugiat. Pretium dolor vitae </p>
   <div class="objective_questions">
     <span class="mt-2"><input type="checkbox" class="mr-1">Option A</span>
     <span class="mt-2"><input type="checkbox" class="mr-1">Option B</span>
     <span class="mt-2"><input type="checkbox" class="mr-1">Option C</span>
     <span class="mt-2"><input type="checkbox" class="mr-1">Option D</span>
   </div>
 </li>

 <li>

   <h6>Lorem ipsum dolor sit amet</h6>
   <p class="text-sm w-50">Lorem ipsum dolor sit amet consectetur. Arcu non facilisis ac morbi odio faucibus congue morbi. Cras gravida sit ut neque justo mauris neque elementum feugiat. Pretium dolor vitae </p>
   <div class="objective_star d-flex justify-content-space-between align-items-center w-50">
     <span class="mt-2 star-container"><i class="fa fa-star"></i></span>
     <span class="mt-2 star-container"><i class="fa fa-star"></i></span>
     <span class="mt-2 star-container"><i class="fa fa-star"></i></span>
     <span class="mt-2 star-container"><i class="fa fa-star"></i></span>
   </div>


 </li>

 <hr class="mt-3">

 <li>

<h6>Lorem ipsum dolor sit amet</h6>
<p class="text-sm w-50">Lorem ipsum dolor sit amet consectetur. Arcu non facilisis ac morbi odio faucibus congue morbi. Cras gravida sit ut neque justo mauris neque elementum feugiat. Pretium dolor vitae </p>
<div class="w-50">
  <input type="range" value="5" class="form-control" min="1" max="10">
  <div class="number-container">
  <span>1</span>
  <span>2</span>
  <span>3</span>
  <span>4</span>
  <span>5</span>
  <span>6</span>
  <span>7</span>
  <span>8</span>
  <span>9</span>
  <span>10</span>
</div>
</div>

</li>

<hr class="mt-3">


<li>

       <h6>Lorem ipsum dolor sit amet</h6>
       <p class="text-sm w-50">Lorem ipsum dolor sit amet consectetur. Arcu non facilisis ac morbi odio faucibus congue morbi. Cras gravida sit ut neque justo mauris neque elementum feugiat. Pretium dolor vitae </p>
       <div class="w-50">

         <div class="file-container mt-3 px-4 py-4 bg-white">

            <i class="fa fa-upload"></i><br>
            <a class="btn text-primary fw-bold">Click to upload</a>

         </div>
               <br>
             <span class="p-1 bg-secondary text-capitalize text-sm">pdf</span> <span class="p-1 bg-secondary text-capitalize text-sm">docx</span> <span class="border p-1">> 10MB</span>


       </div>


</li>     


<hr>


<li>

       <h6>Lorem ipsum dolor sit amet</h6>
       <p class="text-sm w-50">Lorem ipsum dolor sit amet consectetur. Arcu non facilisis ac morbi odio faucibus congue morbi. Cras gravida sit ut neque justo mauris neque elementum feugiat. Pretium dolor vitae </p>
       <div class="w-50">

         <div class=" mt-3 p-4 bg-white border-2 border">

           
            <a class="btn text-secondary text-sm fw-bold">Add comment</a>

         </div>
               <br>
     

       </div>


</li>    







</ul>

</div>



<hr class="mt-3" >


<div class="d-flex justify-content-end container">
<a href="" class="text-dark border border-2 border-dark mr-2 p-2"><i class="fa fa-caret-down"></i>Previous</a>
<a href="" class="text-white bg-dark p-2">Next <i class="fa fa-chevron-left"></i></a>
</div>







    <br><br>
    <?php include '../components/footer.php';?>

<script>

$(document).ready(function() {
    var slider = $('#myRange');
    var output = $('#value');

    output.text(slider.val()); // Set initial value

    slider.on('input', function() {
        var value = $(this).val();
   
        output.text(value);

        // Update the background color up to the current value
        var percentage = ((value - slider.attr('min')) / (slider.attr('max') - slider.attr('min'))) * 100;
        slider.css('background', linear-gradient(to right, orange ${percentage}%, grey ${percentage}%));
    });

});
</script>



</body>
</html>