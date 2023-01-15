<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Voyager demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Demo voyager</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Lang
          </a>
          <ul class="dropdown-menu">
          @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
        <li>
            <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                {{ $properties['native'] }}
            </a>
        </li>
    @endforeach
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>    
<div class="container" style="margin-top:30px">
<div class="row">
    @foreach ($posts as $post)
           <div class="col-md-4" style="margin-bottom: 10px;">
    <div class="card" style="width: 18rem;">
  <img src="{{Voyager::image( $post->getModel()->thumbnail('small') )}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{ $post->getTranslatedAttribute('title', App::getLocale(), 'fallbackLocale') }}</h5>
    <p class="card-text">{{ $post->getTranslatedAttribute('body', App::getLocale(), 'fallbackLocale') }}</p>
    <p>{{$post->created_at}}</p>
    <a href="{{route('details',$post->id)}}" class="btn btn-primary">More</a>
  </div>
</div>                
           </div>

    @endforeach
</div>       
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
