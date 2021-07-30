<html>
    <head>
        <title>Connexion</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">      
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="stylesheet" href="styles.css">
    </head>
    <body background="images/sesam.jpg">
        <div class="vert"></div>
        
            <nav class="navbar">
                <ul>
                    <img src="images/sesam.png" class="image1">
                    <button  type="submit" class="btn btn-secondary button " onclick="document.getElementById('form').style.display='block'" > Connexion</button>  
                  
                </ul>
            </nav>

          
<div>

        <div class="container" id="form">
             
           <div><i class="fas far fa-user-circle icone1 " ></i></div>
            <form  action="login.php" method="post" name="form">
                <input type="email" name="email"  class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" required><br>
                <input type="password" name="password" id="password"  class="form-control" aria-describedby="emailHelp" placeholder="Enter Password" required><br>
                <input type="submit" value="se connecter " name="submit" class="btn btn-primary submit " ><br><br>
                <p class="box-register"><a href="">Mot de passe oublié ? </a></p>  
            </form>
            <?php if (! empty($message)) { ?>
                      <p class="errorMessage"><?php echo $message; ?></p>
                            <?php } 
                ?>
            
        </div>

        <div >
            <p id="p1">La plateforme qui <br> vous gére vos <br>incidents en <br>toute sécurité</p>
        </div>

</div>
          

    </body>
</html>