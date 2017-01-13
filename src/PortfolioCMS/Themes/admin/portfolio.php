<!doctype html>
<?php

$page_title = "Portfolio | Admin ";
$isOnAdminPage = "portfolio";

include 'header.php'; ?>
<body>

<?php include 'navigation.php' ?>

<div class="content">
    <div class="container-fluid">
        <form id="portfolioForm" method="POST" action="">
            <!-- Values still need to be set automatically -->
            Title:<input type="text" name="title" value="#"><br>
            Url:<input type="text" name="url" value="#"><br>

            <select name="theme">
                <option value="theme 1">Theme 1</option>
                <option value="theme 2">Theme 2</option>
                <option value="theme 3">Theme 3</option>
                <option value="theme 4">Theme 4</option>
                <option value="theme 5">Theme 5</option>
            </select><br>
            <input type="submit" value="submit">
        </form>
    </div>
</div>

<?php include 'footer.php' ?>

</body>

<?php include 'scripts.php' ?>

</html>
