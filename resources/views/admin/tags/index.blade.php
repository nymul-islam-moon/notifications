@extends('admin.main')


@push('faculty_script')
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">

    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">

@endpush


@section('admin_content')

<div class="main-content">
    <div class="page-content">
        <h1>hi</h1>

    </div>
</div>

{{-- <form id="deleted_form" action="" method="post">
    @method('DELETE')
    @csrf
</form>

<form id="restore_form" action="" method="post">
    @method('POST')
    @csrf
</form> --}}


@endsection

@push('js')

<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

<script>

</script>
@endpush
