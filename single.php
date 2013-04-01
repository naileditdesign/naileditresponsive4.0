<?php get_header(); ?>


	
		<section>
    
	<div class="row">
	<?php include(TEMPLATEPATH . '/sidebar-right.php'); ?>
	<div class="large-8 columns">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
    <div class="post" id="post-<?php the_ID(); ?>">
    	
        <div class="post-content">
        	 <h1><a href="<?php the_permalink() ?>" ><?php the_title(); ?></a></h1>
        	
        	<div class="content">
        		
        	
			<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
			

			<?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>
			
			</div>
			
        </div>
    </div>
	
  <?php endwhile; endif; ?>

	</div>
		<div class="large-8 columns">
			<h3>Orbit Slider</h3>
			
      <ul data-orbit>
      	<li><img src="http://placehold.it/1200x250&text=Slide_1" alt="slide image"></li>
      	<li><img src="http://placehold.it/1200x250&text=Slide_2" alt="slide image"></li>
      	<li><img src="http://placehold.it/1200x250&text=Slide_3" alt="slide image"></li>
      </ul>
    
    
			<h3>The Grid</h3>

			<!-- Grid Example -->
			<div class="row">
				<div class="large-12 columns">
					<div class="panel">
						<p>This is a twelve column section in a row. Each of these includes a div.panel element so you can see where the columns are - it's not required at all for the grid.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="large-6 columns">
					<div class="panel">
						<p>Six columns</p>
					</div>
				</div>
				<div class="large-6 columns">
					<div class="panel">
						<p>Six columns</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="large-4 columns">
					<div class="panel">
						<p>Four columns</p>
					</div>
				</div>
				<div class="large-4 columns">
					<div class="panel">
						<p>Four columns</p>
					</div>
				</div>
				<div class="large-4 columns">
					<div class="panel">
						<p>Four columns</p>
					</div>
				</div>
			</div>
			
   <h3>Tabs</h3>
   <div class="section-container tabs" data-section="tabs">
   	
  <section class="section">
    <p class="title"><a href="#">Section 1</a></p>
    <div class="content">
      <p>Content of section 1.</p>
    </div>
  </section>
  <section class="section">
    <p class="title"><a href="#">Section 2</a></p>
    <div class="content">
      <p>Content of section 2.</p>
    </div>
  </section>
</div>

			<h3>Buttons</h3>

      <div class="row">
        <div class="large-6 columns">
          <p><a href="#" class="small button">Small Button</a></p>
          <p><a href="#" class="button">Medium Button</a></p>
          <p><a href="#" class="large button">Large Button</a></p>
        </div>
        <div class="large-6 columns">
          <p><a href="#" class="small alert button">Small Alert Button</a></p>
          <p><a href="#" class="success button">Medium Success Button</a></p>
          <p><a href="#" class="large secondary button">Large Secondary Button</a></p>
        </div>
      </div>
      
      <div class="row">
<div class="large-12 columns">
<h4 class="subheader">Here's some lovley SVG Icons too. Just thrown in because we like em...</h4>
<a class="fc-webicon f500px large" href="#">500px</a>
    
    <a class="fc-webicon aboutme large" href="#">About.me</a>
    
    <a class="fc-webicon adn large" href="#">ADN (App.net)</a>
    
    <a class="fc-webicon android large" href="#">Android</a>

    <a class="fc-webicon apple large" href="#">Apple</a>
    
    <a class="fc-webicon behance large" href="#">Behance</a>
    
    <a class="fc-webicon bitbucket large" href="#">Bitbucket</a>

    <a class="fc-webicon coderwall large" href="#">Coderwall</a>
    
    <a class="fc-webicon blogger large" href="#">Blogger</a>
    
    <a class="fc-webicon creativecloud large" href="#">Creative Cloud</a>
    
    <a class="fc-webicon dribbble large" href="#">Dribbble</a>
    
    <a class="fc-webicon dropbox large" href="#">Dropbox</a>
    
    <a class="fc-webicon evernote large" href="#">Evernote</a>
    
    <a class="fc-webicon fairheadcreative large" href="#">Fairhead Creative</a>
    
    <a class="fc-webicon facebook large" href="#">Facebook</a>
    
    <a class="fc-webicon flickr large" href="#">Flickr</a>
    
    <a class="fc-webicon foursquare large" href="#">Foursquare</a>
    
    <a class="fc-webicon git large" href="#">Git</a>
    
    <a class="fc-webicon github large" href="#">Github</a>
    
    <a class="fc-webicon goodreads large" href="#">Goodreads</a>
    
    <a class="fc-webicon googleplay large" href="#">Google Play</a>
    
    <a class="fc-webicon googleplus large" href="#">Google+</a>
    
    <a class="fc-webicon html5 large" href="#">HTML5</a>
    
    <a class="fc-webicon icloud large" href="#">iCloud</a>
    
    <a class="fc-webicon instagram large" href="#">Instagram</a>
    
    <a class="fc-webicon lastfm large" href="#">Last.fm</a>
    
    <a class="fc-webicon linkedin large" href="#">LinkedIn</a>
    
    <a class="fc-webicon mail large" href="#">Mail</a>
    
    <a class="fc-webicon mixi large" href="#">Mail</a>
    
    <a class="fc-webicon msn large" href="#">MSN</a>
    
    <a class="fc-webicon picasa large" href="#">Picasa</a>
    
    <a class="fc-webicon pinterest large" href="#">Pinterest</a>
    
    <a class="fc-webicon pocket large" href="#">PocketApp</a>
    
    <a class="fc-webicon quora large" href="#">Quora</a>
    
    <a class="fc-webicon orkut large" href="#">Orkut</a>
    
    <a class="fc-webicon mercurial large" href="#">Mercurial</a>
    
    <a class="fc-webicon rdio large" href="#">Rdio</a>
    
    <a class="fc-webicon renren large" href="#">Renren</a>
    
    <a class="fc-webicon rss large" href="#">RSS</a>
    
    <a class="fc-webicon skitch large" href="#">Skitch</a>
    
    <a class="fc-webicon skype large" href="#">Skype</a>
    
    <a class="fc-webicon soundcloud large" href="#">SoundCloud</a>
    
    <a class="fc-webicon spotify large" href="#">Spotify</a>
    
    <a class="fc-webicon stackoverflow large" href="#">Stack Overflow</a>
    
    <a class="fc-webicon stumbleupon large" href="#">StumbleUpon!</a>
    
    <a class="fc-webicon svn large" href="#">SVN</a>
    
    <a class="fc-webicon tent large" href="#">Tent</a>
    
    <a class="fc-webicon tripadvisor large" href="#">Trip Advisor</a>
    
    <a class="fc-webicon tumblr large" href="#">Tumblr</a>
    
    <a class="fc-webicon twitter large" href="#">Twitter</a>
    
    <a class="fc-webicon vimeo large" href="#">Vimeo</a>
    
    <a class="fc-webicon windows large" href="#">Windows</a>
    
    <a class="fc-webicon wordpress large" href="#">Wordpress</a>
    
    <a class="fc-webicon xing large" href="#">Xing</a>
    
    <a class="fc-webicon weibo large" href="#">Sina Weibo</a>
    
    <a class="fc-webicon yelp large" href="#">Yelp!</a>
    
    <a class="fc-webicon youtube large" href="#">YouTube</a>
    
    <a class="fc-webicon youversion large" href="#">YouVersion</a>
    
    <a class="fc-webicon zerply large" href="#">Zerply</a>
	
</div>
	</div>
  </section>
</div>
</div>
      	
      </div>


<?php get_footer(); ?>