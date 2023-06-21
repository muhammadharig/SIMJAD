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
    <th>Nip</th>
    <th>No. Telpon</th>
    <th>Gender</th>
  </tr>
  @foreach ($dataDosen as $dosen)
  <tr>
    <td>{{ $loop->iteration }}</td>
    <td>{{ $dosen->user->name }}</td>
    <td>{{ $dosen->nip }}</td>
    <td>{{ $dosen->no_telpon }}</td>
    <td>{{ $dosen->gender }}</td>
  </tr>
  @endforeach
</table>

</body>
</html>

