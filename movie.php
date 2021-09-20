<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="theater-create.php" method="POST"  enctype="multipart/form-data">
        <input type="text" name="theater_name">
        <input type="text" name="theater_place">
        <input type="text" name="theater_owner">
        <input type="text" name="theater_contactNo">
        <input type="text" name="theater_email">
        <input type="text" name="theater_address">
        <input type="file" name="theater_image">
        <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>