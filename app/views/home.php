<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link href="../../public/css/styles.css" rel="stylesheet" type="text/css">
    <title>Products List</title>
</head>

<body>
    <div class="content_wrapper" id="app">
        <header class="navbar m-3 bg-dark">
            <h1 class="text-light m-2">Products List</h1>
            <div class="m-2">
                <a href="http://localhost/repos/products/public/home/additem">
                    <button class="btn btn-primary" type="button">ADD</button>
                </a>
                <button type="submit" class="btn btn-danger mx-2" form="delete_form">MASS DELETE</button>
            </div>
        </header>
        <main>
            <form id="delete_form" action="http://localhost/repos/products/public/productscontr/delete" method="post">
                <div class="d-flex mx-3 flex-wrap">
                <?php
                    foreach ($data as $value){
                ?>
                    <div class="card m-3" style="width: 16rem;">
                        <div class="card-body">
                            <input type="checkbox" class="form-check-input delete-checkbox" value="<?=$value['sku']?>" name="delete[]">
                            <h5 class="card-title text-center"><?=$value['sku']?></h5>
                            <p class="card-text text-center"><?=$value['name']?></p>
                            <p class="card-text text-center"><?=$value['price']?></p>
                            <p class="card-text text-center"><?=$value['type']?></p>
                            <p class="card-text text-center"><?=$value['descType'] . ": " . $value['description']?></p>
                        </div>
                    </div>
                <?php
                    }
                ?>
                </div>
            </form>
        </main>
    </div>
    <footer class="m-3 bg-dark text-center text-light">
        <p class="p-5">Scandiweb Test Assignment</p>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="js/script.js"></script>
</body>

</html>