<div class="review mb-5">
    <h4 class="mb-4">Review</h4>
    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <?php
                while($row3 = mysqli_fetch_array($result3)){
                    echo    '<div class="carousel-item active" data-bs-interval="5000">
                                <div class="card" style="width: 100%;">
                                    <div class="card-body">
                                        <h5 class="card-title">' . $row3['review_userName'] . '</h5>
                                        <p class="card-text">' . $row3['review_message'] . '</p>
                                    </div>
                                </div>
                            </div>';
                }
            ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<form action="review-rating-create.php" method="POST" class="review-mess">
    <input type="hidden" name="movie_id" value="<?php echo $id;?>">
    <label for="textarea" class="form-label text-start">Rating Stars <br>
        <span class="text-end">
            <fieldset class="rating">
                <input type="radio" id="star5" name="rating_stars" value="1" /><label for="star5" title="Rocks!">5 stars</label>
                <input type="radio" id="star4" name="rating_stars" value="2" /><label for="star4" title="Pretty good">4 stars</label>
                <input type="radio" id="star3" name="rating_stars" value="3" /><label for="star3" title="Meh">3 stars</label>
                <input type="radio" id="star2" name="rating_stars" value="4" /><label for="star2" title="Kinda bad">2 stars</label>
                <input type="radio" id="star1" name="rating_stars" value="5" /><label for="star1" title="Sucks big time">1 star</label>
            </fieldset>
        </span>
    </label>
    <textarea class="form-control mb-3" id="textarea" placeholder="Message" rows="3" name="review_message"></textarea>
    <button type="submit" class="btn btn-outline-danger text-light border-2" name="submit" value="submit">Submit</button>
</form>