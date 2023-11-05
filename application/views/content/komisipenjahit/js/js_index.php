<script>
$(document).ready(function() {
    $('#kompenjahitTable').DataTable();
    
    $('.delete-penjahit-button').click(function () {
            var selectednama = $(this).data('jenis');
            $('#selectednama').text(selectednama);
        });
});

</script>