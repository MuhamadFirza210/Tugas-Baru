<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
            <fieldset>
                <legend>
                    Berat Badan
                </legend>
                <legend>
                    Berat Badan : {{ $berat }}<br>
            Tinggi Badan : {{ $tinggi }}<br>
            @if ($bmi<=17.0)
                Hasil BMI : {{ $bmi }} <br>
                Status Kesehatan = Kurus,Kekurangan berat badan berat
            @elseif ($bmi >17.0 && $bmi<=18.4)
                Hasil BMI : {{ $bmi }} <br>
                Status Kesehatan = Kurus,Kekurangan berat badang  ringan
            @elseif ($bmi >= 18.5 && $bmi <= 25.0)
                Hasil BMI : {{ $bmi }} <br>
                Status Kesehatan = Normal
            @elseif ($bmi >= 25.1 && $bmi <= 27.0)
                Hasil BMI : {{ $bmi }} <br>
                Status Kesehatan = Gemuk kelebihan berat badan tingkat ringan
            @elseif ($bmi >= 27.1)
                Hasil BMI : {{ $bmi }} <br>
                Status Kesehatan = gemuk kelebihan berat badan tingkat berat
            @else
            @endif
                </legend>
            </fieldset>
</body>
</html>
