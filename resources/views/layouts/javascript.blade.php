
<!-- jQuery 3 -->
<script src="/js/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 
<script src="/js/jquery-ui.min.js"></script>
-->
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('/js/bootstrap.min.js')}}"></script>
<!-- DataTables -->
<script src="{{asset('/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('/css/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('/css/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<!-- -->
<script src="{{asset('/js/raphael.min.js')}}"></script>

<!-- <script src="/js/morris.min.js"></script> -->

<!-- Sparkline -->
<script src="{{asset('/js/jquery.sparkline.min.js')}}"></script> 

<!-- jvectormap -->
<!-- <script src="/js/jquery-jvectormap-1.2.2.min.js"></script>-->

<!-- <script src="/js/jquery-jvectormap-world-mill-en.js"></script> -->
<!-- jQuery Knob Chart -->

<script src="{{asset('/js/jquery-knob/dist/jquery.knob.min.js')}}"></script>

<!-- daterangepicker -->

<!-- <script src="/js/moment.min.js"></script> -->
<!-- 
<script src="/js/daterangepicker.js"></script>
data pickrange -->

<!-- datepicker -->
<script src="{{asset('/js/bootstrap-datepicker.min.js')}}"></script>
<!-- select 2 -->
<script src="{{asset('/js/select2.full.min.js')}}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{asset('/js/bootstrap3-wysihtml5.all.min.js')}}"></script>
<!-- sweet alert -->
<script src="{{asset('/js/sweetalert.js')}}"></script>
<!-- Slimscroll -->
<script src="{{asset('/js/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<!-- PACE -->
<script src="{{asset('/js/pace.js')}}"></script>

<!-- checked at least for button showing -->
<script>
  $( document ).ready(function() {
    
    var checkboxes = $("input[type='checkbox']"),
    actions = $("#actions");

    checkboxes.click(function() {
    
       actions.attr("hidden", !checkboxes.is(":checked"));
      
    });

    $('#select_all').click(function(event) {
    if(this.checked) {
        // Iterate each checkbox
        $(':checkbox').each(function() {
            this.checked = true;
        });
    }
    else {
      $(':checkbox').each(function() {
            this.checked = false;
        });
    }
  });
      
});
</script>
<script src="{{asset('/js/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('/js/adminlte.min.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('/js/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes 
<script src="/js/demo.js"></script>
-->
<!-- CK EDITOR -->
<script src="{{asset('/js/ckeditor/ckeditor.js')}}"></script>
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
</script>
<!--
<script>
 $(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [ 
            {
                extend:    'copyHtml5',
                text:      '<i class="fa fa-files-o text-purple"></i>',
                titleAttr: 'Copy'
            },
            {
                extend:    'excelHtml5',
                text:      '<i class="fa fa-file-excel-o text-green"></i>',
                titleAttr: 'Excel'
            },
            {
                extend:    'csvHtml5',
                text:      '<i class="fa fa-file-text-o text-aqua"></i>',
                titleAttr: 'CSV'
            },
            {
                extend:    'pdfHtml5',
                text:      '<i class="fa fa-file-pdf-o text-red"></i>',
                titleAttr: 'PDF'
            },
            'colvis', 
            'print'
        ]
    } );
     $('#example-mapel-produktif-table').DataTable( {
        dom: 'Bfrtip',
        buttons: [ 
            {
                extend:    'copyHtml5',
                text:      '<i class="fa fa-files-o text-purple"></i>',
                titleAttr: 'Copy'
            },
            {
                extend:    'excelHtml5',
                text:      '<i class="fa fa-file-excel-o text-green"></i>',
                titleAttr: 'Excel'
            },
            {
                extend:    'csvHtml5',
                text:      '<i class="fa fa-file-text-o text-aqua"></i>',
                titleAttr: 'CSV'
            },
            {
                extend:    'pdfHtml5',
                text:      '<i class="fa fa-file-pdf-o text-red"></i>',
                titleAttr: 'PDF'
            },
            'colvis', 
            'print'
        ]
    } );
} );
</script>
-->
<script>
$(document).ready(function() {
    $('#example').DataTable( {
        scrollY:        350,
        scrollCollapse: true,
        paging:         false,
        stateSave: true,
        "processing": true,
        paginate : false,
        /* initComplete: function () {
            this.api().columns().every( function () {
                var column = this;
                var select = $('<select><option value="">Semua</option></select>')
                    .appendTo( $(column.footer()).empty() )
                    .on( 'change', function () {
                        var val = $.fn.dataTable.util.escapeRegex(
                            $(this).val()
                        );
 
                        column
                            .search( val ? '^'+val+'$' : '', true, false )
                            .draw();
                    } );
 
                column.data().unique().sort().each( function ( d, j ) {
                    select.append( '<option value="'+d+'">'+d+'</option>' )
                } );
            } );
        } */
    } );
} );
</script>
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2().css('width', '100%');
  });
</script>
<script>  
$(function(){
  cache: false,
  setInterval(function(){
     $('#refresh').load('/home/discuss-group');
  }, 2000
});
</script>
<!-- jam real time -->
<script type="text/javascript">
  function showTime() {
    var date = new Date(),
        utc = new Date(Date.UTC(
          date.getFullYear(),
          date.getMonth(),
          date.getDate(),
          date.getHours(),
          date.getMinutes(),
          date.getSeconds()
        ));

    document.getElementById('time').innerHTML = utc.toLocaleTimeString();
  }

  setInterval(showTime, 1000);
</script>
<!-- test doang realtime -->
<script type="text/javascript">
  function retrieveNotify() {
    document.getElementById('retrieve');
    setInterval(1000);
  }

  
</script>
