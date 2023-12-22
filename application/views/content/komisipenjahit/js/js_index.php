<script>
$(document).ready(function() {
    $('#kompenjahitTable').DataTable();
    $('#jenis').select2();
    $('#kategori').select2();
    
    $('.delete-penjahit-button').click(function () {
            var selectednama = $(this).data('jenis');
            $('#selectednama').text(selectednama);
        });
    
});

</script>