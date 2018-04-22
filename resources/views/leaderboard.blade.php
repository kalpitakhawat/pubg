<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>PUBG-STAT - Check Your favorite player ranking and tracking</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.0/examples/offcanvas/offcanvas.css" rel="stylesheet">
  
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
  </head>

  <body class="bg-pub">

    <nav class="navbar navbar-expand-md fixed-top navbar-dark bg-dark">
      <a class="navbar-brand" href="#"><img style="width: 50px" src="{{asset('img/publogo.png')}}"></a>
      <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Leaderboard <span class="sr-only">(current)</span></a>
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


    <main role="main" class="container bgpub">
      <div class="d-flex align-items-center p-3 my-3 text-white-50" style="text-align: center;">
       
      <a href="http://clk.omgt5.com/?AID=680938&PID=9170&CRID=167297&WID=55058"><img src="http://track.in.omgpm.com/i/?CRID=167297&AID=680938&PID=9170&WID=55058" border="0" width="728" height="90"></a>
      </div>


        <div class="ftitle">Server</div> 

        <ul class="nav nav-pills">
  <li class="nav-item">
        <a class="lead_server nav-link active" href="{{route('leaderboard',['server_name'=>'na','mode'=>app('request')->input('mode'),'type'=>app('request')->input('type')])}}">NA</a>
  </li>
  <li class="nav-item">
        <a class="lead_server nav-link" href="{{route('leaderboard',['server_name'=>'as','mode'=>app('request')->input('mode'),'type'=>app('request')->input('type')])}}">AS</a>
  </li>
  <li class="nav-item">
        <a class="lead_server nav-link" href="{{route('leaderboard',['server_name'=>'krjp','mode'=>app('request')->input('mode'),'type'=>app('request')->input('type')])}}">KR</a>
  </li>
   <li class="nav-item">
        <a class="lead_server nav-link" href="{{route('leaderboard',['server_name'=>'jp','mode'=>app('request')->input('mode'),'type'=>app('request')->input('type')])}}">JP</a>
  </li>
  <li class="nav-item">
        <a class="lead_server nav-link" href="{{route('leaderboard',['server_name'=>'kakao','mode'=>app('request')->input('mode'),'type'=>app('request')->input('type')])}}">KAKAO</a>
  </li>
  <li class="nav-item">
        <a class="lead_server nav-link" href="{{route('leaderboard',['server_name'=>'sa','mode'=>app('request')->input('mode'),'type'=>app('request')->input('type')])}}">SA</a>
  </li> 
   <li class="nav-item">
        <a class="lead_server nav-link" href="{{route('leaderboard',['server_name'=>'eu','mode'=>app('request')->input('mode'),'type'=>app('request')->input('type')])}}">EU</a>
  </li> 
   <li class="nav-item">
        <a class="lead_server nav-link" href="{{route('leaderboard',['server_name'=>'oc','mode'=>app('request')->input('mode'),'type'=>app('request')->input('type')])}}">OC</a>
  </li> 
   <li class="nav-item">
        <a class="lead_server nav-link" href="{{route('leaderboard',['server_name'=>'sea','mode'=>app('request')->input('mode'),'type'=>app('request')->input('type')])}}">SEA</a>
  </li> 
</ul>

    <div class="ftitle">Mode</div> 

    <ul class="nav nav-pills">
  <li class="nav-item">
    <a class="lead_mode nav-link active" href="{{route('leaderboard',['server_name'=>app('request')->input('server_name'),'mode'=>'1','type'=>'tpp'])}}">Solo</a>
  </li>
  <li class="nav-item">
    <a class="lead_mode nav-link" href="{{route('leaderboard',['server_name'=>app('request')->input('server_name'),'mode'=>'2','type'=>'tpp'])}}">Duo</a>
  </li>
  <li class="nav-item">
    <a class="lead_mode nav-link" href="{{route('leaderboard',['server_name'=>app('request')->input('server_name'),'mode'=>'4','type'=>'tpp'])}}">Squad</a>
  </li>
   <li class="nav-item">
    <a class="lead_mode nav-link " href="{{route('leaderboard',['server_name'=>app('request')->input('server_name'),'mode'=>'1','type'=>'fpp'])}}">Solo</a>
  </li>
  <li class="nav-item">
    <a class="lead_mode nav-link" href="{{route('leaderboard',['server_name'=>app('request')->input('server_name'),'mode'=>'2','type'=>'fpp'])}}">Duo</a>
  </li>
  <li class="nav-item">
    <a class="lead_mode nav-link" href="{{route('leaderboard',['server_name'=>app('request')->input('server_name'),'mode'=>'4','type'=>'fpp'])}}">Squad</a>
  </li> 
</ul>

<br>    
  
  <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th scope="col">Rank</th>
                <th scope="col">Username</th>
                <th scope="col">Rating</th>
                <th scope="col">Gamers</th>
                <th scope="col">Win %</th>
                <th scope="col">Top 10%</th>
                <th scope="col">K/D</th>
                <th scope="col">Damage</th>
                <th scope="col">Average Rank</th>

            </tr>
        </thead>
        <tbody>
          @foreach ($playerScores as $score)
           <tr>
      <th scope="row">{{$score->rank}}</th>
      <td><img src ="{{asset('img/badge4.png')}}"><a href="#">{{$score->player->username}}</a></td>
      <td>{{$score->rating}}</td>
      <td>{{$score->matches_cnt}}</td>
        <td><div class="progress">
  <div class="progress-bar bg-info" role="progressbar" style="width: {{$score->win_matches_cnt}}%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">{{$score->win_matches_cnt}} %</div>
</div></td>
      <td><div class="progress">
  <div class="progress-bar bg-success" role="progressbar" style="width: 49.5%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">{{$score->topten_matches_cnt}} %</div>
</div></td>
       <td>2.93</td>
       <td><div class="progress">
  <div class="progress-bar bg-danger" role="progressbar" style="width: 74%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">{{number_format($score->damage_dealt_avg,'0')}}</div>
</div></td> 
      <td>{{number_format($score->rank_avg,'2')}}</td>
    </tr>
  @endforeach  
  
    
        </tbody>
        <tfoot>
        </tfoot>
    </table>











<br>
<br>
 <footer class="text-muted">
      <div class="container">
        <p class="float-right">
          <a href="#">Back to top</a>
        </p>
        <p>Pubg-stat is &copy; showing leaderboard and player data to the world!</p>
        <p>New to Pubg-stat? <a href="../../">Visit the homepage</a> or read our <a href="../../getting-started/">Privacy Page</a>.</p>
      </div>
    </footer>



    
    <script type="text/javascript">
      
      $(document).ready(function() {
    $('#example').DataTable();
} );

    </script>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="https://getbootstrap.com/assets/js/vendor/popper.min.js"></script>
    <script src="https://getbootstrap.com/dist/js/bootstrap.min.js"></script>
    <script src="https://getbootstrap.com/assets/js/vendor/holder.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.0/examples/offcanvas/offcanvas.js"></script>
  </body>
</html>
