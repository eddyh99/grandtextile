<script>
$(document).ready(function() {
    var table = $('#progressTable').DataTable({
        data: <?php echo json_encode($pesanan_data); ?>,
        columns: [
            
            { data: 'noprogress' },
            { data: 'tanggal' },
            { data: 'nominal' },
            { data:'keterangan'},
            { data: 'dp' },
            
        ],
    });
});

</script>