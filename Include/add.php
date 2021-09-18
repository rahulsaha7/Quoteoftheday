<?php
   




?>

<div class="container-fluid ">
<div>

        <h4 class="text-center" >Add Quotes</h4>
    
</div>
<form class="form-inline my-2   search my-lg-0 movie-add" id="my-form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
    <div class="d-flex flex-column flex-lg-row flex-xl-row flex-sm-column flex-md-column justify-content-center align-items-center">
       

        
            <p class="me-2"><label for="Quote">Quote</label></p>
            <textarea rows = "5" placeholder="Quote" name = "Quote" required=""></textarea>
        
       


    </div>

    <div class="d-flex flex-column justify-content-center align-items-center">
    
        <section class="d-flex  justify-content-center align-items-center">
            <p><label for="Image Link">Image Link</label></p><input class="form-control mr-sm-2 " type="text" placeholder="Image Link" name="imagelink" aria-label="Title">
</section>
        <section class="d-flex justify-content-center align-items-center">
            <p><label for="Quote By"> Quote By</label></p><input class="form-control mr-sm-2 " type="text" placeholder="Quote By" name="quoteby" required=""> 
        </section>


    </div>

   

    <div class="d-flex justify-content-center mt-2">
        <button class="btn btn-primary me-1" type="submit">Submit</button>
        <button class="btn btn-danger" type="reset">Cancel</button>
    </div>

</form> 
    

</div>