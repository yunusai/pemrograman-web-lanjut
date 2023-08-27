<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penghitung Lingkaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid bg-success">
        <header class="d-flex justify-content-center py-3">
            <ul class="nav nav-pills">
                <li class="nav-item mx-2 "><a href="/" class="nav-link active">Persegi Panjang</a></li>
                <li class="nav-item mx-2 "><a href="/lingkaran" class="nav-link active">Lingkaran</a></li>
            </ul>
        </header>
    </div>
    <div class="container my-4">
        <div class="row align-items-center">
            <div class="col">
                <div class="card w-80 h-100">
                    <div class="card-header text-center">
                        Penghitung Lingkaran
                    </div>
                    <div class="card-body">
                        <form action="/calculateLingkaran" method="post">
                            <label for="rusuk" class="form-label my-3">Rusuk</label>
                            <input class="form-control" type="number" name="rusuk" placeholder="Isi rusuk...">
                            <button type="submit" class="btn btn-primary my-3">Hitung</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container text-center" style="font-size: 75px;">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <?php
                        if (!isset($luas)) {
                            echo "Masukkan Rusuk";
                        ?>
                        <?php
                        } else {
                            echo "Luas = " . $luas;
                            echo "<br>";
                            echo "Keliling = " . $keliling;
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>