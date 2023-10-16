<script>
$(document).ready(function() {
    $('#invoiceTable').DataTable();
});
$("#baruBtn").click(function() {
    $("#baruContent").show();
    $("#quotationContent").hide();
});

$("#quotationBtn").click(function() {
    $("#baruContent").hide();
    $("#quotationContent").show();
});
function toggleContent(contentId, buttonId) {
            document.getElementById('baruContent').style.display = 'none';
            document.getElementById('quotationContent').style.display = 'none';

            document.getElementById('baruBtn').classList.remove('btn-primary');
            document.getElementById('quotationBtn').classList.remove('btn-primary');

            document.getElementById(contentId).style.display = 'block';
            document.getElementById(buttonId).classList.add('btn-primary');
        }
        toggleContent('baruContent', 'baruBtn');
        document.getElementById('baruBtn').addEventListener('click', function() {
            toggleContent('baruContent', 'baruBtn');
        });

        document.getElementById('quotationBtn').addEventListener('click', function() {
            toggleContent('quotationContent', 'quotationBtn');
        });
</script>