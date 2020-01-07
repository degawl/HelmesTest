$(document).ready(function() {
    $('.js-example-basic-multiple').select2({
        theme: 'bootstrap',
        placeholder: 'Select up to 5 options',
        maximumSelectionLength: 5,
        width: 'auto',
        allowClear: true
    });
});