@extends('layouts.template')

@section('content')

<div class="card card-outline card-primary">

<div class="card-header">
<h3 class="card-title">{{ $page->title }}</h3>
</div>

<div class="card-body">

<table class="table table-bordered table-striped table-hover table-sm" id="table_kategori">

<thead>
<tr>
<th>ID</th>
<th>Nama Kategori</th>
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

var dataKategori = $('#table_kategori').DataTable({

serverSide:true,

ajax:{
"url":"{{ url('kategori/list') }}",
"type":"POST"
},

columns:[

{
data:"DT_RowIndex",
className:"text-center",
orderable:false,
searchable:false
},

{
data:"kategori_nama"
},

{
data:"aksi",
orderable:false,
searchable:false
}

]

});

});

</script>

@endpush