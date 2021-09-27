<section class="home-section py-0">
        <div class="text w-100 py-0">
            <div class="row">
                <div class="col-3 align-self-center">
                    <div class="text py-0">
                        <h6 class="text-light"><span id="date"></span> <span id="time"></span></h6>
                        <!-- <h5 class="text-light">Date <span>date</span></h5> -->
                    </div>
                </div>
                <div class="col-3 align-self-center">
                    <div class="text py-0">
                        <h1 class="text-center text-light">THEATER.COM</h1>
                    </div>
                </div>
                <div class="col-4 align-self-center">
                    <div class="text-end">
                        <div class="dropdown">
                            <span class="text-light text-left">
                                <img src="assets/user.png" alt="profile">
                                <span style="text-align: left;">
                                <?php 
                                    echo 'Hello '. $_SESSION['Admin'];
                                ?>
                                </span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-2 align-self-center">
                    <div class="text-end">
                        <div class="dropdown">
                            <a href="admin-logout.php?logoutAdmin" class="btn btn-logout btn-outline-danger">
                                Logout
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- 
<section class="home-section">
    <div class="text w-100 py-0">
        <div class="row">
            <div class="col-4 mt-3">
                <div class="text">
                    <h6 class="text-light"><span id="date"></span> <span id="time"></span></h6>
                </div>
            </div>
            <div class="col-4 mt-3">
                <div class="text py-0">
                    <h1 class="text-center text-light">THEATER.COM</h1>
                </div>
            </div>
            <div class="col-4 mt-4">
                <div class="text-end">
                    <div class="dropdown">
                        <button class="btn text-light dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="../assets/user.png" alt="profile">
                            <?php 
                                echo 'Hello '. $_SESSION['Admin'];
                            ?>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" style="overflow: hidden;">
                            <li><a class="dropdown-item" href="logout.php?logoutAdmin">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->