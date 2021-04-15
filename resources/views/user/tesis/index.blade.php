@extends('layouts.user')

@section('style')
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-xl-12 pt-5 pb-5">
            @if ($bahasa == 'en')
              <h3 class="mt-5 font-1" style="font-weight: bolder;">Thesis</h3>
            @else
             <h3 class="mt-5 font-1" style="font-weight: bolder;">Tesis</h3>
            @endif
            <hr class="mb-5">
            <div style="overflow-x: scroll;">
              <table class="table table-hover" id="tesis">
                  <thead>
                    <tr class="bg-blue text-white">
                      @if (Request::segment(1) == 'en')
                      <th scope="col">Title</th>
                      <th scope="col">Author</th>
                      <th scope="col">Year</th>
                      @else
                      <th scope="col">Judul</th>
                      <th scope="col">Penulis</th>
                      <th scope="col">Tahun</th>
                      @endif
                      
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($artikeldosens as $artikeldosen)
                      <tr>
                        <td> <a style="color: black;" href="{{route('user.artikeldosen.show', [$bahasa,'tesis', $artikeldosen->slug])}}">{{$artikeldosen->judul}}</a></td>
                        <td>{{$artikeldosen->author}}</td>
                        <td>{{$artikeldosen->tahun}}</td>
                      </tr>
                    @endforeach
                    
                  </tbody>
              </table>
            </div>
        </div>
        
    </div>
</div>
    
@endsection

@section('script')
<script>
  $(document).ready( function () {
      $.noConflict();
      $('#tesis').DataTable();
  } );
</script>
@endsection

