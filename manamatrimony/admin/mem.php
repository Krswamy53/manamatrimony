<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Plan Form</title>
<!-- Link to Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
  <form>
    <div class="form-group">
      <label for="planName">Plan Name:</label>
      <input type="text" class="form-control" id="planName" placeholder="Enter Plan Name">
    </div>
    <div class="form-group">
      <label for="planType">Plan Type:</label>
      <select class="form-control" id="planType">
        <option>Select Plan Type</option>
        <!-- Add other options here -->
      </select>
    </div>
    <div class="form-group">
      <label for="planDuration">Plan Duration:</label>
      <input type="number" class="form-control" id="planDuration" placeholder="Numeric Only">
    </div>
    <div class="form-group">
      <label for="allowMessages">Allow Messages:</label>
      <input type="number" class="form-control" id="allowMessages" placeholder="Numeric Only">
    </div>
    <div class="form-group">
      <label for="planAmount">Plan Amount:</label>
      <input type="number" class="form-control" id="planAmount" placeholder="Numeric Only">
    </div>
    <div class="form-group">
      <label for="allowProfile">Allow Profile:</label>
      <input type="number" class="form-control" id="allowProfile" placeholder="Numeric Only">
    </div>
    <div class="form-group">
      <label for="allowContacts">Allow Contacts:</label>
      <input type="number" class="form-control" id="allowContacts" placeholder="Numeric Only">
    </div>
    <div class="form-group">
      <label>Chat:</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="chatOptions" id="chatYes" value="yes">
        <label class="form-check-label" for="chatYes">
          Yes
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="chatOptions" id="chatNo" value="no">
        <label class="form-check-label" for="chatNo">
          No
        </label>
      </div>
    </div>
    <div class="form-group">
      <label for="status">Status:</label>
      <select class="form-control" id="status">
        <option>Active</option>
        <!-- Add other options here -->
      </select>
    </div>
    <button type="submit" class="btn btn-success">Save</button>
    <button type="button" class="btn btn-danger">Cancel</button>
  </form>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap