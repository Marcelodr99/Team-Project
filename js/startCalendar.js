$(document).ready(function () {
    
    jQuery.extend({
        getValues: function(url) {
            var result = null;
            var ur = window.location.origin + "/Team-Project/php/ajax.php";
            $.ajax({
                type: "GET",
                url: ur,             
                dataType: "json",
                async: false,             
                success: function(data){                    
                    result = data;
                }
            });
           return result;
        }
    });

    var results = $.getValues("url string");
    var setup = {
        weekDays: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
        months: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
        textArrows: {previous: '<', next: '>'},
        eventTitle: 'Booked Days',
        url: '',
        events: []       
}

    var arr = new Array();
    for (i in results) {
        var name = results[i].fname;
        for (j in results[i].date) {
          var date = results[i].date;
        }
        for (c in results[i].time) {
          var time = results[i].time;
        }
        
        var cDate = convertDate(date, time);
        
        arr.push({title: '', description: name, datetime: new Date(cDate)});
    }


    setup.events = arr;
    $('#calendar').eCalendar(setup);

    

    
});
function convertDate(date, t){
    
    var year = date.substring(0,4);
    var month = date.substring(5,7);
    var day = date.substring(8,10);
   
    var minute;
    var second;


    //AM
    if(t.charAt(1) != ":"){
        minute = t.substring(0,2);
        second = t.substring(3,5);
        
    }
    else{
        minute = t.substring(0,1);
        second = t.substring(2,4);
        
    }
    if(t.includes("PM")){
        minute = parseInt(minute) +12;
    }
    else{
        minute = "0" + minute;
    }
    
    return year + "-" + month + "-" + day + "T"+minute+":"+second;

}