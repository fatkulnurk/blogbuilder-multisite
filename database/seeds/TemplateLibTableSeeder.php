<?php

use Illuminate\Database\Seeder;

class TemplateLibTableSeeder extends Seeder
{

    protected $codeHeader = <<<EOT
    
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>
  {{ if exists post.title }}
  {{ post.title }}
  {{ elseif not exists post.title }}
  {{ blog.title }}
  
  {{ endif }}
  </title>
  

  <!-- Bootstrap core CSS -->
  <link href="https://blackrockdigital.github.io/startbootstrap-clean-blog/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://blackrockdigital.github.io/startbootstrap-clean-blog/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="https://blackrockdigital.github.io/startbootstrap-clean-blog/css/clean-blog.min.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="/">{{ blog.title }}</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="post.html">Sample Post</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
EOT;

    protected $codeFooter = <<<EOT
    
  <hr>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <ul class="list-inline text-center">
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
          </ul>
          <p class="copyright text-muted">Copyright &copy; Your Website 2019</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="https://blackrockdigital.github.io/startbootstrap-clean-blog/vendor/jquery/jquery.min.js"></script>
  <script src="https://blackrockdigital.github.io/startbootstrap-clean-blog/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="https://blackrockdigital.github.io/startbootstrap-clean-blog/js/clean-blog.min.js"></script>

</body>
</html>

EOT;

    protected $codeIndex = <<<EOT
    
  <!-- Page Header -->
  <header class="masthead" style="background-image: url('https://source.unsplash.com/random/1080x400')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>{{ blog.title}} </h1>
            <span class="subheading">{{ blog.short_desc }}</span>
          </div>
        </div>
      </div>
    </div>
  </header>
  
  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
      {{ post }}
        <div class="post-preview">
          <a href="/{{ slug }}">
            <h2 class="post-title">
              {{ title }}
            </h2>
            <h3 class="post-subtitle">
            {{ body_short }}
            </h3>
          </a>
          <p class="post-meta">Posted by
            <a href="#">{{ user.name }}</a>
            on {{ date }}</p>
        </div>
        <hr>
        {{ /post }}
        <!-- Pager -->
        <div class="clearfix">
          <a class="btn btn-primary float-right" href="{{ pagination.next_page_url }}">Older Posts &rarr;</a>
        </div>
      </div>
    </div>
  </div>

EOT;

    protected $codePost = <<<EOT
    <!-- Page Header -->
  <header class="masthead" style="background-image: url('https://source.unsplash.com/random/1080x400')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-heading">
            <h1>{{ post.title }}</h1>
            <h2 class="subheading">Problems look mighty small from 150 miles up</h2>
            <span class="meta">Posted by
              <a href="#">{{ post.user.name }}</a>
              on {{ post.date }}</span>
          </div>
        </div>
      </div>
    </div>
  </header>
  
  

  <!-- Post Content -->
  <article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
        {{ post.body }}
        </div>
      </div>
    </div>
  </article>
  <hr>
EOT;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Model\TemplateLib::create([
            'name'              => 'FNK Test',
            'stylesheet'        => 'body {background:white};',
            'script_header'     => '',
            'script_post_up'    => '',
            'script_post_down'  => '',
            'script_nav_up'     => '',
            'script_nav_down'   => '',
            'script_footer'     => '',
            'code_header'       => $this->codeHeader,
            'code_footer'       => $this->codeFooter,
            'code_index'        => $this->codeIndex,
            'code_search'       => '<h1>saya di search</h1>',
            'code_page'         => '<h1>saya di page</h1>',
            'code_post'         => $this->codePost,
            'code_about'        => '<h1>saya di about</h1>',
            'code_404'          => '<h1>saya di 404</h1>',
        ]);
    }
}
