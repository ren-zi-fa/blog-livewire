<div class="">
  @foreach ($posts as $post)
  <h1 class="text-3xl font-extrabold dark:text-white text-center">{{$post->title}}</h1>
  <p class="mb-3 text-lg text-gray-500 md:text-xl dark:text-gray-400">{{$post->body}}</p>
  
  @endforeach
</div>