<script>
$(document).ready(function() {
    $('#kategoriTable').DataTable(); 
});
    $('.delete-kategori-button').click(function () {
            var selectedkategori = $(this).data('namakategori');
            var deleteUrl = $(this).data('href');
            $('#selectedkategori').text(selectedkategori);
            $('#deleteButton').attr('href', deleteUrl);
        });
</script>