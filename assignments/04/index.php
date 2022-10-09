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

    input, textarea {
      @apply bg-gray-100 border-2 border-gray-200 rounded-lg p-1 outline-none;
    }
  </style>
  <title>Document</title>
</head>

<body class="grid place-items-center bg-gray-5 min-h-screen gap-4 auto-rows-min content-center p-4">
  <header>
    <h1 class="font-bold text-2xl text-gray-800">Reception Book</h1>
  </header>
  <main class="bg-white p-4 rounded-lg max-w-md w-full shadow transition-shadow duration-200 hover:shadow-lg">
    <form class="grid grid-cols-[auto,1fr] gap-4 items-center" action="./process.php">
      <label for="name">Name</label>
      <input required type="text" id="name" name="name">
      <label for="email">Email</label>
      <input required type="email" id="email" name="email">
      <label class="self-start" for="comment">Comment</label>
      <textarea required name="comment" id="comment" rows="5"></textarea>
      <button class="col-span-2 bg-green-400 w-full text-white p-1 rounded-lg outline-none focus-visible:ring focus:ring-offset-2 hover:bg-green-500 transition active:bg-green-600 focus-visible:ring-green-400 duration-200">Submit</button>
    </form>
  </main>
</body>

</html>