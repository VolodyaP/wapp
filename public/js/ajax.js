/**
 * Ajax for wedding edit
 * @returns {boolean}
 */
function ajaxWeddEdit(){
    alert('ajax edit');
    return false;
}
/**
 * Ajax for wedding delete
 * @returns {boolean}
 */
function ajaxWeddDelete(){
    alert('ajax delete');
    return false;
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
        }
        if(action == 'wedd_delete'){
            ajaxWeddDelete()
        }
    });
}

