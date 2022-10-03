<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tugas 5 PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</head>

<body>
    <?php
    require_once "PersegiPanjang.php";
    require_once "Lingkaran.php";
    require_once "Segitiga.php";

    $thead = ["No", "Nama Bidang", "Keterangan", "Luas Bidang", "Keliling Bidang"];
    ?>
    <div class="container">
        <h2 class="text-center mt-5 mb-5">Bentuk 2 Dimensi</h2>
        <table class="table table-bordered table-striped table-dark">
            <thead>
                <tr>
                    <?php
                    foreach ($thead as $judul) { ?>
                        <th><?= $judul ?></th>
                    <?php } ?>
                </tr>
            </thead>
            <tbody>
                <?php
                $pp = new PersegiPanjang(10, 5);
                $lk = new Lingkaran(14);
                $sg = new Segitiga(12, 24);

                $bentuk = [$pp, $lk, $sg];
                $no = 1;
                foreach ($bentuk as $bt) { 
                    $namaBidang = $bt->namaBidang();
                    $keterangan = $bt->keterangan();
                    $luasBidang = $bt->luasBidang();
                    $kelilingBidang = $bt->kelilingBidang();
                    ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $namaBidang ?></td>
                        <td><?= $keterangan ?></td>
                        <td><?= $luasBidang ?></td>
                        <td><?= $kelilingBidang ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

</body>

</html>