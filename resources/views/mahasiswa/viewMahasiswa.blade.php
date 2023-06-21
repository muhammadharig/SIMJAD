<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>HTML Table</h2>

<table>
  <tr>
    <th>No.</th>
    <th>Nama Lengkap</th>
    <th>Nim</th>
    <th>Prodi</th>
    <th>Angkatan</th>
    <th>Gender</th>
  </tr>
  @foreach ($dataMahasiswa as $mhs)
  <tr>
    <td>{{ $loop->iteration }}</td>
    <td>{{ $mhs->user->name }}</td>
    <td>{{ $mhs->nim }}</td>
    <td>{{ $mhs->prodi }}</td>
    <td>{{ $mhs->angkatan }}</td>
    <td>{{ $mhs->gender }}</td>
  </tr>
  @endforeach
</table>

</body>
</html>

