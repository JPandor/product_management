<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="../../public/css/styles.css" rel="stylesheet" type="text/css">
    <title>Add Product</title>
</head>

<body>
    <div id="app" class="content_wrapper">
        <header class="navbar m-3 bg-dark">
            <h1 class="text-light m-2">Add Product</h1>
            <div class="m-2">
                <a href="http://localhost/repos/products/public/"><button type="button" class="btn btn-secondary">Cancel</button></a>
                <button type="submit" class="btn btn-primary mx-2" name="submit" form="product_form" @click="getUrl()">Save</button>
            </div>
        </header>
        <main>
            <form id="product_form" method="post" :action="url">
                <div class="mb-3">
                    <label for="sku" class="form-label">SKU</label>
                    <input type="text" class="form-control" id="sku" name="sku" required>
                    <div class="form-text text-secondary">Please make sure SKU is unique.</div>
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" class="form-control" id="price" name="price" required>
                    <div class="form-text">Price in dollars</div>
                </div>
                <select class="form-select mb-3" id="productType" name="productType" v-model="productType">
                    <option selected disabled value="">Please select a product type</option>
                    <option value="DVD" id="dvd">DVD</option>
                    <option value="Book" id="book">Book</option>
                    <option value="Furniture" id="furniture">Furniture</option>
                </select>
                <div v-if="productType == 'DVD'">
                    <label for="size" class="form-label">Size (MB)</label>
                    <input type="number" class="form-control" id="size" name="size" required>
                    <div class="form-text fw-semibold mb-2">Please provide size of product.</div>
                </div>
                <div v-if="productType == 'Book'">
                    <label for="weight" class="form-label">Weight (KG)</label>
                    <input type="number" class="form-control" id="weight" name="weight" required>
                    <div class="form-text fw-semibold mb-2">Please provide weight of product.</div>
                </div>
                <div v-if="productType == 'Furniture'">
                    <label for="height" class="form-label">Height (CM)</label>
                    <input type="number" class="form-control" id="height" name="height" required>
                    <label for="width" class="form-label">Width (CM)</label>
                    <input type="number" class="form-control" id="width" name="width" required>
                    <label for="length" class="form-label">Length (CM)</label>
                    <input type="number" class="form-control" id="length" name="length" required>
                    <div class="form-text fw-semibold mb-2">Please provide dimensions of product.</div>
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
    <script src="../../public/js/script.js"></script>
</body>

</html>