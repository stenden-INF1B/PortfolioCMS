<?php
$page_title = "Taal toevoegen | Admin";
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
                                <i class="fa fa-pencil-square-o"></i> Taal Toevoegen
                            </strong>
                        </h4>
                        <hr class="style-one"/>
                        <div class="col-sm-5 custom-buttons">
                            <a onClick="history.go(-1);">
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
                                                <label class="form-label col-lg-3" for="language">Taal:</label>
                                                <input type="text"
                                                       name="language"
                                                       class="form-control"
                                                       id="language"
                                                       placeholder="Taal"
                                                       required>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="form-label col-lg-3" for="level">Level(1-10)</label>
                                                <input type="number"
                                                       name="level"
                                                       class="form-control"
                                                       id="level"
                                                       placeholder="Level"
                                                       min="0"
                                                       max="10"
                                                       title="De waarde moet tussen de 0 en 10 zijn"
                                                       required>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="form-label col-lg-3" for="isNative">Is het de moedertaal?</label>
                                                <select required  class="form-control" name="isNative" id="isNative">
                                                    <option value="TRUE">Ja</option>
                                                    <option value="FALSE">Nee</option>
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