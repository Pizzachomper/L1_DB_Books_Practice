<div class="box side">
	
	<h3>Search | <a class="side" href="index.php">Show All</a></h3>
	
	<i>Type part of the title / author name and then search</i>
	
	<hr />
	
	<!-- Start of title search -->
	
	<form method="post" action="title_search.php" enctype="multipart/form-data"> 
	
		<input class="search" type="text" size="40" value="" name="title" required placeholder = "Title..."/>
	
		<input class="submit" type="submit" name="find_title" value="Search"/>
	</form>
		
	<!-- End of title search -->
	
	<!-- Start of author search -->
	
	<form method="post" action="author_search.php" enctype="multipart/form-data"> 
	
		<input class="search" type="text" size="40" value="" name="author" required placeholder = "Author..."/>
	
		<input class="submit" type="submit" name="find_author" value="Search"/>
	</form>
		
	<!-- End of author search -->
	
	<!-- Start of genre search -->
	
	<form method="post" action="genre_search.php" enctype="multipart/form-data"> 
	
		<select name="genre" required>
			<option value="" disabled selected>Genre...</option>
			<option value="Sci Fi">Science Fiction</option>
			<option value="Humour">Humour</option>
			<option value="Non Fiction">Non Fiction</option>
			<option value="Historical Fiction">Historical Fiction</option>
		</select>
	
		<input class="submit" type="submit" name="find_genre" value="Search"/>
	</form>
		
	<!-- End of genre search -->
	<hr />
	
	<!-- Start of ratings form -->
	<form method="post" action="rating_search.php" enctype="multipart/form-data">
		
		<select class="half_width" name="amount">
			<option value="exactly" >Exactly...</option>
			<option value="more" selected>At least...</option>
			<option value="less">At most...</option>
		</select>
		
		<select class="half_width" name="stars">
			<option value=1>&#9733;</option>
			<option value=2>&#9733;&#9733;</option>
			<option value=3 selected>&#9733;&#9733;&#9733;</option>
			<option value=4>&#9733;&#9733;&#9733;&#9733;</option>
			<option value=5>&#9733;&#9733;&#9733;&#9733;&#9733;</option>
		</select>
	
		<input type="submit" class="submit" name="find_rating" value="Search"/>
	<!--End of ratings form-->	
	
</div> <!-- / side bar -->

		<div class="box footer">
            CC Zane Jackson 2023
        </div>    <!-- / footer -->
    
    </div>  <!-- / wrapper  -->
    
</body>           
