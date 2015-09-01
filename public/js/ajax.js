/**
 * Ajax for wedding edit
 * @returns {boolean}
 */
function ajaxWeddEdit(){

}
/**
 * Ajax for wedding delete
 * @returns {boolean}
 */
function ajaxWeddDelete(){


        //var csrf = $('meta[name=_token]').attr('content');
        //
        //var id =  '1111';
        //
        //jQuery.ajax({
        //    url: "event/delete",
        //    type: "POST",
        //    dataType: 'json',
        //    data: {
        //        event_id : id
        //    },
        //    beforeSend: function(request) {
        //        //request.setRequestHeader('X-CSRF-Token', csrf);
        //    },
        //
        //    success: function(data){
        //
        //        //jQuery(".ajax-load").hide();
        //        //$("#response").html(data.result);
        //        alert('success');
        //        console.log(data);
        //    },
        //    error: function(data){
        //        //jQuery(".ajax-load").hide();
        //        //$("#response").html(data);
        //        alert('error');
        //        console.log(data);
        //    }
        //
        //});

}
/**
 *  Send Ajax function
 */
function sendAjax(){
    $('#wedd_edit').trigger('click');
    $('#wedd_delete').trigger('click');

    $(document).on("click", "a", function(){
        var action = ($(this).attr('id'));
        if(action == 'wedd_edit'){
            ajaxWeddEdit();
            return false;
        }
        if(action == 'wedd_delete'){
            ajaxWeddDelete();
            return false;
        }
    });
}

