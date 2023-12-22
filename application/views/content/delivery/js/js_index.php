<script>
$(document).ready(function() {
    //DataTables
    var table = $('#deliveryTable').DataTable({
        data: <?php echo json_encode($delivery_data); ?>,
        columns: [
            {
                className: 'dt-control',
                orderable: false,
                data: null,
                defaultContent: ''
            },
            { data: 'noInvoice' },
            { data: 'noDelivery' },
            { data: 'tgl' },
            { data: 'penanggung'},
            { data: 'pengirim' },
            {
                orderable: false,
                data: null,
                defaultContent: `<a href="<?= site_url('delivery/editdelivery'); ?>" class="btn btn-link p-0">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11 4H4C3.46957 4 2.96086 4.21071 2.58579 4.58579C2.21071 4.96086 2 5.46957 2 6V20C2 20.5304 2.21071 21.0391 2.58579 21.4142C2.96086 21.7893 3.46957 22 4 22H18C18.5304 22 19.0391 21.7893 19.4142 21.4142C19.7893 21.0391 20 20.5304 20 20V13" stroke="#624DE3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M18.5 2.49998C18.8978 2.10216 19.4374 1.87866 20 1.87866C20.5626 1.87866 21.1022 2.10216 21.5 2.49998C21.8978 2.89781 22.1213 3.43737 22.1213 3.99998C22.1213 4.56259 21.8978 5.10216 21.5 5.49998L12 15L8 16L9 12L18.5 2.49998Z" stroke="#624DE3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            </a>
                            <button
                                type="button"
                                class="btn btn-link p-0 delete-delivery-button"
                                data-bs-toggle="modal"
                                data-bs-target="#myModal"
                            >
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3 6H5H21" stroke="#A30D11" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M8 6V4C8 3.46957 8.21071 2.96086 8.58579 2.58579C8.96086 2.21071 9.46957 2 10 2H14C14.5304 2 15.0391 2.21071 15.4142 2.58579C15.7893 2.96086 16 3.46957 16 4V6M19 6V20C19 20.5304 18.7893 21.0391 18.4142 21.4142C18.0391 21.7893 17.5304 22 17 22H7C6.46957 22 5.96086 21.7893 5.58579 21.4142C5.21071 21.0391 5 20.5304 5 20V6H19Z" stroke="#A30D11" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M10 11V17" stroke="#A30D11" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M14 11V17" stroke="#A30D11" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>

                            </button>`
            },
        ],
        rowCallback: function(row, data) {
            $('td:eq(6) .delete-delivery-button', row).data('nama', data.noInvoice);
        }
    });
    $('#deliveryTable tbody').on('click', 'td.dt-control', function() {
        var tr = $(this).closest('tr');
        var row = table.row(tr);

        if (row.child.isShown()) {
            // if row open = close it
            row.child.hide();
            tr.removeClass('shown');
        } else {
            // Open row
            var noInvoice = row.data().noInvoice;
            var detailData = <?php echo json_encode($detail_data); ?>; 

            
            var detailRows = detailData.filter(detail => detail.noInvoice === noInvoice);

            
            row.child(format(detailRows)).show();
            tr.addClass('shown');
        }
    });
    function format(detailRows) {
        // `d` is the original data object for the row
        return $(
            `<table class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th class="col-1"></th>
                        <th class="col-2">Nama Barang</th>
                        <th class="col-2"></th>
                        <th class="col-2"></th>
                        <th class="col-2">Jumlah</th>
                        <th class="col-2"></th>
                        <th class="col-1"></th>
                    </tr>
                </thead>
                <tbody>
                    ${detailRows.map(detail => `
                        <tr>
                            <td></td>
                            <td>${detail.namabarang}</td>
                            <td></td>
                            <td></td>
                            <td>${detail.jumlah}</td>
                            <td></td>
                            <td></td>
                        </tr>
                    `).join('')}
                </tbody>
            </table>`
        ).toArray();
    };
    
    $('.delete-delivery-button').click(function () {
            var selectednama = $(this).data('nama');
            var deleteUrl = $(this).data('href');
            $('#selectednama').text(selectednama);
            $('#deleteButton').attr('href', deleteUrl);
        });

});

</script>