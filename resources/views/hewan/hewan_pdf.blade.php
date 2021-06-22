<!DOCTYPE html>
<html>
<head>
    <title>Klinik Hewan</title>
</head>
<body>
    <style type="text/css">
    table tr td,
    table tr th{
        font-size: 9pt;
    }
    </style>
    <center>
        <h5>Laporan Pasien</h4>
    </center>
    <table class='table table-bordered'>
    <thead>
        <tr>
        <th>No</th>
        <th>Nama Hewan</th>
        <th>Nama Pemilik</th>
        <th>Jenis Hewan</th>
        <th>Jenis Kelamin</th>
        <th>Spesies</th>
        </tr>
    </thead>
    <tbody>
        @foreach($hewan as $a)
            <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $a->nama_hewan }}</td>
            <td>{{ $a->pemilik->nama_pemilik }}</td>
            <td>{{ $a->jenishewan->jenis_hewan }}</td>
            <td>{{ $a->jenis_kelamin }}</td>
            <td>{{ $a->spesies }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>
