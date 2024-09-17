
<?php session_start(); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'components/links.php'; ?>
    <link rel="stylesheet" href="assets/css/survey.css">
    
    <title>Home</title>
</head>
<body>
    <?php include 'components/layout.php'; ?>
  <br><br>   <br><br>
  
  <div class="container questions">

<p class="text-center p-2 bg-grey w-45"><span class="p-2 bg-secondary text-dark"><span style="visibility:hidden">1</span></span>Create surveys to collect insights and feedback from anyone!</p>

<h6 class="topic">Topic</h6>



<h5>This is the poll Question ?</h5>

<h6 class="choose text-center text-sm mt-3">Choose one or more Options</h6>

<div class="text-center d-flex justify-content-center gap-5">
<span class="text-sm">Asked by anonymous</span> <span class="text-sm">10 min ago</span>
</div>






<div class="questions-container justify-content-center w-50">


<div class="q-card">

<input type="radio" name="group1" id="group1_1" value="option1"> Option A

</div>

<div class="q-card">

<input type="radio" name="group1" id="group1_1" value="option1"> Option B

</div>

<div class="q-card">

<input type="radio" name="group1" id="group1_1" value="option1">  Option C

</div>

<div class="q-card">

<input type="radio" name="group1" id="group1_1" value="option1"> Option D

</div>

<br>
<br>


<div class="button-container d-flex justify-content-center d-none">

<button class="btn btn-dark text-white px-2">Submit</button>

<a class="p-2 text-dark">Jump to result <span class="bg-warning text-white px-2"><i class="fa fa-chevron-left"></i></span></a>


</div>




  </div>
  </div>

<br><br>


<?php include 'components/footer.php'; ?>

</body>
</html>