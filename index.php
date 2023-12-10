<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Student Information System</title>
</head>
<body>
    <div class="container mt-5">
        <h2>Student Information System</h2>
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="users-tab" data-toggle="tab" href="#users" role="tab" aria-controls="users" aria-selected="true">Users</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="students-tab" data-toggle="tab" href="#students" role="tab" aria-controls="students" aria-selected="false">Students</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="courses-tab" data-toggle="tab" href="#courses" role="tab" aria-controls="courses" aria-selected="false">Courses</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="instructors-tab" data-toggle="tab" href="#instructors" role="tab" aria-controls="instructors" aria-selected="false">Instructors</a>
            </li>
            <!-- Added Enrollment Tab -->
            <li class="nav-item">
                <a class="nav-link" id="enrollments-tab" data-toggle="tab" href="#enrollments" role="tab" aria-controls="enrollments" aria-selected="false">Enrollments</a>
            </li>
        </ul>

        <div class="tab-content mt-3">
            <div class="tab-pane fade show active" id="users" role="tabpanel" aria-labelledby="users-tab">
                <?php include('users.php'); ?>
            </div>
            <div class="tab-pane fade" id="students" role="tabpanel" aria-labelledby="students-tab">
                <?php include('students.php'); ?>
            </div>
            <div class="tab-pane fade" id="courses" role="tabpanel" aria-labelledby="courses-tab">
                <?php include('courses.php'); ?>
            </div>
            <div class="tab-pane fade" id="instructors" role="tabpanel" aria-labelledby="instructors-tab">
                <?php include('instructors.php'); ?>
            </div>
            <div class="tab-pane fade" id="enrollments" role="tabpanel" aria-labelledby="enrollments-tab">
                <?php include('enrollments.php'); ?>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
