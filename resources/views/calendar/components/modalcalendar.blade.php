<!-- Button trigger modal -->
<button id="clickMe" type="button" class="btn btn-primary d-none" data-bs-toggle="modal" data-bs-target="#exampleModal2">
    Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog regis">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel2">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body ">
                {{-- action reservation table --}}
                @if (auth()->user())
                {{-- FORM --}}
                <form method="POST" action="/calendar/store" class=" text-white d-flex flex-column ">
                  @csrf
                  <label for="">Your Name:</label>
                  <input name="title" placeholder="name" type="text" value="{{ Auth::user()->name }}">
                  <label for=""> Day</label>
                  <input name="dateStart" min="{{ date('Y-m-d') }}" value="{{ date('Y-m-d') }}" id="date-start" type="date">
                  <label for="">Start time</label>
                  <input name="timeStart" step="1800" required min="08:00:00" max="19:00:00" value="09:30:00" id="time-start"
                      type="time">
                  <label for="">end time</label>
                  <input name="timeEnd" id="time-end" type="time required min="08:00:00" max="24:00:00" value="24:00:00"">
                  <button class="w-f
                  bg-warning">RESERVE
                 </button>
    
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
