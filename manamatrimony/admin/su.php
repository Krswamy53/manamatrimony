<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabbed Navigation</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="styles.css" rel="stylesheet">
    <style>
        /* Custom styles for tab navigation */
.nav-tabs .nav-link {
    color: #ffffff;
    background-color: #f2720c;
}

.nav-tabs .nav-link.active {
    background-color: #ffffff;
    color: #f2720c;
    border-color: #f2720c #f2720c #ffffff;
}
.submit-button {
    background-color: #FF8C00;
    color: white;
    margin-left: 50px;
}
.grid-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr); /* Adjust number of columns as per your design */
            gap: 20px;
        }
        .story-card {
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 5px;
        }
        .story-card img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="success-stories-tab" data-toggle="tab" href="#success-stories" role="tab" aria-controls="success-stories" aria-selected="true">Success Stories</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="post-success-story-tab" data-toggle="tab" href="#post-success-story" role="tab" aria-controls="post-success-story" aria-selected="false">Post your success story</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="success-stories" role="tabpanel" aria-labelledby="success-stories-tab">
    <div class="grid-container">
        <?php
        // Connect to MySQL database
        include "db.php";

        // Fetch data from the database
        $sql = "SELECT photoPath, brideName, groomName, marriageDate, success_story FROM success_stories";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                echo '<div class="story-card">';
                echo '<img src="' . $row["photoPath"] . '" alt="Success Story Image">';
                echo '<p><strong>Bride Name:</strong> ' . $row["brideName"] . '</p>';
                echo '<p><strong>Groom Name:</strong> ' . $row["groomName"] . '</p>';
                echo '<p><strong>Marriage Date:</strong> ' . $row["marriageDate"] . '</p>';
                echo '<p><strong>Success Story:</strong> ' . $row["success_story"] . '</p>';
                echo '</div>';
            }
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>
    </div>
    </div>
    <div class="tab-pane fade" id="post-success-story" role="tabpanel" aria-labelledby="post-success-story-tab">
        <di<div class="container mt-5">
    <h2 class="text-center text-warning">Post Success Story</h2>
    <p class="text-center text-muted">Post your success story here</p>
    <form action="submit_story.php" method="POST" enctype="multipart/form-data">
        <div class="form-group row">
            <label for="brideId" class="col-sm-3 col-form-label">Bride Id *</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="brideId" name="brideID" placeholder="Enter Bride Id" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="brideName" class="col-sm-3 col-form-label">Bride Name *</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="brideName" name="brideName" placeholder="Enter Bride Name" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="groomId" class="col-sm-3 col-form-label">Groom Id *</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="groomId" name="groomId" placeholder="Enter Groom Id" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="groomName" class="col-sm-3 col-form-label">Groom Name *</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="groomName" name="groomName" placeholder="Enter Groom Name" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="engagementDate" class="col-sm-3 col-form-label">Engagement Date *</label>
            <div class="col-sm-9">
                <div class="form-row">
                    <div class="col">
                        <select class="form-control" id="engagementDay" name="engagementDay" required>
                            <option>01</option>
                            <option>02</option>
                            <!-- More options here -->
                        </select>
                    </div>
                    <div class="col">
                        <select class="form-control" id="engagementMonth" name="engagementMonth" required>
                            <option>Jan</option>
                            <option>Feb</option>
                            <!-- More options here -->
                        </select>
                    </div>
                    <div class="col">
                        <select class="form-control" id="engagementYear" name="engagementYear" required>
                            <option>2022</option>
                            <option>2023</option>
                            <!-- More options here -->
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="marriageDate" class="col-sm-3 col-form-label">Marriage Date *</label>
            <div class="col-sm-9">
                <div class="form-row">
                    <div class="col">
                        <select class="form-control" id="marriageDay" name="marriageDay" required>
                            <option>01</option>
                            <option>02</option>
                            <!-- More options here -->
                        </select>
                    </div>
                    <div class="col">
                        <select class="form-control" id="marriageMonth" name="marriageMonth" required>
                            <option>Jan</option>
                            <option>Feb</option>
                            <!-- More options here -->
                        </select>
                    </div>
                    <div class="col">
                        <select class="form-control" id="marriageYear" name="marriageYear" required>
                            <option>2022</option>
                            <option>2023</option>
                            <!-- More options here -->
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="uploadPhoto" class="col-sm-3 col-form-label">Upload Photo *</label>
            <div class="col-sm-9">
                <input type="file" class="form-control-file" id="uploadPhoto" name="uploadPhoto" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="successStory" class="col-sm-3 col-form-label">Success Story *</label>
            <div class="col-sm-9">
                <textarea class="form-control" id="successStory" name="successStory" rows="3" placeholder="Write your success story here" required></textarea>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn submit-button">SUBMIT</button>
            </div>
        </div>
    </form>
</div>

    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>