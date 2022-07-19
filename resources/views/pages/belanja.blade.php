<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belanja</title>
</head>
<body>
    <fieldset>
        <legend>
            LIST
        </legend>

        @foreach ($belanja as $data)
        @php
        $total = 0;
        @endphp
        Nama :{{$data['nama']}}<br>
        Jenis Barang :
        @foreach($data['membeli'] as $belikan)
        <li>
            Membeli :{{$belikan['beli']}}<br>
            Harga : Rp.{{$belikan['harga']}}<br>
        </li>
        <hr>

        @php $total += $belikan['harga'] @endphp

        @endforeach

        @if($total < 500000)
        @php
        $cashback = (5/100) * $total @endphp
        @elseif ($total >=500000)
        @php
        $cashback = (10/100) * $total @endphp
        @endif
        <b>Total Belanja Setelah Dapat Cashback {{$data['nama']}} : {{$total - $cashback}}</b>
            <hr>
            @endforeach
    </fieldset>
</body>
</html>
