<!doctype html>
<?php
$page_title = "Portfolio | Admin";
$isOnAdminPage = "portfolio";
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
                                <i class="fa fa-pencil-square-o"></i> Opleiding Toevoegen
                            </strong>
                        </h4>
                        <hr class="style-one"/>
                        <div class="col-sm-5 custom-buttons">
                            <a href="portfolioOverzicht">
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
                                                <label class="form-label col-lg-3" for="inputEmail">Titel:</label>
                                                <input type="text"
                                                       name="title"
                                                       class="form-control"
                                                       id="titel"
                                                       placeholder="Titel"
                                                       required>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label col-lg-3" for="inputEmail">Instituut:</label>
                                                <input type="text"
                                                       name="institution"
                                                       class="form-control"
                                                       id="institution"
                                                       placeholder="Instituut"
                                                       required>
                                            </div>
                                            
                                             <div class="form-group">
                                                <label class="form-label col-lg-3" for="inputEmail">Locatie:</label>
                                                <input type="text"
                                                       name="location"
                                                       class="form-control"
                                                       id="location"
                                                       placeholder="Locatie"
                                                       required>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="form-label col-lg-3" for="inputEmail">Startdatum:</label>
                                                <input type="text"
                                                       name="startedAt"
                                                       class="form-control"
                                                       id="startdatum"
                                                       placeholder="YYYY-MM-DD"
                                                       >
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="form-label col-lg-3" for="inputEmail">Einddatum:</label>
                                                <input type="text"
                                                       name="finishedAt"
                                                       class="form-control"
                                                       id="startdatum"
                                                       placeholder="YYYY-MM-DD"
                                                       >
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="form-label col-lg-3" for="inputEmail">Beschrijving:</label>
                                                <textarea 
                                                       rows="5"
                                                       name="description"
                                                       class="form-control"
                                                       id="description"
                                                       placeholder="Beschrijving"
                                                       required></textarea>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="form-label col-lg-3" for="inputEmail">Is de opleiding gehaald?</label>
                                                <select required  class="form-control" name="obtainedCertificate">
                                                    <option value="">-</option>
                                                    <option value="werk">Ja</option>
                                                    <option value="stage">Nee</option>
                                                </select>
                                               
                                             
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="form-label col-lg-3" for="inputEmail">Is het de huidige opleiding?</label>
                                                <select required  class="form-control" name="currentTraining">
                                                    <option value="">-</option>
                                                    <option value="werk">Ja</option>
                                                    <option value="stage">Nee</option>
                                                </select>
                                               
                                             
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