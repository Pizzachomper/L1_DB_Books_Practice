<?php 
	include "Topbit.php";

// If find button pushed...
if(isset($_POST['find_genre']))

{
	
//Retrieves genre and sanatises it.
$genre=test_input(mysqli_real_escape_string($dbconnect, $_POST['genre']));
	
// Get files from the database
$showall_sql= "SELECT * FROM `book_reviews` WHERE `genre` LIKE '%$genre%' ORDER BY 'genre' ASC";
$showall_query=mysqli_query($dbconnect, $showall_sql);
$showall_rs=mysqli_fetch_assoc($showall_query);
$count=mysqli_num_rows($showall_query);

?>



<!-- This is where the main content goes-->
        <div class="box main">
            <h2>Genre Search</h2>
            
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
				
			
			<!-- Results go here -->
			<div class="results">
			
				<p>Title: <span class="sub_heading"><?php echo $showall_rs['Title'];?></span></p>
				
				<p>Author: <span class="sub_heading"><?php echo $showall_rs['Author'];?></span></p>
				
				<p>Genre: <span class="sub_heading"><?php echo $showall_rs['Genre'];?></span></p>
				
				<p>Rating: <span class="sub_heading">
					
					<?php
					for ($x=0; $x < $showall_rs['Rating']; $x++)
					{echo "&#9733;";}
					?> 
				
					</span></p>	
					
				<p><span class="sub_heading">Review / Response</span></p>
				
				<p><?php echo $showall_rs['Review'];?></p>
				
				
				
			</div> <!-- / end results -->
			
			<br />
			
			<?php
				} // end of do
				
				while($showall_rs=mysqli_fetch_assoc($showall_query));
					
			} // end else
			
			// if there are results, display them
			
			} // end isset

			?>
			
	    </div>    <!-- / main -->

<?php 
	include "Bottombit.php";
?>