<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Filter Profile</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Filter Profile</h2>
    <form>
        <div class="mb-3">
            <label for="gender" class="form-label">Gender</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                <label class="form-check-label" for="male">Male</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                <label class="form-check-label" for="female">Female</label>
            </div>
        </div>
        <div class="mb-3">
            <label for="keyword" class="form-label">Keyword</label>
            <input type="text" class="form-control" id="keyword" placeholder="Enter country name">
        </div>
        <div class="mb-3">
            <label for="country" class="form-label">Country</label>
            <select class="form-select" id="country">
                <option selected>Select Your Country</option>
                <!-- Add options here -->
            </select>
        </div>
        <div class="mb-3">
            <label for="state" class="form-label">State</label>
            <select class="form-select" id="state">
                <option selected>Select</option>
                <!-- Add options here -->
            </select>
        </div>
        <div class="mb-3">
            <label for="city" class="form-label">City</label>
            <select class="form-select" id="city">
                <option selected>Select state first</option>
                <!-- Add options here -->
            </select>
        </div>
        <div class="mb-3">
            <label for="religion" class="form-label">Religion</label>
            <select class="form-select" id="religion">
                <option selected>Select Religion</option>
                <!-- Add options here -->
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>