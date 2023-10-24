<script>
$(document).ready(function() {
    $('#kompenjahitTable').DataTable();
});

 $(document).ready(function() {
    $('#tgllahir').datepicker({
      format: 'dd/mm/yyyy', // Set the desired date format
      autoclose: true
    });
    
    // Disable text input while allowing datepicker
    $('#tgllahir').on('keydown paste', function(event) {
      event.preventDefault();
    });
    $('.delete-komisi-button').click(function () {
            var selectednama = $(this).data('nama');
            var deleteUrl = $(this).data('href');
            $('#selectednama').text(selectednama);
            $('#deleteButton').attr('href', deleteUrl);
        });
  });
</script>