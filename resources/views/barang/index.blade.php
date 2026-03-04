@extends('layouts.template')

@section('content')

<div class="card card-outline card-primary">

<div class="card-header">
<h3 class="card-title">{{ $page->title }}</h3>
</div>

<div class="card-body">

<table class="table table-bordered table-striped table-hover table-sm" id="table_barang">

<thead>
<tr>
<th>ID</th>
<th>Nama Barang</th>
</tr>
</thead>

</table>

</div>
</div>

@endsection

@push('js')

<script>

$(document).ready(function(){

$('#table_barang').DataTable({

serverSide:true,

ajax:{
url:"{{ url('barang/list') }}",
type:"POST"
},

columns:[

{data:'DT_RowIndex',orderable:false,searchable:false},

{data:'barang_nama'}

]

});

});

</script>

@endpush