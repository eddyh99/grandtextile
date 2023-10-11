<script>
$(document).ready(function() {
    //DataTables
    $('#deliveryTable').DataTable();
    $('#deliveryTable tbody').on('click', 'td.details-control', function() {
        var tr = $(this).closest('tr');
        var row = table.row(tr);

        if (row.child.isShown()) {
            // This row is already open - close it
            row.child.hide();
            tr.removeClass('shown');
            tr.next('.child-row').remove();
        } else {
            // Open this row
            row.child(tr.next('.child-row').html()).show();
            tr.addClass('shown');
        }
    });
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
    $('.delete-delivery-button').click(function () {
            var selectednama = $(this).data('nama');
            var deleteUrl = $(this).data('href');
            $('#selectednama').text(selectednama);
            $('#deleteButton').attr('href', deleteUrl);
        });
});

</script>