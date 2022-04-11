<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Given Store</title>
  </head>
  <body>
    @include('partials.navbar')
    <div class="container">
        <h1 class="text-center">{{ $page_name }}</h1>
        <ul>
            <li>
                <h3>
                    {{-- view list_category --}}
                    <a href="report/listcategory">Category Product</a>
                </h3>
            </li>
            <li>
                <h3>
                    {{-- view list_product --}}
                    <a href="report/listproduct">Product List</a>
                </h3>
            </li>
            <li>
                <h3>
                    {{-- view list_product_category --}}
                    <a href="report/listproductandcategory">Product Name, Form And Category</a>
                </h3>
            </li>
            <li>
                <h3>
                    {{-- view perhitungan --}}
                    <a href="report/countcategorywithproduct">Count Category With Product</a>
                </h3>
            </li>
            <li>
                <h3>
                    {{-- view list_category --}}
                    <a href="report/listcategorynoproduct">Category No Product</a>
                </h3>
            </li>
            <li>
                <h3>
                    {{-- view list_avgprice_category --}}
                    <a href="report/averagepricecategory">Average Price Product Category</a>
                </h3>
            </li>
            <li>
                <h3>
                    {{-- view list_category --}}
                    <a href="report/categoryoneproduct">Category One Product</a>
                </h3>
            </li>
            <li>
                <h3>
                    {{-- view list_product_category --}}
                    <a href="report/productoneform">Product One Formula</a>
                </h3>
            </li>
            <li>
                <h3>
                    {{-- view list_product--}}
                    <a href="report/highproductprice">High Product Price</a>
                </h3>
            </li>
        </ul>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>