<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <link rel="icon" href="{{ asset('/images/Logo.png') }}" type="image/png">
  <title>Register | IDN</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-full flex items-center justify-center">

  <div class="w-full max-w-md bg-white rounded-2xl shadow-lg p-8">
    <!-- Logo -->
    <div class="text-center mb-6">
      <img class="mx-auto h-20 w-20" src="{{ asset('images/logo.png') }}" alt="Logo">
      <h2 class="text-3xl font-bold text-gray-800 mt-3">Buat Akun</h2>
      <p class="text-sm text-gray-600">Daftarkan akun baru untuk melanjutkan</p>
    </div>

    <!-- Error Message -->
    @if($errors->any())
      <div class="mb-4 p-3 bg-red-100 border border-red-300 text-red-700 rounded">
        {{ $errors->first() }}
      </div>
    @endif

    @if(session('error'))
      <div class="mb-4 p-3 bg-red-100 border border-red-300 text-red-700 rounded">
        {{ session('error') }}
      </div>
    @endif

    <!-- Register Form -->
    <form action="{{ route('register') }}" method="POST" class="space-y-5">
      @csrf
      <div>
        <label for="name" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
        <input type="text" name="name" id="name" value="{{ old('name') }}" required
          class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition duration-200">
      </div>

      <div>
        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
        <input type="email" name="email" id="email" value="{{ old('email') }}" required
          class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition duration-200">
      </div>

      <div>
        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
        <input type="password" name="password" id="password" required
          class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition duration-200">
      </div>

      <div>
        <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Konfirmasi Password</label>
        <input type="password" name="password_confirmation" id="password_confirmation" required
          class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition duration-200">
      </div>

      <button type="submit"
        class="w-full bg-indigo-600 text-white py-2 rounded-md font-semibold shadow-md hover:bg-indigo-500 transform hover:scale-[1.02] transition duration-300">
        Daftar
      </button>
    </form>

    <!-- Login Section -->
    <p class="mt-6 text-center text-sm text-gray-600">
      Sudah punya akun?
      <a href="{{ route('login') }}" class="text-indigo-600 font-semibold hover:underline">
        Masuk sekarang
      </a>
    </p>
  </div>

</body>
</html>
