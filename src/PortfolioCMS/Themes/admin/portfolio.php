<!doctype html>
<?php

$page_title = "Overzicht | Admin";
$isOnAdminPage = "portfolio";

// PER STUDENT, INFO SCHERMEN MET HOBBY, TRAINING, ETC IN COLUMNS

include 'header.php'; ?>
<body>

<?php include 'navigation.php' ?>

<div class="content">
    <div class="">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title text-center">
                            <strong>
                            <?php if( $dataProvider->isAtLeasedTeacher() ):?>
                                Portfolio van <?= $dataProvider->call( 'student', 'getFirstName' ) . ' ' . $dataProvider->call( 'student', 'getLastName' ) ?>
                            <?php else : ?>
                                Mijn portfolio
                            <?php endif; ?>
                            </strong>
                        </h4>
                        <hr class="style-one"/>
                        <div class="col-sm-5 custom-buttons">

                        </div>
                        <div class="content table-responsive table-full-width">
                            <?php
                                dump( $dataProvider->all() );
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php' ?>
<?php include 'scripts.php' ?>
</body>
</html>