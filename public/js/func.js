
//Jquery datepicker https://jqueryui.com/datepicker/
function datepiker(){
        $(function() {
            $( "#datepicker" ).datepicker({
                showWeek: true,
                firstDay: 1,
                dateFormat: 'yy-mm-dd'
            });
        });
    }