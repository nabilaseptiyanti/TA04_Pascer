<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Kios Pasar Cerdas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-4">
    <div class="container bg-white p-4 rounded shadow-sm">
        <h2 class="mb-4">Daftar Kios & Catatan Retribusi</h2>
        
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Nomor Kios</th>
                    <th>Nama Pemilik</th>
                    <th>Kategori</th>
                    <th>Status Retribusi Terakhir</th>
                </tr>
            </thead>
            <tbody>
                @forelse($kios as $index => $item)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $item->nomor_kios }}</td>
                        <td>{{ $item->nama_pemilik }}</td>
                        <td>{{ $item->kategori }}</td>
                        <td>
                            @if($item->retribusi->isNotEmpty())
                                <span class="badge bg-success">
                                    {{ $item->retribusi->last()->status_pembayaran }} (Rp {{ number_format($item->retribusi->last()->nominal) }})
                                </span>
                            @else
                                <span class="badge bg-secondary">Belum ada data</span>
                            @endif
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">Data kios tidak ditemukan.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>