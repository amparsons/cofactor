    <footer class="footer">
     	<div class="wrapper">
            <div class="footer__col">
				<h1>Latest from Twitter</h1>
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
                  <p><?php echo $tweet['tweet']; ?></p>
              <?php } ?>  
            	<a class="colone bottom" href="https://twitter.com/cofactorsci" target="_blank">SEE ALL TWEETS <span>+</span></a>
				<a class="follow" href="https://twitter.com/cofactorsci" target="_blank">FOLLOW <span>+</span></a>
            </div>
            <div class="footer__col footer__col--middle">
					<h1>Journals blog</h1>
					<p>Read Anna Sharman's blog at <a href="http://sharmanedit.wordpress.com" target="_blank">sharmanedit.wordpress.com</a>. There are regular posts about the policies, processes and speeds of journals and about changes in scientific publishing.</span></p>
                <a class="coltwo bottom" href=" http://sharmanedit.wordpress.com" target="_blank">READ ALL BLOG POSTS <span>+</span></a>
            </div>
            <div class="footer__col">
                <h1>Quicklinks</h1>
                <div class="contact__details contact__details--desktop">
                	<?php if( get_field('phone_number', 5) ): ?><p>Call us:<br><span><?php the_field('phone_number', 5); ?></span></p><?php endif; ?>
  
                  <p>Email:<br><?php if( get_field('email_address', 5) ): ?><a class="social__media--email" href="mailto:<?php the_field('email_address', 5); ?>" target="_blank"><strong><?php the_field('email_address', 5); ?></strong></a><?php endif; ?></p>
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
               <div class="contact__details contact__details--mobile">
                	<?php if( get_field('phone_number', 5) ): ?><p>Or Call:<br><span><?php the_field('phone_number', 5); ?></span></p><?php endif; ?>
   
                  <p>Email:<br><?php if( get_field('email_address', 5) ): ?><a class="social__media--email" href="mailto:<?php the_field('email_address', 5); ?>" target="_blank"><strong><?php the_field('email_address', 5); ?></strong></a><?php endif; ?></p>
                </div>
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

  
	<script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    
      ga('create', 'UA-51692986-1', 'cofactorscience.com');
      ga('send', 'pageview');
    
    </script>
    <?php wp_footer(); ?>
</body>
</html>
