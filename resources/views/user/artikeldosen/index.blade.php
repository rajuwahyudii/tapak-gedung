@extends('layouts.user')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-xl-12 pt-5 pb-5">
            @if ($bahasa == 'en')
              <h3 class="mt-5 font-1" style="font-weight: bolder;">Lecturer Articles</h3>
            @else
             <h3 class="mt-5 font-1" style="font-weight: bolder;">Artikel Dosen</h3>
            @endif
            <hr class="mb-5">
            <table class="table table-hover">
                <thead>
                  <tr class="bg-blue text-white">
                    <th scope="col">Judul</th>
                    <th scope="col">Penulis</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($artikeldosens as $artikeldosen)
                    <tr>
                      <td> <a style="color: black;" href="{{route('user.artikeldosen.show', [$bahasa, $artikeldosen->judul])}}">{{$artikeldosen->judul}}</a></td>
                      <td>{{$artikeldosen->author}}</td>
                    </tr>
                  @endforeach
                  
                </tbody>
              </table>
        </div>
        
    </div>
</div>
    
@endsection