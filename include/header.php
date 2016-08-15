<html>
    <head>
        <title>NHL Shop</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
        <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css" rel="stylesheet" type="text/css">
    </head><body>
    

        
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php?module=home">
                    <span>NHL SHOP</span></a>
                </div>
                
                <div class="collapse navbar-collapse" id="navbar-ex-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="index.php?module=home">Home</a></li>
                        <li><a href="index.php?module=Contacts">Contacts</a></li>
                        <li><a href="index.php?module=Caddy">Caddy <?php if(isset($_SESSION["nbcaddy"])){ ?><span class="badge"><?php echo $_SESSION["nbcaddy"]; ?></span><?php } ?></a></li>
                       
                        <?php if(isset($_SESSION['usercomplet']['prenom'])){?>
                        <li class="dropdown" >
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" >
                            <?php echo $_SESSION["usercomplet"]["prenom"]; ?></a>
                        
                        <ul class="dropdown-menu">
                        <li><a href="index.php?module=Profil">Profil</a></li>
                        
                        <li class="divider"></li>
                        <li><a href="index.php?module=Login&action=LogOut">Log out</a></li>
                        </ul>
                            
                            
                        
                        </li>
                        <?php }
                        else{?>
                        <li><a href="index.php?module=Login">Login</a></li><?php } ?>
                        
                        
                    </ul>
                </div>
            </div>
       </div>
    
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <a class="btn btn-lg btn-link" href="index.php?module=Team">Team</a>
                    <a class="btn btn-lg btn-link" href="index.php?module=Jersey">Jersey</a>
                    <a class="btn btn-lg btn-link" href="index.php?module=Skates">Skates</a>
                    <a class="btn btn-lg btn-link" href="index.php?module=Sticks">Sticks</a>
                </div>
            </div>
        </div>
    </div>