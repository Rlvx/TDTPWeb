<?php
$arr_mail = array("35"=>"Rennes","75"=>"Paris","44"=>"Nantes","01"=>"JSP");


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

<div class="card border-secondary my-3 mx-auto" style="max-width: 40rem;">
    <table class="table table-hover">
        <label>Non trié</label>
        <thead>
        <tr>
            <th scope="col" class="text-center">Dep</th>
            <th scope="col" class="text-center">Ville</th>
        </tr>
        </thead>
        <tbody>
        <?php

        foreach($arr_mail as $key => $value)
        {
            ?>
            <tr class="table-active">
                <td class="text-center"><?php echo $key?></td>
                <td class="text-center"><?php echo $value?></td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
    <table class="table table-hover">
        <label>Département croissant</label>
        <thead>
        <tr>
            <th scope="col" class="text-center">Dep</th>
            <th scope="col" class="text-center">Ville</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $arr_mail_sort_k = ksort($arr_mail);
        foreach($arr_mail as $key => $value)
        {
            ?>
            <tr class="table-active">
                <td class="text-center"><?php echo $key?></td>
                <td class="text-center"><?php echo $value?></td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
    <table class="table table-hover">
        <label>A -> Z Villes</label>
        <thead>
        <tr>
            <th scope="col" class="text-center">Dep</th>
            <th scope="col" class="text-center">Ville</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $arr_mail_sort_a = asort($arr_mail);
        foreach($arr_mail as $key => $value)
        {
            ?>
            <tr class="table-active">
                <td class="text-center"><?php echo $key?></td>
                <td class="text-center"><?php echo $value?></td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
    <table class="table table-hover">
        <label>Département décroissant</label>
        <thead>
        <tr>
            <th scope="col" class="text-center">Dep</th>
            <th scope="col" class="text-center">Ville</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $arr_mail_sort_k = krsort($arr_mail);
        foreach($arr_mail as $key => $value)
        {
            ?>
            <tr class="table-active">
                <td class="text-center"><?php echo $key?></td>
                <td class="text-center"><?php echo $value?></td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
    <table class="table table-hover">
        <label>Z -> A Villes </label>
        <thead>
        <tr>
            <th scope="col" class="text-center">Dep</th>
            <th scope="col" class="text-center">Ville</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $arr_mail_sort_a = arsort($arr_mail);
        foreach($arr_mail as $key => $value)
        {
            ?>
            <tr class="table-active">
                <td class="text-center"><?php echo $key?></td>
                <td class="text-center"><?php echo $value?></td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
</div>
</body>
</html>
