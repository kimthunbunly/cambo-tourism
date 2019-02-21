<nav class="navbar navbar-expand-lg navbar-dark fixed-top transition-8" id="id_navbar">
  <div class="container">
      <a class="navbar-brand text-primary" href="/" style="font-size:24px;"><strong class="text-danger">Cambo</strong>-Tourism</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="/">Home </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/blog">Blog</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="/about">About</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="/profile">Profile</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="/search">Search</a>
          </li>
        </ul>
      </div>
  </div>
</nav>

<script>
  var navbar = document.getElementById("id_navbar").classList
    window.onscroll = function (e){
       var y = this.scrollY;
       return y > 55 ?  navbar.add("bg-gray"):  navbar.remove("bg-gray");
    }
</script>

<style scoped>
    .bg-gray-opa{
        background-color: rgba(45, 52, 54,1.0) ;
        color: #999;
    }
    </style>