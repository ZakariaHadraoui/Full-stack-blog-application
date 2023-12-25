@extends('welcome')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

<div style="margin-top: 20px" class=" container m-auto text-center pt-15 pb-5">
	@if(session()->has('msg'))
			<div class="flex items-center p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
				<svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
				  <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
				</svg>
				<span class="sr-only">Info</span>
				<div>
				  <span class="font-medium">Post Deleted!</span> Your Post has been deleted
				</div>
			  </div>
			@endif
	<h1 style="margin-top: 70px" class="text-6xl font-bold mt-10 ">All Posts</h1>
</div>	
 
@if (Auth::check())

<div class="container sm:grid mx-auto p-5 border-b border-gray-300">
	<a href="/blog/create" class="bg-green-700 border-2 text-gray-100 py-3 px-10  rounded-lg font-bold uppercase text-l inline-block mb-2 place-self-center">Add Blog</a>
</div>
	
@endif
	


<div class=" container mx-auto py-10 px-10 sm:grid grid-cols-2 border-b border-gray-300 gap-5">
	<div class="flex">
		<img class="object-cover" src="https://picsum.photos/id/349/960/620" alt="">
	</div>
	<div>
		<h2 class=" md:pt-0 text-gray-700 font-bold text-4xl py-5">How To Create a blog with Laravel</h2>
		<span>
			 By : <span class="text-gray-500 italic"> Zakaria Hadraoui </span>
		</span>
		<p class="text-l text-gray-700 py-8 leading-8">
           To create a blog with Laravel, start by installing Laravel using Composer and setting up your database configuration. Implement Laravel's built-in authentication for user management. Generate a Post model and migration to define the post structure. Build CRUD operations for managing blog posts using Laravel's Eloquent ORM. Create frontend views with Laravel Blade to display and interact with blog posts. Customize the styling with CSS or a frontend framework for a visually    appealing blog interface.		</p>
		<a href="#" class="bg-gray-700 border-2 text-gray-100 py-3 px-5 rounded-lg font-bold uppercase text-l inline-block mb-4 place-self-start" >Read More</a>
	</div>
</div>
<div class=" container border-b border-gray-300  mx-auto py-10 px-10 sm:grid grid-cols-2 gap-5">
	<div class="flex">
		<img class="object-cover" src="https://picsum.photos/id/345/960/620" alt="">
	</div>
	<div>
		<h2 class=" md:pt-0 text-gray-700 font-bold text-4xl py-5">How To Be an active learner  </h2>
		<span>
			 By : <span class="text-gray-500 italic"> Zakaria Hadraoui </span>
		</span>
		<p class="text-l text-gray-700 py-8 leading-8">
             To become an active learner, adopt a proactive and intentional approach to acquiring knowledge. Start by setting clear learning goals and objectives for yourself. Break down larger topics into smaller, manageable tasks, making it easier to focus and track progress. Actively engage with the material by asking questions, seeking clarification, and participating in discussions. Utilize various learning resources such as books, online courses, and tutorials to gain diverse perspectives on the subject matter. Practice what you learn through hands-on exercises, projects, or real-world applications. Embrace a growth mindset, viewing challenges as opportunities for learning and improvement. Regularly review and reflect on your progress, adjusting your learning strategies as needed. Stay curious, stay motivated, and seek out opportunities for continuous learning to foster a dynamic and active learning experience.	
		</p>
		<a href="#" class="bg-gray-700 border-2 text-gray-100 py-3 px-5 rounded-lg font-bold uppercase text-l inline-block mb-4 place-self-start" >Read More</a>
	</div>
</div>
@foreach ($posts as $post)
	
<div class="  border-b border-gray-300 gap-10   py-10 sm:grid grid-cols-2 ">
	
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
@endforeach



@endsection