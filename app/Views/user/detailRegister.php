<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Registrasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script>
        function printPage() {
            window.print();
        }
    </script>
</head>
<body>
    <div class="container mt-5">
        <h4 class="text-center mb-4">DETAIL REGISTRASI</h4>
        <div class="card p-4">
            <div class="mb-3">
                <label for="noPendaftaran" class="form-label">No. Pendaftaran</label>
                <p id="noPendaftaran"></p>
            </div>
            <div class="mb-3">
                <label for="namaLengkap" class="form-label">Nama Lengkap</label>
                <p id="namaLengkap"></p>
            </div>
            <div class="mb-3">
                <label for="nisn" class="form-label">NISN</label>
                <p id="nisn"></p>
            </div>
            <!-- Add more fields as necessary -->
        </div>
        <button class="btn btn-success mt-4" onclick="printPage()">Cetak</button>
    </div>
    
    <script>
        // Function to display the data received via URL parameters
        window.onload = function() {
            const urlParams = new URLSearchParams(window.location.search);
            document.getElementById('noPendaftaran').innerText = urlParams.get('noPendaftaran');
            document.getElementById('namaLengkap').innerText = urlParams.get('namaLengkap');
            document.getElementById('nisn').innerText = urlParams.get('nisn');
            // Add more fields as necessary
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
