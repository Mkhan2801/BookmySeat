<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Book My seat
    </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
    <script defer src="https://use.fontawesome.com/releases/v5.5.0/js/all.js" integrity="sha384-GqVMZRt5Gn7tB9D9q7ONtcp4gtHIUEW/yG7h98J7IpE3kpi+srfFyyB/04OV6pG0" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet" />  
  </head>
  <body class="bg-dark text-white">
    <header class="header-bar mb-3 bg-secondary">
        <h4 class="my-0 mr-md-auto font-weight-normal"><a href="/" class="text-white">Book My Seat</a></h4>

        {{-- @auth
        
        <div class="flex-row my-3 my-md-0">
          
          <a href="/chat/{{auth()->user()->id}}" class="text-white mr-2 " title="Chat" data-toggle="tooltip" data-placement="bottom"><i class="fas fa-comments"></i><span class="pop"></span></a>
          <a href="#" class="text-white mr-2 header-search-icon" title="Search" data-toggle="tooltip" data-placement="bottom"><i class="fas fa-search"></i></a>
          <span class="text-white mr-2 header-chat-icon" title="Chat" data-toggle="tooltip" data-placement="bottom"><i class="fas fa-comment"></i></span>
          <a href="/profile/{{auth()->user()->id}}/posts" class="mr-2"><img title="My Profile" data-toggle="tooltip" data-placement="bottom" style="width: 32px; height: 32px; border-radius: 16px" src="{{auth()->user()->avatar}}" /></a>
          <a class="btn btn-sm btn-success mr-2" href="/blog">Create Post</a>
          <form action="/singOut" method="POST" class="d-inline">
            @csrf
            <button class="btn btn-sm btn-secondary">Sign Out</button>
          </form>
        
        @endauth --}}



    </header>
    
    <!-- header ends here -->
    @if(session()->has('fail'))
    <p class='m-0 small alert alert-danger shadow-sm'> {{session('fail')}}</p>
 
@endif






    {{$slot}}







    <footer class="border-top text-center small text-muted py-3">
        <p class="m-0">Copyright &copy; 2022 <a href="/" class="text-muted">OurApp</a>. All rights reserved.</p>
      </footer>
  
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
      
    </body>
  </html>
  