<script>
$(document).ready(function() {
    $('#areaTable').DataTable();
});
    $('.delete-area-button').click(function () {
            var selectedarea = $(this).data('area');
            var deleteUrl = $(this).data('href');
            $('#selectedarea').text(selectedarea);
            $('#deleteButton').attr('href', deleteUrl);
        });
</script>