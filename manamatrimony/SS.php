<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Completion</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
    background-color: #f8f9fa;
}

.card {
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.progress-bar {
    background-color: #f39c12;
}
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <h5>Hello <strong class="text-danger">BSIT ffffffffff</strong> <span class="text-muted">(IN64)</span></h5>
                        <p>Your profile is <strong>54%</strong> complete</p>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 54%;" aria-valuenow="54" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="mt-2 text-muted">Tip: insert all details which can help you to find perfect life partner</p>
                        <a href="#" class="text-success">Complete Your Profile</a>
                    </div>
                    <div class="col-md-4 text-right">
                        <h5 class="text-muted">RECENT LOGIN</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', (event) => {
    const progressBar = document.querySelector('.progress-bar');
    const progressPercentage = 54; // Example percentage

    progressBar.style.width = progressPercentage + '%';
    progressBar.setAttribute('aria-valuenow', progressPercentage);
});
</script>
</body>
</html>