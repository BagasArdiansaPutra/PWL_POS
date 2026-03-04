@extends('layouts.template')
@section('content')
<div class="card card-outline card-primary">
<div class="card-header">
<h3 class="card-title">{{ $page->title }}</h3>
</div>
<div class="card-body">
<table class="table table-bordered table-striped table-hover table-sm" id="table_level">
<thead>
<tr>
<th>ID</th>
<th>Nama Level</th>
<th>Aksi</th>
</tr>
</thead>
</table>
</div>
</div>
@endsection
@push('js')
<script>
$(document).ready(function(){
$('#table_level').DataTable({
serverSide:true,
ajax:{
url:"{{ url('level/list') }}",
type:"POST"
},
columns:[
{data:'DT_RowIndex',orderable:false,searchable:false},
{data:'level_nama'},
{data:'aksi',orderable:false,searchable:false}
]
});
});
</script>
@endpush