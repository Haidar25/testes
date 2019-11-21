
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">


<style>
.masthead {
  height: 100vh;
  min-height: 500px;
  background-image: url('https://source.unsplash.com/BtbjCFUvBXs/1920x1080');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}
</style>
 
@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <center><div class="card-header"><strong>AYO OLAHRAGA !!!</strong></div></center>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                </div>
                <header class="masthead">
  <div class="container h-100">
    <div class="row h-100 align-items-center">
      <div class="col-12 text-center">
        <h1 class="font-weight-light">Tugas Login dan Public API</h1>
        <p class="lead">Laravel</p>
      </div>
    </div>
  </div>
</header>
        
        <!-- batas -->
        <div class="card-body">
          <table class="table table-striped">
            <thead>
              <tr>
                
                <th scope="col">No</th>
                <th scope="col">Judul Berita</th>
                <th scope="col">Sumber</th>
                <th scope="col">Penulis</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Isi Berita</th>
                <th scope="col">Link</th>


              </tr>
            </thead>
            <tbody>
              @foreach($articles as $key =>$article)
              <tr>
                <th scope="row">{{ $key + 1 }}</th>
                <td>{{ $article->title }}</td>
                <td>{{ $article->source->name }}</td>
                <td>{{ $article->author }}</td>
                <td>{{ Carbon\Carbon::parse($article->publishedAt)->toFormattedDateString()}}</td>
                <td><img src="{{$article->urlToImage}}" alt="" class="img-fluid" />{{ $article->content }}</td>
                <td><a href="{{$article->url}}" target="_blank"><small>BACA SELENGKAPNYA...</small></a></td>
                
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <!-- batas -->
            </div>
        </div>
        
    </div>
</div>
@endsection
