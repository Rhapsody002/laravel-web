<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container my-5">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white text-center">
            <h4>Data Pegawai</h4>
        </div>
        <div class="card-body">
            <ul class="list-group">
                <li class="list-group-item"><strong>Nama:</strong> {{ $name }}</li>
                <li class="list-group-item"><strong>Umur:</strong> {{ $my_age }} tahun</li>
                <li class="list-group-item"><strong>Hobi:</strong> {{ implode(', ', $hobbies) }}</li>
                <li class="list-group-item"><strong>Tanggal Harus Wisuda:</strong> {{ $tgl_harus_wisuda }}</li>
                <li class="list-group-item"><strong>Sisa Waktu Belajar:</strong> {{ $time_to_study_left }}</li>
                <li class="list-group-item"><strong>Semester Saat Ini:</strong> {{ $current_semester }}</li>
                <li class="list-group-item"><strong>Motivasi:</strong> {{ $motivasi }}</li>
                <li class="list-group-item"><strong>Cita-cita:</strong> {{ $future_goal }}</li>
            </ul>
        </div>
    </div>
</div>

</body>
</html>
