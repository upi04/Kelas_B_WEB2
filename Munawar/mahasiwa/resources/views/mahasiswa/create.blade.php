<!DOCTYPE html>
<html>
<head>
    <title>Tambah Mahasiswa</title>
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
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
        }
        
        h1 {
            color: #2c3e50;
            text-align: center;
            margin-bottom: 30px;
            font-weight: 600;
        }
        
        /* Form Container */
        .form-container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
        }
        
        /* Form Styles */
        form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        
        /* Input Styles */
        input {
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-family: 'Poppins', sans-serif;
            font-size: 14px;
            transition: all 0.3s ease;
        }
        
        input:focus {
            outline: none;
            border-color: #3498db;
            box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.2);
        }
        
        input::placeholder {
            color: #aaa;
        }
        
        /* Button Styles */
        button {
            background-color: #2ecc71;
            color: white;
            border: none;
            padding: 12px;
            border-radius: 6px;
            cursor: pointer;
            font-family: 'Poppins', sans-serif;
            font-size: 16px;
            font-weight: 500;
            transition: all 0.3s ease;
            margin-top: 10px;
        }
        
        button:hover {
            background-color: #27ae60;
            transform: translateY(-2px);
        }
        
        button:active {
            transform: translateY(0);
        }
        
        /* Link Styles */
        .back-link {
            display: inline-block;
            margin-top: 20px;
            color: #3498db;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        
        .back-link:hover {
            color: #2980b9;
            text-decoration: underline;
        }
        
        /* Responsive Design */
        @media (max-width: 600px) {
            .form-container {
                padding: 20px;
            }
            
            input, button {
                padding: 10px 12px;
            }
        }
        
        /* Animation */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .form-container {
            animation: fadeIn 0.5s ease-out;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Form Tambah Mahasiswa</h1>
        <form action="{{ url('/mahasiswa') }}" method="POST">
            @csrf
            <input type="text" name="nama" placeholder="Nama" required>
            <input type="text" name="nim" placeholder="NIM" required>
            <input type="text" name="jurusan" placeholder="Jurusan" required>
            <input type="text" name="alamat" placeholder="Alamat" required>
            <input type="text" name="no_hp" placeholder="No HP" required>
            <button type="submit">Simpan</button>
        </form>
        <a href="{{ url('/mahasiswa') }}" class="back-link">← Kembali ke Daftar Mahasiswa</a>
    </div>
</body>
</html>