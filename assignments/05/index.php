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
    <h1 class="font-bold text-2xl text-gray-800">Registration Form</h1>
  </header>
  <main class="bg-white p-4 rounded-lg max-w-md w-full shadow transition-shadow duration-200 hover:shadow-lg">
    <form class="grid grid-cols-[auto,1fr] gap-4 items-center" action="./process.php" method="POST">
      <label for="name">Name</label>
      <input required type="text" id="name" name="name">

      <label class="self-start" for="address">Address</label>
      <textarea required name="address" id="address" rows="5"></textarea>

      <label for="birthplace">Birthplace</label>
      <input required type="text" id="birthplace" name="birthplace">

      <label for="birthdate">Birthdate</label>
      <input required type="date" id="birthdate" name="birthdate">

      <label class="self-start" for='gender'>Gender</label>
      <div class="grid col-start-2 grid-cols-[auto,1fr] gap-x-8 gap-y-2 justify-items-start">
        <label for="male">Male</label>
        <input required type="radio" id="male" name="gender" value="Male">
        <label for="female">Female</label>
        <input type="radio" id="female" name="gender" value="Female">
        <label for="prefer_not_to_say">Prefer not to say</label>
        <input type="radio" id="prefer_not_to_say" name="gender" value="Prefer not to say">
      </div>

      <label for="education">Education</label>
      <select required name="education" id="education">
        <option disabled selected hidden value=''>Select one</option>
        <option value="High School">Elementary School</option>
        <option value="Bachelor's Degree">Bachelor's Degree</option>
        <option value="Master's Degree">Master's Degree</option>
      </select>

      <button class="col-span-2 bg-green-400 w-full text-white p-1 rounded-lg outline-none focus-visible:ring focus:ring-offset-2 hover:bg-green-500 transition active:bg-green-600 focus-visible:ring-green-400 duration-200">Submit</button>
    </form>
  </main>
</body>

</html>