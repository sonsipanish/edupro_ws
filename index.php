<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    .card {
      transition: transform 0.4s, box-shadow 0.4s;
      transform-style: preserve-3d;
    }
    .card:hover {
      transform: rotateY(10deg) scale(1.03);
      box-shadow: 0 20px 30px rgba(0,0,0,0.2);
    }
    .nav-link {
      transition: all 0.3s ease;
    }
    .nav-link:hover {
      transform: translateX(5px);
      color: #3b82f6;
    }
  </style>
</head>
<body class="bg-gradient-to-br from-gray-100 to-gray-300 min-h-screen flex">

  <!-- Sidebar -->
  <aside class="w-64 bg-white shadow-lg p-6 flex flex-col gap-6">
    <h1 class="text-2xl font-bold mb-10 text-center">Admin Panel</h1>
    <nav class="flex flex-col gap-4">
      <a href="#" class="nav-link text-lg font-medium">Home</a>
      <a href="#" class="nav-link text-lg font-medium">Users</a>
      <a href="#" class="nav-link text-lg font-medium">Posts</a>
      <a href="#" class="nav-link text-lg font-medium">Analytics</a>
      <a href="#" class="nav-link text-lg font-medium">Settings</a>
    </nav>
  </aside>

  <!-- Main Content -->
<main class="flex-1 p-10">
  <h2 class="text-4xl font-bold mb-10">Home</h2>
  <div id="home-wrapper" class="bg-white rounded-2xl shadow-md p-6">
    <div id="home-content"></div>
  </div>
</main>

<script>
  // Load homepage.php into #home-content safely
  window.addEventListener('DOMContentLoaded', () => {
    fetch('homepage.php')
      .then(response => response.text())
      .then(data => {
        document.getElementById('home-content').innerHTML = data;
      })
      .catch(error => {
        console.error('Error loading homepage.php:', error);
        document.getElementById('home-content').innerHTML = '<p class=\"text-red-500\">Failed to load homepage content.</p>';
      });
  });
</script>

</body>
</html>
