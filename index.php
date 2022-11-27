

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<div class="container">

    <form action="./secondo.php" method="POST">

        <div class="row row-cols-1 justify-content-center align-items-center">
            <div class="col d-flex justify-content-center"><input type="text" name="bannedWord"></div>
            <div class="col d-flex justify-content-center"><textarea name="txt" id="" cols="30" rows="10"></textarea></div>
            <div class="col d-flex justify-content-center"><button type="submit">Vai</button></div>
        </div>

    </form>

</div>
</body>
</html>