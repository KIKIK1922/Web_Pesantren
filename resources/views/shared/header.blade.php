<style>
    .container-fluid{
        background-color: #323232;
        margin-top: 0;
        position: relative;
        top: -10px;
        height: 100px;
    }
    .container-fluid a{
      color: white;
    }
    .collapse ul li a{
      text-align: right;
    }
</style>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
  <img src="Assets/icons/ic-logo.png" height="55" width="55" alt="">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="nav-link " aria-current="page" href="{{ route('welcome') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="{{ route('welcome') }}">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="{{ route('welcome') }}">News</a>
          </li>
          <li class="nav-item">
            <a class="nav-link "href="{{ route('welcome') }}">Contac</a>
          </li>
          <div class="d-flex gap-4 align-items-center">
           <button class="btn btn success"><a class="nav-link" href="/posts/shop"></a>List Siswa</button>
          </div>
      </div>
  </div>
</nav>