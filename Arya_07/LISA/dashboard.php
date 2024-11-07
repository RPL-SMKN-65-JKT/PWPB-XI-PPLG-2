<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard LISA</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;700&display=swap" rel="stylesheet">
    <style>
        .color {
            background: linear-gradient(90deg, rgba(255, 194, 58, 1) 0%, rgba(81, 210, 255, 1) 33%, rgba(103, 67, 255, 1) 66%, rgba(255, 96, 181, 1) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .bg-body {
            background-color: rgba(13, 13, 13, 1);
        }

        .mulish {
            font-family: "Mulish", sans-serif;
        }
    </style>
</head>

<body class="bg-body text-white font-mulish">
    <!-- Navbar -->
    <nav class="flex justify-between items-center p-4 bg-gray-800 shadow-md">
        <div class="text-4xl color font-bold">LISA</div> <!-- Perbesar ukuran LISA -->
        <div class="flex space-x-4"> <!-- Reduced space between links -->
            <a href="#" class="hover:text-gray-400">History</a>
            <a href="#" class="hover:text-gray-400">Manage</a>
            <a href="#" class="hover:text-gray-400">Item</a>
        </div>
        <button class="bg-gray-700 px-4 py-2 rounded hover:bg-gray-600 ml-4">Admin Logout</button> <!-- Added margin left to button -->
    </nav>

    <!-- Main Content -->
    <div class="p-8">
        <h1 class="text-3xl mb-6 color font-bold">Welcome to Your Dashboard</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-gray-800 p-5 rounded-lg shadow-md">
                <h3 class="text-xl font-semibold color">Overview</h3>
                <p class="mt-2">Total assets: <strong>150</strong></p>
            </div>
            <div class="bg-gray-800 p-5 rounded-lg shadow-md">
                <h3 class="text-xl font-semibold color">Recent Activities</h3>
                <p class="mt-2">You added 5 new items</p>
            </div>
            <div class="bg-gray-800 p-5 rounded-lg shadow-md">
                <h3 class="text-xl font-semibold color">Pending Tasks</h3>
                <p class="mt-2">Complete report by next week</p>
            </div>
        </div>
    </div>
</body>

</html>