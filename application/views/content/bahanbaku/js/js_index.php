<script>
$(document).ready(function() {
    $('#bahanbakuTable').DataTable(); 
$('.delete-bahanbaku-button').click(function () {
            var selectednama = $(this).data('nama');
            var deleteUrl = $(this).data('href');
            $('#selectednama').text(selectednama);
            $('#deleteButton').attr('href', deleteUrl);
        });
    $('#tglinput').datepicker({
      format: 'dd/mm/yyyy', // Set the desired date format
      autoclose: true
    });
    
    // Disable text input while allowing datepicker
    $('#tglinput').on('keydown paste', function(event) {
      event.preventDefault();
    });
  });
</script>