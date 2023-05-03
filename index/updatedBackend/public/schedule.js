console.log('dawda')
// selectServices()
function selectServices(){
    $.ajax({
        url: "UpdatedBackend/Controller/User_Controller.php?type=showServices",
        type: "GET",
        dataType: "json",
        success:function(res){
            var html = ''
            console.log(res)
            // res.forEach(data => {
            //     console.log(data)
            //     html += `<option value="${data.id}">${data.services}</option>`
            // });
            // $('#bigSelect').append(html)
        }
    })
}


// document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
     var weekname = ['Sun','Mon','Tue','Wed','Thu','Fri','Sat']; 
     var month = ['January','February','March','April','May','June','July','August','September','October','November','December']; 
    var calendar = new FullCalendar.Calendar(calendarEl, {
        timeZone: 'UTC',
        // themeSystem: 'bootstrap5',
        headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        // remove for now : timeGridWeek,timeGridDay
        right: 'listMonth,dayGridMonth,multiMonthYear',
        },
        weekNumbers: true,
        dayMaxEvents: true, // allow "more" link when too many events

        // day grid
        // startting date view area
        //  initialDate: '2014-11-10',
      initialView: 'dayGridMonth',
    //   click day
    //   dateClick:function(info){
    //     // week index
    //     console.log(info)
    //     // string format date
    //     console.log(info.dateStr)
    //     console.log(weekname[info.date.getDay()]+' '+info.dayEl.innerText+' of '+month[info.date.getMonth()])
    //   },
    //   eventColor
    //  eventColor: '#378006',
    //   tooltip mounted
    eventDidMount: function(info) {
    var tooltip = new Tooltip(info.el, {
        title: info.event.extendedProps.description,
        placement: 'top',
        trigger: 'hover',
        container: 'body'
    });
    },
    events: [
    {
        title: 'All Day Event',
        description: 'description for All Day Event',
        start: '2023-04-01'
    },
    {
        title: 'Long Event',
        description: 'description for Long Event',
        start: '2023-04-07',
        end: '2023-04-10'
    },
    {
        groupId: '999',
        title: 'Repeating Event',
        description: 'description for Repeating Event',
        start: '2023-04-09T16:00:00'
    },
    {
        groupId: '999',
        title: 'Repeating Event',
        description: 'description for Repeating Event',
        start: '2023-04-16T16:00:00'
    },
    {
        title: 'Conference',
        description: 'description for Conference',
        start: '2023-04-11',
        end: '2023-04-13'
    },
    {
        title: 'Meeting',
        description: 'description for Meeting',
        start: '2023-04-12T10:30:00',
        end: '2023-04-12T12:30:00'
    },
    {
        title: 'Lunch',
        description: 'description for Lunch',
        start: '2023-04-12T12:00:00'
    },
    {
        title: 'Meeting',
        description: 'description for Meeting',
        start: '2023-04-12T14:30:00'
    },
    {
        title: 'Birthday Party',
        description: 'description for Birthday Party',
        start: '2023-04-13T07:00:00'
    },
    {
        title: 'Click for Google',
        description: 'description for Click for Google',
        url: 'http://google.com/',
        start: '2023-04-28'
    }
    ],

    // views: {
    // listDay: { buttonText: 'list day' },
    // listWeek: { buttonText: 'list week' },
    // listMonth: { buttonText: 'list month' }
    // },

    // headerToolbar: {
    // left: 'title',
    // center: '',
    // right: 'listDay,listWeek,listMonth'
    // },
    // eventColor: '#378006',
    // eventDisplay:'list-item',
    // eventBorderColor:'red'

    // eventTimeFormat: { // like '14:30:00'
    //     hour: '2-digit',
    //     minute: '2-digit',
    //     second: '2-digit',
    //     meridiem: false
    // }


    });
    calendar.render();
//   });