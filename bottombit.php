<div class="box side">
    
    <h3>Search | <a class ="side" href="show_all.php">Show All</a>
    </h3>
    
    <i>Type part of the Dish Name / Dish Type and then Search</i>

    <hr /> 
    
    <!-- Start of Name Search -->
    
    <form method="post" action="name_search.php" 
    enctype="multipart/form-data">
        
        <input class="search" type="text" name ="name" size="40" value=""
        required placeholder="Name..." />
        
        <input class="submit" type="submit" name="find_name"
               value="Search"/>
    
    </form>
    
    <!-- end of Name Search -->
    
    <hr />
        
    <!-- Start of Type Search -->
    
    <form method="post" action="type_search.php" 
    enctype="multipart/form-data">
        
        <input class="search" type="text" name ="type" size="40" value=""
        required placeholder="Type..." />
        
        <input class="submit" type="submit" name="find_type"
               value="Search"/>
    
    </form>
    
    <!-- end of type Search -->
    
    <br />
    
    <!-- Start of vegetarian Search -->
    
    <form method="post" action="vegetarian_search.php" 
    enctype="multipart/form-data">
        
        <select name="vegetarian" required>
            <option value="" disabled selected>Vegetarian...</option>
            <option value="Yes">Yes</option>
            <option value="No">No</option>

        </select>
        
        <input class="submit" type="submit" name="find_vegetarian"
               value="Search"/>
    
    </form>
    
    <!-- end of vegetarian Search -->
    
    <br />
    
    <!-- Start of Rating Search -->
    
    <form method="post" action="rating_search.php"
    enctype="multipart/form-data">
        
        <select class="half_width" name="amount">
            <option value="exactly" selected>Exactly...</option>
            <option value="more" selected>At least...</option>
            <option value="less" selected>At most...</option>
        </select>
    
        <select class="half_width" name="stars">
            <option value=1>&#9733;</option>
            <option value=2>&#9733;&#9733;</option>
            <option value=3>&#9733;&#9733;&#9733;</option>
            <option value=4>&#9733;&#9733;&#9733;&#9733;</option>
            <option value=5>&#9733;&#9733;&#9733;&#9733;&#9733;</option>
        </select>
    
            <input type="submit" class="submit" name="find_rating"
            value="Search" />
    
    <!-- End of rating Search -->
    
</div>  <!-- / side box -->


        <div class="box footer">
            Troy Kennedy 2020
        </div>    <!-- / footer -->
    
    </div>  <!-- / wrapper  -->
    
</body>        
