<section class=" w-full h-full p-5 flex-row flex-column-reverse flex-lg-row justify-content-evenly align-items-center">
    <div class="d-flex w-full flex-row flex-column-reverse flex-lg-row justify-content-evenly align-items-center  ">
        {{-- first div --}}
        <div class=" d-flex flex-column gap-3 justify-content-center align-items-center ">
            <h2 class="text-warning">
                NEW POST
            </h2>
            <h4 class="w-50 text-center f">
               Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae nostrum, quasi tempora temporibus nihil sunt!
            </h4>

      {{-- form --}}
      <form class="w-50 contactbg p-3 Pgregister" action="/menu/store" enctype="multipart/form-data" method="post"
      class="max-w-sm mx-auto ">
      @csrf

      <div
          class=" max-w-sm p-6     rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
          <div class="flex flex-col ">
              <label for="image">Picture :</label>
              <div class="border-2 border-gray-300 p-6">
                  <input class="mt-2" type="file" name="image" id="">
              </div>
          </div>

          <div class="mt-2">
              <label for="name"
                  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product
                  Name :</label>
              <input name="name" type="name" id="name"
                  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-red-500 dark:focus:border-red-500"
                  placeholder="Product name..." required />
          </div>
          <div class="flex w-[100%] mt-2">

              <div class="w-[50%]">
                  <label for="price"
                      class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price
                      :</label>
                  <input name="price" type="price" id="price"
                      class="bg-gray-50 border border-gray-300 w-[150px] text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-red-500 dark:focus:border-red-500"
                      placeholder="Price" required />
              </div>
          </div>
          <div class="mt-2">
              <label for="description"
                  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description
                  :</label>
              <input name="description" type="description" id="description"
                  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-red-500 dark:focus:border-red-500"
                  placeholder="description" required />
          </div>
          <button type="submit"
              class="mt-2 text-white bg-warning">Post</button>
      </div>

  </form>
        </div>
{{-- div 2 --}}
<div class="w-50 d-flex align-items-center">
    <img src="{{ asset("build/assets/images/add post.jpg") }}" class="" width="300px" alt="">
</div>

    </div>
</section>



<section>
</section>

{{-- section 2 --}}
<section class="sec3 h-full w-full">
    <h1 class="flex justify-center font-bold mt-4 bg-red-600 p-3">MY STORE :</h1>
    <div class="row row-cols-1 row-cols-md-4 g-3">

    @foreach ($menus as $menu)
    <div class="col">
        <div class="card h-100 bg-dark">
            <img src="{{ asset('storage/img/' . $menu->image) }}" height="400px" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $menu->name }}</h5>
                <p class="card-text">{{ $menu->description }}</p>
                <div class="card-text d-flex align-items-center justify-content-between gap-3">
                    <form action="{{ route('menu.destroy', $menu->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button class="bg-danger text-white border-0 rounded-1" type="submit">Delete</button>
                    </form>
                    <p>
                        <a class="text-decoration-none text-warning" href="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-database-fill" viewBox="0 0 16 16">
                                <path d="M3.904 1.777C4.978 1.289 6.427 1 8 1s3.022.289 4.096.777C13.125 2.245 14 2.993 14 4s-.875 1.755-1.904 2.223C11.022 6.711 9.573 7 8 7s-3.022-.289-4.096-.777C2.875 5.755 2 5.007 2 4s.875-1.755 1.904-2.223"/>
                                <path d="M2 6.161V7c0 1.007.875 1.755 1.904 2.223C4.978 9.71 6.427 10 8 10s3.022-.289 4.096-.777C13.125 8.755 14 8.007 14 7v-.839c-.457.432-1.004.751-1.49.972C11.278 7.693 9.682 8 8 8s-3.278-.307-4.51-.867c-.486-.22-1.033-.54-1.49-.972"/>
                                <path d="M2 9.161V10c0 1.007.875 1.755 1.904 2.223C4.978 12.711 6.427 13 8 13s3.022-.289 4.096-.777C13.125 11.755 14 11.007 14 10v-.839c-.457.432-1.004.751-1.49.972-1.232.56-2.828.867-4.51.867s-3.278-.307-4.51-.867c-.486-.22-1.033-.54-1.49-.972"/>
                                <path d="M2 12.161V13c0 1.007.875 1.755 1.904 2.223C4.978 15.711 6.427 16 8 16s3.022-.289 4.096-.777C13.125 14.755 14 14.007 14 13v-.839c-.457.432-1.004.751-1.49.972-1.232.56-2.828.867-4.51.867s-3.278-.307-4.51-.867c-.486-.22-1.033-.54-1.49-.972"/>
                              </svg>
                            {{ $menu->price }} $
                        </a>
                    </p>
                </div>
                {{--  --}}
                <!-- Button trigger modal -->
<button type="button" class="btn bg-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    Update
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog ">
      <div class="modal-content Pgregister">
        <div class="modal-header bg-warning ">
          <h1 class="modal-title fs-5 text-black " id="staticBackdropLabel">Update your post</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body ">
            <form class="w-full  p-3 Pgregister" action="{{ route('menu.update', $menu->id) }}" method="POST" enctype="multipart/form-data" 
            class="max-w-sm mx-auto ">
            @csrf
            @method('put')
            <div
                class=" max-w-sm p-6     rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <div class="flex flex-col ">
                    <label for="image">Picture :</label>
                    <div class="border-2 border-gray-300 p-6">
                        <input class="mt-2" type="file" name="image" id="">
                    </div>
                </div>
      
                <div class="mt-2">
                    <label for="name"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product
                        Name :</label>
                    <input name="name" type="name" id="name"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-red-500 dark:focus:border-red-500"
                        placeholder="Product name..." required />
                </div>
                <div class="flex w-[100%] mt-2">
      
                    <div class="w-[50%]">
                        <label for="price"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price
                            :</label>
                        <input name="price" type="price" id="price"
                            class="bg-gray-50 border border-gray-300 w-[150px] text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-red-500 dark:focus:border-red-500"
                            placeholder="Price" required />
                    </div>
                </div>
                <div class="mt-2">
                    <label for="description"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description
                        :</label>
                    <input name="description" type="description" id="description"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-red-500 dark:focus:border-red-500"
                        placeholder="description" required />
                </div>
                <button type="submit"
                    class="mt-2 text-white bg-warning">Post</button>
            </div>
      
        </form>
      
        </div>
      </div>
    </div>
  </div>
                {{--  --}}
            </div>
        </div>
    </div>
@endforeach
    </div>

</section>