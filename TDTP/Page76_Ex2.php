<?php
$tab1 = ['val1' => 'valeur 1','val2' => 'valeur 2','val3' => 'valeur 3','val4' => 'valeur 4'];

if(isset($_POST['recherche'])){
    $nb = $_POST['nb'];
    $key = array_search($nb,$tab1);
    if($key===false){
        ?>
        <script>alert("Nop !!")</script>
        <?php
    }else{
        ?>
            <input type="hidden" id="key" value="<?php echo $key?>">
            <script>alert("La valeur est bien dans la tableau !! Sa clé est : "+document.getElementById('key').value)</script>
        <?php
    }
}

?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>ExosPHP</title>
        <link rel="stylesheet" href="../bootstrap.min.css">
        <link rel="stylesheet" href="../bootstrap.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </head>
    <body>

    <div class="card border-secondary my-3 mx-auto" style="max-width: 20rem;">
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col" class="text-center">Numero</th>
                <th scope="col" class="text-center">valeur</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach($tab1 as $key => $value)
            {
                ?>
                <tr class="table-active">
                    <td class="text-center"><?php echo $key?></td>
                    <td class="text-center"><?php echo $value ?></td>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
        <div class="px-3">
            <form action="Page76_Ex2.php" method="post">
                <div class="form-group">
                    <input type="text" class="form-control mb-2" name="nb">
                    <button type="submit" class="btn btn-primary" name="recherche">Rechercher</button>
                </div>
            </form>
        </div>
    </div>
    </body>
    </html>
<?php
