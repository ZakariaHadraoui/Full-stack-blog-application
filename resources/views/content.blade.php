@extends('welcome')
@section('content')
<style>
    .hero-bg-image {
        margin: 0;
        background: url('https://images.unsplash.com/photo-1597839219216-a773cb2473e4?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8ZGFyayUyMGJhY2tncm91bmR8ZW58MHx8MHx8fDA%3D') no-repeat center center / cover;
        background-attachment: fixed;
        height: 80vh;
        width: 100%;
        background-size: cover;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        color: white;
        text-align: center;
    }

    .hero-bg-image h1 {
        letter-spacing: 8px;
        margin-bottom: 26px; /
    }

    .hero-bg-image a {
        display: inline-block;
        padding: 12px 24px;
        background-color: #111011;
        color: #F0F0F0; 

        border-radius: 8px; 
        text-decoration: none;
        font-weight: bold;
        transition: all 0.4s ease; 
    }

    .hero-bg-image a:hover {
        background-color: #ddd; 
        color: #111011;
        
    }
    .expert a{
        display: inline-block;
        padding: 12px 24px;
        background-color: #111011;
        color: #F0F0F0; 
        border-radius: 8px; 
        text-decoration: none;
        font-weight: bold;
        width: fit-content;
        transition: background-color 0.4s ease; 
      
    }
    .expert a:hover{
        background-color: blue; 
        color: #F0F0F0;
    }
    .expert{
        display: flex;
        flex-direction: column;
        gap: 20px;
        }
       
    .mx-2 {
        margin: 10px;
    }

    /* .categories-container {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 15px;
       
        margin-top: 20px;
    }

    .category {
        background-color: #f0f0f0;
        padding: 15px;
        border-radius: 8px;
    } */
   
</style>

<div class="hero-bg-image container mx-auto mt-8">
        <h1 style="line-height:1.8" class="text-gray-100 uppercase font-bold text-5xl pb-4 ">
            Find your Interests here easily  
        </h1>
   

    <a href="/blog">Start reading</a>
</div>
<div class="container sm:grid grid-cols-2 gap-15 mx-15 py-15 mt-5">
    <div class="mx-4 md:mx-0">
        <img class="sm:rounded-lg ml-2 mr-2 mb-4"  src="https://picsum.photos/id/1/960/620" alt="">

    </div>
    <div class=" expert m-10">
        <h2 style="letter-spacing: 12px" class="font-bold text-gray-700 text-4xl uppercase">Feel free to read </h2>
        <p style="line-height: 1.8;letter-spacing:10px" class="font-bold text-gray-800 text-3xl">
            You can find a list of Different Blogs here  <br>  
        </p>
        <a href="/blog">Read More</a>

    </div>
   

</div>
<div class="text-center p-8 bg-gray-700 text-gray-100 mb-4">
    <h2 class="font-bold text-gray-100 text-2xl uppercase  text-center">Blog Categories</h2>
   <div class="container mx-auto pt-10 sm:grid grid-cols-4">
        <div class="category  text-2xl font-bold py-2">UX Design</div>
        <div class="category  text-2xl font-bold py-2">Graphic Design</div>
        <div class="category  text-2xl font-bold py-2">Front End</div>
        <div class="category  text-2xl font-bold py-2">Back End</div>
   </div>
</div>
<div class="container mx-auto text-center py-15">
    <h2 class="font-bold text-5xl py-10">Recent posts</h2>
    <p class="text-gray-700 leading-8 mx-10">As a junior developer, I am driven by an unyielding passion for coding and problem-solving. Eager to contribute and learn, I embrace challenges as opportunities for growth. My journey in the world of development is marked by a relentless curiosity and a commitment to staying abreast of emerging technologies. </p>
</div>
<div class="sm:grid pt-10 grid-cols-2 w-4/5 mx-auto">
    <div class="flex bg-gray-700 text-gray-100 pt-10">
        <div class=" text-center block m-auto pt-4 pb-15 w-4/5">
           


            <h3 class="text-l py-10 leading-6">
                
                PHP Hypertext Preprocessoris a server-side scripting language commonly used for web development. It is embedded in HTML code and executed on the server, generating dynamic content. PHP is open-source, supports various databases, and is known for its simplicity and flexibility in creating dynamic web pages. It is a popular choice for building dynamic websites and web applications.
           
            </h3>

            <a href="/blog" class="bg-transparent border-2 text-gray-100 py-3 px-5 rounded-lg font-bold uppercase text-l inline-block mb-4">Read More</a>

        </div>

    </div>

    <div class="flex">
        <img class="object-cover" src="https://picsum.photos/id/241/960/620" alt="">
    </div>

</div>

@endsection