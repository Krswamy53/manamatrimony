<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Assign Featured Profile</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="shortcut icon" href="favicon.png">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/bootstrap-icon/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
<style>
    /* You can add additional custom styles here */
.btn-success {
    background-color: #28a745; /* Bootstrap green */
}

.btn-outline-danger {
    color: #dc3545; /* Bootstrap red */
    border-color: #dc3545;
}

</style>
</head>
<body>
<div class="container-fluid mt-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <!-- <li class="breadcrumb-item"><a href="#">Home</a></li> -->
            <li class="breadcrumb-item active" aria-current="page">Assign Featured Profile</li>
        </ol>
    </nav>
    
    <div class="btn-toolbar" role="toolbar">
    <div class="button-group">
    <button type="button" class="btn btn-success"><i class="bi bi-people"></i> All Member</button>
    <button type="button" class="btn btn-success"><i class="bi bi-person-plus"></i> Add Member</button>
</div>

    </div>

    <div class="card mt-3">
        <div class="card-body">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="selectAll">
                <label class="form-check-label" for="selectAll">Select All</label>

            <button type="button" class="btn btn-outline-danger ms-2"><i class="bi bi-star-fill"></i> Featured</button>
            <button type="button" class="btn btn-outline-danger ms-2"><i class="bi bi-x-circle"></i> Remove Featured</button>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>