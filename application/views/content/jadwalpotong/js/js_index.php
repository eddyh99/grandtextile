<script>
$(document).ready(function() {
    $('#jadwalpotongTable').DataTable();
});
$(document).ready(function() {
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
    $('.delete-jadwalpotong-button').click(function () {
            var selectedjadwalpotong = $(this).data('nama');
            var deleteUrl = $(this).data('href');
            $('#selectedjadwalpotong').text(selectedjadwalpotong);
            $('#deleteButton').attr('href', deleteUrl);
        });
  });
</script>