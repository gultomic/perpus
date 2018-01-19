@extends('admin.layout')
@section('title', 'Daftar Pinjam')
@section('content')
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_title">
        <h2>Transaksi Peminjaman Buku</h2>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
          <table id="renttable" class="table table-striped table-bordered">
              <thead>
                  <tr>
                    <th>Name</th>
                    <th>Position</th>
                    {{--  <th>Office</th>
                    <th>Age</th>
                    <th>Start date</th>
                    <th>Salary</th>  --}}
                  </tr>
                </thead>
                <tbody>
                  @foreach($data as $item)
                    <tr>
                      <td>name</td>
                      <td>position</td>
                    </tr>
                  @endforeach
                </tbody>
          </table>
      </div>
  </div>
</div>
@endsection
@push('scripts')
<script>
  $(document).ready(function(){
    $('#renttable').DataTable();
  });
</script>
@endpush