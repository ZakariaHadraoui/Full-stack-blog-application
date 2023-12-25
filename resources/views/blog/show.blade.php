@extends('welcome') 

@section('content')
    <div class="container mx-auto p-4">
		@if (session()->get('msg'))
		<div id="alert-additional-content-3" class="p-4 mb-4 text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 dark:border-green-800" role="alert">
			<div class="flex items-center">
			  <svg class="flex-shrink-0 w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
				<path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
			  </svg>
			  <span class="sr-only">Alert</span>
			  <h3 class="text-lg font-medium">{{session()->get('msg')}}</h3>
			</div>
			 
			 
		</div>
	</div>
			
		@endif
       	
        <div class=" container border-b border-gray-300  mx-auto py-10 px-10 sm:grid grid-cols-2 gap-5">
			
	     <div class="flex">
		   <img class="object-cover" src="/images/{{$post->imgpath}}" alt="">
	     </div>
	     <div class="flex flex-col flex-wrap">
		<h2 class=" md:pt-0 text-gray-700 font-bold text-4xl py-5">{{$post->title}}  </h2>
		<span>
			 By : <span class="text-gray-500 italic"> {{$post->user->name}} </span>
		</span>
		<p  class="text-l text-gray-700 py-8 leading-8">
			{{$post->content}}
		</p>
		<a href="/blog/{{ $post->slug }}" class="bg-gray-700 border-2 text-gray-100 py-3 px-5 rounded-lg font-bold uppercase text-l inline-block mb-4 place-self-start" >Read More</a>
	     </div>
        </div>

		@if (Auth::user() && Auth::user()->id==$post->userid)

          <div class="container sm:grid mx-auto p-5 border-b border-gray-300">
			<a href="/blog/{{$post->slug}}/edit" class="bg-green-600 text-center mx-3   border-2 text-gray-100 py-3 px-5 rounded-lg font-bold uppercase text-l inline-block ">Edit</a>

          </div>
	
        @endif
		@if (Auth::user() && Auth::user()->id==$post->userid)
			<form action="/blog/{{$post->slug}}" method="POST" class="container sm:grid mx-auto p-5 border-b border-gray-300 "  >
				@csrf
				@method('delete')
				<button style="background: red" type="submit" href="/blog/{{$post->slug}}/edit" class="bg-red-700 text-center mx-3   border-2 text-red-100 py-3 px-5 rounded-lg font-bold uppercase text-l inline-block mb-4">Delete</button>
	
	
	
			</form>
		@endif
			
		
		
		
    </div>
@endsection
