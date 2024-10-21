<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materi: Activity Diagram</title>
    <link rel="stylesheet" href="css/style.css">
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
        <h2>Materi: Activity Diagram</h2>
        <p>
        Activity Diagram adalah diagram dalam UML yang menggambarkan aliran kerja (workflow) atau aktivitas yang terjadi
        di dalam sistem. Diagram ini menampilkan urutan langkah-langkah aktivitas secara logis.
        </p>
        <h4>Contoh Activity Diagram:</h4>
        <img src="activity.png" alt="Activity Diagram" style="max-width: 100%; height: auto;">
        <h3>Elemen Penting:</h3>
        <ul>
            <li><strong>Activity:</strong>Representasi tugas atau pekerjaan yang dilakukan,
            sering digambarkan sebagai persegi panjang dengan sudut membulat.</li>
            <li><strong>Decision Node:</strong>Simbol yang menunjukkan adanya keputusan atau percabangan dalam alur aktivitas.</li>
            <li><strong>Fork/Join:</strong>Simbol yang menunjukkan aktivitas yang berjalan paralel dan bagaimana mereka bergabung kembali.</li>
            <li><strong>Swimlanes:</strong>Digunakan untuk mengelompokkan aktivitas berdasarkan aktor atau entitas yang melakukannya.</li>
        </ul>
        <h3>Fungsi Utama:</h3>
        <ul>
            <li>Menggambarkan urutan langkah-langkah dalam suatu proses.</li>
            <li>Menyederhanakan alur kerja kompleks dalam sistem.</li>      
        </ul>
    </div>

</body>
</html>
