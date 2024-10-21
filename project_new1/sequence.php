<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materi: Sequence Diagram</title>
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
        <h2>Materi: Sequence Diagram</h2>
        <p>
        Sequence Diagram adalah diagram yang menggambarkan bagaimana objek-objek dalam sistem berinteraksi satu sama lain 
        melalui pesan dalam urutan waktu tertentu. Diagram ini sangat berguna untuk menjelaskan aliran kontrol dan 
        bagaimana objek berkolaborasi dalam mencapai suatu skenario fungsional.
        </p>
        <h4>Contoh Sequence Diagram:</h4>
        <img src="sequence.png" alt="Sequence Diagram" style="max-width: 100%; height: auto;">
        <h3>Elemen Penting:</h3>
        <ul>
            <li><strong>Lifeline:</strong>Garis vertikal yang mewakili objek atau aktor, menunjukkan kapan objek aktif selama interaksi.</li>
            <li><strong>Message:</strong>Panah horizontal yang mewakili pesan atau komunikasi antara objek atau aktor.</li>
            <li><strong>Activation Bar:</strong>Garis vertikal yang lebih tebal pada lifeline yang menunjukkan waktu ketika objek sedang aktif dalam suatu interaksi.</li>
        </ul>
        <h3>Fungsi Utama:</h3>
        <ul>
            <li>Menjelaskan bagaimana objek berkomunikasi satu sama lain.</li>
            <li>Membantu memahami urutan interaksi dalam suatu skenario.</li>      
        </ul>
    </div>

</body>
</html>
