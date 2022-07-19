<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Pemesanan</legend>
        @if ($a == 'Mie Goreng')
                Makanan = {{$a}} <br>
                Harga = 5000
        @elseif ($a == 'Seblak')
                Makanan = {{$a}} <br>
                Harga = 7500
        @elseif ($a == 'Nasi Padang')
                 Makanan = {{$a}} <br>
                 Harga = 15000
        @endif
<br>
        @if ($b == 'Teh')
                Minuman = {{$b}} <br>
                Harga = 5000
        @elseif ($b == 'Kopi')
                Minuman = {{$b}} <br>
                Harga = 7500
        @elseif ($b == 'Jus')
                 Minuman = {{$b}} <br>
                 Harga = 10000
        @endif
<br>


        @if ($c == 'Kecil')
                porsi = {{$c}} <br>
                Harga = 2500
        @elseif ($c == 'Sedang')
                porsi = {{$c}} <br>
                Harga = 5000
        @elseif ($c == 'Besar')
                 porsi = {{$c}} <br>
                 Harga = 10000
        @endif


    </fieldset>
</body>
</html>
