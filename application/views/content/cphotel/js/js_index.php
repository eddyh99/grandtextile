<script>
$(document).ready(function() {
    $('#cphotelTable').DataTable();
    //Datepicker
    $('#tgllahir').datepicker({
    format: 'dd/mm/yyyy',
    autoclose: true,
    startDate: '01/01/1950',
    });
     
    $('#tgllahir').on('keydown paste', function(event) {
        event.preventDefault();
    });
    $('form').submit(function() {
    var inputValue = $('#tgllahir').val();
    
    var parts = inputValue.split('/');
    
    if (parts.length === 3) {
        var formattedDate = parts[2] + '/' + parts[1] + '/' + parts[0];
        
        $('#tgllahir').val(formattedDate);
    }
    
    return true;
    });
    $('.delete-cp-button').click(function () {
            var selectednama = $(this).data('nama');
            var deleteUrl = $(this).data('href');
            $('#selectednama').text(selectednama);
            $('#deleteButton').attr('href', deleteUrl);
        });
});
</script>