<x-guest-layout>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  <body>
    <!-- component -->
<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="flex flex-col items-center w-full max-w-xs p-4 bg-white rounded-3xl md:flex-row">
        <div class="-mt-28 md:-my-16 md:-ml-32" style="clip-path: url(#roundedPolygon)">
        <img
            class="w-auto h-auto"
            src="{{ $user->img_url }}"
            alt="User image"
        />
        </div>
        <div class="flex flex-col space-y-4">
        <div class="flex flex-col items-center md:items-start">
          <form action="action.php" method="post">
          <p>Votre nom : <input type="text" style = "border:none" name="{{ $user->name }}" /></p>
          <p><input type="submit" value="OK"></p>
          </form>
            <h2 class="text-xl font-medium">{{ $user->name }}</h2>
            <p class="text-base font-medium text-gray-400">{{ $user->email }}</p>
            </br>
            <h3 class ="mt-2.5">Bio</h3>
            <p class="text-base font-small text-gray-400">{{ $user->bio }}</p>
           
        </div>
    </div>


    <svg width="0" height="0" xmlns="http://www.w3.org/2000/svg">
        <defs>
        <!-- rounded polygon generator => https://weareoutman.github.io/rounded-polygon/ -->
        <!-- polygon size 190 * 190 almost the same size as the image -->
        <clipPath id="roundedPolygon">
            <path
            d="M79 6.237604307034a32 32 0 0 1 32 0l52.870489570875 30.524791385932a32 32 0 0 1 16 27.712812921102l0 61.049582771864a32 32 0 0 1 -16 27.712812921102l-52.870489570875 30.524791385932a32 32 0 0 1 -32 0l-52.870489570875 -30.524791385932a32 32 0 0 1 -16 -27.712812921102l0 -61.049582771864a32 32 0 0 1 16 -27.712812921102"
            />
        </clipPath>
        </defs>
    </svg>
</div>
    </svg>
  </a>
</div>
  </body>
  </html>
</x-guest-layout>
