<?php 
    include "topbit.php";

// if find button pushed...
if(isset($_POST['find_rating']))
    
{
    
// Retrieves rating and sanitises it.
$amount=test_input(mysqli_real_escape_string($dbconnect,
$_POST['amount']));
$stars=test_input(mysqli_real_escape_string($dbconnect,
$_POST['stars']));
    
if ($amount=="exactly")
    
{
    $find_sql="SELECT *
FROM `91879_food_reviews`
WHERE `Rating` = $stars ORDER BY `Name` ASC ";
}

elseif ($amount=="less")
    
{
    $find_sql="SELECT *
FROM `91879_food_reviews`
WHERE `Rating` <= $stars ORDER BY `Name` ASC ";
}

else {
    $find_sql="SELECT *
FROM `91879_food_reviews`
WHERE `Rating` >= $stars ORDER BY `Name` ASC ";
}
    
$find_query=mysqli_query($dbconnect, $find_sql);
$find_rs=mysqli_fetch_assoc($find_query);
$count=mysqli_num_rows($find_query);


?>
        
<div class="box main">
            
    <h2>Rating Search</h2>
    
    <?php
    
    // check if there are any results
    
    if ($count<1)
        
    {
        
    ?>
    
    <div class="error">
        Sorry! There are no results that match your search.
        Please use the search box in the sidebar to try again.
         
    </div>     
         
    
    <?php
        
    } // end count 'if'
    
    // if there are not results, output an error
    else {
        
        do {
            
        ?>
    
    
        <div class="results">
        
            <p>Name: <span class="sub_heading"><?php echo $find_rs['Name']; ?></span>
            </p>
            
            <p>Place: <span class="sub_heading"><?php echo $find_rs['Place']; ?></span>
            </p>
            
            <p>Type: <span class="sub_heading"><?php echo $find_rs['Type']; ?></span>
            </p>
            
            <p>Rating: <span class="sub_heading">
                
                
                
                <?php 
                for ($x=0; $x < $find_rs['Rating']; $x++)
                
                {
                    echo "&#9733;";
                }
                
                ?>
                
                
                </span>
            </p>
            
            <p>Vegetarian: <span class="sub_heading"><?php echo $find_rs['Vegetarian']; ?></span>
            </p>
                
                
            <p><span class="sub_heading">Review</span></p>
            
            <p>
                <?php echo $find_rs['Review']; ?>
                
            </p>
            
    </div> <!-- /end results div -->
    
    <br />
    
            
    <?php
            
        } // end of do
        
        while($find_rs=mysqli_fetch_assoc($find_query));
            
    } // end else
    
    // if there are results, display them
    
    }   // end isset
    
    ?>
    
    
</div> <!-- / main -->
        
<?php 
    include "bottombit.php";
?>
    