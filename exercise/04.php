<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.tailwindcss.com"></script>
  <title>My Profile</title>
  <script>
    // automatically refresh browser with 1 second interval
    // because php is garbage and can't do it by itself
    // comment below block of code, if it's on production

    setInterval(() => {
      window.location.reload();
    }, 1000);
  </script>
</head>

<body class="bg-gray-50 grid place-items-center min-h-screen">
  <?php
  // variables for identification data
  $first_number = 200;
  $second_number = 40;
  $sum_number = $first_number + $second_number;
  ?>
  <div class='grid gap-4 bg-white p-4 rounded-lg max-w-sm w-full shadow transition duration-200 hover:shadow-lg hover:-translate-y-2 cursor-pointer'>
    <header class="bg-gray-700 text-white p-2 rounded-lg text-center">
      <h1 class="text-2xl font-bold">My Profile Data</h1>
    </header>
    <main class="bg-gray-100 w-full p-4 grid grid-cols-[auto,1fr] gap-x-4 gap-y-1 rounded-lg">
      <?php
      // create an array of data
      $map_data = [
        'First Number' => $first_number,
        'Second Number' => $second_number,
        'Sum Number' => $sum_number
      ];

      // loop through the array and print it
      foreach ($map_data as $key => $value) {
        echo "<h2 class='text-gray-900 font-bold'>$key</h2>";
        echo "<p class='text-gray-500'>$value</p>";
      }

      $test_true = 1 == 1;
      $test_equality = $test_true == 0;

      echo "<h2 class='text-gray-900 font-bold'>$test_true shit $test_equality shitone</h2>";
      ?>
    </main>
  </div>
</body>

</html>