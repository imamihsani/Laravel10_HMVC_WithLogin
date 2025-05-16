<style>
    input,textarea,select{
        border-radius: 0px !important;
    }
    .tooltip { 
        pointer-events: none;
    }
</style>
@extends('profile::layouts.main')
@section('content')
<div class="content-wrapper">
    <div class="container-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <h4>My Profile</h4>
                </div>
            </div>
        </div>
    </div>
    <section class="content p-0 m-0">
        <div class="container-fluid p-0 m-0">
            <div class="row card p-0 m-0">
              

            <div class="card-body">

                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam laboriosam omnis autem ea totam eaque numquam ad? Minus, numquam. Aliquam impedit numquam natus iure magnam enim laudantium eaque illum nulla!

            </div>

                


            </div>
        </div>
    </section>
</div>
@endsection
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var hamburgermenuButton = document.querySelector('[data-widget="pushmenu"]');
        if (hamburgermenuButton) {
            hamburgermenuButton.click();
        }

        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });

        // $(document).ready(function() {

        //     var table = $('#datatable').DataTable({
        //         responsive: false,
        //         lengthMenu: [10, 15, 25, 50, 100],
        //         pageLength: 50,
        //         paging: true,
        //         searching: true,
        //         ordering: true,
        //         info: true,
        //         scrollY: 360,
        //         scrollX: true,
        //         bScrollCollapse:true,
        //         fixedColumns:{
        //             leftColumns:4,
        //         },
        //         // rowCallback: function(row, data, index) {
        //         //     $('td:eq(0)', row).html(index + 1);
        //         // },
        //         dom: '<"py-1 px-1 d-flex justify-content-between align-items-center"l<"custom-html">f>rt<"bottom"ip><"clear">',
        //         initComplete: function() {
        //             $('#datatable thead th').removeClass('sorting sorting_asc sorting_desc');
        //             $("div.custom-html").html(`
        //                 <div class="d-flex align-items-center">
        //                     <input type="date" class="form-control form-control-sm" name="dari">
        //                     <span>s/d</span>
        //                     <input type="date" class="form-control form-control-sm" name="sampai">
        //                     <button class="btn btn-sm btn-primary ml-1" type="button" id="filter_tanggal" name="filter_tanggal">
        //                         <i class="fa fa-search"></i>
        //                     </button>
        //                     <select class="form-control form-control-sm ml-1" id="filter_jenis">
        //                         <option value="All">Filter Jenis</option>
        //                         <option value="Reguler">Reguler</option>
        //                         <option value="Express">Express</option>
        //                     </select>
        //                 </div>
        //             `); 

        //             $(document).ready(function() {
        //                 $('#filter_jenis').val('All');
        //                 $('#filter_jenis').trigger('change');
        //             });
        //             $('#filter_jenis').on('change', function() {
        //                 var selectedJenis = $(this).val();
        //                 if (selectedJenis === 'All') {
        //                 table.column(5).search('').draw();
        //                 } else {
        //                     table.column(5).search(selectedJenis).draw();
        //                 }
        //             });

        //             this.api().columns().every(function () {
        //                 var column = this;
        //                 var title = column.footer().textContent.trim();
        //                 if (title) { 
        //                     var input = document.createElement('input');
        //                     input.placeholder = 'Filter ' + title;
        //                     input.classList.add('form-control', 'form-control-sm');
        //                     column.footer().replaceChildren(input);
        //                     input.addEventListener('keyup', () => {
        //                         if (column.search() !== input.value) {
        //                             column.search(input.value).draw();
        //                         }
        //                     });
        //                 }
        //             });

                   

        //         },
                    
        //     });

        //     table.on('order.dt search.dt', function () {
        //         table.column(0, { search: 'applied', order: 'applied' }).nodes().each(function (cell, i) {
        //             var pageInfo = table.page.info();
        //             var startIndex = pageInfo.start;  
        //             cell.innerHTML = startIndex + i + 1;
        //         });
        //     }).draw(); 

                    
           

        // });
        
      



       


        

       

    });
</script>