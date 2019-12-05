<?php
$this->load->view('layout/header');
$this->load->view('layout/sidebar');
?>
			
		<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
			<div class="row">
				<ol class="breadcrumb">
					<li><a href="#">
						<em class="fa fa-home"></em>
					</a></li>
					<li class="active">Search</li>
				</ol>
			</div><!--/.row-->
			
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">Search</h1>
				</div>
			</div><!--/.row-->
			
			<div class="row">
				<div class="col-md-12">
					<form>
						<div class="input-group input-group-lg">
							<input type="text" placeholder="Search" class="form-control">
							<div class="input-group-btn">
								<button type="button" class="btn btn-default" tabindex="-1"><i class="fa fa-search"></i></button>
							</div>
						</div>
					</form>
					<br />
					<br />
					<div class="panel panel-default">
						<div class="panel-heading">Showing 4 Results</div>
						<div class="panel-body">
							<div class="search-result-item col-md-12">
								<div class="col-sm-2"><a href="#">
									<img class="search-result-image img-responsive" src="http://via.placeholder.com/150x150">
									</a></div>
								<div class="search-result-item-body col-sm-10">
									<div class="row">
										<div class="col-sm-9">
											<h3 class="search-result-title"><a href="#">Search Result 1</a></h3>
											<p class="text-muted">Category</p>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut maximus, odio a imperdiet rhoncus, nunc metus luctus mi, at dignissim sem orci ut massa. Morbi a magna risus. Nunc vestibulum, nibh sit amet dictum pharetra, augue quam faucibus neque, et ultrices dui arcu ac ligula.</p>
										</div>
										<div class="col-sm-3 text-center">
											<h3>$499</h3>
											<a class="btn btn-primary btn-info btn-md" href="#">View Details</a>
										</div>
									</div>
								</div>
							</div><!--/.search-result-item-->
							<div class="search-result-item col-md-12">
								<div class="col-sm-2"><a href="#">
									<img class="search-result-image img-responsive" src="http://via.placeholder.com/150x150">
									</a></div>
								<div class="search-result-item-body col-sm-10">
									<div class="row">
										<div class="col-sm-9">
											<h3 class="search-result-title"><a href="#">Search Result 2</a></h3>
											<p class="text-muted">Category</p>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut maximus, odio a imperdiet rhoncus, nunc metus luctus mi, at dignissim sem orci ut massa. Morbi a magna risus. Nunc vestibulum, nibh sit amet dictum pharetra, augue quam faucibus neque, et ultrices dui arcu ac ligula.</p>
										</div>
										<div class="col-sm-3 text-center">
											<h4>$499</h4>
											<a class="btn btn-primary btn-info btn-md" href="#">View Details</a>
										</div>
									</div>
								</div>
							</div><!--/.search-result-item-->
							<div class="search-result-item col-md-12">
								<div class="col-sm-2"><a href="#">
									<img class="search-result-image img-responsive" src="http://via.placeholder.com/150x150">
									</a></div>
								<div class="search-result-item-body col-sm-10">
									<div class="row">
										<div class="col-sm-9">
											<h3 class="search-result-title"><a href="#">Search Result 3</a></h3>
											<p class="text-muted">Category</p>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut maximus, odio a imperdiet rhoncus, nunc metus luctus mi, at dignissim sem orci ut massa. Morbi a magna risus. Nunc vestibulum, nibh sit amet dictum pharetra, augue quam faucibus neque, et ultrices dui arcu ac ligula.</p>
										</div>
										<div class="col-sm-3 text-center">
											<h4>$499</h4>
											<a class="btn btn-primary btn-info btn-md" href="#">View Details</a>
										</div>
									</div>
								</div>
							</div><!--/.search-result-item-->
							<div class="search-result-item col-md-12">
								<div class="col-sm-2"><a href="#">
									<img class="search-result-image img-responsive" src="http://via.placeholder.com/150x150">
									</a></div>
								<div class="search-result-item-body col-sm-10">
									<div class="row">
										<div class="col-sm-9">
											<h3 class="search-result-title"><a href="#">Search Result 4</a></h3>
											<p class="text-muted">Category</p>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut maximus, odio a imperdiet rhoncus, nunc metus luctus mi, at dignissim sem orci ut massa. Morbi a magna risus. Nunc vestibulum, nibh sit amet dictum pharetra, augue quam faucibus neque, et ultrices dui arcu ac ligula.</p>
										</div>
										<div class="col-sm-3 text-center">
											<h4>$499</h4>
											<a class="btn btn-primary btn-info btn-md" href="#">View Details</a>
										</div>
									</div>
								</div>
							</div><!--/.search-result-item-->
						</div>
					</div>
					<div class="text-center">
						<div class="btn-group">
							<button type="button" class="btn btn-default"><span class="fa fa-arrow-left"></span></button>
							<button type="button" class="btn btn-default">Previous</button>
							<button type="button" class="btn btn-default">1</button>
							<button type="button" class="btn btn-default">2</button>
							<button type="button" class="btn btn-default">3</button>
							<button type="button" class="btn btn-default">4</button>
							<button type="button" class="btn btn-default">5</button>
							<button type="button" class="btn btn-default">6</button>
							<button type="button" class="btn btn-default">Next</button>
							<button type="button" class="btn btn-default"><span class="fa fa-arrow-right"></span></button>
						</div>
					</div>
				</div>
<?php
$this->load->view('layout/footer');
?>