<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

@if(isset(Auth::User()->name))
                    <div class="alert alert-danger success-block">
                      <strong>Welcome {{Auth::User()->name}}</strong>
                      <br>
                      <a href="{{url('/logout')}}">Logout</a>
                    </div>
                  
                    <!-- <script>window.location = "/login";</script> -->
 @endif
</body>