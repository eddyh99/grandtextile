<script>
$(document).ready(function() {
    $('#clientTable').DataTable();
});
$('.delete-client-button').click(function () {
            var selectedclient = $(this).data('nama');
            var deleteUrl = $(this).data('href');
            $('#selectedclient').text(selectedclient);
            $('#deleteButton').attr('href', deleteUrl);
        });
</script>