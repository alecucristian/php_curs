<?php
include_once('header.php');

// Store data from page 1 in session
if ( ! empty( $_POST ) ) {
    $_SESSION['interests'] = $_POST['interests'];
   
}
?>
    <session id="form">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-container">
                        <h3 class="heading">Step 3</h3>
                        <form action="page4.php" method="POST"></form>
                        <?php
                        text('address', 'address', 'Address', 'Enter your eddress');
                        text('city', 'city', 'City', 'Enter your city');
                        text('state', 'state', 'State', 'Enter your state');
                        submit('Go To Step 4 &raquo;');


                        ?>
                    </div>
                </div>
            </div>
        </div>
    </session>

<?php include_once('footer.php'); ?>