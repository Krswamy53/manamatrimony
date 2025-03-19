<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Add Member Form</title>
<!-- Include Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
  <h2>Add Member</h2>
  <form>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputFirstName">First Name</label>
        <input type="text" class="form-control" id="inputFirstName" placeholder="Enter first name">
      </div>
      <div class="form-group col-md-6">
        <label for="inputLastName">Last Name</label>
        <input type="text" class="form-control" id="inputLastName" placeholder="Enter last name">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputEmail">Email</label>
        <input type="email" class="form-control" id="inputEmail" placeholder="Enter email">
      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword">Password</label>
        <input type="password" class="form-control" id="inputPassword" placeholder="Enter password">
      </div>
    </div>
    <!-- Add more form groups for other fields as per your requirement -->
    <!-- Example for Age and Marital Status -->
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputAge">Age</label>
        <select id="inputAge" class="form-control">
          <option selected>Choose...</option>
          <option>...</option>
          <!-- Add age options -->
        </select>
      </div>
      <div class="form-group col-md-6">
        <label for="inputMaritalStatus">Marital Status</label>
        <input type="text" class="form-control" id="inputMaritalStatus" placeholder="Enter marital status">
      </div>
    </div>
    <!-- Continue adding other fields in a similar fashion -->
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
<!-- Include Bootstrap JS and its dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>