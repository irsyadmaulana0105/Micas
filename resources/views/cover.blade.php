<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>MICAS</title>
  <!-- Gunakan salah satu metode untuk mengimpor Tailwind CSS -->
  @vite('resources/css/app.css')
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
            text-align: center;
        }
        .container {
            max-width: 600px;
            margin: 20px;
        }
        h1 {
            font-size: 2em;
            margin-bottom: 10px;
        }
        p {
            font-size: 1.2em;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Website Under Construction</h1>
        <p>We are working hard to bring you a new and improved experience. Please check back soon!</p>
    </div>
</body>
</html>

<script>
    setTimeout(function() {
        window.location.href = '/landing-page.html'; // Ganti dengan URL landing page Anda
    }, 10000); // 10000 milidetik = 10 detik
</script>
