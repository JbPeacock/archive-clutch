<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>The Archives by J.B. Peacock</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
<!-- Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="/js/bootstrap.min.js"></script>
        <!-- Bootstrap Input validation plugin: jQuery --> 
        <script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>
    </head>
    <body>

<!-- Contact Modal Code -->
				<div id="contactModal" class="modal fade" role="dialog">
				  <div class="modal-dialog">
			            <div class="modal-content">
      				    <div class="modal-header">
        			    <button type="button" class="close" data-dismiss="modal">&times;</button>
        				<h4 class="modal-title">Contact</h4>
      				    </div>
      					<div class="modal-body text-center">
       					  <p>Please send your feedback to
						<a href="mailto:jbpeacock@mail.com"</a>jbpeacock@mail.com</p>
      					</div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      					      </div>
    					</div>
				    </div>
				  </div>

<!-- DEV Log Modal -->
				<div id="devModal" class="modal fade" role="dialog">
				  <div class="modal-dialog">
			            <div class="modal-content">
      				    <div class="modal-header">
        			    <button type="button" class="close" data-dismiss="modal">&times;</button>
        				<h4 class="modal-title">Dev Articles</h4>
      				    </div>
      					<div class="modal-body text-center">
       					  <div class="list-group">
						<a href="/devlogs/troubleshoot.php" class="list-group-item">Startup DNS Error</a><hr>
						<a href="/devlogs/dev2.php" class="list-group-item">Server Hardening Notes</a>
      					  </div> 
				        </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      					      </div>
    					</div>
				    </div>
				  </div>
        <!-- Navbar code -->
    <div class="navbar navbar-inverse navbar-fixed-top" data-spy="affix" data-offset-top="197">
        <div class="navbar-inner">
            <div class="container-fluid">
                <?php echo '<a class="brand" href="/index.php"> The Archives</a>';?>
                <div class="nav-collapse collapse">
                    <p class="navbar-text pull-right">
                        <!--- <a href="#" class="btn btn-small btn-primary">Sign In</a> --->
                    </p>
                    <ul class="nav">
                        <li><?php echo '<a href="/stories.php">Stories</a>';?></li>
                        <!--- <li><?php echo '<a href="forum.php">Forum</a>';?></li> --->                       
                        <li><?php echo '<a href="/about.php">About</a>';?></li>                        
                        <!-- Contact Modal -->
			<li><?php echo '<a href="#contactModal" data-toggle="modal">Contact</a>';?></li>
                        <li><?php echo '<a href="#devModal" data-toggle="modal">Dev Log</a>';?></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>
    </div> 
