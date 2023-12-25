@extends('welcome')
@section('content')

<div style="margin-top: 100px" class="container m-auto text-center pt-15 pb-5">
    <h1 class="text-4xl font-bold">Add Your Blog</h1>
</div>

<div style="width: 80vw" class="container  mx-auto max-w-lg p-8 bg-gray-100 rounded-lg shadow-md">
    <form  action="/blog" method="post" enctype="multipart/form-data">
        @csrf

        <div class="mb-4">
            <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Title :</label>
            <input type="text" name="title" id="title" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-indigo-500">
        </div>

        <div class="mb-4">
            <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Content :</label>
            <textarea name="content" id="content" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-indigo-500" rows="5"></textarea>
        </div>

        <div class="mb-4">
			<label for="">Image :</label>
            <input hidden id="up" type="file" name="image" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-indigo-500">
            <label  for="up" class=" text-center ml-5 cursor-pointer bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600 focus:outline-none focus:border-green-700 focus:ring focus:ring-green-200">
                Upload Your Image
            </label>
        </div>

        <div class="mb-4 ">
            <button type="submit" class=" text-center mx-auto mt-5 bg-blue-500 text-black px-4 py-2 rounded-md hover:bg-blue-600 hover:text-white transition duration-600 focus:outline-none focus:border-blue-700 focus:ring focus:ring-blue-200">
                Create
            </button>
        </div>
        @if($errors->any())
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
        <strong class="font-bold">Oops!</strong>
        <span class="block sm:inline">{{ $errors->first() }}</span>
    </div>
@endif

    </form>
</div>

@endsection
