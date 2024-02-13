$('#search-form').on('shown.bs.modal', function () {
    var value = $('#search-form .form-control').val();
    $('#search-form .form-control').val('').focus().val(value);
});