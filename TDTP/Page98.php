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
<div class="card border-secondary my-3 mx-auto p-3" style="max-width: 40rem;">
    <form action="Page98_traitement.php" method="post">
        <label>Prénom </label>
        <input type="text" name="prenom"><br>
        <label>Nom </label>
        <input type="text" name="nom"><br>
        <label>Age </label>
        <input type="number" name="age"><br>
        <label>Genre</label><br>
        <input type="radio" name="genre" value="homme"><label>Homme</label><br>
        <input type="radio" name="genre" value="femme"><label>Femme</label><br>
        <button type="submit" name="submit">Valider</button><br>
    </form>
</div>
</body>
</html>