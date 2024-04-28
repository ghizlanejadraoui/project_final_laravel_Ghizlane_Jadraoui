{{-- section 1 --}}
<section class="sec1 w-full h-full p-4 ">
    <div class="d-flex w-full flex-row flex-column-reverse flex-lg-row ">
        <div class="w-25 d-flex flex-column h-full justify-content-between">
            <img class=" " width=" 250px" src="{{ asset('build/assets/images/bgmenu1.png') }}" alt="">
            <img class="" width=" 300px" src="{{ asset('build/assets/images/bgmenu5.png') }}" alt="">
        </div>
        {{--  div 2 --}}
        <div class="w-50 d-flex  flex-column h-auto justify-content-center align-items-center ">
            <h1 class="text-warning">
                Fast <span class="text-white">TASTY,</span>
            </h1>
            <h1 class="text-warning"><span class="text-white">SERVED</span> WELL</h1>

            <button class="w-10  border-none outline-none bg-warning">
                <a class="text-decoration-none text-white" href="/reservation">Make Reservation</a>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                </svg>
            </button>
        </div>
        {{--  dev 3 --}}
        <div class="w-25 d-flex">
            <img class="" width=" 380px" src="{{ asset('build/assets/images/bgmenu3.png') }}" alt="">
        </div>
    </div>
</section>
{{-- section 2 --}}
<section class="sec4 w-full h-full p-4 ">
    <div class="d-flex w-full flex-row flex-column-reverse flex-lg-row  p-4">
        {{-- first div --}}
        <div class=" w-50 d-flex flex-column h-auto justify-content-center align-items-center  ">
            <h1 class="text-warning ">
                OUR MENU
            </h1>
            <div class="d-flex fw-bolder  justify-content-between w-full">

                <p class="w-50 text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    blanditiis animi illo aut veniam deleniti illum pariatur corrupti temporibus fugit cumque quos,
                    repellat accusamus quasi rerum perspiciatis earum ipsum ad distinctio culpa consectetur adipisci.
                    Reprehenderit hic ipsum amet, molestiae quia aspernatur. Quam vero ad esse suscipit! Ducimus
                    mollitia
                    aperiam quae doloremque,

                </p>
                <p class="w-50 text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    blanditiis animi illo aut veniam deleniti illum pariatur corrupti temporibus fugit cumque quos,
                    repellat accusamus quasi rerum perspiciatis earum ipsum ad distinctio culpa consectetur adipisci.
                    Reprehenderit hic ipsum amet, molestiae quia aspernatur. Quam vero ad esse suscipit! Ducimus
                    mollitia
                    aperiam quae doloremque,

                </p>
            </div>
            {{-- <a href="./directory/yourfile.pdf" >Download the pdf</a> --}}
            <a class="text-decoration-none text-bold text-dark bg-warning p-2 btnmenu" download href="{{ asset("build/assets/pdf/menu.pdf") }}">
                Menu
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                </svg>

            </a>
        </div>
        {{-- second dev --}}
        <div class="w-50 d-lg-flex justify-content-evenly ">
            <img class="shadowmenu" src="{{ asset('build/assets/images/sc1Menu.jpg') }}" width="300px" alt="">
            <img src="{{ asset('build/assets/images/sc1Menu2.jpg') }}" width="300px" alt="">
        </div>
    </div>
</section>
{{-- section 3 --}}
<section class="sec3 h-full w-full">
    <div class="w-full d-flex flex-column justify-content-center align-items-center ">
        <h1 class="text-warning">
            OUR PLAT
        </h1>
        <h2 class="w-50 text-center ">
            Reserve a plat is easy in the restaurant with the booking form.
        </h2>
    </div>

    <div class="row row-cols-1 row-cols-md-4 g-3">

        @foreach ($menus as $menu)
            <div class="col">
                <div class="card h-100 bg-dark">
                    <img src="{{ asset('storage/img/' . $menu->image) }}" height="400px" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $menu->name }}</h5>
                        <p class="card-text">{{ $menu->description }}</p>
                        <div class="card-text d-flex align-items-center justify-content-between gap-3">
                            <p class="d-flex">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-star-half" viewBox="0 0 16 16">
                                    <path
                                        d="M5.354 5.119 7.538.792A.52.52 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.54.54 0 0 1 16 6.32a.55.55 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.5.5 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.6.6 0 0 1 .085-.302.51.51 0 0 1 .37-.245zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.56.56 0 0 1 .162-.505l2.907-2.77-4.052-.576a.53.53 0 0 1-.393-.288L8.001 2.223 8 2.226z" />
                                </svg>
                            </p>
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
                        <p class="text-decoration-none text-warning">
                            <form action="{{ route('session')}}" method="get">
                                @csrf
                               <button>Order Now</button> 
                            </form>
                        </p>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
    <div class="p-3 ">{{ $menus->links('vendor.pagination.simple-bootstrap-4') }}</div>
</section>

{{-- section 4 --}}

<section class="sec3 h-full w-full ">
    <div class="w-full d-flex flex-column justify-content-center align-items-center ">
        <h1 class="text-warning">
            HOW IT WORKS
        </h1>
    </div>

    <div class="row row-cols-1 row-cols-md-3 g-3 text-center text-white">



        <div class="col">
            <p class="text-warning fw-bolder text-2xl">
                <svg xmlns="http://www.w3.org/2000/svg" width="90" height="90" fill="currentColor" class="bi bi-cup-hot-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M.5 6a.5.5 0 0 0-.488.608l1.652 7.434A2.5 2.5 0 0 0 4.104 16h5.792a2.5 2.5 0 0 0 2.44-1.958l.131-.59a3 3 0 0 0 1.3-5.854l.221-.99A.5.5 0 0 0 13.5 6zM13 12.5a2 2 0 0 1-.316-.025l.867-3.898A2.001 2.001 0 0 1 13 12.5"/>
                    <path d="m4.4.8-.003.004-.014.019a4 4 0 0 0-.204.31 2 2 0 0 0-.141.267c-.026.06-.034.092-.037.103v.004a.6.6 0 0 0 .091.248c.075.133.178.272.308.445l.01.012c.118.158.26.347.37.543.112.2.22.455.22.745 0 .188-.065.368-.119.494a3 3 0 0 1-.202.388 5 5 0 0 1-.253.382l-.018.025-.005.008-.002.002A.5.5 0 0 1 3.6 4.2l.003-.004.014-.019a4 4 0 0 0 .204-.31 2 2 0 0 0 .141-.267c.026-.06.034-.092.037-.103a.6.6 0 0 0-.09-.252A4 4 0 0 0 3.6 2.8l-.01-.012a5 5 0 0 1-.37-.543A1.53 1.53 0 0 1 3 1.5c0-.188.065-.368.119-.494.059-.138.134-.274.202-.388a6 6 0 0 1 .253-.382l.025-.035A.5.5 0 0 1 4.4.8m3 0-.003.004-.014.019a4 4 0 0 0-.204.31 2 2 0 0 0-.141.267c-.026.06-.034.092-.037.103v.004a.6.6 0 0 0 .091.248c.075.133.178.272.308.445l.01.012c.118.158.26.347.37.543.112.2.22.455.22.745 0 .188-.065.368-.119.494a3 3 0 0 1-.202.388 5 5 0 0 1-.253.382l-.018.025-.005.008-.002.002A.5.5 0 0 1 6.6 4.2l.003-.004.014-.019a4 4 0 0 0 .204-.31 2 2 0 0 0 .141-.267c.026-.06.034-.092.037-.103a.6.6 0 0 0-.09-.252A4 4 0 0 0 6.6 2.8l-.01-.012a5 5 0 0 1-.37-.543A1.53 1.53 0 0 1 6 1.5c0-.188.065-.368.119-.494.059-.138.134-.274.202-.388a6 6 0 0 1 .253-.382l.025-.035A.5.5 0 0 1 7.4.8m3 0-.003.004-.014.019a4 4 0 0 0-.204.31 2 2 0 0 0-.141.267c-.026.06-.034.092-.037.103v.004a.6.6 0 0 0 .091.248c.075.133.178.272.308.445l.01.012c.118.158.26.347.37.543.112.2.22.455.22.745 0 .188-.065.368-.119.494a3 3 0 0 1-.202.388 5 5 0 0 1-.252.382l-.019.025-.005.008-.002.002A.5.5 0 0 1 9.6 4.2l.003-.004.014-.019a4 4 0 0 0 .204-.31 2 2 0 0 0 .141-.267c.026-.06.034-.092.037-.103a.6.6 0 0 0-.09-.252A4 4 0 0 0 9.6 2.8l-.01-.012a5 5 0 0 1-.37-.543A1.53 1.53 0 0 1 9 1.5c0-.188.065-.368.119-.494.059-.138.134-.274.202-.388a6 6 0 0 1 .253-.382l.025-.035A.5.5 0 0 1 10.4.8"/>
                  </svg>
                </p>
            <p class="fw-bolder fs-2">Lorem, ipsum dolor.</p>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum, doloribus.</p>
        </div>
        <div class="col">
            <p class="text-warning fw-bolder text-2xl">
                <svg xmlns="http://www.w3.org/2000/svg" width="90" height="90" fill="currentColor" class="bi bi-shop" viewBox="0 0 16 16">
                    <path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.37 2.37 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0M1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5M4 15h3v-5H4zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1zm3 0h-2v3h2z"/>
                  </svg></p>
                  <p class="fw-bolder fs-2">Lorem, ipsum dolor.</p>
                  <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum, doloribus.</p>
        </div>
        <div class="col">
            <p class="text-warning fw-bolder text-2xl">
                <svg xmlns="http://www.w3.org/2000/svg" width="90" height="90" fill="currentColor" class="bi bi-truck" viewBox="0 0 16 16">
                <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5zm1.294 7.456A2 2 0 0 1 4.732 11h5.536a2 2 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456M12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2"/>
              </svg></p>
              <p class="fw-bolder fs-2">Lorem, ipsum dolor.</p>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum, doloribus.</p>
        </div>


    </div>
</section>
