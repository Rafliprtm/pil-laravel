<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar bg-body-tertiary fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">UTS LARAVEL</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">UTS Laravel</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/product">Product</a>
                        </li>
                    </ul>
                    <form class="d-flex mt-3" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>
    <title>Tambah Mahasiswa</title>
    <style>
        /* Add some basic styling to make it look similar to the context */
        body {
            font-family: Arial, sans-serif;
        }

        .form-container {
            width: 40%;
            margin: 40px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-label {
            display: block;
            margin-bottom: 10px;
        }

        .form-input {
            width: 40%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
        }

        .form-button {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .form-button:hover {
            background-color: #3e8e41;
        }
    </style>
    </head>

    <body>
        <div class="form-container">
            <h2>Halaman Tambah Produk</h2>
            <form action="/product" method="POST">
                @csrf
                <label class="form-label" for="">Kode Produk</label>
                <input class="form-input" type="varchar" placeholder="masukkan kode produk">

                <label class="form-label" for="">Nama Produk</label>
                <input class="form-input" type="text" placeholder="masukkan nama produk">

                <label class="form-label" for="">Jenis Produk</label>
                <input class="form-input" type="text" placeholder="masukkan jenis produk">

                <label class="form-label" for="">Harga</label>
                <input type="int" placeholder="masukkan harga produk">

                <div class="col-sm-4">
                    <div class="row mt-4">
                        <div class="col sm-6">
                            <button class="btn btn-primary" type="submit">Simpan</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row mt-4">
                        <div class="col sm-6">
                            <a href="/product" class="btn btn-secondary" type="submit">Kembali</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </body>

    {{-- ROW  = BARIS
         COLL = COLOM
         untuk penuh satu halaman itu membutuhkan col dengan jumlah 12
    --}}
    {{-- <div class="row">
            <div class="col-3" style="background-color:darkcyan">Kode Produk</div>
            <div class="col-3" style="background-color:darkcyan">Nama Produk</div>
            <div class="col-3" style="background-color:darkcyan">Jenis Produk</div>
            <div class="col-3" style="background-color:darkcyan">Harga</div>
        </div> --}}



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>