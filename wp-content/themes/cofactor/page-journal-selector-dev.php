<?php 
/*
Template Name: Journal Selector Tool Dev
*/

get_header(); ?>

	<section id="main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

        <div class="title__box">
        	<div class="wrapper">
        		<h1><?php the_title(); ?></h1>
        	</div>	
		</div>
        <div class="wrapper">
        	<div class="content__box selectortool">
        		<?php the_content(); ?> 
        	</div>
                <div class="accordion">
                    <div>
                    	<h3>Subject</h3>
                        <div>
                        	<div class="col">
                            	<h4>What broad subject area does your paper fit into?</h4>
                                <div>
                                	<input type="radio" name="RadioGroup1" value="radio" id="RadioGroup1_0">
                                	<label>Biology</label>
                                </div>
                                <div>
                                	<input type="radio" name="RadioGroup1" value="radio" id="RadioGroup1_1">
                                	<label>Medicine</label>
                                </div>
                                <div>
                                	<input type="radio" name="RadioGroup1" value="radio" id="RadioGroup1_2">
                                	<label>Physical Sciences</label>
                                </div>
                                <div>
                                	<input type="radio" name="RadioGroup1" value="radio" id="RadioGroup1_3">
                                	<label>Applied Sciences</label>
                                </div>
                                <div>
                                	<input type="radio" name="RadioGroup1" value="radio" id="RadioGroup1_4">
                                	<label>Interdisciplinary Sciences</label>
                                </div>
                                <div>
                                    <input type="radio" name="RadioGroup1" value="radio" id="RadioGroup1_5">
                                    <label>Humanities</label>
                                </div>
                                <div>
                                    <input type="radio" name="RadioGroup1" value="radio" id="RadioGroup1_6">
                                    <label>Arts</label>
                                </div>
                            </div>
                            <div class="col">
                            	<h4>What broad subject area does your paper fit into?</h4>
                                <div>
                                	<input type="radio" name="RadioGroup2" value="radio" id="RadioGroup1_0">
                                	<label>Biology</label>
                                </div>
                                <div>
                                	<input type="radio" name="RadioGroup2" value="radio" id="RadioGroup1_1">
                                	<label>Medicine</label>
                                </div>
                                <div>
                                	<input type="radio" name="RadioGroup2" value="radio" id="RadioGroup1_2">
                                	<label>Physical Sciences</label>
                                </div>
                                <div>
                                	<input type="radio" name="RadioGroup2" value="radio" id="RadioGroup1_3">
                                	<label>Applied Sciences</label>
                                </div>
                                <div>
                                	<input type="radio" name="RadioGroup2" value="radio" id="RadioGroup1_4">
                                	<label>Interdisciplinary Sciences</label>
                                </div>
                                <div>
                                    <input type="radio" name="RadioGroup2" value="radio" id="RadioGroup1_5">
                                    <label>Humanities</label>
                                </div>
                                <div>
                                    <input type="radio" name="RadioGroup2" value="radio" id="RadioGroup1_6">
                                    <label>Arts</label>
                                </div>
                            </div>
                        </div>
                    </div>
                     <div>
                         <h3>Open access</h3>
                        <div>
                        	<div class="col3">
                            	<h4>What broad subject area does your paper fit into?</h4>
                                <div>
                                	<input type="radio" name="RadioGroup2" value="radio" id="RadioGroup1_0">
                                	<label>Biology</label>
                                </div>
                                <div>
                                	<input type="radio" name="RadioGroup2" value="radio" id="RadioGroup1_1">
                                	<label>Medicine</label>
                                </div>
                                <div>
                                	<input type="radio" name="RadioGroup2" value="radio" id="RadioGroup1_2">
                                	<label>Physical Sciences</label>
                                </div>
                                <div>
                                	<input type="radio" name="RadioGroup2" value="radio" id="RadioGroup1_3">
                                	<label>Applied Sciences</label>
                                </div>
                                <div>
                                	<input type="radio" name="RadioGroup2" value="radio" id="RadioGroup1_4">
                                	<label>Interdisciplinary Sciences</label>
                                </div>
                                <div>
                                    <input type="radio" name="RadioGroup2" value="radio" id="RadioGroup1_5">
                                    <label>Humanities</label>
                                </div>
                                <div>
                                    <input type="radio" name="RadioGroup2" value="radio" id="RadioGroup1_6">
                                    <label>Arts</label>
                                </div>
                            </div>
                            <div class="col3">
                            	<h4>What broad subject area does your paper fit into?</h4>
                                <div>
                                	<input type="radio" name="RadioGroup2" value="radio" id="RadioGroup1_0">
                                	<label>Biology</label>
                                </div>
                                <div>
                                	<input type="radio" name="RadioGroup2" value="radio" id="RadioGroup1_1">
                                	<label>Medicine</label>
                                </div>
                                <div>
                                	<input type="radio" name="RadioGroup2" value="radio" id="RadioGroup1_2">
                                	<label>Physical Sciences</label>
                                </div>
                                <div>
                                	<input type="radio" name="RadioGroup2" value="radio" id="RadioGroup1_3">
                                	<label>Applied Sciences</label>
                                </div>
                                <div>
                                	<input type="radio" name="RadioGroup2" value="radio" id="RadioGroup1_4">
                                	<label>Interdisciplinary Sciences</label>
                                </div>
                                <div>
                                    <input type="radio" name="RadioGroup2" value="radio" id="RadioGroup1_5">
                                    <label>Humanities</label>
                                </div>
                                <div>
                                    <input type="radio" name="RadioGroup2" value="radio" id="RadioGroup1_6">
                                    <label>Arts</label>
                                </div>
                            </div>
                            <div class="col3">
                            	<h4>What broad subject area does your paper fit into?</h4>
                                <div>
                                	<input type="radio" name="RadioGroup2" value="radio" id="RadioGroup1_0">
                                	<label>Biology</label>
                                </div>
                                <div>
                                	<input type="radio" name="RadioGroup2" value="radio" id="RadioGroup1_1">
                                	<label>Medicine</label>
                                </div>
                                <div>
                                	<input type="radio" name="RadioGroup2" value="radio" id="RadioGroup1_2">
                                	<label>Physical Sciences</label>
                                </div>
                                <div>
                                	<input type="radio" name="RadioGroup2" value="radio" id="RadioGroup1_3">
                                	<label>Applied Sciences</label>
                                </div>
                                <div>
                                	<input type="radio" name="RadioGroup2" value="radio" id="RadioGroup1_4">
                                	<label>Interdisciplinary Sciences</label>
                                </div>
                                <div>
                                    <input type="radio" name="RadioGroup2" value="radio" id="RadioGroup1_5">
                                    <label>Humanities</label>
                                </div>
                                <div>
                                    <input type="radio" name="RadioGroup2" value="radio" id="RadioGroup1_6">
                                    <label>Arts</label>
                                </div>
                            </div>
                            <div class="col3">
                            	<h4>What broad subject area does your paper fit into?</h4>
                                <div>
                                	<input type="radio" name="RadioGroup2" value="radio" id="RadioGroup1_0">
                                	<label>Biology</label>
                                </div>
                                <div>
                                	<input type="radio" name="RadioGroup2" value="radio" id="RadioGroup1_1">
                                	<label>Medicine</label>
                                </div>
                                <div>
                                	<input type="radio" name="RadioGroup2" value="radio" id="RadioGroup1_2">
                                	<label>Physical Sciences</label>
                                </div>
                                <div>
                                	<input type="radio" name="RadioGroup2" value="radio" id="RadioGroup1_3">
                                	<label>Applied Sciences</label>
                                </div>
                                <div>
                                	<input type="radio" name="RadioGroup2" value="radio" id="RadioGroup1_4">
                                	<label>Interdisciplinary Sciences</label>
                                </div>
                                <div>
                                    <input type="radio" name="RadioGroup2" value="radio" id="RadioGroup1_5">
                                    <label>Humanities</label>
                                </div>
                                <div>
                                    <input type="radio" name="RadioGroup2" value="radio" id="RadioGroup1_6">
                                    <label>Arts</label>
                                </div>
                            </div>
                            <div class="col3">
                            	<h4>What broad subject area does your paper fit into?</h4>
                                <div>
                                	<input type="radio" name="RadioGroup2" value="radio" id="RadioGroup1_0">
                                	<label>Biology</label>
                                </div>
                                <div>
                                	<input type="radio" name="RadioGroup2" value="radio" id="RadioGroup1_1">
                                	<label>Medicine</label>
                                </div>
                                <div>
                                	<input type="radio" name="RadioGroup2" value="radio" id="RadioGroup1_2">
                                	<label>Physical Sciences</label>
                                </div>
                                <div>
                                	<input type="radio" name="RadioGroup2" value="radio" id="RadioGroup1_3">
                                	<label>Applied Sciences</label>
                                </div>
                                <div>
                                	<input type="radio" name="RadioGroup2" value="radio" id="RadioGroup1_4">
                                	<label>Interdisciplinary Sciences</label>
                                </div>
                                <div>
                                    <input type="radio" name="RadioGroup2" value="radio" id="RadioGroup1_5">
                                    <label>Humanities</label>
                                </div>
                                <div>
                                    <input type="radio" name="RadioGroup2" value="radio" id="RadioGroup1_6">
                                    <label>Arts</label>
                                </div>
                            </div>
                            <div class="col3">
                            	<h4>What broad subject area does your paper fit into?</h4>
                                <div>
                                	<input type="radio" name="RadioGroup2" value="radio" id="RadioGroup1_0">
                                	<label>Biology</label>
                                </div>
                                <div>
                                	<input type="radio" name="RadioGroup2" value="radio" id="RadioGroup1_1">
                                	<label>Medicine</label>
                                </div>
                                <div>
                                	<input type="radio" name="RadioGroup2" value="radio" id="RadioGroup1_2">
                                	<label>Physical Sciences</label>
                                </div>
                                <div>
                                	<input type="radio" name="RadioGroup2" value="radio" id="RadioGroup1_3">
                                	<label>Applied Sciences</label>
                                </div>
                                <div>
                                	<input type="radio" name="RadioGroup2" value="radio" id="RadioGroup1_4">
                                	<label>Interdisciplinary Sciences</label>
                                </div>
                                <div>
                                    <input type="radio" name="RadioGroup2" value="radio" id="RadioGroup1_5">
                                    <label>Humanities</label>
                                </div>
                                <div>
                                    <input type="radio" name="RadioGroup2" value="radio" id="RadioGroup1_6">
                                    <label>Arts</label>
                                </div>
                            </div>
                        </div>
                    </div>
                     <div>
                         <h3>Speed of decision</h3>
                         <div>
                         	<div class="col">
                            	<h4>What broad subject area does your paper fit into?</h4>
                                <div>
                                	<input type="radio" name="RadioGroup2" value="radio" id="RadioGroup1_0">
                                	<label>Biology</label>
                                </div>
                                <div>
                                	<input type="radio" name="RadioGroup2" value="radio" id="RadioGroup1_1">
                                	<label>Medicine</label>
                                </div>
                                <div>
                                	<input type="radio" name="RadioGroup2" value="radio" id="RadioGroup1_2">
                                	<label>Physical Sciences</label>
                                </div>
                                <div>
                                	<input type="radio" name="RadioGroup2" value="radio" id="RadioGroup1_3">
                                	<label>Applied Sciences</label>
                                </div>
                                <div>
                                	<input type="radio" name="RadioGroup2" value="radio" id="RadioGroup1_4">
                                	<label>Interdisciplinary Sciences</label>
                                </div>
                                <div>
                                    <input type="radio" name="RadioGroup2" value="radio" id="RadioGroup1_5">
                                    <label>Humanities</label>
                                </div>
                                <div>
                                    <input type="radio" name="RadioGroup2" value="radio" id="RadioGroup1_6">
                                    <label>Arts</label>
                                </div>
                            </div>
                            <div class="col">
                            	<h4>What broad subject area does your paper fit into?</h4>
                                <div>
                                	<input type="radio" name="RadioGroup2" value="radio" id="RadioGroup1_0">
                                	<label>Biology</label>
                                </div>
                                <div>
                                	<input type="radio" name="RadioGroup2" value="radio" id="RadioGroup1_1">
                                	<label>Medicine</label>
                                </div>
                                <div>
                                	<input type="radio" name="RadioGroup2" value="radio" id="RadioGroup1_2">
                                	<label>Physical Sciences</label>
                                </div>
                                <div>
                                	<input type="radio" name="RadioGroup2" value="radio" id="RadioGroup1_3">
                                	<label>Applied Sciences</label>
                                </div>
                                <div>
                                	<input type="radio" name="RadioGroup2" value="radio" id="RadioGroup1_4">
                                	<label>Interdisciplinary Sciences</label>
                                </div>
                                <div>
                                    <input type="radio" name="RadioGroup2" value="radio" id="RadioGroup1_5">
                                    <label>Humanities</label>
                                </div>
                                <div>
                                    <input type="radio" name="RadioGroup2" value="radio" id="RadioGroup1_6">
                                    <label>Arts</label>
                                </div>
                            </div>
                         </div>
                    </div>
                     <div>
                         <h3>Peer review type</h3>
                        <div>
                        	<div class="col">
                            	<h4>What broad subject area does your paper fit into?</h4>
                                <div>
                                	<input type="radio" name="RadioGroup2" value="radio" id="RadioGroup1_0">
                                	<label>Biology</label>
                                </div>
                                <div>
                                	<input type="radio" name="RadioGroup2" value="radio" id="RadioGroup1_1">
                                	<label>Medicine</label>
                                </div>
                                <div>
                                	<input type="radio" name="RadioGroup2" value="radio" id="RadioGroup1_2">
                                	<label>Physical Sciences</label>
                                </div>
                                <div>
                                	<input type="radio" name="RadioGroup2" value="radio" id="RadioGroup1_3">
                                	<label>Applied Sciences</label>
                                </div>
                                <div>
                                	<input type="radio" name="RadioGroup2" value="radio" id="RadioGroup1_4">
                                	<label>Interdisciplinary Sciences</label>
                                </div>
                                <div>
                                    <input type="radio" name="RadioGroup2" value="radio" id="RadioGroup1_5">
                                    <label>Humanities</label>
                                </div>
                                <div>
                                    <input type="radio" name="RadioGroup2" value="radio" id="RadioGroup1_6">
                                    <label>Arts</label>
                                </div>
                            </div>
                            <div class="col">
                            	<h4>What broad subject area does your paper fit into?</h4>
                                <div>
                                	<input type="radio" name="RadioGroup2" value="radio" id="RadioGroup1_0">
                                	<label>Biology</label>
                                </div>
                                <div>
                                	<input type="radio" name="RadioGroup2" value="radio" id="RadioGroup1_1">
                                	<label>Medicine</label>
                                </div>
                                <div>
                                	<input type="radio" name="RadioGroup2" value="radio" id="RadioGroup1_2">
                                	<label>Physical Sciences</label>
                                </div>
                                <div>
                                	<input type="radio" name="RadioGroup2" value="radio" id="RadioGroup1_3">
                                	<label>Applied Sciences</label>
                                </div>
                                <div>
                                	<input type="radio" name="RadioGroup2" value="radio" id="RadioGroup1_4">
                                	<label>Interdisciplinary Sciences</label>
                                </div>
                                <div>
                                    <input type="radio" name="RadioGroup2" value="radio" id="RadioGroup1_5">
                                    <label>Humanities</label>
                                </div>
                                <div>
                                    <input type="radio" name="RadioGroup2" value="radio" id="RadioGroup1_6">
                                    <label>Arts</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				<input type="submit" value="Search">
                <h1 class="green_header">Journals that fit your criteria</h1>
                <ul class="jlinks">
                	<li><a href="#">AIP Advances</a></li>
                    <li><a href="#">Biology Open</a></li>
                    <li><a href="#">BMJ Open</a></li>
                    <li><a href="#">Cell Reports</a></li>
                    <li><a href="#">CMAJ Open</a></li>
                </ul>
        </div>
		<?php endwhile; ?>

	</section> <!-- /#main -->


<?php get_footer(); ?>