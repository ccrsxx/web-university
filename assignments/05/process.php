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
    <h1 class="font-bold text-2xl text-gray-800">Your Registration Data</h1>
  </header>
  <main class="bg-white p-4 rounded-lg max-w-md w-full shadow transition-shadow duration-200 hover:shadow-lg grid grid-cols-[auto,1fr] gap-4 items-center">
    <?php
    // map name and the value of the input
    $map_data = [
      "Name" => $_POST['name'],
      "Address" => $_POST['address'],
      "Birthplace" => $_POST['birthplace'],
      "Birthdate" => $_POST['birthdate'],
      "Gender" => $_POST['gender'],
      "Education" => $_POST['education']
    ];

    // loop through the map and print the data
    foreach ($map_data as $key => $value) {
      echo "<h2>$key</h2>";
      echo "<p>$value</p>";
    }
    ?>

    <button class="col-span-2 bg-blue-400 w-full text-white p-1 rounded-lg outline-none focus-visible:ring focus:ring-offset-2 hover:bg-blue-500 transition active:bg-blue-600 focus-visible:ring-blue-400 duration-200" onclick="history.back()">Back to home</button>
  </main>
</body>

</html>