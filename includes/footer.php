<footer>
  <div class="container">
    <div class="columns six">
    	<a href="/"><img src="assets/images/logo-space-agency.png"/></a>
    </div>
    <div class="columns six">
    	<h3 id="logo-space-agency">CHOMKO<br/>
			&amp; ROSIER</h3>
    </div>
  </div>
</footer>
</div>
<script src="/relative-clocks/assets/js/jquery.sidr.js"></script>
<script src="http://vjs.zencdn.net/5.11.7/video.js"></script>
<script type="text/javascript" src="assets/js/jquery.fancybox.js"></script>
<script>
	$(document).ready(function() {
	  $('#mobile-menu-trigger').sidr({
	  	name: 'mobile-menu',
	  	side: 'right',
	  	source: '#main-navigation'
	  });
	  $('#site-wrapper').on("click", function () {
	  	console.log('clicking')
	  	if($('body').hasClass('sidr-open')){
	  		console.log('trying to close')
	  		$.sidr('close', 'mobile-menu');
	  	};
    });
	});
</script>
</body>
</html>