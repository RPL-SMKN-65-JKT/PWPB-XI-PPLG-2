<?php
session_start();
require '../LISA/connection/connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Mencegah SQL Injection
    $username = $db->real_escape_string($username);
    $password = $db->real_escape_string($password);

    // Query untuk memeriksa username dan password
    $query = "SELECT * FROM login WHERE username='$username' AND password='$password'";
    $result = $db->query($query);

    // Jika query gagal
    if ($result === false) {
        die("Error with the query: " . $db->error);
    }

    if ($result->num_rows == 1) {
        $_SESSION['user'] = $username;
        header("Location: dashboard.php");
        exit();
    } else {
        $_SESSION['error'] = "Username atau password salah. Silakan coba lagi.";
        $_SESSION['show_popup'] = true; // Menambahkan flag untuk menunjukkan error
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Popup Login Form</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
</head>
<body class="flex items-center justify-center h-screen bg-body">

    <div class="flex flex-col justify-center items-center">
        <h1 class="color text-8xl m-2 mulish">LISA</h1>
        <h3 class="text-white m-4 text-3xl font-mulish tracking-wider">List Inventaris Stok Aset</h3>
        <button id="loginButton" class="px-8 py-2.5 text-black bg-white rounded-full mt-2 mulish">Login</button>
    </div>

    <div id="popup" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
        <div class="glass rounded-lg shadow-lg px-12 py-8 w-full max-w-md transition-all duration-300 transform scale-50 opacity-0 popup-content">
            <h2 class="text-2xl mulish mb-4 text-center login">Login</h2>

            <form action="index.php" method="POST" class="mulish">
                <label class="block mb-2 text-white">Username:</label>
                <input type="text" class="w-full p-2 mb-4 border border-gray-300 rounded" placeholder="username" name="username" required>
                
                <label class="block mb-2 text-white">Password:</label>
                <input type="password" class="w-full p-2 mb-4 border border-gray-300 rounded" placeholder="password" name="password" required>

                <!-- Menampilkan pesan error jika ada -->
                <?php if (isset($_SESSION['error'])): ?>
                    <p class="text-red-500 text-center mt-2"><?php echo $_SESSION['error']; ?></p>
                    <?php unset($_SESSION['error']); // Hapus error setelah ditampilkan ?>
                <?php endif; ?>

                <button type="submit" class="w-full py-2 mt-4 text-white bg-body rounded">Login</button>
            </form>
            <button id="closeButton" class="w-full py-2 mt-4 text-white mulish">Close</button>
        </div>
    </div>

    <script>
        const loginButton = document.getElementById('loginButton');
        const popup = document.getElementById('popup');
        const closeButton = document.getElementById('closeButton');
        const popupContent = document.querySelector('.popup-content');

        // Fungsi untuk membuka popup
        function openPopup() {
            popup.classList.remove('hidden');
            setTimeout(() => {
                popupContent.classList.remove('scale-50', 'opacity-0');
            }, 10);
        }

        loginButton.addEventListener('click', openPopup);

        closeButton.addEventListener('click', () => {
            popupContent.classList.add('scale-50', 'opacity-0');
            setTimeout(() => {
                popup.classList.add('hidden');
            }, 300);
        });

        window.addEventListener('click', (event) => {
            if (event.target === popup) {
                popupContent.classList.add('scale-50', 'opacity-0');
                setTimeout(() => {
                    popup.classList.add('hidden');
                }, 300);
            }
        });

        // Buka popup secara otomatis jika ada error
        <?php if (isset($_SESSION['show_popup'])): ?>
            openPopup();
            <?php unset($_SESSION['show_popup']); // Hapus flag setelah digunakan ?>
        <?php endif; ?>
    </script>

    <style>
        .color {
            background: linear-gradient(90deg, rgba(255, 194, 58, 1) 0%, rgba(81, 210, 255, 1) 33%, rgba(103, 67, 255, 1) 66%, rgba(255, 96, 181, 1) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .mulish {
            font-family: "Mulish", sans-serif;
            font-weight: 700;
        }

        .glass {
            background: rgba(255, 255, 255, 0.24);
            border-radius: 16px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .bg-body {
            background-color: rgba(13, 13, 13, 1);
        }

        .login {
            background: linear-gradient(90deg, rgba(255, 194, 58, 1) 0%, rgba(81, 210, 255, 1) 33%, rgba(103, 67, 255, 1) 66%, rgba(255, 96, 181, 1) 100%);
            background-size: 18%;
            background-position: center;
            background-repeat: no-repeat;
            background-clip: text;
            -webkit-background-clip: text;
            color: transparent;
            -webkit-text-fill-color: transparent;
        }
    </style>

</body>
</html>
