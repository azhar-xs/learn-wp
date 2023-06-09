
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo get_template_directory_uri() ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS: You can use this stylesheet to override any Bootstrap styles and/or apply your own styles -->
    <link href="<?php echo get_template_directory_uri() ?>/assets/css/custom.css" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Logo and responsive toggle -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-globe"></span> Logo</a>
            </div>
            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Products</a>
                    </li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services <span class="caret"></span></a>
						<ul class="dropdown-menu" aria-labelledby="about-us">
							<li><a href="#">Engage</a></li>
							<li><a href="#">Pontificate</a></li>
							<li><a href="#">Synergize</a></li>
						</ul>
					</li>    
                </ul>
				<!-- Log In Form -->
				<form class="navbar-form navbar-right form-inline">
					<div class="form-group">
						<label class="sr-only" for="emailAddress">Email address</label>
						<input type="email" class="form-control" id="emailAddress" placeholder="Email">
					</div>
					<div class="form-group">
						<label class="sr-only" for="pwd">Password</label>
						<input type="password" class="form-control" id="pwd" placeholder="Password">
					</div>
					<button type="submit" class="btn btn-default">Sign in</button>
				</form>

            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

	<div class="jumbotron feature">
		<div class="container">
			<div id="feature-carousel" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#feature-carousel" data-slide-to="0" class="active"></li>
					<li data-target="#feature-carousel" data-slide-to="1"></li>
					<li data-target="#feature-carousel" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<a href="#">
							<img class="img-responsive" src="holder.js/1140x200?bg=9ACD32&text=Image%201" alt="">
						</a>
						<div class="carousel-caption">
							<h3>Dramatically Engage</h3>
							<p>Objectively innovate empowered manufactured products whereas parallel platforms.</p>
						</div>
					</div>
					<div class="item">
						<a href="#">
							<img class="img-responsive" src="holder.js/1140x200?bg=9ACD32&text=Image%202" alt="">
						</a>
						<div class="carousel-caption">
							<h3>Efficiently Unleash</h3>
							<p>Dramatically maintain clicks-and-mortar solutions without functional solutions.</p>
						</div>
					</div>
					<div class="item">
						<a href="#">
							<img class="img-responsive" src="holder.js/1140x200?bg=9ACD32&text=Image%203" alt="">
						</a>
						<div class="carousel-caption">
							<h3>Proactively Pontificate</h3>
							<p>Holistically pontificate installed base portals after maintainable products.</p>
						</div>
					</div>			  
				</div>
				<a class="left carousel-control" href="#feature-carousel" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#feature-carousel" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>

		</div>
	</div>



<div class="container-fluid">

		<!-- Left Column -->
		<div class="col-sm-3">

			<!-- List-Group Panel -->
			<div class="panel panel-default">
				<div class="panel-heading">
					<h1 class="panel-title"><span class="glyphicon glyphicon-random"></span> Completely Synergize</h1>
				</div>
				<div class="list-group">
					<a href="#" class="list-group-item">Resource Taxing</a>
					<a href="#" class="list-group-item">Premier Niche Markets <span class="badge">New</span></a>
					<a href="#" class="list-group-item">Dynamically Innovate</a>
					<a href="#" class="list-group-item">Objectively Innovate</a>
					<a href="#" class="list-group-item">Proactively Envisioned</a>
				</div>
			</div>

			<!-- Text Panel -->
			<div class="panel panel-default">
				<div class="panel-heading">
					<h1 class="panel-title"><span class="glyphicon glyphicon-cog"></span> Dramatically Engage</h1>
				</div>

				<div class="panel-body">
					<p>Objectively innovate empowered manufactured products whereas parallel platforms. Holisticly predominate extensible testing procedures for reliable supply chains. Dramatically engage top-line web services vis-a-vis cutting-edge deliverables.</p>
					<p><button class="btn btn-default">Engage</button></p>
				</div>
			</div>
		
		</div><!--/Left Column-->
  
  
		<!-- Center Column -->
		<div class="col-sm-6">
		
			<!-- Alert -->
			<div class="alert alert-danger alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<strong>Synergize:</strong> Seamlessly visualize quality intellectual capital!
			</div>		
		
            <?php while(have_posts()) : the_post();?>
                <!-- Articles -->
                <div class="row">
                    <article class="col-xs-12">
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object" src="holder.js/120x120" alt="">
                                </a>
                            </div>
                            <div class="media-body">
                                <?php the_content(); ?> 
                                <h6>Faviurite color: <?php echo get_post_meta(14,'fav-color',true)?></h6>                           
                                <ul class="list-inline">
                                    <li><a href="#"><span class="glyphicon glyphicon-comment"></span> 2 Comments</a></li>
                                    <li><a href="#"><span class="glyphicon glyphicon-share"></span> 8 Shares</a></li>
                                </ul>
                            </div>
                        </div>
                    </article>
                </div>
                <hr>
            <?php endwhile; ?>

		</div><!--/Center Column-->


	  <!-- Right Column -->
	  <div class="col-sm-3">
 
			<!-- Search -->
			<form class="form-inline search" role="search">
				<div class="form-group">
					<input type="text" class="form-control">
				</div>
				<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span> Search</button>
			</form>
 
			<!-- Progress Bars -->
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">
						<span class="glyphicon glyphicon-scale"></span> 
						Dramatically Engage
					</h3>
				</div>
				<div class="panel-body">
					<div class="progress">
						<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100"
						aria-valuemin="0" aria-valuemax="100" style="width:100%">
							100% Proactively Envisioned
						</div>
					</div>
					<div class="progress">
						<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80"
						aria-valuemin="0" aria-valuemax="100" style="width:80%">
							80% Objectively Innovated
						</div>
					</div>
					<div class="progress">
						<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="45"
						aria-valuemin="0" aria-valuemax="100" style="width:45%">
							45% Portalled
						</div>
					</div>
					<div class="progress">
						<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="35"
						aria-valuemin="0" aria-valuemax="100" style="width:35%">
							35% Done
						</div>
					</div>
				</div>
			</div>

			<!-- Text Panel -->
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">
						<span class="glyphicon glyphicon-bullhorn"></span> 
						Active Predomination
					</h3>
				</div>
				<div class="panel-body">
					<p>Proactively envisioned multimedia based expertise and cross-media growth strategies.</p>
					<div class="btn-group" role="group">
						<button type="button" class="btn btn-default">Resource</button>
						<button type="button" class="btn btn-default">Envision</button>
						<button type="button" class="btn btn-default">Niche</button>
					</div>
				</div>
			</div>


	  </div><!--/Right Column -->

	</div><!--/container-fluid-->
	
	<footer>
		<div class="footer-blurb">
			<div class="container">
				<div class="row">
					<div class="col-sm-3 footer-blurb-item">
						<h3><span class="glyphicon glyphicon-text-size"></span> Dynamic</h3>
						<p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI.</p>
						<p><a class="btn btn-default" href="#">Procrastinate</a></p>
					</div>
					<div class="col-sm-3 footer-blurb-item">
						<h3><span class="glyphicon glyphicon-wrench"></span> Efficient</h3>
						<p>Dramatically maintain clicks-and-mortar solutions without functional solutions. Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas. </p>
						<p><a class="btn btn-default" href="#">Unleash</a></p>
					</div>
					<div class="col-sm-3 footer-blurb-item">
						<h3><span class="glyphicon glyphicon-paperclip"></span> Complete</h3>
						<p>Professionally cultivate one-to-one customer service with robust ideas. Completely synergize resource taxing relationships via premier niche markets. Dynamically innovate resource-leveling customer service for state of the art customer service.</p>
						<p><a class="btn btn-default" href="#">Complete</a></p>
					</div>
					<div class="col-sm-3 footer-blurb-item">
						
						<!-- Thumbnails --> 
						<h3><span class="glyphicon glyphicon-camera"></span> Phosfluorescent</h3>
							<div class="row">
								<div class="col-xs-6">
									<a href="#" class="thumbnail">
										<img src="holder.js/110x80" alt="">
									</a>
								</div>
								<div class="col-xs-6">
									<a href="#" class="thumbnail">
										<img src="holder.js/110x80" alt="">
									</a>
								</div>
								<div class="col-xs-6">
									<a href="#" class="thumbnail">
										<img src="holder.js/110x80" alt="">
									</a>
								</div>
								<div class="col-xs-6">
									<a href="#" class="thumbnail">
										<img src="holder.js/110x80" alt="">
									</a>
								</div>
							</div>
							
					</div>

				</div>
				<!-- /.row -->	
			</div>
        </div>
        
        <div class="small-print">
        	<div class="container">
        		<p><a href="#">Terms &amp; Conditions</a> | <a href="#">Privacy Policy</a> | <a href="#">Contact</a></p>
        		<p>Copyright &copy; Example.com 2015 </p>
        	</div>
        </div>
	</footer>

	
    <!-- jQuery -->
    <script src="<?php echo get_template_directory_uri() ?>/assets/js/jquery-1.11.3.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo get_template_directory_uri() ?>/assets/js/bootstrap.min.js"></script>
	
	<!-- IE10 viewport bug workaround -->
	<script src="<?php echo get_template_directory_uri() ?>/assets/js/ie10-viewport-bug-workaround.js"></script>
	
	<!-- Placeholder Images -->
	<script src="<?php echo get_template_directory_uri() ?>/assets/js/holder.min.js"></script>
	<?php wp_footer() ?>
</body>

</html>
