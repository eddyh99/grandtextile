<script>
$(document).ready(function() {
    //DataTables
    $('#penjahitTable').DataTable();
    
    $('.delete-penjahit-button').click(function () {
            var selectednama = $(this).data('nama');
            $('#selectednama').text(selectednama);
        });
});

</script>