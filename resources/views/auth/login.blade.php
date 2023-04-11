@extends('layouts.app')
@section('content')
<div class="container w-full max-w-sm mx-auto py-8">
  <h1 class="text-2xl font-bold mb-6 text-center ">Login</h1>

  @if (session('status'))
    <div id="alert-2" class="flex p-4 mb-4 text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
      <div class="ml-3 text-sm font-medium">
        <p>{{session('status')}}</p>
      </div>
      <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-2" aria-label="Close">
        <span class="sr-only">Close</span>
        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
      </button>
    </div>
  @endif
  
  <form method="POST" action="{{route('login')}}" class="bg-white p-8 rounded-md shadow-md">
    @csrf
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email</label>
      <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
        type="email" id="email" name="email" placeholder="john@example.com">
    </div>
    @error('email')
      <p class="text-red-700 pb-2">{{$message}}</p>
    @enderror
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="password">Password</label>
      <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
        type="password" id="password" name="password" placeholder="********">
    </div>
    @error('password')
      <p class="text-red-700 pb-2">{{$message}}</p>        
    @enderror
    <button
      class="w-full bg-indigo-500 text-white text-sm font-bold py-2 px-4 rounded-md hover:bg-indigo-600 transition duration-300"
      type="submit">Login</button>
  </form>
</div>
@endsection