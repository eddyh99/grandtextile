<script>
$(document).ready(function() {
    $('#clientTable').DataTable();
});
$('.delete-clienthotel-button').click(function () {
            var selectednama = $(this).data('nama');
            $('#selectednama').text(selectednama);
        });
</script>