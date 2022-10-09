<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Document</title>
  <script>
    // automatically refresh browser with 1 second interval
    // because php is garbage and can't do it by itself
    // comment below block of code, if it's on production
  </script>
</head>

<body class="grid place-items-center min-h-screen">
  <form action='05_process.php' method="get" class="bg-gray-400 max-w-sm flex flex-col gap-2 text-white p-4 rounded-lg">
    <label class="font-bold text-xl" for="name">Masukan nama</label>
    <input class="text-black" id="name" name='name' type="text" />
    <button class="bg-green-400" type="submit">Submit</button>
  </form>
  <!-- <script>
    const input = document.querySelector('input');
    const form = document.querySelector('form');
    const p = document.querySelector('p');

    form.addEventListener('submit', (e) => {
      e.preventDefault();
      p.textContent = input.value;
    });
  </script> -->
</body>

</html>