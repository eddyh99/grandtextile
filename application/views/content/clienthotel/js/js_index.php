<script>
$(document).ready(function() {
    $('#clientTable').DataTable();
    $('#area').select2();
    $('#cphotel').select2();
});
$('.delete-clienthotel-button').click(function () {
            var selectednama = $(this).data('nama');
            $('#selectednama').text(selectednama);
        });
</script>