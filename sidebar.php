<div id="sidepanel">
<h2>Testimonial</h2>
<p>more random quotes</p>

<p>Please view the <a href="contact.php">contact page</a> and email me for a quote! I'm open to any ideas you might have, and it certainly can't hurt to ask!</p>

<a href="http://www.facebook.com/pages/Brandon-Foltz-Programming/296072660406271"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/fbico.png" width="48" height="48" alt="Facebook Icon"/></a>
<a href="http://twitter.com/#!/Jaydubzy"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/twitterico.png" width="48" height="48" alt="Twitter Icon"/></a>
<a href="http://www.linkedin.com/pub/brandon-foltz/3b/28b/341"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/linkedinico.png" width="48" height="48" alt="Linkedin Icon"/></a>
<a href="https://profiles.google.com/u/0/103810034530577716870"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/googleplusico.png" width="48" height="48" alt="Google Plus Icon"/></a>

<p></p>

<script charset="utf-8" src="http://widgets.twimg.com/j/2/widget.js"></script>
<script>
new TWTR.Widget({
  version: 2,
  type: 'profile',
  rpp: 3,
  interval: 30000,
  width: 210,
  height: 300,
  theme: {
    shell: {
      background: '#004691',
      color: '#cccccc'
    },
    tweets: {
      background: '#000000',
      color: '#cccccc',
      links: '#048acd'
    }
  },
  features: {
    scrollbar: false,
    loop: false,
    live: false,
    behavior: 'all'
  }
}).render().setUser('Jaydubzy').start();
</script>

<? wp_meta() ?>
</div>

			
			

