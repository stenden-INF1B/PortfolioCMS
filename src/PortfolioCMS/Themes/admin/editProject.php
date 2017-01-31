<!doctype html>
<?php
$page_title = "Project aanpassen | Admin";
$pageName = 'portfolio';
include 'header.php';
?>
<body>

<?php include 'navigation.php' ?>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title text-center">
                            <strong>
                                <i class="fa fa-pencil-square-o"></i> Project aanpassen
                            </strong>
                        </h4>
                        <hr class="style-one"/>
                        <div class="col-sm-5 custom-buttons">
                            <a href="../portfolioOverzicht">
                                <button class="btn btn-md btn-primary btn-block btn-custom">
                                    <i class="fa fa-arrow-left"></i> Terug
                                </button>
                            </a>
                        </div>
                        <div class="clearfix"></div>
                        <div class="content">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-sm-6 col-sm-offset-3">
                                        <form class="form-custom float-left" action="" method="POST">
                                            <?php if ( $dataProvider->hasFeedback() ) : ?>
                                                <div class="alert alert-<?= $dataProvider->get( 'feedback-type' ) ?>">
                                                    <span><?= $dataProvider->get( 'feedback' ) ?></span>
                                                </div>
                                            <?php endif; ?>
                                                <div class="form-group">
                                                <label class="form-label col-lg-3" for="inputEmail">Projectnaam:</label>
                                                <input type="text"
                                                       name="name"
                                                       class="form-control"
                                                       id="projectnaam"
                                                       value="<?= $dataProvider->call('project-data','getName') ?>"
                                                       required>
                                            </div>
                                            
                                            
                                            <div class="form-group">
                                                <label class="form-label col-lg-3" for="inputEmail">Beschrijving:</label>
                                                <textarea 
                                                       name="description"
                                                       class="form-control"
                                                       id="description"                                                  
                                                       required><?= $dataProvider->call('project-data','getDescription') ?></textarea>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="form-label col-lg-3" for="inputEmail">Link:</label>
                                                <input type="text"
                                                       name="link"
                                                       class="form-control"
                                                       id="link"
                                                       value="<?= $dataProvider->call('project-data','getLink') ?>"
                                                       required>
                                            </div>


                                            <div class="row">
                                                <div class="col-lg-6 clearfix"><br/></div>
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-custom">Opslaan</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php' ?>

</body>

<?php include 'scripts.php' ?>

</html>