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
    label {
      @apply text-gray-700 font-bold;
    }

    input, textarea, select {
      @apply bg-gray-100 border-2 border-gray-200 rounded-lg p-1 outline-none;
    }

  </style>
  <title>Document</title>
</head>

<body class="grid place-items-center bg-gray-5 min-h-screen gap-4 auto-rows-min content-center p-4">
  <header>
    <h1 class="font-bold text-2xl text-gray-800">BSI University Student Academic Form</h1>
  </header>
  <main class="bg-white p-4 rounded-lg max-w-md w-full shadow transition-shadow duration-200 hover:shadow-lg">
    <form class="grid grid-cols-[auto,1fr] gap-4 items-center" action="./process.php" method="POST">
      <label for="name">Name</label>
      <input required type="text" id="name" name="name">

      <label for="nim">NIM</label>
      <input required type="number" id="nim" name="nim">

      <label for="class">Class</label>
      <input type="text" id="class" name="class" />

      <label for="major">Major</label>
      <select required name="major" id="major">
        <option disabled selected hidden value=''>Select one</option>
        <option value="Sistem Informasi Akuntansi">SIA</option>
        <option value="Teknologi Informatika Komputer">TIK</option>
        <option value="Rekayasa Perangkat Lunak">RPL</option>
      </select>

      <label for="subject">Subject</label>
      <input type="text" id="subject" name="subject" />

      <label for="assignment">Assignment score</label>
      <input min='0' max='100' type="number" id="assignment" name="assignment" />

      <label for="middle">Middle exam score</label>
      <input min='0' max='100' type="number" id="middle" name="middle" />

      <label for="final">Final exam score</label>
      <input min='0' max='100' type="number" id="final" name="final" />

      <button class="col-span-2 bg-green-400 w-full text-white p-1 rounded-lg outline-none focus-visible:ring focus:ring-offset-2 hover:bg-green-500 transition active:bg-green-600 focus-visible:ring-green-400 duration-200">Submit</button>
    </form>
  </main>
</body>

</html>