<script>
$(document).ready(function() {
    var table = $('#produkTable').DataTable({
        data: <?php echo json_encode($produk_data); ?>,
        columns: [
            
            { data: 'kategori' },
            { data: 'quality' },
            { data: 'design' },
            { data: 'namabarang'},
            { data: 'color' },
            { 
                data: 'img_src',
                render: function(data, type, row) {
                    // Assuming img_src contains the path to the image
                    return '<img src="' + data + '" alt="Product Image" style="max-width: 100px; max-height: 100px;" />';
                }
            },
        ],
    });
});

</script>