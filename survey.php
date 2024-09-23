<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'components/links.php'; ?>
    <link rel="stylesheet" href="assets/css/survey.css">
    <title>dashboard</title>
</head>
<body>
    <?php include 'components/layout.php'; ?>
<br><br>

<div class="mt-5"></div>

 <div class="container w-50 mt-5" style="text-align:center">
 
 <div class="bg-secondary">

   <p>Create surveys to collect insights and feedback from anyone!</p>
 
</div>

<h6>Topic</h6>
<hr class="border-2 w-20 border-warning" align="right">
<h4>This is the Poll Question?</h4>
<span class="text-sm mr-1">Asked by anonymous</span> <span class="text-sm">10 minutes ago</span>

     <div class="star-container mt-2 w-50">
        <span class="p-2"><i class="fa fa-star"></i></span>
        <span class="p-2"><i class="fa fa-star"></i></span>
        <span class="p-2"><i class="fa fa-star"></i></span>
        <span class="p-2"><i class="fa fa-star"></i></span>
        <span class="p-2"><i class="fa fa-star"></i></span>
    </div>

 <textarea name="" id="" class="form-control" rows="4" placeholder="Add comment"></textarea>
 </div>
 </div>




<div class="container button-home mt-5 text-center">

<a href="" class="btn btn-dark text-white">Submit</a>

<a href="" class="btn  text-dark">Jump to result <span class="text-white bg-warning p-2 text-lg"><i class="fa fa-chevron-left"></i></a></span>

</div>








    <br><br>
    <?php include 'components/footer.php';?>

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