<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{route('index')}}" style='font-size:1.8rem; padding-bottom: 13px;'>Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse h5" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="{{route('index')}}">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="#">Features</a>
      <a class="nav-item nav-link" href="#">Pricing</a>
      <a class="nav-item nav-link disabled" href="#">Disabled</a>
    </div>
  </div>

  <div class="collapse navbar-collapse h6 justify-content-end" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link" style="margin:auto;" href="{{route('login')}}">ログイン</a>
      <a class="nav-item nav-link" href="{{route('register')}}"><button type="button" class="btn btn-success">新規登録</button></a>
      <a class="nav-item nav-link" style="margin:auto;" href="#"><i class="fas fa-search"></i></a>
    </div>
  </div>
</nav>