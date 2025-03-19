<style>
    .welcome {
        margin-left: 80%;
        padding: 20px;
        text-align: right;
        padding: 20px;
    }

    .profile-picture {
        border-radius: 80%;
        margin-right: 153px;
        margin-bottom: -47px;
        height: 60px;
        width: 65px;

    }

    .name-id {
        display: block;
        margin-bottom: 5px;
        margin-right: 0px;

    }

    .membership-payment {
        display: block;
    }

    .id {
        color: orangered;

    }

    .membership-payment payment {
        color: green;
    }

    .pay {
        color: green;
    }

    @media screen and (max-width:468px) {
        .welcome {
            margin-left: 0;
        }

    }

    @media screen and (min-width: 768px) and (max-width: 968px) {
        .welcome {
            margin-left: 0;
        }

        .gap {
            flex-direction: row;

        }


        /* your css rules for ipad portrait */
    }
</style>
<div class="welcome">
    <?php
    // Database connection
    include 'db.php';

    // Fetch photo and payment from the database
    $sql = "SELECT photo1_url, payment FROM user_profiles WHERE id = '$id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            // Display image
            echo "<img src='{$row['photo1_url']}' alt='profile_picture' height='30px' width='40px' class='profile-picture' />";
            
            $_SESSION['payment'] = $row['payment'];
        }
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>

    <?php
    if (isset($_SESSION['firstName'])) {
        echo '<div class="name-id">' . $_SESSION['firstName'] . ':<span class="id"><strong>SL</strong>' . $_SESSION['id'] . '</span></div>';
    }




    if (isset($_SESSION['payment'])) {

        echo '<div class="membership-payment">Membership:' . '<span class="pay">' . $_SESSION['payment'] . '</span></div>';
    }
    ?>
</div>