$(document).ready(function () {
    $(document).ready(function() {
        $('select').material_select();
    });

})

/**
 * Open modal edit category main
 * get ajax
 *
 **/
$(document).on('click','.edit_main_category_modal',function (e) {
    e.preventDefault();
    base_url = $(document).find('header').data('base_url');
    _token = $(document).find('input[name="_token"]').val();
    var id = $(this).data('id');
    var attrActionForm = $(document).find('form').attr('action') + '/' + id
    $.ajax({
        url: base_url + "/admin/data-category",
        method: 'POST',
        data: {
            id: id,
            _token: _token
        },
        success: function (result) {
            var res = JSON.parse(result);
            $(document).find('form').attr('action',attrActionForm);
            $(document).find('input[id="edit_category_name_en"]').val(res.category_name_en)
            $(document).find('label[for="edit_category_name_en"]').addClass('active')
            $(document).find('input[id="edit_category_name_ru"]').val(res.category_name_ru)
            $(document).find('label[for="edit_category_name_ru"]').addClass('active')
            $(document).find('input[id="edit_category_name_am"]').val(res.category_name_am)
            $(document).find('label[for="edit_category_name_am"]').addClass('active');
            if(res.hide == 1){
                $(document).find('input[id="checkboxHideShow"]').attr('checked', true);
            }
            $(document).find('#edit_mainCategory_modal').openModal();
        }
    });
});