<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dosen</title>
</head>
<body>
        <fieldset>
            <legend>Data</legend>

            @foreach ($dosen as $data)
            Nama Dosen :  {{ $data['nama_dosen'] }}<br>
            Nomor induk dosen :  {{ $data['no_induk_dosen'] }}<br>
            Mahasiswa : <br>
            @foreach ($data['nama_siswa'] as $mahasiswa)<br>
            Nama Mahasiswa :  {{ $mahasiswa['Nama_Siswa'] }}<br>
            Nomor induk pokok :  {{ $mahasiswa['Nip'] }}<br>
            jurusan : {{ $mahasiswa['jurusan'] }}<br>
            Mata Kuliah :<br>
            @foreach ($mahasiswa['matkul'] as $mk)<br>
            <li>{{ $mk }}</li><br>

            @endforeach
            @endforeach



            @endforeach
        </fieldset>
</body>
</html>
