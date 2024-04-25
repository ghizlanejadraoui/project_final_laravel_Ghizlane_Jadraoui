@extends('layouts.index')
@section('content')
    <div class="">

        <div  id='calendar'></div>
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
    document.getElementById("date-end").value = formatDate(start).day
    document.getElementById("time-start").value = "09:00:00"
    document.getElementById("time-end").value = "24:00:00"
} else {
    document.getElementById("date-end").value = formatDate(end).day
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
@endsection
