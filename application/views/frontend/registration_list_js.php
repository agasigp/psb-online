<script src="<?= base_url('resources/js/jquery.dataTables.min.js'); ?>"></script>
<script src="<?= base_url('resources/js/dataTables.bootstrap.js'); ?>"></script>
<script>
    $(document).ready(function() {
        $('#registrationlist').DataTable({
                fnDrawCallback: function (oSettings) {
                /* Need to redo the counters if filtered or sorted */
                if (oSettings.bSorted || oSettings.bFiltered) {
                    for (var i=0, iLen=oSettings.aiDisplay.length; i<iLen; i++) {
                        $('td:eq(0)', oSettings.aoData[ oSettings.aiDisplay[i] ].nTr).html(i+1);
                    }
                }
            },

            aoColumnDefs: [
                { "bSortable": false, "aTargets": [ 0 ] }
            ],
            aaSorting: [[ 1, 'asc' ]],
            order: [[ 8, "desc" ]]
        });
    });
    
    $("#program-keahlian").click(function() {
        $("form").submit();
    });
</script>