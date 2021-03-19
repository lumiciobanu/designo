<?php get_header(); ?>

				<div class="hero">
						<div class="hero__left">
								<h1 class="hero__title title">Award-winning custom designs and digital branding solutions</h1>
								<p class="hero__text">With over 10 years in the industry, we are experienced in creating fully responsive
										websites, app design, and engaging brand experiences. Find out more about our services.</p>
								<button class="hero__btn">Learn More</button>
						</div>
						<div class="hero__right">
								<img class="hero__img" src="<?php echo get_theme_file_uri('/assets/home/desktop/image-hero-phone.png') ?>">
						</div>
				</div>

				<div class="services">
						<div class="services__column services__card services__card--web">
								<h2 class="services__title">Web Design</h2>
								<a href="<?php echo get_site_url(); ?>/web-design" class="services__link">View Projects</a>
						</div>
						<div class="services__column services__column--second">
								<div class="services__two services__card services__card--app">
										<h2 class="services__title">App Design</h2>
										<a href="<?php echo get_site_url(); ?>/app-design" class="services__link">View Projects</a>
								</div>
								<div class="services__three services__card services__card--graph">
										<h2 class="services__title">Graphic Design</h2>
										<a href="<?php echo get_site_url(); ?>/graphic-design" class="services__link">View Projects</a>
								</div>
						</div>
				</div>

				<div class="features">
						<div class="features__card">
								<div class="features__imgcontainer">
										<img class="features__img" src="<?php echo get_theme_file_uri('/assets/home/desktop/illustration-passionate.svg') ?>">
								</div>
								<div class="features__textcontainer">
								<h3 class="features__title">Passionate</h3>
								<p class="features__text">Each project starts with an in-depth brand research to ensure we only create
										products that serve a purpose. We merge art, design, and technology into exciting new solutions.</p>
								</div>
							</div>
						<div class="features__card">
								<div class="features__imgcontainer features__imgcontainer--center">
										<img class="features__img" src="<?php echo get_theme_file_uri('/assets/home/desktop/illustration-resourceful.svg') ?>">
								</div>
								<div class="features__textcontainer">
								<h3 class="features__title">Resourceful</h3>
								<p class="features__text">Everything that we do has a strategic purpose. We use an agile approach in all of
										our projects and value customer collaboration. It guarantees superior results that fulfill our clients’
										needs.</p>
								</div>
						</div>
						<div class="features__card">
								<div class="features__imgcontainer features__imgcontainer--right">
										<img class="features__img" src="<?php echo get_theme_file_uri('/assets/home/desktop/illustration-friendly.svg') ?>">
						</div>
						<div class="features__textcontainer">
								<h3 class="features__title">Friendly</h3>
								<p class="features__text"> We are a group of enthusiastic folks who know how to put people first. Our success
										depends on our customers, and we strive to give them the best experience a company can provide.</p>
						</div>
						</div>

				</div>
			
				<?php pageCta(); ?>
		</div>
		
<?php get_footer(); ?>