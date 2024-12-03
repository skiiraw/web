<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Statis - Tema Pink</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            text-align: center;
            background-color: #ffe4e1; /* Warna pink muda */
            color: #333;
        }
        .container {
            margin-top: 50px;
            padding: 20px;
            background: #ffb6c1; /* Warna pink pastel */
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            display: inline-block;
            color: #4a4a4a; /* Kontras warna teks */
        }
        h1 {
            color: #d63384; /* Pink gelap untuk judul */
        }
        p {
            color: #4a4a4a; /* Teks isi dengan warna abu-abu gelap */
            font-size: 1.2em;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Informasi Server dan Client</h1>
        <p><strong>Hostname Server:</strong> 
            <?php echo gethostname(); ?>
        </p>
        <p><strong>Alamat IP Client:</strong> 
            <?php echo $_SERVER['REMOTE_ADDR']; ?>
        </p>
        <p><strong>Waktu Akses:</strong> 
            <?php 
                date_default_timezone_set('Asia/Jakarta'); // Set timezone
                echo date('Y-m-d H:i:s'); 
            ?>
        </p>
    </div>
</body>
</html>
