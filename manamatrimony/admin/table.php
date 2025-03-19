<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ServoBoard - HTML Admin Template</title>

    <link rel="shortcut icon" href="favicon.png">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/bootstrap-icon/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="assets/css/sweetalert.css">
    <link rel="stylesheet" href="assets/css/toastify.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="container-fluid">
        <button class="sidebar-collapse-mini d-xl-none d-block"><i class="bi bi-list"></i></button>
        <!-- main sidebar -->
        <div class="fixed-sidebar sidebar-mini">
            <div class="logo">
                <button class="sidebar-collapse"><i class="bi bi-list"></i></button>
                <a href="index.html"><img src="assets/images/logo.png" alt="LOGO"></a>
            </div>
            <!-- sidebar menu -->
            <div class="menu">
                <div class="custom-scroll">
                    <div class="sidebar-menu">
                        <ul>
                            <li class="sidebar-title"><span>Menu</span></li>
                            <li class="sidebar-item"><a href="index.html" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right" title="Dashboard" tabindex="0"><i class="bi bi-grid-fill"></i> <span>Dashboard</span></a></li>
                            <li class="sidebar-item has-sub">
                                <a role="button" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right" title="Components" tabindex="0"><i class="bi bi-stack"></i> <span>Components</span></a>
                                <ul class="sub-menu">
                                    <li><a href="component_alert.html" class="sub-menu-item">Alert</a></li>
                                    <li><a href="component_badge.html" class="sub-menu-item">Badge</a></li>
                                    <li><a href="component_button.html" class="sub-menu-item">Button</a></li>
                                    <li><a href="component_card.html" class="sub-menu-item">Card</a></li>
                                    <li><a href="component_carousel.html" class="sub-menu-item">Carousel</a></li>
                                    <li><a href="component_list_group.html" class="sub-menu-item">List Group</a></li>
                                    <li><a href="component_modal.html" class="sub-menu-item">Modal</a></li>
                                    <li><a href="component_progress.html" class="sub-menu-item">Progress</a></li>
                                </ul>
                            </li>
                            <li class="sidebar-item"><a href="extra_component.html" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right" title="Extra Components" tabindex="0"><i class="bi bi-collection-fill"></i> <span>Extra Components</span></a></li>
                            <li class="sidebar-title"><span>Forms & Tables</span></li>
                            <li class="sidebar-item"><a href="form_element.html" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right" title="Form Elements" tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>Form Elements</span></a></li>
                            <li class="sidebar-item"><a href="form_layout.html" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right" title="Form Layout" tabindex="0"><i class="bi bi-file-earmark-medical-fill"></i> <span>Form Layout</span></a></li>
                            <li class="sidebar-item"><a href="editor.html" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right" title="Form Editor" tabindex="0"><i class="bi bi-pen-fill"></i> <span>Text Editor</span></a></li>
                            <li class="sidebar-item"><a href="table.html" class="sidebar-link active" data-bs-toggle="tooltip" data-bs-placement="right" title="Table" tabindex="0"><i class="bi bi-grid-1x2-fill"></i> <span>Table</span></a></li>
                            <li class="sidebar-item"><a href="data_table.html" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right" title="Datatable" tabindex="0"><i class="bi bi-file-earmark-spreadsheet-fill"></i> <span>Datatable</span></a></li>
                            <li class="sidebar-title"><span>Extra UI</span></li>
                            <li class="sidebar-item"><a href="widget.html" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right" title="Widgets" tabindex="0"><i class="bi bi-pentagon-fill"></i> <span>Widgets</span></a></li>
                            <li class="sidebar-item has-sub">
                                <a role="button" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right" title="Icons" tabindex="0"><i class="bi bi-egg-fill"></i> <span>Icons</span></a>
                                <ul class="sub-menu">
                                    <li><a href="bootstrap_icon.html" class="sub-menu-item">Bootstrap Icons </a></li>
                                    <li><a href="font_awesome.html" class="sub-menu-item">Fontawesome</a></li>
                                </ul>
                            </li>
                            <li class="sidebar-item"><a href="chart.html" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right" title="Charts" tabindex="0"><i class="bi bi-bar-chart-fill"></i> <span>Apexcharts</span></a></li>
                            <li class="sidebar-title"><span>Pages</span></li>
                            <li class="sidebar-item"><a href="email.html" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right" title="Email Application" tabindex="0"><i class="bi bi-envelope-fill"></i> <span>Email Application</span></a></li>
                            <li class="sidebar-item has-sub">
                                <a role="button" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right" title="Authentication" tabindex="0"><i class="bi bi-person-badge-fill"></i> <span>Authentication</span></a>
                                <ul class="sub-menu">
                                    <li><a href="login.html" class="sub-menu-item">Login</a></li>
                                    <li><a href="register.html" class="sub-menu-item">Register</a></li>
                                    <li><a href="password.html" class="sub-menu-item">Forgot Password</a></li>
                                </ul>
                            </li>
                            <li class="sidebar-item has-sub">
                                <a role="button" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right" title="Errors" tabindex="0"><i class="bi bi-x-octagon-fill"></i> <span>Errors</span></a>
                                <ul class="sub-menu">
                                    <li><a href="403.html" class="sub-menu-item">403</a></li>
                                    <li><a href="404.html" class="sub-menu-item">404</a></li>
                                    <li><a href="500.html" class="sub-menu-item">500</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- sidebar menu -->
        </div>
        <!-- main sidebar -->
        <div class="main-content">
            <div class="breadcrumb-wrap mb-20">
                <div class="d-md-flex d-block justify-content-between align-items-center">
                    <div class="left">
                        <h1>Table</h1>
                        <p>A table displays a collections of data grouped into rows</p>
                    </div>
                    <div class="right">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                <li class="breadcrumb-item"><i class="bi bi-caret-right"></i></li>
                                <li class="breadcrumb-item active" aria-current="page">Tables</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="row g-10">
                <div class="col-xl-6 col-lg-6">
                    <div class="panel mb-10">
                        <div class="panel-heading">
                            <span>Basic Table</span>
                        </div>
                        <div class="panel-body">
                            <p>Using the most basic table markup, here’s how <code>.table</code>-based tables look in Bootstrap.</p>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Profile</th>
                                            <th>VatNo.</th>
                                            <th>Created</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Jacob</td>
                                            <td>53275531</td>
                                            <td>12 May 2017</td>
                                            <td><span class="badge bg-danger">Pending</span></td>
                                        </tr>
                                        <tr>
                                            <td>Messsy</td>
                                            <td>53275532</td>
                                            <td>15 May 2017</td>
                                            <td><span class="badge bg-primary">In progress</span></td>
                                        </tr>
                                        <tr>
                                            <td>John</td>
                                            <td>53275533</td>
                                            <td>14 May 2017</td>
                                            <td><span class="badge bg-info">Fixed</span></td>
                                        </tr>
                                        <tr>
                                            <td>Peter</td>
                                            <td>53275534</td>
                                            <td>16 May 2017</td>
                                            <td><span class="badge bg-success">Completed</span></td>
                                        </tr>
                                        <tr>
                                            <td>Dave</td>
                                            <td>53275535</td>
                                            <td>20 May 2017</td>
                                            <td><span class="badge bg-warning">In progress</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="panel mb-10">
                        <div class="panel-heading">
                            <span>Hoverable Table</span>
                        </div>
                        <div class="panel-body">
                            <p>Add <code>.table-hover</code> to enable a hover state on table rows within a <code>&lt;tbody&gt;</code>.</p>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Profile</th>
                                            <th>VatNo.</th>
                                            <th>Created</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Jacob</td>
                                            <td>53275531</td>
                                            <td>12 May 2017</td>
                                            <td><span class="badge bg-danger">Pending</span></td>
                                        </tr>
                                        <tr>
                                            <td>Messsy</td>
                                            <td>53275532</td>
                                            <td>15 May 2017</td>
                                            <td><span class="badge bg-primary">In progress</span></td>
                                        </tr>
                                        <tr>
                                            <td>John</td>
                                            <td>53275533</td>
                                            <td>14 May 2017</td>
                                            <td><span class="badge bg-info">Fixed</span></td>
                                        </tr>
                                        <tr>
                                            <td>Peter</td>
                                            <td>53275534</td>
                                            <td>16 May 2017</td>
                                            <td><span class="badge bg-success">Completed</span></td>
                                        </tr>
                                        <tr>
                                            <td>Dave</td>
                                            <td>53275535</td>
                                            <td>20 May 2017</td>
                                            <td><span class="badge bg-warning">In progress</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12">
                    <div class="panel mb-10">
                        <div class="panel-heading">
                            <span>Striped rows</span>
                        </div>
                        <div class="panel-body">
                            <p>Use <code>.table-striped</code> to add zebra-striping to any table row within the <code>&lt;tbody&gt;</code>.</p>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>User</th>
                                            <th>Project</th> 
                                            <th>Progress</th>
                                            <th>Started</th>
                                            <th>Deadline</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><img src="assets/images/avatar-1.jpg" alt="image"></td>
                                            <td>Design Updated</td>
                                            <td>
                                                <div class="progress h-md">
                                                    <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>12 Jan 2021</td>
                                            <td>12 May 2021</td>
                                            <td><span class="badge bg-danger">Pending</span></td>
                                        </tr>
                                        <tr>
                                            <td><img src="assets/images/avatar-2.jpg" alt="image"></td>
                                            <td>Website Develop</td>
                                            <td>
                                                <div class="progress h-md">
                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>15 Jan 2021</td>
                                            <td>15 May 2021</td>
                                            <td><span class="badge bg-primary">In progress</span></td>
                                        </tr>
                                        <tr>
                                            <td><img src="assets/images/avatar-3.jpg" alt="image"></td>
                                            <td>Digital Marketing</td>
                                            <td>
                                                <div class="progress h-md">
                                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>14 Jan 2021</td>
                                            <td>14 May 2021</td>
                                            <td><span class="badge bg-info">Fixed</span></td>
                                        </tr>
                                        <tr>
                                            <td><img src="assets/images/avatar-4.jpg" alt="image"></td>
                                            <td>Ad Analysis</td>
                                            <td>
                                                <div class="progress h-md">
                                                    <div class="progress-bar bg-secondary" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>16 Jan 2021</td>
                                            <td>16 May 2021</td>
                                            <td><span class="badge bg-success">Completed</span></td>
                                        </tr>
                                        <tr>
                                            <td><img src="assets/images/avatar-5.jpg" alt="image"></td>
                                            <td>SEO Optimize</td>
                                            <td>
                                                <div class="progress h-md">
                                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>20 Jan 2021</td>
                                            <td>20 May 2021</td>
                                            <td><span class="badge bg-warning">In progress</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12">
                    <div class="panel mb-10">
                        <div class="panel-heading">
                            <span>Bordered tables</span>
                        </div>
                        <div class="panel-body">
                            <p>Add <code>.table-bordered</code> for borders on all sides of the table and cells. <a href="https://getbootstrap.com/docs/5.1/utilities/borders/#border-color">Bootstrap border color utilities</a> can be added to change colors like <code>.border-primary</code> on <code>table</code> tag.</p>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>User</th>
                                            <th>Project</th> 
                                            <th>Progress</th>
                                            <th>Started</th>
                                            <th>Deadline</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><img src="assets/images/avatar-1.jpg" alt="image"></td>
                                            <td>Design Updated</td>
                                            <td>
                                                <div class="progress h-md">
                                                    <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>12 Jan 2021</td>
                                            <td>12 May 2021</td>
                                            <td><span class="badge bg-danger">Pending</span></td>
                                        </tr>
                                        <tr>
                                            <td><img src="assets/images/avatar-2.jpg" alt="image"></td>
                                            <td>Website Develop</td>
                                            <td>
                                                <div class="progress h-md">
                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>15 Jan 2021</td>
                                            <td>15 May 2021</td>
                                            <td><span class="badge bg-primary">In progress</span></td>
                                        </tr>
                                        <tr>
                                            <td><img src="assets/images/avatar-3.jpg" alt="image"></td>
                                            <td>Digital Marketing</td>
                                            <td>
                                                <div class="progress h-md">
                                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>14 Jan 2021</td>
                                            <td>14 May 2021</td>
                                            <td><span class="badge bg-info">Fixed</span></td>
                                        </tr>
                                        <tr>
                                            <td><img src="assets/images/avatar-4.jpg" alt="image"></td>
                                            <td>Ad Analysis</td>
                                            <td>
                                                <div class="progress h-md">
                                                    <div class="progress-bar bg-secondary" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>16 Jan 2021</td>
                                            <td>16 May 2021</td>
                                            <td><span class="badge bg-success">Completed</span></td>
                                        </tr>
                                        <tr>
                                            <td><img src="assets/images/avatar-5.jpg" alt="image"></td>
                                            <td>SEO Optimize</td>
                                            <td>
                                                <div class="progress h-md">
                                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>20 Jan 2021</td>
                                            <td>20 May 2021</td>
                                            <td><span class="badge bg-warning">In progress</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12">
                    <div class="panel mb-10">
                        <div class="panel-heading">
                            <span>Tables without borders</span>
                        </div>
                        <div class="panel-body">
                            <p>Add <code>.table-borderless</code> for a table without borders.</p>
                            <div class="table-responsive">
                                <table class="table table-borderless">
                                    <thead>
                                        <tr>
                                            <th>User</th>
                                            <th>Project</th> 
                                            <th>Progress</th>
                                            <th>Started</th>
                                            <th>Deadline</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><img src="assets/images/avatar-1.jpg" alt="image"></td>
                                            <td>Design Updated</td>
                                            <td>
                                                <div class="progress h-md">
                                                    <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>12 Jan 2021</td>
                                            <td>12 May 2021</td>
                                            <td><span class="badge bg-danger">Pending</span></td>
                                        </tr>
                                        <tr>
                                            <td><img src="assets/images/avatar-2.jpg" alt="image"></td>
                                            <td>Website Develop</td>
                                            <td>
                                                <div class="progress h-md">
                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>15 Jan 2021</td>
                                            <td>15 May 2021</td>
                                            <td><span class="badge bg-primary">In progress</span></td>
                                        </tr>
                                        <tr>
                                            <td><img src="assets/images/avatar-3.jpg" alt="image"></td>
                                            <td>Digital Marketing</td>
                                            <td>
                                                <div class="progress h-md">
                                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>14 Jan 2021</td>
                                            <td>14 May 2021</td>
                                            <td><span class="badge bg-info">Fixed</span></td>
                                        </tr>
                                        <tr>
                                            <td><img src="assets/images/avatar-4.jpg" alt="image"></td>
                                            <td>Ad Analysis</td>
                                            <td>
                                                <div class="progress h-md">
                                                    <div class="progress-bar bg-secondary" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>16 Jan 2021</td>
                                            <td>16 May 2021</td>
                                            <td><span class="badge bg-success">Completed</span></td>
                                        </tr>
                                        <tr>
                                            <td><img src="assets/images/avatar-5.jpg" alt="image"></td>
                                            <td>SEO Optimize</td>
                                            <td>
                                                <div class="progress h-md">
                                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>20 Jan 2021</td>
                                            <td>20 May 2021</td>
                                            <td><span class="badge bg-warning">In progress</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12">
                    <div class="panel mb-10">
                        <div class="panel-heading">
                            <span>Color Variants</span>
                        </div>
                        <div class="panel-body">
                            <p>Use contextual classes to color tables, table rows or individual cells.</p>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr class="table-light">
                                            <th>User</th>
                                            <th>Project</th> 
                                            <th>Progress</th>
                                            <th>Started</th>
                                            <th>Deadline</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="table-primary">
                                            <td><img src="assets/images/avatar-1.jpg" alt="image"></td>
                                            <td>Design Updated</td>
                                            <td>
                                                <div class="progress h-md">
                                                    <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>12 Jan 2021</td>
                                            <td>12 May 2021</td>
                                            <td><span class="badge bg-danger">Pending</span></td>
                                        </tr>
                                        <tr class="table-secondary">
                                            <td><img src="assets/images/avatar-2.jpg" alt="image"></td>
                                            <td>Website Develop</td>
                                            <td>
                                                <div class="progress h-md">
                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>15 Jan 2021</td>
                                            <td>15 May 2021</td>
                                            <td><span class="badge bg-primary">In progress</span></td>
                                        </tr>
                                        <tr class="table-success">
                                            <td><img src="assets/images/avatar-3.jpg" alt="image"></td>
                                            <td>Digital Marketing</td>
                                            <td>
                                                <div class="progress h-md">
                                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>14 Jan 2021</td>
                                            <td>14 May 2021</td>
                                            <td><span class="badge bg-info">Fixed</span></td>
                                        </tr>
                                        <tr class="table-danger">
                                            <td><img src="assets/images/avatar-4.jpg" alt="image"></td>
                                            <td>Ad Analysis</td>
                                            <td>
                                                <div class="progress h-md">
                                                    <div class="progress-bar bg-secondary" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>16 Jan 2021</td>
                                            <td>16 May 2021</td>
                                            <td><span class="badge bg-success">Completed</span></td>
                                        </tr>
                                        <tr class="table-warning">
                                            <td><img src="assets/images/avatar-5.jpg" alt="image"></td>
                                            <td>SEO Optimize</td>
                                            <td>
                                                <div class="progress h-md">
                                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>20 Jan 2021</td>
                                            <td>20 May 2021</td>
                                            <td><span class="badge bg-warning">In progress</span></td>
                                        </tr>
                                        <tr class="table-info">
                                            <td><img src="assets/images/avatar-6.jpg" alt="image"></td>
                                            <td>Design Updated</td>
                                            <td>
                                                <div class="progress h-md">
                                                    <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>12 Jan 2021</td>
                                            <td>12 May 2021</td>
                                            <td><span class="badge bg-danger">Pending</span></td>
                                        </tr>
                                        <tr class="table-light">
                                            <td><img src="assets/images/avatar-7.jpg" alt="image"></td>
                                            <td>Website Develop</td>
                                            <td>
                                                <div class="progress h-md">
                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>15 Jan 2021</td>
                                            <td>15 May 2021</td>
                                            <td><span class="badge bg-primary">In progress</span></td>
                                        </tr>
                                        <tr class="table-dark">
                                            <td><img src="assets/images/avatar-8.jpg" alt="image"></td>
                                            <td>Digital Marketing</td>
                                            <td>
                                                <div class="progress h-md">
                                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>14 Jan 2021</td>
                                            <td>14 May 2021</td>
                                            <td><span class="badge bg-info">Fixed</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12">
                    <div class="panel mb-10">
                        <div class="panel-heading">
                            <span>Dark Table</span>
                        </div>
                        <div class="panel-body">
                            <p>Use contextual classes to <code>table</code>.</p>
                            <div class="table-responsive">
                                <table class="table table-dark table-hover table-borderless">
                                    <thead>
                                        <tr>
                                            <th>User</th>
                                            <th>Project</th> 
                                            <th>Progress</th>
                                            <th>Started</th>
                                            <th>Deadline</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><img src="assets/images/avatar-1.jpg" alt="image"></td>
                                            <td>Design Updated</td>
                                            <td>
                                                <div class="progress h-md">
                                                    <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>12 Jan 2021</td>
                                            <td>12 May 2021</td>
                                            <td><span class="badge bg-danger">Pending</span></td>
                                        </tr>
                                        <tr>
                                            <td><img src="assets/images/avatar-2.jpg" alt="image"></td>
                                            <td>Website Develop</td>
                                            <td>
                                                <div class="progress h-md">
                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>15 Jan 2021</td>
                                            <td>15 May 2021</td>
                                            <td><span class="badge bg-primary">In progress</span></td>
                                        </tr>
                                        <tr>
                                            <td><img src="assets/images/avatar-3.jpg" alt="image"></td>
                                            <td>Digital Marketing</td>
                                            <td>
                                                <div class="progress h-md">
                                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>14 Jan 2021</td>
                                            <td>14 May 2021</td>
                                            <td><span class="badge bg-info">Fixed</span></td>
                                        </tr>
                                        <tr>
                                            <td><img src="assets/images/avatar-4.jpg" alt="image"></td>
                                            <td>Ad Analysis</td>
                                            <td>
                                                <div class="progress h-md">
                                                    <div class="progress-bar bg-secondary" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>16 Jan 2021</td>
                                            <td>16 May 2021</td>
                                            <td><span class="badge bg-success">Completed</span></td>
                                        </tr>
                                        <tr>
                                            <td><img src="assets/images/avatar-5.jpg" alt="image"></td>
                                            <td>SEO Optimize</td>
                                            <td>
                                                <div class="progress h-md">
                                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>20 Jan 2021</td>
                                            <td>20 May 2021</td>
                                            <td><span class="badge bg-warning">In progress</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets/js/apexcharts.js"></script>
    <script src="assets/js/sweetalert.min.js"></script>
    <script src="assets/js/toastify-js.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>