<?php
include "db.php";

$sql = "SELECT adName, adLink, adImage, contactPerson, contactNumber, adDate FROM advertisements WHERE Status = 'Approved'";
$result = $conn->query($sql);

$approved_ads = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $approved_ads[] = $row;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advertisement Slider</title>
    
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
    
    <style>
    /* General styles */
    .swiper-container {
        width: 95%;
        max-width: 1200px; /* Allow more space for larger screens */
        margin: auto;
        position: relative;
    }
    .swiper-slide {
        text-align: center;
        background: #fff;
        border-radius: 8px;
        overflow: hidden;
        padding: 15px;
        position: relative;
    }
    .swiper-slide img {
        width: 100%;
        height: auto;
        max-height: 500px; /* Maintains aspect ratio */
        border-radius: 150px;
        object-fit: cover; /* Ensures proper image fit */
    }

    .new-badge {
        position: absolute;
        top: 10px;
        left: 10px;
        background: red;
        color: white;
        padding: 5px 10px;
        font-weight: bold;
        font-size: 14px;
    }
    .swiper-button-next, .swiper-button-prev {
        color: #007bff;
    }
    .swiper-pagination {
        position: absolute;
        bottom: 10px;
    }

    /* Responsive adjustments */
    @media (max-width: 1024px) {
        .swiper-slide {
            padding: 10px;
        }
        .swiper-slide img {
            max-height: 300px;
        }
    }

    @media (max-width: 768px) {
        .swiper-container {
            width: 100%; /* Full width on smaller screens */
        }
        .swiper-slide {
            padding: 10px;
        }
        .swiper-slide img {
            max-height: 250px;
        }
        .new-badge {
            font-size: 12px;
            padding: 4px 8px;
        }
        .swiper-button-next, .swiper-button-prev {
            width: 30px;
            height: 30px;
            font-size: 14px;
        }
    }

    @media (max-width: 480px) {
        .swiper-slide {
            padding: 8px;
        }
        .swiper-slide img {
            max-height: 200px;
        }
        .new-badge {
            font-size: 10px;
            padding: 3px 6px;
        }
    }
</style>


</head>
<body>
<div class="sec-title text-center">
            <span class="title">Happy stories</span>
            <h2>Our Happy Stories</h2>
        </div>
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <?php
            foreach ($approved_ads as $ad) {
                $adDate = strtotime($ad['adDate']);
                $currentDate = time();
                $isNew = ($currentDate - $adDate) < (7 * 24 * 60 * 60);

                $imagePath = 'uploads/' . htmlspecialchars($ad['adImage']);

                echo '
                    <div class="swiper-slide">
                        ' . ($isNew ? '<div class="new-badge">New Ads</div>' : '') . '
                        <a href="' . htmlspecialchars($ad['adLink']) . '" target="_blank">
                            <img src="' . $imagePath . '" alt="' . htmlspecialchars($ad['adName']) . '">
                        </a>
                        
                        <h3>' . htmlspecialchars($ad['adName']) . '</h3>
                        <p><strong>Contact Person:</strong> ' . htmlspecialchars($ad['contactPerson']) . '</p>
                        <p><strong>Contact Number:</strong> ' . htmlspecialchars($ad['contactNumber']) . '</p>
                        <p><strong>Date:</strong> ' . htmlspecialchars($ad['adDate']) . '</p>
                    </div>
                ';
            }
            ?>
        </div>
        
        <!-- Pagination & Navigation -->
        <!-- <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div> -->
    </div>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    
    <script>
        var swiper = new Swiper('.swiper-container', {
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev'
            }
        });
    </script>

</body>
</html>
