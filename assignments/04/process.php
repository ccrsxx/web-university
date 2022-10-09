<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    // automatically refresh browser with 5 seconds interval
    // because php is garbage and can't do it by itself
    // comment below block of code, if it's on production

    // setInterval(() => {
    //   window.location.reload();
    // }, 1000);
  </script>
  <style type="text/tailwindcss">
    h2 {
      @apply text-gray-700 font-bold;
    }

    p {
      @apply bg-gray-100 border-2 border-gray-200 rounded-lg p-1 outline-none;
    }

    h2:last-of-type {
      @apply self-start;
    }
    
    p:last-of-type {
      @apply whitespace-pre-line;
    }
  </style>
  <title>Document</title>
</head>

<body class="grid place-items-center bg-gray-5 min-h-screen gap-4 auto-rows-min content-center p-4">
  <header>
    <h1 class="font-bold text-2xl text-gray-800">Your Reception Data</h1>
  </header>
  <main class="bg-white p-4 rounded-lg max-w-md w-full shadow transition-shadow duration-200 hover:shadow-lg grid grid-cols-[auto,1fr] gap-4 items-center">
    <?php
    // map name and the value of the input
    $map_data = [
      "Name" => $_GET["name"],
      "Email" => $_GET["email"],
      "Comment" => $_GET["comment"]
    ];

    // loop through the map and print the data
    foreach ($map_data as $key => $value) {
      echo "<h2>$key</h2>";
      echo "<p>$value</p>";
    }
    ?>
  </main>
</body>

</html>