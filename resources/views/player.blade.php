<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="icon" href="../../../../favicon.ico">
      <link href="https://fonts.googleapis.com/css?family=Exo+2" rel="stylesheet">
      <title>PUBG-STAT - Check Your favorite player ranking and tracking</title>
      <!-- Bootstrap core CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <!-- Custom styles for this template -->
      <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <style media="screen">

      </style>
   </head>
   <body class="bg-pub" >
      <header>
        <nav class="navbar navbar-expand-md fixed-top navbar-dark bg-dark">
           <a class="navbar-brand" href="#">
           <img style="width: 50px" src="{{asset('img/publogo.png')}}">
           </a>
           <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
           <span class="navbar-toggler-icon"></span>
           </button>
           <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
              <ul class="navbar-nav mr-auto">
                 <li class="nav-item active">
                    <a class="nav-link" href="#">Leaderboard
                    <span class="sr-only">(current)</span>
                    </a>
                 </li>
                 <li class="nav-item">
                    <a class="nav-link" href="#">Pub-Stat Leaders</a>
                 </li>
                 <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">English</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown01">
                       <a class="dropdown-item" href="#">French</a>
                       <a class="dropdown-item" href="#">Hindi</a>
                       <a class="dropdown-item" href="#">Spanis</a>
                    </div>
                 </li>
              </ul>
              <form class="form-inline my-2 my-lg-0">
                 <input class="form-control mr-sm-2" type="text" placeholder="Search Player" aria-label="Search">
                 <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Search</button>
              </form>
           </div>
        </nav>
      </header>
      <main>
        <div class="container mt-5 pt-5">
          <div class="row">
            <div class="col-12">
              <div class="card player-personal-card p-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-10">
                      <h2>douyu_99942018</h2>
                    </div>
                    <div class="col-md-2">
                      <button type="button" class="btn btn-outline-light"><i class="far fa-star"></i> Favorite</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-12">
              <div class="card player-personal-card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-12">
                        <div class="form-check fpp-checkbox-container">
                          <label class="container">FPP
                            <input type="checkbox" checked="checked">
                            <span class="checkmark"></span>
                          </label>
                        </div>
                      <ul class="nav nav-tabs justify-content-end server-tab" id="myTab" role="tablist">
                        <!-- @foreach($servers as $s)
                        <li class="nav-item">
                          <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">{{$s}}</a>
                        </li>
                        @endforeach -->
                        <li class="nav-item">
                          <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">NA</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">AS</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="row mt-3 game-score">
                    <div class="col-12 col-md-4">
                      <div class="card">
                        <div class="card-header bg-primary">
                          <i class="fas fa-male"></i> Solo <small class="float-right game-count">120 Games</small>
                        </div>
                        <div class="card-body">
                          <span class="card-title">
                            <div class="row">
                              <div class="col-8">
                                <h4>2254</h4>
                              </div>
                              <div class="col-4">
                                <div class="row" style="padding-top:8px;">
                                  <div class="col-6">
                                    <img src="{{asset('img/win.png')}}" alt="" width="25px" style="margin-top:-6px;"><span class="win-rank"> 123</span>
                                  </div>
                                  <div class="col-6">
                                    <img src="{{asset('img/ten.png')}}" alt="" width="25px" style="margin-top:-6px;"><span class="win-rank"> 123</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="row" style="margin-top: -20px;">
                              <div class="col">
                                <small>#1</small>
                              </div>
                            </div>
                          </span>
                          <div class="row">
                            <div class="mt-2 w-100">
                              <table class="table table-score">
                                <tbody>
                                  <tr>
                                    <td>
                                      <div class="row">
                                        <div class="col-12 player-kd-title">
                                          K/D
                                        </div>
                                        <div class="col-12 player-kd-count">
                                          <h6>7.65</h6>
                                        </div>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="row">
                                        <div class="col-12 player-kd-title">
                                          Avg. Damage
                                        </div>
                                        <div class="col-12 player-kd-count">
                                          <h6>504</h6>
                                        </div>
                                      </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <div class="row">
                                        <div class="col-6 player-score-info title">
                                          Win %
                                        </div>
                                        <div class="col-6 player-score-info count">
                                          46.6%
                                        </div>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="row">
                                        <div class="col-7 player-score-info title">
                                          Top 10 %
                                        </div>
                                        <div class="col-5 player-score-info count">
                                          46.6%
                                        </div>
                                      </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <div class="row">
                                        <div class="col-7 player-score-info title">
                                          Longest Kill
                                        </div>
                                        <div class="col-5 player-score-info count">
                                          300 m
                                        </div>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="row">
                                        <div class="col-7 player-score-info title">
                                          Headshot
                                        </div>
                                        <div class="col-5 player-score-info count">
                                          33%
                                        </div>
                                      </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <div class="row">
                                        <div class="col-7 player-score-info title">
                                        Avg. Rank
                                        </div>
                                        <div class="col-5 player-score-info count">
                                          #13.3
                                        </div>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="row">
                                        <div class="col-7 player-score-info title" style="padding-right:0px;">
                                          Avg. survived time
                                        </div>
                                        <div class="col-5 player-score-info count">
                                          25:28
                                        </div>
                                      </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <div class="row">
                                        <div class="col-7 player-score-info title">
                                          KDA
                                        </div>
                                        <div class="col-5 player-score-info count">
                                          7.9
                                        </div>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="row">
                                        <div class="col-7 player-score-info title">
                                          Most Kills
                                        </div>
                                        <div class="col-5 player-score-info count">
                                          10
                                        </div>
                                      </div>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-md-4">
                      <div class="card">
                        <div class="card-header bg-success">
                          <i class="fas fa-male"></i> <i class="fas fa-male"></i> Duo <small class="float-right game-count">120 Games</small>
                        </div>
                        <div class="card-body">
                          <span class="card-title">
                            <div class="row">
                              <div class="col-8">
                                <h4>2254</h4>
                              </div>
                              <div class="col-4">
                                <div class="row" style="padding-top:8px;">
                                  <div class="col-6">
                                    <img src="{{asset('img/win.png')}}" alt="" width="25px" style="margin-top:-6px;"><span class="win-rank"> 123</span>
                                  </div>
                                  <div class="col-6">
                                    <img src="{{asset('img/ten.png')}}" alt="" width="25px" style="margin-top:-6px;"><span class="win-rank"> 123</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="row" style="margin-top: -20px;">
                              <div class="col">
                                <small>#1</small>
                              </div>
                            </div>
                          </span>
                          <div class="row">
                            <div class="mt-2 w-100">
                              <table class="table table-score">
                                <tbody>
                                  <tr>
                                    <td>
                                      <div class="row">
                                        <div class="col-12 player-kd-title">
                                          K/D
                                        </div>
                                        <div class="col-12 player-kd-count">
                                          <h6>7.65</h6>
                                        </div>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="row">
                                        <div class="col-12 player-kd-title">
                                          Avg. Damage
                                        </div>
                                        <div class="col-12 player-kd-count">
                                          <h6>504</h6>
                                        </div>
                                      </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <div class="row">
                                        <div class="col-6 player-score-info title">
                                          Win %
                                        </div>
                                        <div class="col-6 player-score-info count">
                                          46.6%
                                        </div>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="row">
                                        <div class="col-7 player-score-info title">
                                          Top 10 %
                                        </div>
                                        <div class="col-5 player-score-info count">
                                          46.6%
                                        </div>
                                      </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <div class="row">
                                        <div class="col-7 player-score-info title">
                                          Longest Kill
                                        </div>
                                        <div class="col-5 player-score-info count">
                                          300 m
                                        </div>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="row">
                                        <div class="col-7 player-score-info title">
                                          Headshot
                                        </div>
                                        <div class="col-5 player-score-info count">
                                          33%
                                        </div>
                                      </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <div class="row">
                                        <div class="col-7 player-score-info title">
                                        Avg. Rank
                                        </div>
                                        <div class="col-5 player-score-info count">
                                          #13.3
                                        </div>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="row">
                                        <div class="col-7 player-score-info title" style="padding-right:0px;">
                                          Avg. survived time
                                        </div>
                                        <div class="col-5 player-score-info count">
                                          25:28
                                        </div>
                                      </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <div class="row">
                                        <div class="col-7 player-score-info title">
                                          KDA
                                        </div>
                                        <div class="col-5 player-score-info count">
                                          7.9
                                        </div>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="row">
                                        <div class="col-7 player-score-info title">
                                          Most Kills
                                        </div>
                                        <div class="col-5 player-score-info count">
                                          10
                                        </div>
                                      </div>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-md-4">
                      <div class="card">
                        <div class="card-header bg-danger">
                          <i class="fas fa-male"></i> <i class="fas fa-male"></i> <i class="fas fa-male"></i> <i class="fas fa-male"></i> Squad <small class="float-right game-count">120 Games</small>
                        </div>
                        <div class="card-body">
                          <span class="card-title">
                            <div class="row">
                              <div class="col-8">
                                <h4>2254</h4>
                              </div>
                              <div class="col-4">
                                <div class="row" style="padding-top:8px;">
                                  <div class="col-6">
                                    <img src="{{asset('img/win.png')}}" alt="" width="25px" style="margin-top:-6px;"><span class="win-rank"> 123</span>
                                  </div>
                                  <div class="col-6">
                                    <img src="{{asset('img/ten.png')}}" alt="" width="25px" style="margin-top:-6px;"><span class="win-rank"> 123</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="row" style="margin-top: -20px;">
                              <div class="col">
                                <small>#1</small>
                              </div>
                            </div>
                          </span>
                          <div class="row">
                            <div class="mt-2 w-100">
                              <table class="table table-score">
                                <tbody>
                                  <tr>
                                    <td>
                                      <div class="row">
                                        <div class="col-12 player-kd-title">
                                          K/D
                                        </div>
                                        <div class="col-12 player-kd-count">
                                          <h6>7.65</h6>
                                        </div>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="row">
                                        <div class="col-12 player-kd-title">
                                          Avg. Damage
                                        </div>
                                        <div class="col-12 player-kd-count">
                                          <h6>504</h6>
                                        </div>
                                      </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <div class="row">
                                        <div class="col-6 player-score-info title">
                                          Win %
                                        </div>
                                        <div class="col-6 player-score-info count">
                                          46.6%
                                        </div>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="row">
                                        <div class="col-7 player-score-info title">
                                          Top 10 %
                                        </div>
                                        <div class="col-5 player-score-info count">
                                          46.6%
                                        </div>
                                      </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <div class="row">
                                        <div class="col-7 player-score-info title">
                                          Longest Kill
                                        </div>
                                        <div class="col-5 player-score-info count">
                                          300 m
                                        </div>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="row">
                                        <div class="col-7 player-score-info title">
                                          Headshot
                                        </div>
                                        <div class="col-5 player-score-info count">
                                          33%
                                        </div>
                                      </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <div class="row">
                                        <div class="col-7 player-score-info title">
                                        Avg. Rank
                                        </div>
                                        <div class="col-5 player-score-info count">
                                          #13.3
                                        </div>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="row">
                                        <div class="col-7 player-score-info title" style="padding-right:0px;">
                                          Avg. survived time
                                        </div>
                                        <div class="col-5 player-score-info count">
                                          25:28
                                        </div>
                                      </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <div class="row">
                                        <div class="col-7 player-score-info title">
                                          KDA
                                        </div>
                                        <div class="col-5 player-score-info count">
                                          7.9
                                        </div>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="row">
                                        <div class="col-7 player-score-info title">
                                          Most Kills
                                        </div>
                                        <div class="col-5 player-score-info count">
                                          10
                                        </div>
                                      </div>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
      <footer class="text-muted">
         <div class="container">
            <p class="float-right">
               <a href="#">Back to top</a>
            </p>
            <p>Pubg-stat is &copy; showing leaderboard and player data to the world!</p>
            <p>New to Pubg-stat?
               <a href="../../">Visit the homepage</a> or read our
               <a href="../../getting-started/">Privacy Page</a>.
            </p>
         </div>
      </footer>
      <!-- Bootstrap core JavaScript
         ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
   </body>
</html>
