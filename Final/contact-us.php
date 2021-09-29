<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us Form | movie.com</title>
    <?php include 'reuseable code\CDNs.html' ?>
</head>

<body>

    <!-- Sub-header Start -->

    <?php
    
        include 'reuseable code\header.html';
        // Sub-header End
        echo '<hr class="hr">';
        // Navbar Start
        include 'reuseable code\navbar.php';
        // Navbar End
    ?>

    <!-- Index Center Content Start -->

    <div class="contact-us">
        <div class="container mb-3">

            <div class="heading">
                <h1 class="display-3 text-center">
                    Contact Us
                </h1>
            </div>
            <div class="form">
                <form action="message-create.php" method="POST">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control" value="" name="contact_name" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                            <label class="form-label">Email Address</label>
                                <input type="email" class="form-control" name="contact_email" required>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <textarea class="form-control mb-3" id="textarea" placeholder="Message" rows="8" name="contact_message"></textarea>
                    </div>
                    <div class="d-grid gap-2 mt-4">
                        <button class="btn btn-dark" type="submit" name="submit" value="submit">Submit</button>
                    </div>
                    <div class="d-grid gap-2 mt-2">
                        <button class="btn btn-outline-danger" type="reset">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Index Center Content End -->

    <!-- Footer Start -->

    <?php
        include 'reuseable code\footer.html';
        include 'reuseable code\script.html';
    ?>

    <!-- Footer End -->

</body>
<script>
    $(document).ready(function() {
        $("#m_inslot_id").change(function() {
            var x = $("#m_inslot_id").val();
            $("[name=booking_movieInSlotId]").val(x);
        });
        active("contact-us.php");
        <?php
            if(isset($_SESSION['User'])){
                echo    '$("[name=contact_name]").val('.$_SESSION['UserName'].');
                        $("[name=contact_name]").attr("disabled", true);';
            }
        ?>
        
    });
</script>

</html>