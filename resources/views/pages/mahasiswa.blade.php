<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dosen</title>
</head>
<body>

    <fieldset>
        <legend>Data Dosen</legend>

            <br>

            @foreach($mahasiswa as $pengajar)
            Nama : {{ $pengajar['name'] }} <br>
            Mata Kuliah : {{ $pengajar['mata'] }} <br>
            <?php $nilai_b = 0?>

            <br>

            <?php $nilai_b = 0 ?>
            @foreach($pengajar['mahasiswa'] as $mahasiswa)
                <li>Nama Mahasiswa : {{ $mahasiswa['nama'] }}</li>
                Nilai : {{ $mahasiswa['nilai'] }} <br>
            <?php $nilai_b += $mahasiswa['nilai'] ?>

            @endforeach

            <br>

            Nilai Rata-Rata = {{ $nilai_b / count($pengajar['mahasiswa'])}} <br>

            @endforeach

    </fieldset>

</body>
</html>
