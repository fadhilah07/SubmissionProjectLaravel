<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Daftar Jurusan</h1>
<table border="1" cellpadding="6">
<tr><th>Kode</th><th>Nama Jurusan</th><th>Dibuat</th><th>Detail</th></tr>
<tr>
    <td>{{ $jurusan->kode }}</td>
    <td>{{ $jurusan->nama }}</td>
    <td>{{ $jurusan->created_at->format('d-m-Y H:i') }}</td>
    <td>
        <a href="{{ url('/jurusan/' . $jurusan->id) }}">Detail</a>
    </td>
</tr>
</table>
</body>

</html>