<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
    <style>
        /* Font Imports */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');
        
        /* Global Styles */
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f5f7fa;
            margin: 0;
            padding: 20px;
            color: #333;
        }
        
        h1 {
            color: #2c3e50;
            text-align: center;
            margin-bottom: 30px;
            font-weight: 600;
        }
        
        /* Link Styles */
        a {
            text-decoration: none;
            color: #3498db;
            transition: all 0.3s ease;
            font-weight: 500;
        }
        
        a:hover {
            color: #2980b9;
            text-decoration: underline;
        }
        
        /* Button Styles */
        button {
            background-color: #e74c3c;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 4px;
            cursor: pointer;
            font-family: 'Poppins', sans-serif;
            transition: all 0.3s ease;
        }
        
        button:hover {
            background-color: #c0392b;
        }
        
        /* Table Styles */
        table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
            background-color: white;
        }
        
        th {
            background-color: #3498db;
            color: white;
            padding: 15px;
            text-align: left;
            font-weight: 500;
            text-transform: uppercase;
            font-size: 0.8em;
            letter-spacing: 1px;
        }
        
        td {
            padding: 12px 15px;
            border-bottom: 1px solid #e0e0e0;
            vertical-align: middle;
        }
        
        tr:last-child td {
            border-bottom: none;
        }
        
        tr:hover {
            background-color: #f8f9fa;
        }
        
        /* Action Buttons */
        .action-buttons {
            display: flex;
            gap: 10px;
            align-items: center;
        }
        
        .edit-btn {
            background-color: #3498db;
            color: white;
            padding: 5px 10px;
            border-radius: 4px;
            display: inline-block;
        }
        
        .edit-btn:hover {
            background-color: #2980b9;
            text-decoration: none;
        }
        
        /* Form Styles */
        form {
            margin: 0;
            display: inline;
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            table {
                display: block;
                overflow-x: auto;
            }
            
            th, td {
                padding: 8px 10px;
            }
        }
        
        /* Add Button */
        .add-btn {
            display: inline-block;
            background-color: #2ecc71;
            color: white;
            padding: 10px 15px;
            border-radius: 5px;
            font-weight: 500;
            margin-bottom: 20px;
        }
        
        .add-btn:hover {
            background-color: #27ae60;
            text-decoration: none;
        }
        
        /* Trash Link */
        .trash-link {
            display: inline-block;
            background-color: #f39c12;
            color: white;
            padding: 10px 15px;
            border-radius: 5px;
            font-weight: 500;
        }
        
        .trash-link:hover {
            background-color: #d35400;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <h1>Data Mahasiswa</h1>

    <a href="{{ url('/mahasiswa/create') }}" class="add-btn">Tambah Mahasiswa</a>
    <br><br>

    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>NIM</th>
                <th>Jurusan</th>
                <th>Alamat</th>
                <th>No HP</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($mahasiswa as $m)
            <tr>
                <td>{{ $m->nama }}</td>
                <td>{{ $m->nim }}</td>
                <td>{{ $m->jurusan }}</td>
                <td>{{ $m->profile->alamat }}</td>
                <td>{{ $m->profile->no_hp }}</td>
                <td class="action-buttons">
                    <a href="{{ url('/mahasiswa/' . $m->id . '/edit') }}" class="edit-btn">Edit</a>
                    <form action="{{ url('/mahasiswa/' . $m->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Yakin hapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <br>
    <a href="{{ url('/mahasiswa/trash') }}" class="trash-link">Lihat Data Terhapus</a>
</body>
</html>