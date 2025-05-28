<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Produk</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 py-10">
    <div class="container mx-auto px-4">
        <h1 class="text-3xl font-bold text-center mb-8">Daftar Produk</h1>

        @php
        $products = [
            ['nama' => 'pepsodent', 'deskripsi' => 'odol', 'harga' => 10000],
            ['nama' => 'lux', 'deskripsi' => 'sabun cuci piring', 'harga' => 12000],
            ['nama' => 'mama lemon', 'deskripsi' => 'sabun cuci piring', 'harga' => 16000],
            ['nama' => 'hayat', 'deskripsi' => 'minyak goreng', 'harga' => 18000],
            ['nama' => 'sunco', 'deskripsi' => 'minyak goreng', 'harga' => 20000],
            ['nama' => 'le minerale', 'deskripsi' => 'air putih', 'harga' => 6000],
            ['nama' => 'monde', 'deskripsi' => 'cemilan', 'harga' => 12000],
            ['nama' => 'oatside', 'deskripsi' => 'susu almond', 'harga' => 9000],
            ['nama' => 'ultramilk', 'deskripsi' => 'susu fullcream', 'harga' => 6500],
            ['nama' => 'nestle purelife', 'deskripsi' => 'air putih', 'harga' => 3500],
            ['nama' => 'magnum matcha', 'deskripsi' => 'eskrim', 'harga' => 24000],
            ['nama' => 'lavojoy', 'deskripsi' => 'handbody', 'harga' => 60000],
            ['nama' => 'somethinc cushion', 'deskripsi' => 'cushion', 'harga' => 150000],
            ['nama' => 'peripera lip ink', 'deskripsi' => 'liptint', 'harga' => 100000],
            ['nama' => 'amoxicilin', 'deskripsi' => 'obat antibiotik', 'harga' => 50000],
            ['nama' => 'cetirizine', 'deskripsi' => 'obat alergi', 'harga' => 50000],
            ['nama' => 'alpenliebe', 'deskripsi' => 'permen', 'harga' => 3000],
            ['nama' => 'pejoy', 'deskripsi' => 'cemilan stik matcha', 'harga' => 7500],
            ['nama' => 'kanzler', 'deskripsi' => 'frozen food', 'harga' => 45000],
            ['nama' => 'lays', 'deskripsi' => 'cemilan keripik kentang', 'harga' => 9500],
        ];
        @endphp

        <div class="overflow-x-auto shadow-md rounded-lg">
            <table class="min-w-full bg-white border border-gray-300">
                <thead class="bg-blue-600 text-white">
                    <tr>
                        <th class="py-3 px-4 text-left">No</th>
                        <th class="py-3 px-4 text-left">Nama Produk</th>
                        <th class="py-3 px-4 text-left">Deskripsi</th>
                        <th class="py-3 px-4 text-left">Harga Produk</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $index => $product)
                        <tr class="{{ $index % 2 == 0 ? 'bg-gray-100' : 'bg-white' }}">
                            <td class="py-2 px-4">{{ $index + 1 }}</td>
                            <td class="py-2 px-4">{{ $product['nama'] }}</td>
                            <td class="py-2 px-4">{{ $product['deskripsi'] }}</td>
                            <td class="py-2 px-4">Rp {{ number_format($product['harga'], 0, ',', '.') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
