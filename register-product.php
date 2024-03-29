<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="css/form.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" href="img/icone-serenatto.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700&display=swap" rel="stylesheet">
    <title>Serenatto - Register Products</title>
</head>

<body>
    <main>
        <section class="container-admin-banner">
            <img src="img/logo-serenatto-horizontal.png" class="logo-admin" alt="logo-serenatto">
            <h1>Register Products</h1>
            <img class="ornaments" src="img/ornaments-coffee.png" alt="ornaments">
        </section>
        <section class="container-form">
            <form action="src/Controllers/register-products.php" method="post">

                <label for="nome">Name</label>
                <input type="text" id="nome" name="name" placeholder="Insert the products name" required>
                <div class="container-radio">
                    <div>
                        <label for="cafe">Coffee</label>
                        <input type="radio" id="coffee" name="type" value="Coffee" checked>
                    </div>
                    <div>
                        <label for="almoco">Luch</label>
                        <input type="radio" id="lunch" name="type" value="Lunch">
                    </div>
                </div>
                <label for="descricao">Description</label>
                <input type="text" id="description" name="description" placeholder="insert the Description" required>

                <label for="preco">Price</label>
                <input type="text" id="preco" name="price" placeholder="Insert the price of the product" required>

                <label for="imagem">Update a image of the product</label>
                <input type="file" name="imagem" accept="image/*" id="imagem" placeholder="Upload a photo">

                <input type="submit" class="botao-cadastrar" value="Register" />
            </form>
        </section>
    </main>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js" integrity="sha512-Rdk63VC+1UYzGSgd3u2iadi0joUrcwX0IWp2rTh6KXFoAmgOjRS99Vynz1lJPT8dLjvo6JZOqpAHJyfCEZ5KoA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="js/index.js"></script>
</body>

</html>