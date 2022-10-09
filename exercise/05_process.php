<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Document</title>
</head>

<body class="grid place-content-center min-h-screen">
  <div class="bg-red-400 p-4 rounded-lg font-bold text-white text-2xl hover:bg-blue-400 hover:scale-150 transition duration-300">
    <h1>Your name is <?php echo $_GET['name']; ?></h1>
  </div>
</body>

</html>