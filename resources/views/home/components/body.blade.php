{{-- section 1 --}}
<section class="sec1 w-full h-full p-3">
    <div class="d-flex w-full flex-row flex-column-reverse flex-lg-row ">
        {{-- first div --}}
        <div class="w-50 d-flex flex-column h-auto justify-content-center align-items-center ">
            <h1 class="">
                Good Food,
            </h1>
            <h1>Great Vibes</h1>

            <button class="w-10  border-none outline-none bg-warning">
                <a class="text-decoration-none text-white" href="/reservation">Make Reservation</a>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                </svg>
            </button>
        </div>
        {{-- second dev --}}
        <div class="w-50">
            <img class=" " width=" 680px" src="{{ asset('assets/images/plat02.svg') }}" alt="">
        </div>
    </div>
</section>

{{-- section 2 --}}
<section class="sec2 w-full h-full p-3">

    <div class="d-flex w-full flex-row flex-column-reverse flex-lg-row  ">
        {{-- first div --}}
        <div class="story w-50 d-lg-flex ">
            <div class="d-flex flex-column align-items-center">
                <img class=" " src="{{ asset('assets/images/story3.jpg') }}" alt="">
                <img class=" " src="{{ asset('assets/images/story6.jpg') }}" alt="">
            </div>
            <div class="down d-flex flex-column align-items-center">
                <img class=" " src="{{ asset('assets/images/story2.jpg') }}" alt="">
                <img class=" " src="{{ asset('assets/images/story4.jpg') }}" alt="">
            </div>
        </div>
        {{-- second dev --}}
        <div class=" w-50 d-flex flex-column h-auto justify-content-center align-items-center  ">
            <h1 class="text-warning">
                Our Story
            </h1>
            <p class="w-50">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repudiandae est aspernatur
                veritatis
                blanditiis animi illo aut veniam deleniti illum pariatur corrupti temporibus fugit cumque quos,
                repellat accusamus quasi rerum perspiciatis earum ipsum ad distinctio culpa consectetur adipisci.
                Reprehenderit hic ipsum amet, molestiae quia aspernatur. Quam vero ad esse suscipit! Ducimus mollitia
                aperiam quae doloremque,
                ab quaerat eveniet. Repudiandae, tempora eligendi.
            </p>
            <a class="text-decoration-none text-bold text-dark" href="">
                More About us
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                </svg>

            </a>
        </div>
    </div>


</section>

{{-- section 3 --}}
<section class="sec3 h-full w-full">
    <h1 class="text-warning">Today's Special</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia?</p>
    <div class="row row-cols-1 row-cols-md-4 g-3">
        <div class="col">
            <div class="card h-100 bg-dark">
                <img src="{{ asset('assets/images/plat8.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Pan-Seared Cod</h5>
                    <p class="card-text">Pan-Seared Cod with Wasabi Sweet Potato Mash and Miso Glaze.</p>
                    <div class="card-text d-flex align-items-center justify-content-between gap-3">
                        <p class="d-flex">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-star-fill" viewBox="0 0 16 16">
                                <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-star-fill" viewBox="0 0 16 16">
                                <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-star-fill" viewBox="0 0 16 16">
                                <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-star-fill" viewBox="0 0 16 16">
                                <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-star-half" viewBox="0 0 16 16">
                                <path
                                    d="M5.354 5.119 7.538.792A.52.52 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.54.54 0 0 1 16 6.32a.55.55 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.5.5 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.6.6 0 0 1 .085-.302.51.51 0 0 1 .37-.245zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.56.56 0 0 1 .162-.505l2.907-2.77-4.052-.576a.53.53 0 0 1-.393-.288L8.001 2.223 8 2.226z" />
                            </svg>
                        </p>
                        <p class="text-decoration-none text-warning">
                            <form>
                                @csrf
                               <button class="bg-warning rounded-1 border-0" ><a class="text-decoration-none text-black" href="{{ route("menu") }}">Order Now</a></button> 
                            </form>
                        </p>
                    </div>

                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 bg-dark">
                <img src="{{ asset('assets/images/plat13.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Pork Belly With Baked Radish</h5>
                    <p class="card-text">Pork Belly With Baked Radish, Carrot Puree and Caramelized.</p>
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
                        <p class="text-decoration-none text-warning">
                            <form >
                                @csrf
                               <button class="bg-warning rounded-1 border-0" ><a class="text-decoration-none text-black" href="{{ route("menu") }}">Order Now</a></button> 
                            </form>
                        </p>
                    </div>

                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 bg-dark">
                <img src="{{ asset('assets/images/plat3.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Mushroom Dusted Halibut</h5>
                    <p class="card-text">Mushroom Dusted Halibut, cubes of roasted pork belly with crispy skin.</p>
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
                        <p class="text-decoration-none text-warning">
                            <form >
                                @csrf
                               <button class="bg-warning rounded-1 border-0" ><a class="text-decoration-none text-black" href="{{ route("menu") }}">Order Now</a></button> 
                            </form>
                        </p>
                    </div>

                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 bg-dark">
                <img src="{{ asset('assets/images/plat14.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Roasted pumpkin, Rucola</h5>
                    <p class="card-text">Roasted pumpkin, Rucola with sour cream and chive mayonnaise .</p>
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
                        <p class="text-decoration-none text-warning">
                            <form >
                                @csrf
                               <button class="bg-warning rounded-1 border-0" ><a class="text-decoration-none text-black" href="{{ route("menu") }}">Order Now</a></button> 
                            </form>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- section 4 --}}
<section class="sec4 w-full h-full">
    <div class="d-flex w-full flex-row flex-column-reverse flex-lg-row  ">
        {{-- first div --}}
        <div class=" w-50 d-flex flex-column h-auto justify-content-center align-items-center  ">
            <h1 class="text-warning">
                Our Menu
            </h1>
            <p class="w-50">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repudiandae est aspernatur
                veritatis
                blanditiis animi illo aut veniam deleniti illum pariatur corrupti temporibus fugit cumque quos,
                repellat accusamus quasi rerum perspiciatis earum ipsum ad distinctio culpa consectetur adipisci.
                Reprehenderit hic ipsum amet, molestiae quia aspernatur. Quam vero ad esse suscipit! Ducimus mollitia
                aperiam quae doloremque,
                ab quaerat eveniet. Repudiandae, tempora eligendi.
            </p>
            <a class="text-decoration-none text-bold text-dark" href="">
                Menu
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                </svg>

            </a>
        </div>
        {{-- second dev --}}
        <div class=" w-50 d-lg-flex ">
            <div class="d-flex  align-items-center">
                <img class=" " src="{{ asset('assets/images/menu5.png') }}" alt="">
            </div>
        </div>
    </div>
</section>

{{-- section 6 --}}
{{-- <section class="sec7  h-full w-full ">
    <div class="sec7div">
        <div class="d-flex flex-column text-center">
            <h5>Lunch</h5>
            <p>Monday-Friday</p>
            <p>11:30AM-4PM</p>
        </div>
        <div class="d-flex flex-column text-center">
            <h5>Dinner</h5>
            <p>Monday-Friday</p>
            <p>11:30AM-4PM</p>
        </div>
        <div class="d-flex flex-column text-center">
            <h5>Brunch</h5>
            <p>Monday-Friday</p>
            <p>11:30AM-4PM</p>
        </div>
    </div>
</section> --}}



{{-- section 5 --}}
<section class="sec3 sec5 h-full w-full text-center">
    <h1 class="text-warning">Our Chefs</h1>
    <p class="w-25">
        station chef
    </p>
    <div class="row row-cols-1 row-cols-md-4 g-3">
        <div class="col">
            <div class="card h-100 ">
                <img src="{{ asset('assets/images/chef1.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-warning">Ferran Adrià</h5>
                    <p class="card-text">Head chef.</p>

                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 ">
                <img src="{{ asset('assets/images/chef5.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-warning">Annabel Langbein</h5>
                    <p class="card-text">Postry chef</p>

                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 ">
                <img src="{{ asset('assets/images/chef3.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-warning">Myrtle Allen</h5>
                    <p class="card-text">station chef</p>

                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="{{ asset('assets/images/chef4.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-warning">Reed Alexander</h5>
                    <p class="card-text">Head chef</p>
                </div>
            </div>
        </div>
    </div>
</section>
