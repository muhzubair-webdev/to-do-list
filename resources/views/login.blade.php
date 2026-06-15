<!DOCTYPE html>
<html lang="en" class="dark">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <title>Login - To-Do App</title>
  <link rel="stylesheet" href="/src/style.css">
</head>

<body class="relative min-h-screen flex items-center justify-center bg-gray-950 overflow-hidden font-sans">

  <!-- Dynamic Background Gradients -->
  <div class="absolute inset-0 z-0">
    <div
      class="absolute top-[-10%] left-[-10%] w-96 h-96 bg-purple-600 rounded-full mix-blend-multiply filter blur-[128px] opacity-40 animate-pulse">
    </div>
    <div
      class="absolute bottom-[-10%] right-[-10%] w-96 h-96 bg-blue-600 rounded-full mix-blend-multiply filter blur-[128px] opacity-40 animate-pulse"
      style="animation-delay: 2s;"></div>
  </div>

  <!-- Login Card -->
  <div
    class="relative z-10 w-full max-w-md p-8 mx-4 bg-white/5 backdrop-blur-xl border border-white/10 rounded-3xl shadow-2xl transition-all duration-300 hover:shadow-purple-500/10">

    <div class="text-center mb-10">
      <h1 class="text-3xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-purple-400 to-blue-400">Welcome
        Back</h1>
      <p class="text-gray-400 mt-2 text-sm">Sign in to manage your tasks efficiently.</p>
    </div>

    <form class="space-y-6" action="/dashboard.html">
      <!-- Email Input -->
      <div>
        <label for="email" class="block text-sm font-medium text-gray-300 mb-2">Email Address</label>
        <div class="relative">
          <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
            <svg class="h-5 w-5 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
            </svg>
          </div>
          <input type="email" id="email"
            class="block w-full pl-10 pr-3 py-3 border border-gray-700 rounded-xl leading-5 bg-gray-900/50 text-gray-100 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500 sm:text-sm transition-colors duration-200"
            placeholder="you@example.com" required>
        </div>
      </div>

      <!-- Password Input -->
      <div>
        <div class="flex items-center justify-between mb-2">
          <label for="password" class="block text-sm font-medium text-gray-300">Password</label>
          <a href="#" class="text-xs text-purple-400 hover:text-purple-300 transition-colors">Forgot password?</a>
        </div>
        <div class="relative">
          <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
            <svg class="h-5 w-5 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
            </svg>
          </div>
          <input type="password" id="password"
            class="block w-full pl-10 pr-3 py-3 border border-gray-700 rounded-xl leading-5 bg-gray-900/50 text-gray-100 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500 sm:text-sm transition-colors duration-200"
            placeholder="••••••••" required>
        </div>
      </div>

      <!-- Remember Me -->
      <div class="flex items-center">
        <input id="remember-me" name="remember-me" type="checkbox"
          class="h-4 w-4 rounded border-gray-700 bg-gray-900 text-purple-600 focus:ring-purple-500 focus:ring-offset-gray-900">
        <label for="remember-me" class="ml-2 block text-sm text-gray-400">
          Remember me
        </label>
      </div>

      <!-- Submit Button -->
      <div>
        <button type="submit"
          class="w-full flex justify-center py-3 px-4 border border-transparent rounded-xl shadow-sm text-sm font-medium text-white bg-gradient-to-r from-purple-600 to-blue-600 hover:from-purple-500 hover:to-blue-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500 focus:ring-offset-gray-900 transform transition-all duration-200 hover:scale-[1.02] hover:shadow-lg hover:shadow-purple-500/25 active:scale-[0.98]">
          Sign In
        </button>
      </div>
    </form>

    <p class="mt-8 text-center text-sm text-gray-400">
      Don't have an account?
      <a href="#" class="font-medium text-purple-400 hover:text-purple-300 transition-colors">Sign up now</a>
    </p>
  </div>

  <script type="module" src="/src/main.ts"></script>
</body>

</html>
