<script>
$(document).ready(function() {
    $('#kategoriTable').DataTable(); 
});
    $('.delete-reseller-button').click(function () {
            var selectedkategori = $(this).data('kategori');
            $('#selectedkategori').text(selectedkategori);
        });
</script>