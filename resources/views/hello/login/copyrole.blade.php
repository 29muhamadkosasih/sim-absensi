 {{-- controller --}}

 <?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Contracts\Permission;
use App\Models\Permission as ModelsPermission;
use Yajra\DataTables\Facades\DataTables;

class PermissionController extends Controller
{
    private $page_title         = "Permission Management";
    private $route              = "permissions";
    private $permission         = "permission";
    private $pageConfigs        = ['pageHeader' => false];

    function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:' . $this->permission . '.index|' . $this->permission . '.create|' . $this->permission . '.edit|' . $this->permission . '.delete', ['only' => ['index', 'store']]);
        $this->middleware('permission:' . $this->permission . '.create', ['only' => ['create', 'store']]);
        $this->middleware('permission:' . $this->permission . '.edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:' . $this->permission . '.delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
    {
        $permission     = DB::table('permissions')->orderBy('name', 'DESC')->get();
        // Format bentuk data untuk autocomplete.
        $output = [];
        foreach ($permission as $data) {
            $output[] = [
                'value'     => $data->name,
                'data'      => $data->name
            ];
        }
        $autocomplete       = json_encode($output);

        return view('auth-app.permission.index', [
            'pageConfigs'   => $this->pageConfigs,
            'page_title'    => $this->page_title,
            'route'         => $this->route,
            'permission'    => $permission,
            'autocomplete'  => $autocomplete
        ]);
    }

    public function store(Request $request)
    {
        $requestData    = $request->all();
        ModelsPermission::findOrCreate($requestData['permission']);

        $role = Role::where('name', 'super-admin')->first();
        $role->syncPermissions(ModelsPermission::all());

        return redirect()->route('permissions.index')
            ->with(toaster('Permissions created successfully', 'success', 'Success'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $req)
    {
        $permission_edit    = ModelsPermission::find($id);
        $permission         = DB::table('permissions')->orderBy('name', 'DESC')->get();
        // Format bentuk data untuk autocomplete.
        $output = [];
        foreach ($permission as $data) {
            $output[] = [
                'value'     => $data->name,
                'data'      => $data->name
            ];
        }
        $autocomplete       = json_encode($output);

        return view('auth-app.permission.index', [
            'pageConfigs'       => $this->pageConfigs,
            'page_title'        => $this->page_title,
            'route'             => $this->route,
            'permission_edit'   => $permission_edit,
            'autocomplete'      => $autocomplete
        ]);
    }

    public function update(Request $request, $id)
    {
        $input  = $request->all();

        $Permission   = ModelsPermission::find($id);
        // dd($id);
        $Permission->update($input);

        return redirect()->route('permissions.index')
            ->with(toaster('Permission updated successfully', 'success', 'Success'));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = ModelsPermission::find($id);
        $delete->delete() == true
            ? $return = ['code' => 'success', 'msg' => 'data deleted successfully']
            : $return = ['code' => 'error', 'msg' => 'something went wrong!'];

        return response()->json($return);
    }
}



// view

// index

@extends('layouts/contentLayoutMaster')

@section('title', $page_title)

@section('vendor-style')
  {{-- vendor css files --}}
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/dataTables.bootstrap4.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/responsive.bootstrap4.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/buttons.bootstrap4.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/rowGroup.bootstrap4.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/pickers/flatpickr/flatpickr.min.css')) }}">
@endsection

@section('content')
<style>
    .autocomplete-suggestions {
       border: 1px solid rgba(231, 231, 231, 0.664);
       background: #FFF;
       overflow: auto;
       box-shadow: 0px 0px 30px 0px rgb(82 63 105 / 5%);
   }
   .autocomplete-suggestion {
       padding: 2px 5px;
       white-space: nowrap;
       overflow: hidden;
   }
   .autocomplete-selected {
       background: #F0F0F0;
   }
   .autocomplete-suggestions strong {
       font-weight: normal;
       color: #3399FF;
   }
   .autocomplete-group {
       padding: 2px 5px;
   }
   .autocomplete-group strong {
       display: block;
       border-bottom: 1px solid #000;
   }
</style>
<div class="row">
    @php
        $class_offset = 'offset-2';
    @endphp
    {{-- @can('permission.create') --}}
        @php
            $class_offset = '';
        @endphp
        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="card">
                {{-- Header --}}
                <div class="card-header border-bottom p-1">
                    <div class="head-label">
                        @if(isset($permission_edit))
                            <h4 class="mb-0">Edit Permission</h4>
                        @else
                            <h4 class="mb-0">Add Permission</h4>
                        @endif
                    </div>
                </div>
                {{-- Body --}}
                <div class="card-body pt-2">
                    @if(isset($permission_edit))
                        @include('auth-app.permission.edit')
                    @else
                        @include('auth-app.permission.create')
                    @endif
                </div>
            </div>
        </div>
    {{-- @endcan --}}
    <div class="col-xs-8 col-sm-8 col-md-8">
        <div class="card card-custom">
            {{-- Header --}}
            <div class="card-header border-bottom p-1">
                <div class="head-label">
                    <h3 class="mb-0">List Permission</h3>
                </div>
            </div>
            {{-- Body --}}
            <div class="card-body table-responsive" >
                <table class="table table-bordered yajra-datatable">
                    <thead>
                        <tr class="text-center">
                            <th width='30px'>No</th>
                            <th>Name</th>
                            <th>Guard</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th width='100px'>Action</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection

@push('vendor-script')
{{-- vendor files --}}
  <script src="{{ asset(mix('vendors/js/tables/datatable/jquery.dataTables.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/datatables.bootstrap4.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.responsive.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/responsive.bootstrap4.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/datatables.checkboxes.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/datatables.buttons.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/jszip.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/pdfmake.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/vfs_fonts.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/buttons.html5.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/buttons.print.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.rowGroup.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/pickers/flatpickr/flatpickr.min.js')) }}"></script>
@endpush

@push('page-script')
<script type="text/javascript">
     $(function () {
            'use strict';
            var dt_basic_table = $('.yajra-datatable');
            var type    = '';
            var url     = "{{ route('permissions.datatable') }}";
            @if(isset($permission_edit))
                var type    = 'edit';
            @else
                var type    = 'create';
            @endif
            // DataTable with buttons
            // --------------------------------------------------------------------

            if (dt_basic_table.length) {
                var dt_basic = dt_basic_table.DataTable({
                    processing: true,
                    serverSide: true,
                    ajax:{
                        url: url,
                        type: 'GET',
                        data: {
                            type: type
                        }
                    },
                    columns: [
                        {
                            data: 'DT_RowIndex',
                            name: 'DT_RowIndex',
                            orderable: false,
                            searchable: false
                        },
                        {data: 'name', name: 'name'},
                        {data: 'guard_name', name: 'guard_name'},
                        {data: 'created_at', name: 'created_at'},
                        {data: 'updated_at', name: 'updated_at'},
                        {
                            data: 'action',
                            name: 'action',
                            orderable: true,
                            searchable: true
                        },
                    ],
                    "columnDefs": [
                        { className: "text-center", "targets": [ 0, 5] }
                    ],
                    rowGroup: {
                        dataSrc: 'group'
                    },
                    scrollY: "500px",
                    scrollCollapse: true,
                    paging: false,
                    dom: '<"d-flex justify-content-between align-items-center mx-0 row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6"f>>t<"d-flex justify-content-between mx-0 row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
                    // buttons: [
                    // {
                    //     text: feather.icons['plus'].toSvg({
                    //         class: 'mr-50 font-small-4'
                    //     }) + 'Add New Record',
                    //     className: 'create-new btn btn-primary',
                    //     init: function (api, node, config) {
                    //         $(node).removeClass('btn-secondary');
                    //     }
                    // }],
                }).on( 'draw', function () {
                    $('[data-toggle="tooltip"]').tooltip();
                });;
            }
            var data = <?php echo $autocomplete ?>;
 // Selector input yang akan menampilkan autocomplete.
 $( "#permission" ).autocomplete({
 lookup: data
 });

 });

 $('#permission').on('keyup', function(){
 $(this).val(function (i, value) {
 return value.replace(/ /g, '.');
 });
 });
 </script>
@endpush









{{-- create --}}

{!! Form::open(['route' => 'permissions.store', 'method' => 'POST', 'id' => 'MyForm']) !!}

{{ Form::inputText('Permission: ', 'permission', null, null, ['placeholder' => 'permission name', 'required']) }}

<button onclick="CheckValidation();" type="submit" id="btn-submit" class="btn font-weight-bold btn-block btn-primary">
 Submit
</button>

{!! Form::close() !!}






{{-- edit --}}

{!! Form::model($permission_edit, [
    'method' => 'PATCH',
    'route' => ['permissions.update', $permission_edit->id],
    'id' => 'MyForm',
]) !!}

{{ Form::inputText('Permission: ', 'name', null, null, ['placeholder' => 'permission name', 'required']) }}

<div class="row">
 <div class="col-md-6">
     <button onclick="CheckValidation();" type="submit" id="btn-submit"
         class="btn font-weight-bold btn-block btn-primary">
         Update
     </button>
 </div>
 <div class="col-md-6">
     <a href="{{ route($route . '.index') }}" class="btn font-weight-bold btn-block btn-danger">Cancel</a>
 </div>
</div>

{!! Form::close() !!}
