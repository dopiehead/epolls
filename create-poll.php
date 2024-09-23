<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'components/links.php'; ?>
    <link rel="stylesheet" href="assets/css/create-poll.css">
    <title>Create poll</title>
</head>
<body>
    <?php include 'components/layout.php'; ?>
    <br><br>
    <div class="container">
         <div class="heading-container">
             <div>
                  <h6>Create a poll</h6>
                  <strong>Complete the below field to create your poll</strong>
             </div>

              <select name="" id="">
                
                   <option value="">Options</option>
                   <option value=""></option>
                   <option value=""></option>

              </select>

         </div>


         <label class="mt-4 text-sm" for="">Poll Question</label><br>

         <textarea name="" id="" class="form-control" wrap="physical" placeholder="e.g What's your favorite color?" rows="3"></textarea><br>


         <label class="mt-4 text-sm" for="">Poll option</label><br>

         <div class="text-area">
                 <p>e.g Option 1</p>
                 <div>
                      <label class="file-container text-sm">Add image
                           <input type="file">
                      </label>
                      <input type="radio">
                 </div>
         </div>


         <label class="mt-4 text-sm" for="">Poll option</label><br>

         <div class="text-area">

                 <p>e.g Option 1</p>
                 <div>
                     <label class="file-container text-sm"> Add image
                           <input type="file">
                      </label>
                     
                      <input type="radio">
                     
                 </div>

         </div>



         <label class="mt-4 text-sm" for="">Poll option</label><br>

         <div class="text-area">

                 <p>e.g Option 1</p>
                 <div>
                     <label class="file-container text-sm">Add image
                           <input type="file">
                      </label>
                      <input type="radio">
                 </div>

         </div>
<br><br>

<a class="text-sm bg-dark p-2 text-white mt-5 rounded" >add another option <span class="border border-white rounded-circle rounded-pill text-white p-1 px-2"><i class="fa fa-plus"></i></span></a>

<br>
<hr>

</div>


<div class="container d-flex justify-content-space-between align-items-center w-100 p-2 px-3">

    <div class="w-50 mr-3">
           <strong class="poll_option">Poll category</strong>
           <div class="select-container w-100 mr-3 p-3" contenteditable="true"> 
                <strong class="poll_option text-sm text-secondary">E.g Web design</strong>
                <a href="btn btn-select bg-blue">
                      <i class="fa fa-caret-down"></i>
                </a>
           </div>
    </div>


    
    <div class="w-50">
           <strong class="poll_option">Poll category</strong>
           <div class=" select-container w-100 p-3" contenteditable="true" >
                <strong class="poll_option text-sm text-secondary">E.g Web design</strong>
                <a href="btn btn-select bg-blue">
                     <i class="fa fa-caret-down"></i>
                </a>
           </div>
    </div>


</div>


<br>

<div class="container">

      <strong class="poll_option">Poll option</strong>

      <div>
           <div class="select-options">
                <div><input type="checkbox"><span>Allow multiple votes</span></div>
                <div><input type="checkbox"><span>Login to vote</span></div>
                <div><input type="checkbox"><span>Add comments</span></div>
                <div><input type="checkbox"><span>Set End dates</span></div>
                <div><input type="checkbox"><span>Save as Draft</span></div>
                <div><input type="checkbox"><span>Hide share option</span></div>

           </div>


      </div>

</div>


<div class="container subscribe-container rounded">

<div class="p-3">
     <div class="bg-white d-block p-4 rounded">
     <strong class="text-sm">Pro business</strong>
     <h5 class="fw-bold">N23,560</h5>
     <input type="checkbox"><span class="text-sm ml-1">Save as Draft</span><br>
     <input type="checkbox"><span class="text-sm ml-1">Save as Draft</span><br>
     <input type="checkbox"><span class="text-sm ml-1">Save as Draft</span><br>
     <input type="submit" class="btn btn-dark form-control mt-2 rounded rounded-pill" value="Subscribe">
     </div>
</div>
<div class="p-3">
     <div class="bg-white d-block p-4 rounded">
     <strong class="text-sm">Pro business</strong>
     <h5 class="fw-bold">N23,560</h5>
     <input type="checkbox"><span class="text-sm ml-1">Save as Draft</span><br>
     <input type="checkbox"><span class="text-sm ml-1">Save as Draft</span><br>
     <input type="checkbox"><span class="text-sm ml-1">Save as Draft</span><br>
     <input type="submit" class="btn btn-dark form-control mt-2 rounded rounded-pill" value="Subscribe">
     </div>
</div>

<div class="p-3">
     <div class="bg-white d-block p-4 rounded">
     <strong class="text-sm">Pro business</strong>
     <h5 class="fw-bold">N23,560</h5>
     <input type="checkbox"><span class="text-sm ml-1">Save as Draft</span><br>
     <input type="checkbox"><span class="text-sm ml-1">Save as Draft</span><br>
     <input type="checkbox"><span class="text-sm ml-1">Save as Draft</span><br>
     <input type="submit" class="btn btn-dark form-control mt-2 rounded rounded-pill" value="Subscribe">
     </div>
</div>

<div class="p-3">
     <div class="bg-white d-block p-4 rounded">
     <strong class="text-sm">Pro business</strong>
     <h5 class="fw-bold">N23,560</h5>
     <input type="checkbox"><span class="text-sm ml-1">Save as Draft</span><br>
     <input type="checkbox"><span class="text-sm ml-1">Save as Draft</span><br>
     <input type="checkbox"><span class="text-sm ml-1">Save as Draft</span><br>
     <input type="submit" class="btn btn-dark form-control mt-2 rounded rounded-pill" value="Subscribe">
     </div>
</div>



</div>

<br><br>

<div class="container" >
    <a class=" text-sm bg-dark p-2 text-white mt-5 rounded" >add another option <span class="border border-white rounded-circle rounded-pill text-white p-1 px-2"><i class="fa fa-plus"></i></span></a>
</div>



    <br><br>
    <?php include 'components/footer.php'; ?>
</body>
</html>