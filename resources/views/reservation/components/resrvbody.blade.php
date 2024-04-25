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
          <div class="card">
            <img src="{{ asset($table->image) }}" width="100px" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{ $table->description }}</h5>
              <div class="d-flex justify-content-evenly">
                  <p class="card-text">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-table" viewBox="0 0 16 16">
                        <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm15 2h-4v3h4zm0 4h-4v3h4zm0 4h-4v3h3a1 1 0 0 0 1-1zm-5 3v-3H6v3zm-5 0v-3H1v2a1 1 0 0 0 1 1zm-4-4h4V8H1zm0-4h4V4H1zm5-3v3h4V4zm4 4H6v3h4z"/>
                      </svg>
                    {{ $table->table_number }}
                </p>
                  <p class="card-text">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
  <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
</svg>
                    {{ $table->capacity }}
                </p>
              </div>
              {{-- btn --}}
<!-- Button trigger modal -->
<button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal1">
    Book Now
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog regis">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5 text-warning" id="exampleModalLabel">Book A Table</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body ">
            {{-- action reservation table --}}
            @if (auth()->user())
            {{-- FORM --}}
            <form method="POST" action="" class=" text-white d-flex flex-column ">
              @csrf
              <label for="">Event Title</label>
              <input name="name" placeholder="name" type="text" value="{{ Auth::user()->name }}">
              <label for=""> Day</label>
              <input name="dateStart" min="{{ date('Y-m-d') }}" value="{{ date('Y-m-d') }}" id="date-start" type="date">
              <label for="">Start time</label>
              <input name="timeStart" step="1800" required min="08:00:00" max="19:00:00" value="09:30:00" id="time-start"
                  type="time">
              <label for="">end time</label>
              <input name="timeEnd" id="time-end" type="time required min="08:00:00" max="24:00:00" value="24:00:00"">
          </form>
          {{-- END FORM --}}
{{-- @include('reservation.components.modalcalendar') --}}

            @else
            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
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
<section class=" w-full h-full p-5 ">
    <div class="d-flex w-full flex-row flex-column-reverse flex-lg-row justify-content-evenly align-items-center  ">
        {{-- first div --}}
        <div class="w-full d-flex flex-column gap-3 justify-content-center align-items-center ">
            <h2 class="">
                Contact Get in touch!
            </h2>
            <h4 class="w-50 text-center">
                Have a question? Concern? Request? We’d 
                love to hear from you. Connect with us through the following ways.
            </h4>
            <form class="w-50">
                <div class="mb-3">
                  <label for="name" class="form-label">Full Name</label>
                  <input type="text" class="form-control" id="name" aria-describedby="nameHelp" placeholder="Full Name">
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Your Email">
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea type="message" class="form-control" id="message" aria-describedby="messageHelp" placeholder="Your Message">

                    </textarea> 

                </div>
                <button type="submit" class="btn btn-warning">Send</button>
              </form>        
            </div>
    </div>
</section>

{{--  --}}


