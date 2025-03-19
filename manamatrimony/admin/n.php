<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Buttons Container</title>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<style>
  .button-container {
    border: 1px solid #ccc;
    padding: 10px;
    background-color: #f9f9f9;
    display: flex;
    justify-content: flex-start;
  }
  .button-container .btn {
    margin-right: 10px; /* Spacing between buttons */
  }
</style>
</head>
<body>
<div class="container mt-5">
  <div class="button-container">
    <button class="btn btn-success"><i class="fas fa-users"></i> All Member</button>
    <button class="btn btn-success"><i class="fas fa-user-plus"></i> Add Member</button>
  </div>
</div>

<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>
</html>