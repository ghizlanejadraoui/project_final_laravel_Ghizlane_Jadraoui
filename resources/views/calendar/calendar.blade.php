@extends('layouts.index')
@section('content')
    @include('home.components.navbar')
    {{-- section 1 --}}
    <section class="ctsc1 w-full h-full p-3 ">
        <div
            class="d-flex w-full flex-row flex-column-reverse flex-lg-row justify-content-center align-items-center  ">
            {{-- first div --}}
            <div class="w-full d-flex flex-column justify-content-center align-items-center ">
                <h3 class="text-warning">
                    OUR CALENDAR
                </h3>
                <h1 class="cth1 ">
                    Reserve a table is easy in the restaurant with the booking form.
                </h1>
            </div>
        </div>
    </section>


    {{-- section calendar  --}}
    <section>

        <div class="p-4 sm:ml-64">
            <div class="w-[100%] ">
                <div class="flex w-full">
                    {{-- form --}}
    
                    <div class="d-flex justify-content-evenly align-items-center max-w-sm p-6    rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        {{-- calendar --}}
                        <div class="w-1/2">
                            <div class="">
    
                                <div id='calendar'></div>
                                @include('calendar.components.modalcalendar')
                            </div>
    
                            <script>
                                document.addEventListener('DOMContentLoaded', async function() {
                                    const {
                                        data
                                    } = await axios.get("/calendar/show")
    
                                    const events = data.events;
                                    console.log(data);
    
    
    
                                    var calendarEl = document.getElementById('calendar');
                                    var calendar = new FullCalendar.Calendar(calendarEl, {
    
                                        headerToolbar: {
                                            left: 'dayGridMonth,timeGridWeek,timeGridDay',
                                            center: 'title',
                                            right: 'listMonth,listWeek,listDay'
                                        },
    
    
                                        initialView: 'dayGridMonth',
                                        slotMinTime: "09:00:00", // min  time  appear in the calendar
                                        slotMaxTime: "24:00:00",
                                        nowIndicator: true,
                                        selectable: true,
                                        selectMirror: true,
                                        selectOverlap: true,
                                        weekends: true,
                                        events: events,
    
                                        selectAllow: (info) => {
                                            let instant = new Date()
                                            return info.start > instant
                                        },
                                        select: (info) => {
    
                                            let start = info.start
                                            let end = info.end
    
    
                                            if (end.getDate() - start.getDate() > 0 && !info.allDay) {
                                                alert("rak khditi bzaf dyal l wa9t")
                                                calendar.unselect()
                                                return
                                            }
                                            document.getElementById("date-start").value = formatDate(start).day
                                            if (info.allDay) {
                                                // document.getElementById("date-end").value = formatDate(start).day
                                                document.getElementById("time-start").value = "09:00:00"
                                                document.getElementById("time-end").value = "24:00:00"
                                            } else {
                                                // document.getElementById("date-end").value = formatDate(end).day
                                                document.getElementById("time-start").value = formatDate(start).time
                                                document.getElementById("time-end").value = formatDate(end).time
                                            }
    
    
                                            document.getElementById("clickMe").click()
    
    
                                        },
    
                                        eventClick: (info) => {
                                            // alert("event clicked")
    
                                            console.log(info);
                                        }
    
    
                                    });
                                    calendar.render();
    
                                    function formatDate(date) {
                                        let year = String(date.getFullYear())
                                        let month = String(date.getMonth() + 1).padStart(2, 0)
                                        let day = String(date.getDate()).padStart(2, 0)
    
                                        let hour = String(date.getHours()).padStart(2, 0)
                                        let min = String(date.getMinutes()).padStart(2, 0)
                                        let sec = String(date.getSeconds()).padStart(2, 0)
    
                                        return {
                                            day: `${year}-${month}-${day}`,
                                            time: `${hour}:${min}:${sec}`
                                        }
    
                                    }
                                });
                            </script>
    
    
                        </div>
    
                        {{-- image --}}
                        <div class="w-1/2 d-flex ">
                            <div class="story d-lg-flex ">
                                <div class="upcalendar d-flex flex-column align-items-center">
                                    <img class=" " src="{{ asset('build/assets/images/table7.jpg') }}" alt="">
                                    {{-- <img class=" " src="{{ asset('build/assets/images/story6.jpg') }}" alt=""> --}}
                                </div>
                                <div class="downcalendar d-flex flex-column align-items-center">
                                    {{-- <img class=" " src="{{ asset('build/assets/images/story2.jpg') }}" alt=""> --}}
                                    <img class=" " src="{{ asset('build/assets/images/table5.jpg') }}" alt="">
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
    </section>





            {{--  --}}
            {{-- section 4 --}}
            {{-- <section class="sec4 w-full h-full">
    <div class="d-flex w-full flex-row flex-column-reverse flex-lg-row  ">
        
        <div class=" w-50 d-flex flex-column h-auto justify-content-center align-items-center  ">
            <div class="d-flex  align-items-center">
                <img class=" " src="{{ asset('build/assets/images/menu5.png') }}" alt="">
            </div>
        </div>
        
        <div class=" w-50 d-lg-flex ">
    
        </div>
    </div>
</section>
 --}}


            {{-- section calendar --}}
            <section>
            </section>


            @include('home.components.footer')
        @endsection
