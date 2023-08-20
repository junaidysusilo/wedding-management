import '../css/app.css';


$(function () {
    $(document).on('keyup', '#name', function () {
        const value = $(this).val()
        if (value === '') {
            $('.js-btn-submit').hide()
        }
        else {
            $('.js-btn-submit').show()
        }
    });
});