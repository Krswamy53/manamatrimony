<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>User Profile Interface</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<style>
  .profile-header-container{
    margin: 10px;
  }
  .profile-header-img {
    padding: 54px;
  }
  .profile-header-info {
    padding: 50px;
  }
  .search-bar {
    padding: 20px;
  }
  /* Add more custom CSS here as needed */
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">My Profile</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">My Matches <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Membership</a>
      </li>
      <!-- Add more navigation items here -->
    </ul>
  </div>
</nav>

<div class="container profile-header-container">
  <div class="row">
    <div class="col-md-4 profile-header-img">
      <img src="path_to_profile_image.jpg" class="rounded-circle" alt="Profile Image">
      <!-- Upload photo button -->
      <button class="btn btn-primary">Upload Photo</button>
    </div>
    <div class="col-md-8 profile-header-info">
      <h1>Hello [Username]!</h1>
      <p>Profile Completion: 70%</p>
      <p>Last Login: 2 days ago</p>
      <!-- Edit details button -->
      <button class="btn btn-secondary">Edit Details</button>
    </div>
  </div>
</div>

<div class="container search-bar">
  <input type="text" class="form-control" placeholder="Search...">
  <a href="#" class="btn btn-link">Edit criteria</a>
  <button class="btn btn-success">Search Now</button>
</div>

<!-- Add Recently Joined and Featured Profiles sections here -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
