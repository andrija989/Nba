<div class="blog-header">
    <div class="container">
      <p class="lead blog-title" style="text-align: center">Nba teams app</p>
    </div>
  
    <div style="text-align: center">
      <a href="/teams" class="btn btn-primary">Teams</a>
      @if(!Auth::check())
      <a href="/register" class="btn btn-primary">Register</a>
      <a href="/login" class="btn btn-primary">Login</a>
      @endif
      @if(Auth::check())
        <p>
          User: {{Auth()->user()->name}}
        </p>
        <a class="nav-link ml-auto" href="/logout">
          Logout
        </a>
      @endif
    </div>
</div>
  
  