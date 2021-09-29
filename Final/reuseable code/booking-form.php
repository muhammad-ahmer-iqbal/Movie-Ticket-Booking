    <!-- Modal -->

    <!-- booking Now Start -->
    
<div class="modal fade" id="booking" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-heading">
                <h3 class="text-center py-3">Booking</h3>
            </div>
            <div class="modal-body">
                <form action="booking-create.php" method="POST">
                    <div class="input mb-3">
                        <input type="text" class="form-control" placeholder="Enter Your Name*" value="<?php echo $_SESSION['UserName'];?>" disabled>
                    </div>
                    <div class="input mb-3">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Select Class</option>
                            <?php
                                while($row7 =mysqli_fetch_array($result7)){
                                    echo '<option value="' . $row7['class_id'] . '">' . $row7['class_name'] . '</option>';
                                }
                            ?>
                        </select>
                    </div>
                    <div class="input mb-3">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Select Seat</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                            <option value="4">Three</option>
                            <option value="5">Three</option>
                        </select>
                    </div>
                    <div class="btn-booking text-center mt-5 mb-3">
                        <button class="btn">Book Now</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

    <!-- booking Now End -->