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
    <th>Username</th>
    <th>Email</th>
    <th>Password</th>
  </tr>
  @foreach ($dataUsers as $user)
  <tr>
    <td>{{ $loop->iteration }}</td>
    <td>{{ $user->name }}</td>
    <td>{{ $user->username }}</td>
    <td>{{ $user->email }}</td>
    <td>{{ $user->password }}</td>
  </tr>
  @endforeach
</table>

</body>
</html>

