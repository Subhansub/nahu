<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BBIB Singosari</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <!-- Custom CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        /* Navbar Styling */
        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background-color: #333;
            color: white;
            padding: 10px 0;
            z-index: 1000;  /* Ensure navbar stays above other content */
            text-align: center;
            box-shadow: 0 4px 2px -2px gray;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
        }

        .navbar a:hover {
            color: #00ff7f;
        }

        /* Section Styles */
        .section {
            padding: 80px 20px; /* Adjusted to prevent overlap with navbar */
            margin-top: 80px; /* Additional space to account for fixed navbar */
            border-bottom: 1px solid #ddd;
        }

        /* Section Backgrounds */
        #home {
            background-color: #f9f9f9;
        }

        #sapi {
            background-color: #e9f7ef;
        }

        #keunggulan {
            background-color: #fff3e0;
        }

        #peran {
            background-color: #f3e5f5;
        }

        /* Loader Animation */
        .loader {
            border: 16px solid #f3f3f3;
            border-top: 16px solid #3498db;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            animation: spin 2s linear infinite;
            margin: 0 auto;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        /* Ensures that the sections will not overlap with navbar */
        body {
            padding-top: 80px; /* Give space so the navbar won't cover content */
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <div class="navbar">
        <a href="#home">Home</a>
        <a href="#sapi" onclick="loadContent('halaman_depan/sapi.php', 'sapi')">Sapi</a>
        <a href="#keunggulan" onclick="loadContent('halaman_depan/keunggulan.php', 'keunggulan')">Keunggulan</a>
        <a href="#peran" onclick="loadContent('halaman_depan/peran.php', 'peran')">Peran</a>
    </div>

    <!-- Sections -->
    <div id="home" class="section">
        <h2>Selamat Datang di BBIB Singosari</h2>
        <p>Mengenal lebih dekat Balai Besar Inseminasi Buatan Singosari.</p>
    </div>

    <div id="sapi" class="section">
        <div class="loader"></div> <!-- Loader Animation -->
        <h2>Loading...</h2>
    </div>

    <div id="keunggulan" class="section">
        <div class="loader"></div> <!-- Loader Animation -->
        <h2>Loading...</h2>
    </div>

    <div id="peran" class="section">
        <div class="loader"></div> <!-- Loader Animation -->
        <h2>Loading...</h2>
    </div>

    <!-- JavaScript -->
    <script>
        // Fungsi untuk memuat konten ke dalam div tertentu
        function loadContent(file, sectionId) {
            const sectionDiv = document.getElementById(sectionId);
            sectionDiv.innerHTML = '<div class="loader"></div><h2>Loading...</h2>'; // Show loading animation

            fetch(file)
                .then(response => {
                    if (!response.ok) {
                        throw new Error('File tidak ditemukan');
                    }
                    return response.text();
                })
                .then(data => {
                    sectionDiv.innerHTML = data; // Menampilkan konten dari file
                })
                .catch(error => {
                    sectionDiv.innerHTML = `<p>Error: ${error.message}</p>`;
                });
        }

        // Memuat konten secara otomatis saat halaman dibuka
        loadContent('halaman_depan/sapi.php', 'sapi');
        loadContent('halaman_depan/keunggulan.php', 'keunggulan');
        loadContent('halaman_depan/peran.php', 'peran');
    </script>

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>
