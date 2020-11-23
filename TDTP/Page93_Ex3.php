<?php
function get_header(){
    ?>
    <header>
        <div class="jumbotron py-3 mb-0 border-bottom rounded-0 row mr-auto pr-2">
            <h1 class="mb-0 ml-3">test</h1>
        </div>
    </header>
    <?php
}
function get_footer(){
    ?>
    <footer>
        <div class="jumbotron py-3 mb-0 border-top rounded-0 row mr-auto fixed-bottom">
            <div class="col text-center">
                <label>©Rlvx - 2020</label>
            </div>
            <div class="col text-center">
                <label>romain.leveaux@orange.com</label>
            </div>
            <div class="col text-center">
                <label>2019-2021</label>
            </div>
        </div>
    </footer>
<?php
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>test</title>
    <link rel="stylesheet" href="../bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<body>

<?php get_header(); ?>
<?php get_footer(); ?>

</body>
</html>
