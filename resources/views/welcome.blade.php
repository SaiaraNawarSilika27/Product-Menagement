<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Purple NavBar</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="">

  <nav class=" bg-gradient-to-r from-purple-800 to-purple-500 text-white shadow-lg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex items-center justify-between h-16">
        <div class="flex items-center">
          <span class="font-bold text-xl">Home</span>
        </div>
        <div class="hidden md:block">
          <div class="ml-10 flex items-baseline space-x-4">
           <a href="/create" class="bg-white text-purple-600 hover:bg-purple-300 px-2 py-1 rounded-md shadow-md font-semibold inline-block">
  Go to
</a>
</div>
        </div>
        <div class="md:hidden">
          <button class="text-white focus:outline-none">
            <!-- Mobile menu icon -->
            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M4 6h16M4 12h16M4 18h16" />
            </svg>
          </button>
        </div>
      </div>
    </div>
  </nav>
  @if(session('success'))
  <h2 class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded">{{session('success')}}</h2>
  @endif
  <div class="">
    <div class="overflow-x-auto p-4">
  <table class="min-w-full text-left text-sm bg-purple-50 rounded-lg shadow-md">
    <thead class="bg-purple-600 text-white">
      <tr>
        <th class="px-4 py-3">ID</th>
        <th class="px-4 py-3">Name</th>
        <th class="px-4 py-3">Description</th>
        <th class="px-4 py-3">Image</th>
        <th class="px-4 py-3">Actions</th>
      </tr>
    </thead>
    <tbody class="divide-y divide-purple-200">
      @foreach($posts as $post)
      <tr>
        <td class="px-4 py-2">{{$post->id}}</td>
        <td class="px-4 py-2">{{$post->name}}</td>
        <td class="px-4 py-2">{{$post->description}}</td>
        <td class="px-4 py-2">
          <img src="images/{{$post->image}}" alt="Image" width="80px" class="h-12 w-12 rounded object-cover">
        </td>
        <td class="px-4 py-2 flex space-x-2">
          <a href="{{ route('edit',$post->id) }}"
     class="bg-green-600 text-white px-3 py-1 rounded hover:bg-green-300">
    Edit
  </a>
         <form action="{{route('delete',$post->id)}}" method="post">
         @csrf
         @method('delete')
         <button class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600" type="submit">Delete</button>
</form>
        </td>
      </tr>
      @endforeach
      <!-- Repeat rows as needed -->
    </tbody>
  </table>
</div>
<div class="flex justify-center  mt-4">
  {{ $posts->links() }}
</div>
  </div>
</body>
</html>
