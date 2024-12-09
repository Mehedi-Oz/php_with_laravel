<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Source+Code+Pro:wght@200..900&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-2">
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href=action.php?page=home>Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-center" href="#" role="button"
                                   data-bs-toggle="dropdown"
                                   aria-expanded="false">
                                    Departments
                                </a>
                                <ul class="dropdown-menu">
                                    <?php foreach ($departments as $department): ?>
                                        <li><a class="dropdown-item text-center"
                                               href="action.php?page=department&id=<?php echo $department['id'] ?>"
                                               style="margin: 0px;"><?php echo $department['department_name'] ?></a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                   aria-expanded="false">
                                    Sections
                                </a>
                                <ul class="dropdown-menu">
                                    <?php foreach ($sections as $section): ?>
                                        <li><a class="dropdown-item text-center"
                                               href="action.php?page=section&id=<?php echo $section['id'] ?>"
                                               style="margin: 0px;"><?php echo $section['section_name'] ?></a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                   aria-expanded="false">
                                    Subjects
                                </a>
                                <ul class="dropdown-menu">
                                    <?php foreach ($subjects as $subject): ?>
                                        <li><a class="dropdown-item text-center"
                                               href="action.php?page=subject&id=<?php echo $subject['id'] ?>"
                                               style="margin: 0px;"><?php echo $subject['subject_name'] ?></a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>

