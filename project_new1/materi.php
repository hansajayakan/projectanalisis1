<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materi: Use Case Diagram</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        /* Styling Navbar */
        .navbar {
            background-color: #007bff;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar ul {
            list-style: none;
            display: flex;
            margin: 0;
            padding: 0;
        }

        .navbar ul li {
            margin-right: 20px;
        }

        .navbar ul li a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        .navbar ul li a:hover {
            text-decoration: underline;
        }

        .logout {
            color: white;
            background-color: #ff4444;
            padding: 5px 10px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
        }

        .logout:hover {
            background-color: #cc0000;
        }

        /* Container */
        .container {
            margin: 20px;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #007bff;
        }

        /* Media Queries */
        @media (max-width: 768px) {
            .navbar ul {
                flex-direction: column;
            }

            .navbar ul li {
                margin-right: 0;
                margin-bottom: 10px;
            }

            .container {
                margin: 10px;
            }
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <div class="navbar">
        <ul>
            <li><a href="usecase.php">Use Case Diagram</a></li>
            <li><a href="activity.php">Activity Diagram</a></li>
            <li><a href="sequence.php">Sequence Diagram</a></li>
            <li><a href="class.php">Class Diagram</a></li>
            <li><a href="conceptual.php">Conceptual Diagram</a></li>
        </ul>
        <a class="logout" href="logout.php">Logout</a>
    </div>

    <!-- Container for Content -->
    <div class="container">
        <h2>Materi: Use Case Diagram</h2>
        <p>
        Use Case Diagram adalah diagram UML yang menggambarkan interaksi antara pengguna (aktor) dan sistem. 
        Tujuannya adalah untuk menunjukkan bagaimana aktor berinteraksi dengan fungsionalitas sistem, 
        serta memberikan gambaran umum tentang apa yang dapat dilakukan sistem dari perspektif pengguna eksternal.
        </p>
        <h4>Contoh Use Case Diagram:</h4>
        <img src="usecase.png" alt="Use Case Diagram" style="max-width: 100%; height: auto;">
        <h3>Elemen Penting:</h3>
        <ul>
            <li><strong>Aktor:</strong> Pengguna atau entitas eksternal yang berinteraksi dengan sistem. Bisa berupa 
            pengguna, perangkat atau sistem eksternal lainnya.</li>
            <li><strong>Use Case:</strong> Fitur atau fungsi sistem yang akan digunakan aktor. Contohnya adalah login,
            pendaftaran atau melakukan transaksi.</li>
            <li><strong>Relasi:</strong> Hubungan antara aktor dan use case.</li>
        </ul>
        <h3>Fungsi Utama:</h3>
        <ul>
            <li>Menggambarkan fungsionalitas sistem dari perspektif pengguna.</li>
            <li>Membantu dalam memahami apa yang dilakukan sistem.</li>      
        </ul>
    </div>

</body>
</html>
