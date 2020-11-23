<?php
$arr_mail = array('TeddyTed666@yopmail.com','DenisBouin@orange.com','WilliamBlot@gmail.com','MathisLeGendre@hotmail.com','Rom@yopmail.com','WilliamBlot@gmail.com','WilliamBlot@gmail.com','WilliamBlot@gmail.com');
$arr_mail_sans_doublon = array();
foreach ($arr_mail as $value){
    $val = explode('@',$value);
    $key = array_search($val[1],$arr_mail_sans_doublon);
   if (isset($arr_mail_sans_doublon[$val[1]])){
       $arr_mail_sans_doublon[$val[1]]++;
   }else{
       $push = array($val[1] => "1");
       $arr_mail_sans_doublon = array_merge($arr_mail_sans_doublon,$push);
   }
}
foreach ($arr_mail_sans_doublon as $key => $value){
    $arr_mail_sans_doublon[$key] = $value*(100/sizeof($arr_mail)).' %' ;
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

<div class="card border-secondary my-3 mx-auto" style="max-width: 40rem;">
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col" class="text-center">Key</th>
            <th scope="col" class="text-center">Mail</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach($arr_mail as $key => $value)
        {
            ?>
            <tr class="table-active">
                <td class="text-center"><?php echo $key?></td>
                <td class="text-center"><?php echo strtolower($value)?></td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col" class="text-center">Mail</th>
            <th scope="col" class="text-center">%</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach($arr_mail_sans_doublon as $key => $value)
        {
            ?>
            <tr class="table-active">
                <td class="text-center"><?php echo $key?></td>
                <td class="text-center"><?php echo strtolower($value)?></td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
</div>
</body>
</html>
