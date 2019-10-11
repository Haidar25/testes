<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
    <title>API Haidar</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light shadow fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">Enterprise Application Integration</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/register">Daftar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/login">Masuk</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Full Page Image Header with Vertically Centered Content -->
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

<!-- Page Content -->
<section class="py-5">
  <div class="container">
    <h2 class="font-weight-light">Berita hangat hari ini</h2>
    <p>Mengumpulkan beberapa berita terhangat dari berbagai penjuru Indonesia dengan API newsapi.org</p>
 
          <!-- <form class="form-inline" method="POST" action="/filter-by">
            @csrf
            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Pilih Kategori Berita</label>
            <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="author">
              <option value="">Pilih Semua</option>
              <option value="bbc-news">BBC News</option>
              <option value="bbc-sport">BBC Sport</option>
            </select>

            <button type="submit" class="btn btn-primary my-1">Tampilkan  </button>
          </form> -->

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
      </div>
      </div>
</section>
      </div>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>