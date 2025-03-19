<!-- News Section -->
<section class="">
       

        <div class="auto-container" style="margin-top:90px">
            <div class="sec-title text-center">
            <span class="title">Happy stories</span>
          <h2> Our Happy Stories</h2>                
				 
            </div>
           <div class="row">
              <?php
// Include database connection parameters
include 'db.php';

// Fetch success stories from the database
$sql = "SELECT * FROM successstory LIMIT 3 ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo '<div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInRight style="margin-top:30px">';
        echo '<div class="inner-box">';
        echo '<div class="image-box">';
        echo '<figure class="image">';
        echo '<a href="successstory">';
        echo '<img src="' . $row["image_path"] . '" alt="">'; // Assuming "image_path" is the column name for image paths
        echo '</a>';
        echo '</figure>';
        echo '</div>';
        echo '<div class="lower-content">';
        echo '<ul class="post-info">';
        echo '<li><a  class="">' . $row["first_met_date"] . '</a></li>'; // Assuming "date" is the column name for dates
        echo '</ul>';
        echo '<h4><a href="successstory">' . $row["name"]  . ' ' . $row["partner_name"] . '</a></h4>'; // Assuming "couple_name" is the column name for couple names
        echo '<p class="comment-text"style="text-align:justify">' . $row["comment"].'</p>'; // Add a class to style comment text
        echo '<div class="btn-box">';
        // echo '<a href="successstory?id=' . $row["id"] . '" class="theme-btn btn-style-three"><span class="btn-title">Read More</span></a>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
} else {
    echo "0 results";
}

// Close the database connection
$conn->close();
?>

				        				       
				
		</div>
                          
          </div>
        </div>
      </div>
    </section>
    <style>
    /* Responsive styles */
@media (max-width: 991px) {
    .news-block {
        margin-bottom: 30px;
    }
}

@media (max-width: 768px) {
    .news-block {
        margin-bottom: 20px ;
    }

    .news-block .lower-content {
        padding: 15px;
    }

    .news-block .post-info li {
        font-size: 12px;
        margin-right: 20px;
    }

    .news-block h4 {
        font-size: 18px;
        margin-bottom: 15px;
    }

    .news-block .text {
        font-size: 12px;
        line-height: 22px;
        margin-bottom: 15px;
    }

    .news-block .btn-box a {
        font-size: 10px;
        padding: 3px 10px;
    }
}
</style>
