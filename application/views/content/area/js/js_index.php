<script>
$(document).ready(function() {
    $('#areaTable').DataTable();
});
    $('.delete-reseller-button').click(function () {
            var selectedarea = $(this).data('area');
            $('#selectedarea').text(selectedarea);
        });
</script>