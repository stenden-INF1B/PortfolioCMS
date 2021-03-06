<!doctype html>
<?php
$page_title = "Docent aanpassen | Admin";
$pageName = "users";
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
                                <i class="fa fa-pencil-square-o"></i><?= $dataProvider->isAdmin() ? ' Docent aanpassen' : ' Account aanpassen' ?>
                            </strong>
                        </h4>
                        <hr class="style-one"/>
                        <div class="col-sm-5 custom-buttons">
                            <?php if ( $dataProvider->isAdmin() ): ?>
                                <a onClick="history.go(-1);">
                                    <button class="btn btn-md btn-primary btn-block btn-custom">
                                        <i class="fa fa-arrow-left"></i> Terug
                                    </button>
                                </a>
                            <?php endif; ?>
                        </div>
                        <div class="clearfix"></div>
                        <div class="content">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-sm-6 col-sm-offset-3">
                                        <form class="form-custom float-left" action=""  method="POST">
                                            <?php if ( $dataProvider->hasFeedback() ) : ?>
                                                <div class="alert alert-<?= $dataProvider->get( 'feedback-type' ) ?>">
                                                    <span><?= $dataProvider->get( 'feedback' ) ?></span>
                                                </div>
                                            <?php endif; ?>
                                            <div class="form-group">
                                                <label class="form-label" for="inputEmail">Email</label>
                                                <input type="email" name="email" class="form-control" id="inputEmail"
                                                       value="<?= $dataProvider->call( 'teacher-data', 'getEmail' ) ?>"
                                                       placeholder="Email">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="inputPassword">Wachtwoord</label>
                                                <input type="password" name="password" class="form-control"
                                                       id="inputWachtwoord"
                                                       placeholder="Wachtwoord">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="inputPassword">Voornaam</label>
                                                <input type="text" name="firstName" class="form-control"
                                                       value="<?= $dataProvider->call( 'teacher-data', 'getFirstName' ) ?>"
                                                       id="inputFirstName"
                                                       placeholder="Voornaam">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="inputPassword">Achternaam</label>
                                                <input type="text" name="lastName" class="form-control"
                                                       value="<?= $dataProvider->call( 'teacher-data', 'getLastName' ) ?>"
                                                       id="inputLastName"
                                                       placeholder="Achternaam">
                                            </div>

                                            <?php if ( $dataProvider->isAdmin() ): ?>

                                                <div class="row radio-buttons-custom">
                                                    <div class="col-lg-12">
                                                        <p class="centertext">Admin</p><br/>
                                                        <label>
                                                            <input type="radio" name="isAdmin" value="1"
                                                                   class="radio-custom" <?= $dataProvider->call( 'teacher-data', 'getIsAdmin' ) ? 'checked' : '' ?>>
                                                            <span class="isSelected"> Ja </span>
                                                            </input>
                                                        </label>
                                                        <label>
                                                            <input type="radio" name="isAdmin" value="0"
                                                                   class="radio-custom"
                                                                   id="isAdmin"
                                                                <?= $dataProvider->call( 'teacher-data', 'getIsAdmin' ) ? '' : 'checked' ?>>
                                                            <span class="isSelected"> Nee</span>
                                                            </input>
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="clearfix"></div>
                                                <hr/>

                                                <div class="row radio-buttons-custom">
                                                    <div class="col-lg-12">
                                                        <p class="centertext">Actief</p><br/>
                                                        <label>
                                                            <input type="radio" name="active" value="1"
                                                                   class="radio-custom" <?= $dataProvider->call( 'teacher-data', 'getIsActive' ) ? 'checked' : '' ?>>
                                                            <span class="isSelected"> Ja</span>
                                                            </input>
                                                        </label>
                                                        <label>
                                                            <input type="radio" name="active" value="0"
                                                                   class="radio-custom"
                                                                   id="active"
                                                                <?= $dataProvider->call( 'teacher-data', 'getIsActive' ) ? '' : 'checked' ?>>
                                                            <span class="isSelected">
                                                                Nee</span>
                                                            </input>
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="clearfix"></div>
                                                <hr/>

                                                <div class="row radio-buttons-custom">
                                                    <div class="col-lg-12">
                                                        <p class="centertext">Slb docent</p><br/>
                                                        <label>
                                                            <input type="radio" name="isSLBer" value="1"
                                                                   class="radio-custom" <?= $dataProvider->call( 'teacher-data', 'getIsSLBer' ) ? 'checked' : '' ?>>
                                                            <span class="isSelected"> Ja </span>
                                                            </input>
                                                        </label>
                                                        <label>
                                                            <input type="radio" name="isSLBer" value="0"
                                                                   class="radio-custom"
                                                                   id="isSLBer"
                                                                <?= $dataProvider->call( 'teacher-data', 'getIsSLBer' ) ? '' : 'checked' ?>>
                                                            <span class="isSelected"> Nee</span>
                                                            </input>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <hr/>
                                                <!-- Hack because there is an bug in the js lib that creates the ratio -->
                                                <div class="row radio-buttons-custom" hidden>
                                                    <div class="col-lg-12">
                                                        <p class="centertext">Hidden</p><br/>
                                                        <label>
                                                            <input type="radio" name="" value="1"
                                                                   class="radio-custom">
                                                            <span class="isSelected"> Ja </span>
                                                            </input>
                                                        </label>
                                                        <label>
                                                            <input type="radio" name="" value="0"
                                                                   class="radio-custom"
                                                                   id="hidden"
                                                            >
                                                            <span class="isSelected"> Nee</span>
                                                            </input>
                                                        </label>
                                                    </div>
                                                </div>
                                            <?php endif; ?>

                                            <div class="row">
                                                <div class="col-lg-6 clearfix"><br/><br></div>
                                            </div>
                                            <hr>

                                            <button type="submit" name="submit" class="btn btn-primary btn-custom">
                                                Aanpassen
                                            </button>
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