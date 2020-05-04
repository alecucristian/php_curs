<?php
include_once('header.php');

// Store data from page 1 in session
if ( ! empty( $_POST ) ) {
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['email'] = $_POST['email'];
}
?>
    <session id="form">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-container">
                        <h3 class="heading">Step 2</h3>
                        <form action="page3.php" method="POST"></form>
                        <?php
                        $options = array(
                            'acrobatics' => 'Acrobatics',
                            'actiong' => 'Acting',
                            'antiques' => 'Antiques',
                        );

                        checkbox( 'interests', 'interests', 'Select your interests', $options)


                        ?>
                        <?php submit('Go To Step 3 &raquo;'); ?>
                    </div>
                </div>
            </div>
        </div>
    </session>

<?php include_once('footer.php'); ?>