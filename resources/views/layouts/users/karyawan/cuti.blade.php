
@extends('layouts/contentLayoutMaster')

@section('title', 'Pengajuan Cuti Karyawan')

@section('vendor-style')
  <!-- vendor css files -->
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/select/select2.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/dataTables.bootstrap5.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/responsive.bootstrap5.min.css')) }}">
@endsection
@section('page-style')
  {{-- Page Css files --}}
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-validation.css')) }}">
@endsection

@section('content')
<!-- Dashboard Analytics Start -->
<section id="dashboard-analytics">
  @include('panels.flash')
      <div class="col-lg-12 col-sm-12 col-12">
        @if ($data)
        <button id="btn-add" class="dt-button add-new btn btn-danger mb-2"  
        aria-controls="DataTables_Table_0" type="button" data-bs-toggle="modal" data-bs-target="#backdrop"><span>Cuti Baru</span></button>
        @endif
        <div class="card">

          <div class="card-header bg-danger flex-column align-items-start">
            <div class="row col-12">
                <div class="col-lg-1 col-2">
                    <div class="avatar bg-light p-50 m-0">
                        <div class="avatar-content text-danger">
                          <i data-feather="users" class="font-medium-5"></i>
                        </div>
                      </div>
                </div>
                <div class="col-lg-11 col-10 my-auto">
                    <p class="h4 card-text text-white">Riwayat Cuti</p>
                </div>
            </div>
          </div>
          <div class="card-body" >
            @if ($data)
            <div class="card-datatable table-responsive pt-3">
              <table class="dt-anggota table">
                <thead class="table-light">
                  <tr>
                    <th>No</th>
                    <th>Tanggal Cuti</th>
                    <th>Nama</th>
                    <th>Nip</th>
                    <th>Jabatan</th>
                    <th>Lama Cuti</th>
                    <th>Alasan</th>
                    <th>Status</th>
                  </tr>
                </thead>
              </table>
            </div>
            @else
            <div class="mt-2 alert alert-danger alert-dismissible fade show" role="alert">
              <div class="alert-body">
                  <strong>Anda belum melengkapi profil</strong><span>Silahkan lengkapi terlebih dahulu</span>
              </div>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            
          </div>
        </div>
      </div>
      <!-- Modal to add new user starts-->
      <div class="modal modal-danger fade text-start" id="backdrop" tabindex="-1" aria-labelledby="myModalLabel4"data-bs-backdrop="false" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel4">Pengajuan Cuti</h4>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form class="add-new-user pt-0" method="POST" action="{{route('cuti-add-karyawan')}}">
                @csrf
                <input type="hidden" name="id_users" value="{{auth()->user()->id}}"/>
                <div class="mb-1">
                  <label class="form-label" for="basic-icon-default-nip">NIP</label>
                  <input
                    type="text"
                    class="form-control dt-id_card"
                    id="basic-icon-default-id_card"
                    placeholder="Rapat"
                    value="{{$data->nip}}"
                    name="nip"
                    
                  />
                </div>
                <div class="mb-1">
                  <label class="form-label" for="basic-icon-default-name">Nama</label>
                  <input
                    type="text"
                    id="basic-icon-default-name"
                    class="form-control dt-name"
                    placeholder="12/02/2022"
                    value="{{auth()->user()->name}}"
                    
                    name="name"
                  />
                </div>
                <div class="mb-1">
                  <label class="form-label" for="basic-icon-default-jabatan">Jabatan</label>
                  <input
                    type="text"
                    id="basic-icon-default-jabatan"
                    class="form-control dt-jabatan"
                    name="jabatan"
                  />
                </div>
                <div class="mb-1">
                  <label class="form-label" for="basic-icon-default-status">Status</label>
                  <input
                    type="text"
                    id="basic-icon-default-status"
                    class="form-control dt-status"
                    name="status"
                    value="Pengajuan"
                  />
                </div>
                <div class="mb-1">
                  <label class="form-label" for="basic-icon-default-tanggal">Tanggal Cuti</label>
                  <input
                    type="date"
                    id="basic-icon-default-tanggal"
                    class="form-control dt-tanggal"
                    placeholder="12/02/2022"
                    name="tanggal"
                  />
                </div>
                <div class="mb-1">
                  <label class="form-label" for="basic-icon-default-lama">Lama Cuti</label>
                  <input
                    type="text"
                    id="basic-icon-default-lama"
                    class="form-control dt-lama"
                    name="lama"
                  />
                </div>
                <div class="mb-1">
                  <label class="form-label" for="basic-icon-default-alasan">Alasan Cuti</label>
                  <input
                    type="text"
                    id="basic-icon-default-alasan"
                    class="form-control dt-alasan"
                    name="alasan"
                  />
                </div>
                <button type="submit" class="btn btn-primary me-1 data-submit">Ajukan</button>
                <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal">Batal</button>
              </form>
            </div>
        </div>
      </div>
</section>
<!-- Dashboard Analytics end -->
@endsection

@section('vendor-script')
  <!-- vendor files -->
  <script src="{{ asset(mix('vendors/js/tables/datatable/jquery.dataTables.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/datatables.buttons.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.bootstrap5.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.responsive.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/responsive.bootstrap5.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/jszip.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/pdfmake.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/vfs_fonts.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/buttons.html5.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/buttons.print.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.rowGroup.min.js')) }}"></script>
@endsection
@section('page-script')
<script>
  /**
* DataTables Basic
*/

$(function () {
    'use strict';
  
    var dt_anggota = $('.dt-anggota');
  
    // Delete Record
    $('.dt-anggota tbody').on('click', '.item-delete', function () {
        dt_anggota.row($(this).parents('tr')).remove().draw();
    });
    // DATA ANGGOTA
    if (dt_anggota.length) {
      var dt_ang = dt_anggota.DataTable({
        ajax: "{{route('cuti-data-karyawan')}}",
        columns: [
          { data: '' },
          { data: 'tanggal' },
          { data: 'nama' },
          { data: 'nip' },
          { data: 'jabatan' },
          { data: 'lama' },
          { data: 'alasan' },
          { data: 'status' }
        ],
        columnDefs: [
          {
            "defaultContent": "-",
            "targets": "_all"
          },
            {
            //number
            targets: 0,
            title: 'No',
            orderable: false,
            render: function (data, type, full, meta) {
              return meta.row + meta.settings._iDisplayStart + 1;
            }
          }
        ],
        dom: '<"d-flex justify-content-between align-items-center mx-0 row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6"f>>t<"d-flex justify-content-between mx-0 row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
        displayLength: 7,
        lengthMenu: [7, 10, 25, 50, 75, 100],
        language: {
          paginate: {
            // remove previous & next text from pagination
            previous: '&nbsp;',
            next: '&nbsp;'
          }
        }
      });
    }
  });
  

</script>

@endsection
