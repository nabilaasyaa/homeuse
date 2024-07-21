<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HOmeUSE - Komunikasi Keluarga</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
  <link rel="icon" type="image/png" sizes="16x16" href="../images/logo.png">
  <style>
    body {
      display: flex;
      flex-direction: column;
      min-height: 100vh;
      margin: 0;
      background: url('https://th.bing.com/th/id/R.4c83c11fcda67ffa487f88ae4b807c66?rik=3lZoiSsYVe7%2bVw&riu=http%3a%2f%2fwallpapercave.com%2fwp%2fxsBpjBU.jpg&ehk=pbgcO5YGyu3GUx1HVtWHQNyFR5fq9O%2bjU6GryFMM7VE%3d&risl=&pid=ImgRaw&r=0') no-repeat center center fixed;
      background-size: cover;
    }
    .navbar {
      background-color: #343a40; /* Matching sidebar color */
    }
    .navbar .nav-link {
      color: #cfd8dc; /* Light color for readability on dark background */
    }
    .navbar .nav-link:hover {
      color: #ffeb3b;
    }
    .navbar .navbar-brand {
      display: flex;
      align-items: center;
    }
    .navbar .navbar-brand .brand-text {
      font-size: 1.5rem;
      font-weight: bold;
      margin-left: 10px;
      color: #ffeb3b;
      text-shadow: 2px 2px 4px rgba(0,0,0,0.4);
    }
    .sidebar {
      height: 100vh;
      position: fixed;
      top: 0;
      left: 0;
      width: 250px;
      background-color: #343a40;
      padding-top: 20px;
    }
    .sidebar .nav-link {
      color: #cfd8dc;
    }
    .sidebar .nav-link:hover {
      background-color: #495057;
      color: #ffeb3b;
    }
    .content {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      padding: 20px;
      background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent background for content */
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.2);
      text-align: center;
    }
    .content h1 {
      font-size: 2.5rem;
      font-weight: bold;
      color: #007bff;
      text-shadow: 1px 1px 2px rgba(0,0,0,0.5);
    }
    .content p {
      font-size: 1.2rem;
      color: #333;
    }
    .unique-btn {
      background-color: #ffeb3b;
      color: #007bff;
      border-radius: 25px;
      border: none;
    }
    .unique-btn:hover {
      background-color: #ffc107;
      color: #007bff;
    }
    .message-card {
      border: 1px solid #ddd;
      border-radius: 10px;
      padding: 15px;
      margin-bottom: 15px;
      background-color: #fff;
    }
    footer {
      position: absolute;
      bottom: 0;
      width: 100%;
      background-color: #f1f1f1;
      padding: 10px 0; /* Reduced padding */
      font-size: 0.8rem; /* Smaller font size */
    }
  </style>
</head>
<body>
    
    <!-- Header -->
    <?php include "header.php"; ?>
    <!-- End Header -->

    <!-- Sidebar -->
    <?php include "sidebar.php"; ?>
    <!-- End Sidebar -->

    <!-- Content -->
    <div class="content">
        <h1>Selamat Datang di Dashboard HOmeUSE</h1>
        <p>Ini adalah halaman utama setelah login.</p>
    </div>
    <!-- End Content -->

    <!-- Footer -->
    <footer class="text-center bg-light py-3">
        <p>&copy; 2024 HOmeUSE. All rights reserved.</p>
    </footer>
    <!-- End Footer -->

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
