<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employees</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container">

        <?php 
            if(@$_GET['message'] == true)
            {
                echo "<div class='alert alert-success mt-3' role='alert'>".$_GET['message']."</div>";
            }
        ?>

        <h1 class="display-3 text-center">Add Employee</h1>
        <form action="insert.php" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="nm">
        </div>
        <div class="mb-3">
            <label for="dob" class="form-label">DOB</label>
            <input type="date" class="form-control" id="dob" name="dob">
        </div>
        <div class="mb-3">
            <label for="file" class="form-label">Image</label>
            <input type="file" class="form-control" id="file" name="file">
        </div>
        <div class="d-grid">
            <input type="submit" value="Add" class="btn btn-primary" name="submit">
        </div>
        </form>
    </div>
</body>
</html>