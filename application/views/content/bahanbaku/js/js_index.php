<script>
$(document).ready(function() {
    $('#bahanbakuTable').DataTable(); 
});
$(document).ready(function() {
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