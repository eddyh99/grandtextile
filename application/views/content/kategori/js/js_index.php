<script>
$(document).ready(function() {
    $('#kategoriTable').DataTable(); 
});
    $('.delete-kategori-button').click(function () {
            var selectedkategori = $(this).data('namakategori');
            $('#selectedkategori').text(selectedkategori);
        });
</script>