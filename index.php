<?php require('partials/top.html.php');
?>

<h1 class="text-2xl text-center">
    Welcome back
    <?= $_SESSION['user']['firstname'] ?>
</h1>
<?php require('partials/bottom.html.php') ?>