import '../css/app.css';


$(function () {
    $(document).on('keyup', '#name', function () {
        const value = $(this).val()
        if (value == '') {
            $('.js-btn-edit').hide()
        }
        else {
            $('.js-btn-edit').show()
        }
    });
});