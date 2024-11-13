<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ucapan Kamu Cantik</title>
    <style>
        /* Gaya untuk animasi */
        .ucapan {
            font-size: 3em;
            font-weight: bold;
            text-align: center;
            color: #ff69b4;
            opacity: 0;
            animation: muncul 3s ease-in-out forwards, gerak 5s infinite;
        }

        @keyframes muncul {
            0% {
                opacity: 0;
                transform: translateY(-50px);
            }
            50% {
                opacity: 1;
                transform: translateY(0);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes gerak {
            0% {
                transform: translateX(0);
            }
            50% {
                transform: translateX(30px);
            }
            100% {
                transform: translateX(0);
            }
        }

        /* Background dan pengaturan halaman */
        body {
            background-color: #f3f3f3;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
    <div class="ucapan">
        <?php
            // Menampilkan pesan
            echo "Kamu Cantik!";
        ?>
    </div>
</body>
</html>
