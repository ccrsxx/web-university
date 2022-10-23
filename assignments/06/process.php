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
    <h1 class="font-bold text-2xl text-gray-800">Your Academic Data</h1>
  </header>
  <main class="bg-white p-4 rounded-lg max-w-md w-full shadow transition-shadow duration-200 hover:shadow-lg grid grid-cols-[auto,1fr] gap-4 items-center">
    <?php
    function get_grade_letter($grade)
    {
      switch ($grade) {
        case $grade >= 81:
          return "A";
        case $grade >= 71:
          return "B";
        case $grade >= 61:
          return "C";
        case $grade >= 51:
          return "D";
        default:
          return "E";
      }
    }

    $assignment_score = $_POST["assignment"];
    $middle_score = $_POST["middle"];
    $final_score = $_POST["final"];

    $total_grade = ($assignment_score * 0.25) + ($middle_score * 0.35) + ($final_score * 0.4);
    $final_grade = get_grade_letter($total_grade);

    $grade_info = in_array($final_grade, ['D', 'E']) ? "You failed the course" : "You passed the course";

    $map_data = [
      'Name' => $_POST['name'],
      'NIM' => $_POST['nim'],
      'Class' => $_POST['class'],
      'Major' => $_POST['major'],
      'Subject' => $_POST['subject'],
      'Assignment score' => $assignment_score,
      'Middle exam score' => $middle_score,
      'Final exam score' => $final_score,
      'Final grade' => $final_grade,
      'Grade info' => $grade_info
    ];

    foreach ($map_data as $key => $value) {
      echo "<h2>$key</h2>";
      echo "<p>$value</p>";
    }
    ?>

    <button class="col-span-2 bg-blue-400 w-full text-white p-1 rounded-lg outline-none focus-visible:ring focus:ring-offset-2 hover:bg-blue-500 transition active:bg-blue-600 focus-visible:ring-blue-400 duration-200" onclick="history.back()">Back to home</button>
  </main>
</body>

</html>