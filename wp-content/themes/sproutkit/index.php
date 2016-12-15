<?php
get_header();
?>
<section class="hero">
    <div class="row">
        <div class="small-12 columns">
            <h2>Your blog started off as a seed. It&rsquo;s time for it to sprout.</h2>
            <h3 class="subheader">Blog growth services to help you finally turn that blog into a business.</h3>
        </div>
    </div>
</section>
<section class="article gallery">
    <div class="row">
            <?php 
            // the query
            $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1, 'orderby' => 'date', 'order' => 'DESC')); ?>

            <?php if ( $wpb_all_query->have_posts() ) : ?>


            <?php
            while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post();
                $pinterest = get_field('pinterest_description', $cat_post->ID);
                //$out .= '<li>';
                //$out .=  '<a href="'.get_permalink($cat_post->ID).'" title="'.wptexturize($cat_post->post_title).'"><img data-pin-nopin="true" title="'.$cat_post->post_title.'" alt="'.$cat_post->post_title.'" src="'.$pinterest.'"></a></li>';
                $out = '<div class="small-6 large-3 columns end"><div class="article-box"><div class=""><img src="https://s3-us-west-2.amazonaws.com/sproutkit-master/wp-content/uploads/2016/10/10034336/favicon.png" data-pin-nopin="true"></div><h3><a href="'.get_permalink().'" title="'.get_the_title().'">'.get_the_title().'</a></h3><p>'.$pinterest.'</p></div></div>';
                echo $out;
            endwhile;
            ?>
                <?php wp_reset_postdata(); ?>

            <?php else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>
    </div>
</section>
<!--
<section class="content-white">
    <div class="row">
        <div class="small-12 columns">
            <h2>If you build it they will come.</h2>
        </div>
        <div class="small-12 large-6 columns">
            <p>But they really won&rsquo;t. Too often bloggers think that just by getting a blog up means they&rsquo;re 90% there. Unfortunately you need to do a lot more.</p>
            <p>You need to get people to the site and once they are there you need to convert them.</p>
            <p>Each day you need more and more people to visit your blog to help your business grow. You do not know how they are going to find it or where they are coming from, but you can increase your chances of being seen.</p>
            <p><strong>When running a blog do you have time for...</strong></p>
            <ul>
                <li>Search Engine Optimization?</li>
                <li>Checking your search engine rankings?</li>
                <li>Making sure your site is converting?</li>
                <li>Staying on top of your social media marketing?</li>
                <li>Ensuring your site&rsquo;s design works well across all devices?</li>
                <li>Social media promotion?</li>
                <li>Content creation?</li>
            </ul>
            <p>With the help of SproutKit you can focus on running your business while we focus on ensuring that it continues to grow.</p>
            <p><a href="/services" class="button large">Check out our services</a></p>
        </div>
        <div class="small-12 large-6 columns">
            <div class="callout">
                <p>We are people that run blogs of our own. We don&rsquo;t offer services that we haven&rsquo;t tested on our own sites.</p>
                <p>Eating your own dogfood is what the fancy business folk call this.</p>
                <p>We just like to call it common sense.</p>
                <p>We understand the freedom that having a blog business provides people.</p>
                <ul>
                    <li>You get to work from anywhere in the world.</li>
                    <li>You get more time with family and friends.</li>
                    <li>There is no limit to the revenue you can generate.</li>
                </ul>
                <p>We want to help as many people as possible achieve that freedom.</p>
            </div>
        </div>
    </div>
</section>
<section class="content-blue-green">
    <div class="row">
        <div class="small-12 columns">
            <h2>First impressions do matter.</h2>
        </div>
        <div class="small-12 large-6 columns">
            <div class="callout">
                <h3>76% of people surveyed say the most important aspect of a website is ease of use.</h3>
                <p>What are you doing to ensure your site is easy to use and to look at?</p>
                <p>SproutKit will help you get a design that is both easy to use and wonderful to look at. We do not do this so we can showcase to the world how wonderful we are at design, but to help you improve your business.</p>
                <p>Better looking sites convert better. Our goal is to increase the conversions of your site and give you piece of mind that nobody is leaving because it is difficult to use.</p>
            </div>
            <p><a href="/services" class="button large">Check out our services</a></p>
        </div>
        <div class="small-12 large-6 columns">
            <p>When was the last time you ate at a dirty restaurant?</p>
            <p>Hopefully it has been a very long time. How often do you enter a store, see it&rsquo;s a mess, and think that maybe this isn&rsquo;t the place for you?</p>
            <p>People expect to see a certain level of quality when they visit a blog today. It is the first impression of your business and if it is the wrong one it is too easy for someone to click the back button and never return.</p>
            <p>You do not need to have a cutting-edge design to convert potential customers, but you do need something that is easy on the eyes.</p>
            <p>SproutKit follows the best design practices to ensure your site has a quality design and is usable for every person in your audience.</p>
            <p>This means making sure the site works consistently across all devices because you never know in what way someone is going to view your site.</p>
        </div>
    </div>
</section>
<section class="content-white">
    <div class="row">
        <div class="small-12 columns">
            <h2>The marketing game has changed.</h2>
        </div>
        <div class="small-12 large-6 columns">
            <p>Before to grow your blog all you needed to do is write great content and wait till people came across it.</p>
            <p>You can&rsquo;t do that anymore.</p>
            <p>There are just too many blogs trying to grab people&rsquo;s attention and if yours isn&rsquo;t one of the best they will move to one that is better.</p>
            <p>People expect more from blogs and their is only so much mindshare to go around. It is important that you claim a spot by showcasing your blog as one that provides unlimited value to people.</p>
            <p>Once you do this you are no longer just a blog trying to make money, but a business looking to better the lives of everyone it serves.</p>
            <p>The key is consistency. How do you handle your social media presence? Does it follow a content strategy or do you just post to it because everyone else says you should?</p>
            <p><a href="/services" class="button large">Check out our services</a></p>
        </div>
        <div class="small-12 large-6 columns">
            <div class="callout">
                <h3>People trust blog that provide them with some type of value in their lives.</h3>
                <p>Search engine ads. Social media marketing. Content marketing.</p>
                <p>All different types of marketing that you can now do online, but how do they work? They only begin to work once you know how to provide value to your audience.</p>
                <p>This doesn&rsquo;t mean just offering special discounts for those people that follow you, but also helping them with great content.</p>
            </div>
        </div>
    </div>
</section>-->
<?php
get_footer();
?>