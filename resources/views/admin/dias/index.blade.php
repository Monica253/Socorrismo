@extends('adminlte::page')

@section('title', 'Dashboard')

@section('plugins.Fullcalendar', true)

@section('content_header')
    <h1>Calendar</h1>
@stop

@section('content')
    <link rel="stylesheet" href='https://fullcalendar.io/releases/core/4.1.0/main.min.css'/>
    <link rel="stylesheet" href='https://fullcalendar.io/releases/daygrid/4.1.0/main.min.css'/>
    <link rel="stylesheet" href='https://fullcalendar.io/releases/timegrid/4.1.0/main.min.css'/>
    <link rel="stylesheet" href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css'/>
    
    <div id='external-events'>
        <p>
          <strong>Draggable Events</strong>
        </p>
        <div class='fc-event'>My Event 1</div>
        <div class='fc-event'>My Event 2</div>
        <div class='fc-event'>My Event 3</div>
        <div class='fc-event'>My Event 4</div>
        <div class='fc-event'>My Event 5</div>
        <p>
          <input type='checkbox' id='drop-remove' />
          <label for='drop-remove'>remove after drop</label>
        </p>
      </div>
      
      <div id='calendar-container'>
        <div id='calendar'></div>
      </div>

    
@stop

@section('js')
@parent
    <script src='https://fullcalendar.io/releases/core/4.1.0/main.min.js'></script>
    <script src='https://fullcalendar.io/releases/interaction/4.1.0/main.min.js'></script>
    <script src='https://fullcalendar.io/releases/daygrid/4.1.0/main.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js'></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
        var Calendar = FullCalendar.Calendar;
        var Draggable = FullCalendarInteraction.Draggable;

        var containerEl = document.getElementById('external-events');
        var calendarEl = document.getElementById('calendar');
        var checkbox = document.getElementById('drop-remove');

        // initialize the external events
        // -----------------------------------------------------------------

        new Draggable(containerEl, {
            itemSelector: '.fc-event',
            eventData: function(eventEl) {
            return {
                title: eventEl.innerText,
                customAttribute: 'custom attribute'
            };
            }
        });

        // initialize the calendar
        // -----------------------------------------------------------------

        var calendar = new Calendar(calendarEl, {
            plugins: [ 'interaction', 'dayGrid', 'timeGrid' ],
            header: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,dayGridWeek,dayGridDay'
            },
            editable: true,
            droppable: true, // this allows things to be dropped onto the calendar
            drop: function(info) {
            // is the "remove after drop" checkbox checked?
            if (checkbox.checked) {
                // if so, remove the element from the "Draggable Events" list
                info.draggedEl.parentNode.removeChild(info.draggedEl);
            }
            },
            eventClick: function(info) {
            console.log(info.event.title); console.log(info.event.customAttribute);
            }
        });

        calendar.render();
        });
      </script>
@stop
