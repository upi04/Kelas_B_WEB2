<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Lengkap {{ $biodata['nama'] }}</title>
    <link rel="stylesheet" href="../css/style1.css">
</head>
<body>
    <nav>
        <a href="../home">Home</a>
    </nav>
    <div class="container">
        <h1>Biodata Lengkap</h1>

        <table>
            <tr>
                <th>Nama</th>
                <td>{{ $biodata['nama']}} </td>
            </tr>
            <tr>
                <th>Tempat, Tanggal Lahir</th>
                <td>{{ $biodata['tempat_tanggal_lahir'] }}</td>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <td>{{ $biodata['jenis_kelamin'] }}</td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td>{{ $biodata['alamat'] }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ $biodata['email'] }}</td>
            </tr>
            <tr>
                <th>Telepon</th>
                <td>{{ $biodata['telepon'] }}</td>
            </tr>
            <tr>
                <th>Pendidikan</th>
                <td>
                    @if (isset($biodata['pendidikan']) && is_array($biodata['pendidikan']))
                        <ul>
                            @foreach ($biodata['pendidikan'] as $tingkat => $detail)
                                <li><strong>{{ $tingkat }}:</strong> {{ $detail }}</li>
                            @endforeach
                        </ul>
                    @else
                        -
                    @endif
                </td>
            </tr>
            <tr>
                <th>Hobi</th>
                <td>
                    @if (isset($biodata['hobi']) && is_array($biodata['hobi']))
                        <ul>
                            @foreach ($biodata['hobi'] as $hobi)
                                <li>{{ $hobi }}</li>
                            @endforeach
                        </ul>
                    @else
                        -
                    @endif
                </td>
            </tr>
            <tr>
                <th>Cita-cita</th>
                <td>{{ $biodata['cita_cita'] }}</td>
            </tr>
            <tr>
                <th>Keahlian</th>
                <td>
                    @if (isset($biodata['keahlian']) && is_array($biodata['keahlian']))
                        <ul>
                            @foreach ($biodata['keahlian'] as $skill)
                                <li>{{ $skill }}</li>
                            @endforeach
                        </ul>
                    @else
                        -
                    @endif
                </td>
            </tr>
            <tr>
                <th>Pengalaman Organisasi</th>
                <td>
                    @if (isset($biodata['pengalaman_organisasi']) && is_array($biodata['pengalaman_organisasi']))
                        <ul>
                            @foreach ($biodata['pengalaman_organisasi'] as $organisasi)
                                <li>{{ $organisasi }}</li>
                            @endforeach
                        </ul>
                    @else
                        -
                    @endif
                </td>
            </tr>
            {{-- Tambahkan baris untuk data nilai tambah --}}
            @if (isset($biodata['bahasa_asing']))
            <tr>
                <th>Bahasa Asing</th>
                <td>
                    @if (is_array($biodata['bahasa_asing']))
                        <ul>
                            @foreach ($biodata['bahasa_asing'] as $bahasa)
                                <li>{{ $bahasa }}</li>
                            @endforeach
                        </ul>
                    @else
                        {{ $biodata['bahasa_asing'] }}
                    @endif
                </td>
            </tr>
            @endif
            @if (isset($biodata['penghargaan']))
            <tr>
                <th>Penghargaan</th>
                <td>
                    @if (is_array($biodata['penghargaan']))
                        <ul>
                            @foreach ($biodata['penghargaan'] as $penghargaan)
                                <li>{{ $penghargaan }}</li>
                            @endforeach
                        </ul>
                    @else
                        {{ $biodata['penghargaan'] }}
                    @endif
                </td>
            </tr>
            @endif
            @if (isset($biodata['project_pribadi']))
            <tr>
                <th>Project Pribadi</th>
                <td>
                    @if (is_array($biodata['project_pribadi']))
                        <ul>
                            @foreach ($biodata['project_pribadi'] as $project)
                                <li>{{ $project }}</li>
                            @endforeach
                        </ul>
                    @else
                        {{ $biodata['project_pribadi'] }}
                    @endif
                </td>
            </tr>
            @endif
        </table>
    </div>
    
</body>
</html>