<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
  <style>
    body {
    font-family: Arial, sans-serif;
    padding: 20px;
    background-color: pink;
}
h2 {
    color:rgb(255, 0, 170);
    
}
table {
    width: 100%;
    border-collapse: collapse;
    background-color: rgb(255, 255, 255);
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
}
th, td {
    padding: 10px;
    text-align: left;
    border-bottom: 1px solid #ccc;
}
th {
    background-color:rgb(255, 12, 141);
}
tr:hover {
    background-color: #776666;
}
.container {
    max-width: 800px;
    margin: auto;
    background-color: #ffffff;
    padding: 20px;
}
  </style>

</head>
<body>
    <div class="container">
        <h2>Daftar Mahasiswa</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Tanggal Lahir</th>
                    <th>Jurusan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->birthdate }}</td>
                        <td>{{ $student->major }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>