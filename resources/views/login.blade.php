<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/login.css">
    <title>login</title>
</head>
<body>
   
    <div class="login-page">
    @include('admin.error')
        <div class="form">
            <form class="register-form" method="post" action="{{route('client.createAccount')}}" >
                {{ csrf_field() }}
                <input type="email" name="email" placeholder="email"/>
                <input type="password" name="password" placeholder="password"/>
                <button type="submit">Register</button>
                <p class="message">AlRady Registered? <a href="#">Login</a> </p>
            </form>  
            
                <form class="login-form" method="post" action="{{route('client.accessAccount')}}" >
                {{ csrf_field() }}    
                <input type="email"  placeholder="email" name="email"/>
                    <input type="password" placeholder="password" name="password"/>              
                    <button type="submit">Login</button>
                    <p class="message">Not Registered? <a href="#">register</a> </p>
                </form>     
            </div>   
        
     
    </div>  
    <script src='https://code.jquery.com/jquery-3.5.1.min.js'></script>
    <script>
     $( '.message a').click(function() {
  $( 'form' ).animate({
    opacity: "toggle",

    height: "toggle"
  }, 1000, function() {
   
  });
});
    </script>

 
</body>
</html>