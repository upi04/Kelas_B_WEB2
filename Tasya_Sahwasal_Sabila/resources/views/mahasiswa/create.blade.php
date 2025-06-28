<!DOCTYPE html>
<html>
<head>
    <title>Tambah Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fce4ec; /* pink muda */
            padding: 30px;
        }
        h1 {
            color: #388e3c; /* hijau tua */
        }
        form {
            background-color: #e8f5e9; /* hijau muda */
            padding: 20px;
            border-radius: 10px;
            max-width: 400px;
        }
        label {
            font-weight: bold;
            display: block;
            margin-top: 10px;
        }
        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        button {
            background-color: #388e3c;
            color: white;
            padding: 10px 20px;
            margin-top: 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #2e7d32;
        }
    </style>
</head>
<body>
    <h1>Tambah Mahasiswa</h1>

    <form action="/mahasiswa" method="POST">
        @csrf
        <label>Nama:</label>
        <input type="text" name="nama" required>

        <label>NIM:</label>
        <input type="text" name="nim" required>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>
