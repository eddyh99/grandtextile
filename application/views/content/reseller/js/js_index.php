<script>
$(document).ready(function() {
    $('#resellerTable').DataTable();
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
  });
</script>