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
        <div class="form">
            <form class="register-form" >
                <input type="text" placeholder="user name"/>
                <input type="password" placeholder="password"/>
                <input type="text" placeholder="email id"/>
                <button>Create</button>
                <p class="message">AlRady Registered? <a href="#">Login</a> </p>
            </form>  
            
                <form class="login-form" >
                    <input type="text" placeholder="user name"/>
                    <input type="password" placeholder="password"/>              
                    <button>Create</button>
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