<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code</title>
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .visible-print {
            text-align: center;
        }
    </style>
</head>
<body>

<div class="visible-print mt-5">
    {!! $qrCode !!}
    <p>Silahkan Scan Ini</p>
    
    <!-- Tampilkan data item master sesuai kebutuhan -->
    <p>ID: {{ $item->id }}</p>
    <p>Nama: {{ $item->item_name }}</p>
</div>

</body>
</html>
