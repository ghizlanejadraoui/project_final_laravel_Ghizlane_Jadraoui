{{-- section 1 --}}
<section class="ctsc1 w-full h-full p-3 ">
    <div class="d-flex w-full flex-row flex-column-reverse flex-lg-row justify-content-center align-items-center  ">
        {{-- first div --}}
        <div class="w-full d-flex flex-column justify-content-center align-items-center ">
            <h3 class="text-warning">
                BOOK A TABLE
            </h3>
            <h1 class="cth1 ">
                Reserve a table is easy in the restaurant with the booking form.
            </h1>
        </div>
    </div>
</section>

{{-- section 2 --}}
<section class=" w-full h-full p-5 ">
    <div class="row row-cols-1 row-cols-md-4 g-4">
        @foreach ($tables as $table)
            <div class="col">
                <div class="card border-black">
                    <img src="{{ asset($table->image) }}" width="100px" height="500px" class="card-img-top "
                        alt="...">
                    <div class="card-body bg-black text-white">
                        <h5 class="card-title">{{ $table->description }}</h5>
                        <div class="d-flex justify-content-evenly ">
                            <p class="card-text">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-pin-fill text-warning" viewBox="0 0 16 16">
                                    <path
                                        d="M4.146.146A.5.5 0 0 1 4.5 0h7a.5.5 0 0 1 .5.5c0 .68-.342 1.174-.646 1.479-.126.125-.25.224-.354.298v4.431l.078.048c.203.127.476.314.751.555C12.36 7.775 13 8.527 13 9.5a.5.5 0 0 1-.5.5h-4v4.5c0 .276-.224 1.5-.5 1.5s-.5-1.224-.5-1.5V10h-4a.5.5 0 0 1-.5-.5c0-.973.64-1.725 1.17-2.189A6 6 0 0 1 5 6.708V2.277a3 3 0 0 1-.354-.298C4.342 1.674 4 1.179 4 .5a.5.5 0 0 1 .146-.354" />
                                </svg>
                                {{ $table->table_number }}
                            </p>
                            <p class="card-text">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-people-fill text-warning" viewBox="0 0 16 16">
                                    <path
                                        d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
                                </svg>
                                {{ $table->capacity }}
                            </p>
                        </div>
                        {{-- btn --}}
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                            data-bs-target="#exampleModal1">
                            Book Now
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog regis">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5 text-warning" id="exampleModalLabel">Book A Table
                                        </h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body ">
                                        {{-- action reservation table --}}
                                        @if (auth()->user())
                                            {{-- FORM --}}
                                            <form method="POST" action="/calendar/store"
                                                class=" text-white d-flex flex-column ">
                                                @csrf
                                                <label for="">your name</label>
                                                <input name="title" placeholder="name" type="text"
                                                    value="{{ Auth::user()->name }}">
                                                <label for=""> Day</label>
                                                <input name="dateStart" min="{{ date('Y-m-d') }}"
                                                    value="{{ date('Y-m-d') }}" id="date-start" type="date">
                                                <label for="">Start time</label>
                                                <input name="timeStart" step="1800" required min="08:00:00"
                                                    max="19:00:00" value="09:30:00" id="time-start" type="time">
                                                <label for="">end time</label>
                                                <input name="timeEnd" id="time-end" type="time required min="08:00:00"
                                                    max="24:00:00" value="24:00:00"">
                                                <button class="w-f
              bg-warning">RESERVE
                                                </button>

                                            </form>

                                            {{-- END FORM --}}
                                            {{-- @include('reservation.components.modalcalendar') --}}
                                        @else
                                            <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">
                                                Sign up
                                            </button>
                                        @endif





                                    </div>
                                </div>
                            </div>
                        </div>
                        {{--  --}}
                    </div>
                </div>
            </div>
        @endforeach
</section>
{{-- section 3 --}}
<section class=" w-full h-full p-5 flex-row flex-column-reverse flex-lg-row justify-content-evenly align-items-center">
    <div class="d-flex w-full flex-row flex-column-reverse flex-lg-row justify-content-evenly align-items-center  ">
        {{-- first div --}}
        <div class=" d-flex flex-column gap-3 justify-content-center align-items-center ">
            <h2 class="">
                Contact Get in touch!
            </h2>
            <h4 class="w-50 text-center ">
                Have a question? Concern? Request? We’d
                love to hear from you. Connect with us through the following ways.
            </h4>
            <form class="w-50">
                <div class="mb-3">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="name" aria-describedby="nameHelp"
                        placeholder="Full Name">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                        placeholder="Your Email">
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea type="message" class="form-control" id="message" aria-describedby="messageHelp"
                        placeholder="Your Message">

                    </textarea>

                </div>
                <button type="submit" class="btn btn-warning">Send</button>
            </form>
        </div>
{{-- div 2 --}}
<div class="w-50">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13295.99628170019!2d-7.539901435375194!3d33.57937339550532!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda7cbea4f73f86d%3A0x886bdf7aa1cbdb3c!2sLa%20Table%20de%20Yacout!5e0!3m2!1sfr!2sma!4v1714087280995!5m2!1sfr!2sma" width="600" height="450" style="border:0; border-radius: 20px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

    </div>
</section>

{{--  --}}
