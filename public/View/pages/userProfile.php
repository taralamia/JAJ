<?php require_once './View/layout/header.php'; ?>

<div class="container-fluid">
    <div class="col-12" style="margin-top: 20px">
        <div class="card bg-light">
            <div class="card-body">

                <div class="p-5 mb-4 bg-light rounded-3">
                    <div class="container-fluid py-3">

                        <h1> THIS IS THE USER PROFILE OF </h1>

                        <?php
                        echo ' <p> '  . $_SESSION['userEmail'] . '</p>'
                        ?>


                        <!-- <a class="btn btn-outline-primary btn-lg" href="#" role="button">Host Contest</a> -->
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
<?php require_once './View/layout/footer.php'; ?>