@extends('layouts.app')
@section('content')
    <div class="container w-full max-w-lg mx-auto mx-auto py-8">
        <div class="bg-white p-8 rounded-md shadow-md">
            <div class="mb-5">
                <form method="POST" action="{{ route('posts') }}">
                  @csrf
                    <textarea rows="4" name="body" id="message" placeholder="Type your message" class="w-full resize-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"></textarea>
                    @error('body')
                      <p class="text-red-700">{{$message}}</p>
                    @enderror
                    <button type="submit"
                        class="hover:shadow-form rounded-md bg-[#6A64F1] py-3 px-8 text-base font-semibold text-white outline-none">
                        Submit
                    </button>
                </form>
            </div>
    </div>
    @if ($posts->count())
        @foreach ($posts as $post)
            
        @endforeach
    @else
        
    @endif
        {{-- Posts start here --}}
        <div class="px-5 mt-5 py-4 bg-white shadow rounded-lg max-w-lg">
            <div class="flex mb-4">
                <div class="ml-2 mt-0.5">
                    <span class="block font-medium text-base leading-snug text-black">Loyce Kuvalis</span>
                    <span class="block text-sm text-gray-500 font-light leading-snug">16 December at 08:25</span>
                </div>
            </div>
            <p class="text-gray-800 leading-snug md:leading-normal">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <div class="flex justify-between items-center mt-5">
                <div class="flex ">

                    <a href="#" class="text-gray-500 mr-1">Like</a> <span
                        class="ml-1 text-gray-500 font-light">8</span>
                </div>
                <div class="ml-1 text-gray-500 font-light">33 comments</div>
            </div>
        </div>
    </div>
    {{-- post ends here --}}
@endsection
