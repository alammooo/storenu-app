<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class='w-screen grid grid-cols-2'>
        <div class='flex flex-col items-center justify-center gap-10 w-full'>
            <h3 class='flex gap-2 font-semibold text-2xl items-center'>
                <span class="text-orange-500 font-semibold">
                    <x-bi-handbag width="27px" height="27px" />
                </span>
                SIMS Web App
            </h3>
            <h1 class='text-3xl font-bold max-w-sm text-center'>
                Masuk atau buat akun untuk memulai
            </h1>
            
            <form action="/auth" method="post" class='w-1/2 mx-auto'>
                @if (session()->has('loginError'))
                    <div class="p-4 mb-2 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
                        role="alert">
                        <span class="font-medium text-center">{{ session('loginError') }}
                    </div>
                @endif
                @csrf
                <div class='mb-5'>
                    <input type='email' id='email' name="email"
                        class='bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5'
                        placeholder='@ masukkan email anda' autofocus />
                    @error('email')
                        <span class="text-red-500 text-sm mt-0.5">{{ $message }}</span>
                    @enderror
                </div>
                <div class='mb-5'>
                    <input type='password' id='password' placeholder='masukkan password anda' name="password"
                        class='bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5'
                        autofocus />
                    @error('password')
                        <span class="text-red-500 text-sm mt-0.5">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <button type='submit'
                    class='block text-white bg-orange-500 hover:bg-orange-500 focus:ring-4 focus:outline-none focus:ring-orange-500 font-medium rounded-md text-sm w-full px-5 py-2.5 text-center'>
                    Masuk
                </button>
            </form>
        </div>
        <div class=''>
            <img class='w-full h-screen object-cover' src={{ asset('images/frameBg.png') }} alt='frameBg' />
        </div>
    </div>
</body>

</html>
