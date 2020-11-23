<?php
$tab1 = range(0,63) ;
$tab2 = array();
$tab3 = array();

foreach($tab1 as $key => $value)
{
    array_push($tab2,($value/10));
}
foreach($tab2 as $key => $value)
{
    $tab3[(string) $value]=sin($value);
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

    <div class="card border-secondary my-3 mx-auto" style="max-width: 60rem;">
        <div class="row">
            <div class="col">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col" class="text-center">Key</th>
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
            </div>
            <div class="col">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col" class="text-center">Key</th>
                        <th scope="col" class="text-center">valeur</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach($tab2 as $key => $value)
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
            </div>
            <div class="col">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col" class="text-center">Key</th>
                        <th scope="col" class="text-center">valeur</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach($tab3 as $key => $value)
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
            </div>
        </div>
    </div>
    </body>
    </html>
<?php
