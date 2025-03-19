<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-Q4/zKUp6fQjgQhLoON+0NE6ZL6RIHZFq7bVLpKElJ/8qZ8XtpQwVRU/B+D2fprwzQm3Sqch30dDTTlpgxhBozQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-Q4/zKUp6fQjgQhLoON+0NE6ZL6RIHZFq7bVLpKElJ/8qZ8XtpQwVRU/B+D2fprwzQm3Sqch30dDTTlpgxhBozQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-Q4/zKUp6fQjgQhLoON+0NE6ZL6RIHZFq7bVLpKElJ/8qZ8XtpQwVRU/B+D2fprwzQm3Sqch30dDTTlpgxhBozQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Refine Search</title>
<style>
  body{
    font-family:sans-serif;
  }

  
  





.image-section img {
    width: 100%;
    height: 250px;
    margin-top: 35px;
    border-radius: 50%;
}




    
  .hidden {
    display: none;
  }
  .gender{
    border: 1px solid; 
    background-color:whitesmoke;
    margin-top:10px;
    margin-bottom:10px;
    border-radius:10px;
    box-shadow: 0 0 10px 0 rgba(0,0,0,0.45) inset;
    padding:20px;
  }
  

  .main{
    
    display:flex;
    gap:20px;
    
  }
  .left{
    background-color:lightyellow;
/*    padding:30px;*/
    width:240px;
    


  }
  p{
    
    font-size:20px;
    color:black;
  }
  label{
    font-size:17px;
    color:#37393C;
    
  }
  .btn {
  display: inline-block;
  padding: 10px 20px;
  font-size: 16px;
  font-weight: bold;
  text-align: center;
  text-decoration: none;
  border: 2px solid orangered; 
  color: #ffffff; 
  background-color: orangered;
  cursor: pointer;
  border-radius: 5px;
  width:240px;
}
.btn1 {
  display: inline-block;
  padding: 10px 20px;
  font-size: 16px;
  font-weight: bold;
  text-align: center;
  text-decoration: none;
  border: 2px solid gray; 
  color: #ffffff; 
  background-color: gray;
  cursor: pointer;
  border-radius: 5px;
  width:240px;
}



   
    
</style>

</head>
<body>
  <style>
    /* mycontent */
      .grid-containerr{
        display: flex;
  flex-wrap: wrap; 
  gap:50px;
      }
      .grid-main{
        display:flex;
        flex-direction:row;
        padding:20px;
        justify-content:space-between;
      }
      .grid-itemm{
        border:solid;
        width:1000px;
        display:flex;
        flex-direction:column;
        border-radius:10px;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        justify-content:space-between;
        
      }
      
}
i{
    color:red;
}
.button-container{
    display:flex;
    padding:20px;
    flex-direction: row;
    justify-content:space-between;
    background-color:lightgray;
    border-bottom-left-radius: 10px;
    border-bottom-right-radius: 10px;
}

.message {
  padding: 10px 20px;
  margin-bottom: 10px;
  cursor: pointer;
  border-radius: 5px;
  background-color: green;
  color: #fff;
  font-weight: bold;
  text-align: center;
  transition: background-color 0.3s ease;
  
}
.blocklist {
  padding: 10px 20px;
  margin-bottom: 10px;
  cursor: pointer;
  border-radius: 5px;
  background-color: red;
  color: #fff;
  font-weight: bold;
  text-align: center;
  transition: background-color 0.3s ease;
  
}
.shortlist {
  padding: 10px 20px;
  margin-bottom: 10px;
  cursor: pointer;
  border-radius: 5px;
  background-color: orange;
  color: #fff;
  font-weight: bold;
  text-align: center;
  transition: background-color 0.3s ease;
  
}

.button-container > div:hover {
  background-color: #0056b3;
}


    
/* my css content end */
    .left-side {
        grid-column: 1 / 2; 
    }

    .right-side {
        grid-column: 2 / 3;
    }

  
    .result-education {
        display: none;
    }
    th{
        text-align:left;
        padding:10px;
        color:green;
        font-family:sans-serif;
        font-weight:bold;
        letter-spacing:1px;
    }
    td{
        text-align:left;
        padding:10px; 
        font-family:sans-serif;
        color:blue;
        font-weight:bold;
        letter-spacing:1px;
    }
    a{
        text-decoration:none;
    }
</style>
<?php include "header.php"; ?>
<br><br>
  </style>
    <form class="form-horizontal" action="" method="POST" name="form1">
    <div class="main">
        <div class="left">

<button class="btn" id="refineSearchBtn">Refine Search</button>

<!-- Gender -->
<div id="genderSection" class="gender">
    <div class="top">
  <p>Gender</p>
</div>
  
  <label>
    <input type="radio" name="gender" value="male" required>
    Male
  </label>
  <label>
    <input type="radio" name="gender" value="female" required>
    Female
  </label>
</div>

<!-- Religion -->
<div id="religionSection" class="gender">
  <p>Religion</p>
  <label>
    <input type="radio" name="religion" value="christian" required>
    Christian
  </label>
  <label>
    <input type="radio" name="religion" value="hindu" required>
    Hindu
  </label><br><br>
  <label>
    <input type="radio" name="religion" value="muslim" required>
    Muslim
  </label>
  <label>
    <input type="radio" name="religion" value="jain" required>
    Jain
  </label>

</div>

<!-- Subcastes for Christian -->
<div id="christianSubcasteSection" class="gender">
  <p>Subcastes (Christian)</p>
  <label>
    <input type="radio" name="caste" value="catholic" required>
    Catholic
  </label>
  <label>
    <input type="radio" name="caste" value="protestant" required>
    Protestant
  </label><br><br>
  <label>
    <input type="radio" name="caste" value="assryains" required>
    Assryains
  </label>
  <label>
    <input type="radio" name="caste" value="ordhotax" required>
    ordhotax
  </label>
</div>

<!-- Subcastes for Hindu -->
<div id="hinduSubcasteSection" class="hidden gender">
  <p>Subcastes (Hindu)</p>
  <label>
    <input type="radio" name="caste" value="kashathriya" required>
    Kshathriya
  </label>
  <label>
    <input type="radio" name="caste" value="kapu" required> 
    Kapu
  </label><br><br>
  <label>
    <input type="radio" name="caste" value="chowdary" required>
    Chowdary
  </label>
  <label>
    <input type="radio" name="caste" value="vysha" required> 
    Vysha
  </label><br><br>
  <label>
    <input type="radio" name="caste" value="brahmin" required>
    Brahmin
  </label>
  <label>
    <input type="radio" name="caste" value="gowda" required>
    Gowda
  </label><br><br>
  <label>
    <input type="radio" name="caste" value="rajaka" required>
    Rajaka
  </label>
  <label>
    <input type="radio" name="caste" value="reddy" required>
    Reddy
  </label>
  
</div>

<!-- Subcastes for Muslim -->
<div id="muslimSubcasteSection" class="hidden gender">
  <p>Subcastes (Muslim)</p>
  <label>
    <input type="radio" name="caste" value="shaik" required>
    Shaik
  </label>
  <label>
    <input type="radio" name="caste" value="pathan" required>
    Pathan
  </label><br><br>
  <label>
    <input type="radio" name="caste" value="mohammad" required>
    Mohammad
  </label>
  <label>
    <input type="radio" name="caste" value="dhudhekula" required>
    Dhudekula
  </label>
</div>

<div id="jainSubcasteSection" class="hidden gender">
  <p>Subcastes (Jain)</p>
  <hr>
  <label>
    <input type="radio" name="caste" value="swethabara" required>
    Swethabara
  </label>
  <label>
    <input type="radio" name="caste" value="dhigambara" required>
    Dhigambara
  </label>
  
</div>
<button class="btn1" id="submitButton">Submit</button>
</div>
    </form>
<!-- rightside -->
<div>
    
<script>
 
  document.querySelectorAll('input[name="religion"]').forEach(function(radio) {
    radio.checked = false;
  });
  document.querySelectorAll('input[name="caste"]').forEach(function(radio) {
    radio.checked = false;
  });
  // Show submit button by default
  document.getElementById("submitButton").style.display = "block";

  // Event listener for radio buttons under 'religion'
  document.getElementsByName("religion").forEach(function(radio) {
    radio.addEventListener("change", function() {
      if (this.value === "christian") {
        document.getElementById("christianSubcasteSection").classList.remove("hidden");
        document.getElementById("hinduSubcasteSection").classList.add("hidden");
        document.getElementById("muslimSubcasteSection").classList.add("hidden");
        document.getElementById("jainSubcasteSection").classList.add("hidden");
      } else if (this.value === "hindu") {
        document.getElementById("hinduSubcasteSection").classList.remove("hidden");
        document.getElementById("christianSubcasteSection").classList.add("hidden");
        document.getElementById("muslimSubcasteSection").classList.add("hidden");
        document.getElementById("jainSubcasteSection").classList.add("hidden");
      } else if (this.value === "muslim") {
        document.getElementById("muslimSubcasteSection").classList.remove("hidden");
        document.getElementById("christianSubcasteSection").classList.add("hidden");
        document.getElementById("hinduSubcasteSection").classList.add("hidden");
        document.getElementById("jainSubcasteSection").classList.add("hidden");
      } else if (this.value === "jain") {
        document.getElementById("jainSubcasteSection").classList.remove("hidden");
        document.getElementById("christianSubcasteSection").classList.add("hidden");
        document.getElementById("hinduSubcasteSection").classList.add("hidden");
        document.getElementById("muslimSubcasteSection").classList.add("hidden");
      } else {
        document.getElementById("christianSubcasteSection").classList.add("hidden");
        document.getElementById("hinduSubcasteSection").classList.add("hidden");
        document.getElementById("muslimSubcasteSection").classList.add("hidden");
        document.getElementById("jainSubcasteSection").classList.add("hidden");
      }
    });
  });

  // Show submit button when subcaste is selected
  document.querySelectorAll('input[type="radio"]').forEach(function(radio) {
    radio.addEventListener("change", function() {
      document.getElementById("submitButton").style.display = "block";
    });
  });
</script>

  <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['results'])) {
        foreach ($_POST['results'] as $result) {
            echo '<div class="result-item">' . $result . '</div>'; // Output each result item
        }
    } else {
        echo "No results found.";
    }
} else {
    echo "No data submitted.";
}
?>
<?php
// Turn off notices
error_reporting(E_ALL & ~E_NOTICE);
ini_set('display_errors', 0);
?>
















<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $gender = $_POST['gender'];
    $religion = $_POST['religion'];
    $caste = $_POST['caste'];

    if(isset($_POST['minAge']) && isset($_POST['maxAge'])){
        $minAge = $_POST['minAge'];
        $maxAge = $_POST['maxAge'];
   
    // Construct SQL query with age segregation
    $sql = "SELECT * FROM subhalekha WHERE gender = '$gender' AND religion = '$religion' AND caste = '$caste' AND age BETWEEN $minAge AND $maxAge";
} else {
    // Construct SQL query without age segregation
    $sql = "SELECT * FROM subhalekha WHERE gender = '$gender' AND religion = '$religion' AND caste = '$caste'";
}
    $result = mysqli_query($conn, $sql);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            // Output data of each row in grid format
            echo "<h1>Your Search Results</h1>";
            echo "<div class='grid-containerr'>";
            while($row = mysqli_fetch_assoc($result)) {
                
                
                echo "<div class='grid-itemm'>";
                echo "<div class='grid-main'>";
                
                // Image section
                $imageData = $row["phot"];
                $imageType = 'phot/jpeg'; // Change this according to your image type
                echo '<div class="image-section">';
                echo '<img src="data:' . $imageType . ';base64,' . base64_encode($imageData) . '"/>';
                echo "</div>";

                // Basic information section
                echo '<div class="basic-info-section">';
                echo '<table>'; // Start of the table
                
                // Basic info section
                echo "<tr><th>Name</th><td>" . $row["Name"]. "</td></tr>";
                echo "<tr><th>Gender</th><td>" . $row["gender"]. "</td></tr>";
                echo "<tr><th>Religion</th><td>" . $row["religion"]. "</td></tr>";
                echo "<tr><th>Caste</th><td>" . $row["caste"]. "</td></tr>";
                echo "<tr><th>Age</th><td>" . $row["age"]. "</td></tr>";
                echo "<tr><th>Education</th><td>" . $row["education"]. "</td></tr>";
                echo '</table>'; // End of the table
                echo '</div>';
                
                // Additional details section
                echo '<div class="additional-details-section">';
                echo '<table>'; // Start of the table
                
                echo "<tr><th>Height</th><td>" . $row["height"]. "</td></tr>";
                echo "<tr><th>Country</th><td>" . $row["country"]. "</td></tr>";
                echo "<tr><th>State</th><td>" . $row["state"]. "</td></tr>";
                echo "<tr><th>City</th><td>" . $row["city"]. "</td></tr>";
                echo "<tr><th>Income</th><td>" . $row["income"]. "</td></tr>";
                echo "<tr><th>Occupation</th><td>" . $row["occupation"]. "</td></tr>";
                
                echo '</table>'; // End of the table
                echo '</div>';
                echo "</div>"; // Close the outer div
                

                // Button container
                echo '<div class="button-container">';
                echo '<a href="loginform.php" class="message" onclick="openPopup(\'loginform.php\')"><i class="fas fa-envelope"></i> Send Message</a>';
                echo '<a href="loginform.php" class="shortlist" onclick="openPopup(\'loginform.php\')"><i class="fas fa-star"></i> Add to Shortlist</a>';
                echo '<a href="loginform.php" class="blocklist" onclick="openPopup(\'loginform.php\')"><i class="fas fa-ban"></i> Add to Blocklist</a>';
                echo '</div>';
                
                
                echo "</div>";
            }
            echo "</div>";
        } else {
            echo "0 results";
        }
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>

<script>
function openPopup(pageUrl) {
    // Open the page in a new window
    window.open(pageUrl, '_blank', 'width=600,height=400,scrollbars=yes,resizable=yes');
}
</script>




</div>

<!-- rightside end -->
</div>
</body>
</html>
<!-- Link to toggleView.js -->







<script>
// Function to show login popup
function showLoginPopup() {
    var loginPopup = document.getElementById("loginPopup");
    loginPopup.style.display = "block";
}

// Function to close login popup
function closeLoginPopup() {
    var loginPopup = document.getElementById("loginPopup");
    loginPopup.style.display = "none";
}
</script>
<div>

<?php include "footer.php"; ?>
</div>
