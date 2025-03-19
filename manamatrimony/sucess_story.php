<!-- News Section -->
<style>
.read-more {
    display: inline-block;
    margin-top: 10px;
    padding: 8px 15px;
    /* Adjust padding for desktop */
    color: #EB2869;
    /* Blue color for the link */
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s, color 0.3s;
}

.read-more:hover {
    background-color: #EB2869;
    color: #fff;
    /* White color for the text on hover */
}

/* Responsive CSS */
@media (max-width: 768px) {
    .read-more {
        padding: 6px 12px;
        /* Adjust padding for tablets */
    }
}

@media (max-width: 576px) {
    .read-more {
        padding: 5px 10px;
        /* Adjust padding for phones */
    }
}
</style>

<!-- News Section -->
<section class="news-section">
    <div class="auto-container" style="margin-top:90px;">
        <div class="sec-title text-center">
            <span class="title">Happy stories</span>
            <h2>Our Happy Stories</h2>
        </div>
        <div class="row">
            <?php
// Include database connection parameters
include 'db.php';

// Fetch success stories from the database where status is 'Approved'
$sql = "SELECT * FROM success_stories WHERE status = 'Approved' LIMIT 3";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo '<div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInRight" style="margin-top:30px">';
        echo '<div class="inner-box">';
        echo '<div class="image-box">';
        echo '<figure class="image">';
        echo '<a href="successstory.php?id=' . htmlspecialchars($row["id"]) . '">';
        echo '<img src="' . htmlspecialchars($row["photoPath"]) . '" alt="" style="height:250px; width:100%; object-fit:cover;">';

        echo '</a>';
        echo '</figure>';
        echo '</div>';
        echo '<div class="lower-content">';
        echo '<ul class="post-info">';
        echo '<li><a class="">' . htmlspecialchars($row["marriageDate"]) . '</a></li>';
        echo '</ul>';
        echo '<h4><a href="successstory.php?id=' . htmlspecialchars($row["id"]) . '">' . htmlspecialchars($row["brideName"]) . ' & ' . htmlspecialchars($row["groomName"]) . '</a></h4>';

        // Truncate the success story to 3 lines or approximately 200 characters
        $short_story = mb_strimwidth(strip_tags($row["success_story"]), 0, 200, "...");

        echo '<p class="text success-story-text" style="text-align:justify">' . htmlspecialchars($short_story) . '</p>';
        echo '<a href="successstory.php?id=' . htmlspecialchars($row["id"]) . '" class="read-more">Read More</a>'; // Simplified link without div wrapper
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
} else {
    echo "No approved success stories found.";
}

// Close the database connection
$conn->close();
?>

        </div>
    </div>
</section>

</div>
</div>
</section>