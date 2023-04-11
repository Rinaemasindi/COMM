@extends('layouts.app')
@section('content')

<div class="container mx-auto py-8">
  <h1 class="text-2xl font-bold mb-6 text-center">Registration Form</h1>
  <form method="POST" action="{{route('register')}}" class="w-full max-w-sm mx-auto bg-white p-8 rounded-md shadow-md">
    @csrf
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Name</label>
      <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
        type="text" id="name" value="{{old('name')}}" name="name" placeholder="John Doe">
    </div>
    
    @error('name')
      <p class="text-red-700">{{$message}}</p>
    @enderror

    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email</label>
      <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
        type="email" value="{{old('email')}}" id="email" name="email" placeholder="john@example.com">
    </div>
    
    @error('email')
      <p class="text-red-700">{{$message}}</p>
    @enderror

    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="password">Password</label>
      <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
        type="password" id="password" name="password" placeholder="********">
    </div>

    @error('password')
      <p class="text-red-700">{{$message}}</p>
    @enderror

    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="confirm-password">Confirm Password</label>
      <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
        type="password" id="confirm-password" name="password_confirmation" placeholder="********">
    </div>
    <button
      class="w-full bg-indigo-500 text-white text-sm font-bold py-2 px-4 rounded-md hover:bg-indigo-600 transition duration-300"
      type="submit">Register</button>
  </form>
</div>
@endsection