    <footer class="footer">
     	<div class="wrapper">
            <div class="footer__col">
				<h1>Latest from Twitter</h1>
				<h2>3 days ago</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut.</p>
            	<a class="colone bottom" href="#">SEE ALL TWEETS <span>+</span></a>
				<a class="follow" href="#">FOLLOW <span>+</span></a>
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
