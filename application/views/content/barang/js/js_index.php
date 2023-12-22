<script>
$(document).ready(function() {
    $('#barangTable').DataTable();
    $('#kategori').select2();
});
$('.delete-barang-button').click(function () {
            var selectedbarang = $(this).data('barang');
            $('#selectedbarang').text(selectedbarang);
        });
</script>