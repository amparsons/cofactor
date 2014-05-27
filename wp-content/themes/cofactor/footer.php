    <footer class="footer">
     	<div class="wrapper">
            <div class="footer__col">
				<h1>Latest from Twitter</h1>
<<<<<<< HEAD
              <?php
				require_once('Creare_Twitter.php');
				
				$twitter = new Creare_Twitter();
				
				##########################################################
				# You can either edit the following per implementation - #
				# or simply edit them in the class and remove all of     #
				# these property overrides                               #
				##########################################################
				
				# username and number of tweets you want to return
				
				$twitter->screen_name = "cofactorsci";
				$twitter->not = 1;
				
				# twitter credentials - check https://www.creare.co.uk/whatever-happened-to-twitters-latest-tweets for a how-to
				
				$twitter->consumerkey = "2sazSxNBb2zVxFzeO6ns1NWzZ";
				$twitter->consumersecret = "SWrkckLWvXYvAfLGed9c3KAEqmxRY0p7dGw5oHOFi4yAENTLmx";
				$twitter->accesstoken = "2158361220-mil9dFNsYqAsj9YWofHH0M2VotHp8awlR5Behto";
				$twitter->accesstokensecret = "ylX4UA1ZQ6uSRJmIYcsxzuTGz6SyMUa0AE9h20zQFrxIG";
				
				# cache file
					
				$twitter->cachefile = $_SERVER['DOCUMENT_ROOT']."/twitter/twitter.txt";
				$twitter->tags = true;
				
				/* You can optionally change the following public properties
				
				$twitter->tags = true; // show all html tags? FALSE = remove all tags
				$twitter->nofollow = true; // all links to be no-follow?
				$twitter->newwindow = true; // all links to open in new window?
				$twitter->hashtags = true; // link up hashtags to twitter search?
				$twitter->attags = true; // link up @ tags to profile pages
				
				*/
				
				$tweets = $twitter->getLatestTweets();
				
				foreach($tweets as $tweet){
				?>
                  <h2><?php echo $tweet['time']; ?></h2>
                  <p><?php echo $tweet['tweet']; ?></p>
              <?php } ?>  
            	<a class="colone bottom" href="https://twitter.com/cofactorsci" target="_blank">SEE ALL TWEETS <span>+</span></a>
				<a class="follow" href="https://twitter.com/cofactorsci" target="_blank">FOLLOW <span>+</span></a>
=======
				<h2>3 days ago</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut.</p>
            	<a class="colone bottom" href="#">SEE ALL TWEETS <span>+</span></a>
				<a class="follow" href="#">FOLLOW <span>+</span></a>
>>>>>>> FETCH_HEAD
            </div>
            <div class="footer__col footer__col--middle">
            	<a href="#">
					<h1>Latest from the blog</h1>
					<h2>3 days ago</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. <span>READ MORE <strong>+</strong></span></p>
                </a>
                <a class="coltwo bottom" href="#">SEE MORE POSTS <span>+</span></a>
            </div>
            <div class="footer__col">
                <h1>Quicklinks</h1>
                <h2>A quicker way to navigate the site</h2>
<<<<<<< HEAD
                <div class="contact__details contact__details--desktop">
                	<?php if( get_field('phone_number', 5) ): ?><p>Or get in touch<br>and call me on:<br><span><?php the_field('phone_number', 5); ?></span></p><?php endif; ?>
                </div>
                <?php
					  wp_nav_menu(
						  array(
						  'menu'		  => 'Footer Quick Links',
						  'container'       => '',
						  'menu_class'	=> ''
					  ));
				  ?>
                 <ul class="social__media--footer">
                    <?php if( get_field('facebook_link', 5) ): ?><li><a class="social__media--facebook" href="<?php the_field('facebook_link', 5); ?>"></a></li><?php endif; ?>
                    <?php if( get_field('linkedin_link', 5) ): ?><li><a class="social__media--linkedin" href="<?php the_field('linkedin_link', 5); ?>"></a></li><?php endif; ?>
					<?php if( get_field('twitter_link', 5) ): ?><li><a class="social__media--twitter" href="<?php the_field('twitter_link', 5); ?>"></a></li><?php endif; ?>
                    <?php if( get_field('google_plus_link', 5) ): ?><li><a class="social__media--google" href="<?php the_field('google_plus_link', 5); ?>"></a></li><?php endif; ?>
                </ul>
               
=======
                <div class="contact__details">
                	<p>Or get in touch<br>and call me on:<br><span>07982 722305</span></p>
                </div>
                <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Workshops</a></li>
                    <li><a href="#">Editorial Help</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Pay Via Paypal</a></li>
                </ul>
                 <ul class="social__media--footer">
                    <li><a class="social__media--facebook" href="#"></a></li>
                    <li><a class="social__media--twitter" href="#"></a></li>
                    <li><a class="social__media--linkedin" href="#"></a></li>
                    <li><a class="social__media--google" href="#"></a></li>
                </ul>
>>>>>>> FETCH_HEAD
            </div>
        </div>    
    </footer>

	</div> <!-- /.container -->
    
    <div class="wrapper">
    	<div class="copy">
			<?php dynamic_sidebar( 'Footer' ); ?>
        	<p>&copy; Copyright <?php bloginfo( 'name' ); echo " "; echo date( "Y" ); ?></p>
        </div>
        <div class="credit">
        	<p>Site design by <a href="http://leanproductions.co.uk/" target="_blank">Lean Digital</a></p>
        </div>
    </div>

  <?php wp_footer(); ?>

</body>
</html>
