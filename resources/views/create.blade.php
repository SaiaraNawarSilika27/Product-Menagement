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
          <span class="font-bold text-xl">Create</span>
        </div>
        <div class="hidden md:block">
          <div class="ml-10 flex items-baseline space-x-4">
           <a href="/" class="bg-white text-purple-600 hover:bg-purple-300 px-2 py-1 rounded-md shadow-md font-semibold inline-block">
  Back to home
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
  <div class="bg-purple-50 flex items-center justify-center min-h-screen">
     <form action="{{route('store')}}" method="Post" class="bg-purple-100 p-8 rounded-2xl shadow-lg w-full max-w-md space-y-6" enctype="multipart/form-data">
        @csrf
    <h2 class="text-2xl font-bold text-purple-800 text-center">Submit Your Info</h2>

    <!-- Name -->
    <div>
      <label for="name" class="block text-purple-700 font-medium mb-1">Name</label>
      <input type="text" id="name" name="name" class="w-full px-4 py-2 rounded-lg border border-purple-300 focus:outline-none focus:ring-2 focus:ring-purple-500" value="{{old('name')}}" />
      @error('name')
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
  <span class="block sm:inline">{{ $message }}</span>
</div>
      @enderror
    </div>

    <!-- Description -->
    <div>
      <label for="description" class="block text-purple-700 font-medium mb-1">Description</label>
      <textarea id="description" name="description" rows="4" class="w-full px-4 py-2 rounded-lg border border-purple-300 focus:outline-none focus:ring-2 focus:ring-purple-500 "value="{{old('description')}}" ></textarea>
      @error('description')
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
  <span class="block sm:inline">{{ $message }}</span>
</div>
      @enderror
    </div>

    <!-- Image Upload -->
    <div>
      <label for="image" class="block text-purple-700 font-medium mb-1">Image File</label>
      <input type="file" id="image" name="image" class="w-full text-purple-700" accept="image/*" value="{{old('image')}}" />
      @error('image')
      <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
  <span class="block sm:inline">{{ $message }}</span>
</div>

      @enderror
    </div>

    <!-- Submit Button -->
    <div class="text-center">
      <button type="submit" class="bg-purple-600 hover:bg-purple-700 text-white font-semibold px-6 py-2 rounded-lg shadow-md transition duration-200">
        Submit
      </button>
    </div>
  </form>
  </div>
</body>
</html>
