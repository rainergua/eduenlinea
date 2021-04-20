<script src="<?php echo base_url().'assets/js/basic.js'; ?>"></script>
<script src="<?php echo base_url().'assets/js/modernizr.2.5.3.min.js'; ?>"></script>

<!--div class="container-fluid">
    <div class="container mt-4 pt-4">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-ld-12">
                
            </div>
        </div>
    </div>
</div-->

	<div class="flipbook-viewport">
        <div class="containerf">
            <div class="flipbook">
                <div style="background-image:url(<?php echo base_url().'assets/libros/actindep/pag1.png'?>)"></div>
                <div style="background-image:url(<?php echo base_url().'assets/libros/actindep/pag2.png'?>)"></div>
                <div style="background-image:url(<?php echo base_url().'assets/libros/actindep/pag3.png'?>)"></div>
                <div style="background-image:url(<?php echo base_url().'assets/libros/actindep/pag4.png'?>)"></div>
                <div style="background-image:url(<?php echo base_url().'assets/libros/actindep/pag5.png'?>)"></div>
                <div style="background-image:url(<?php echo base_url().'assets/libros/actindep/pag6.png'?>)"></div>
            </div>
        </div>
	</div>

<script type="text/javascript">
function loadApp() {
	// Create the flipbook
	$('.flipbook').turn({
			// Width
			width:922,
			// Height
			height:600,
			// Elevation
			elevation: 50,
			// Enable gradients
			gradients: true,
			// Auto center this flipbook
			autoCenter: true
	});
}
// Load the HTML4 version if there's not CSS transform
yepnope({
	test : Modernizr.csstransforms,
	yep: ['../assets/js/turn.min.js'],
	nope: ['../assets/js/turn.html4.min.js'],
	both: ['../assets/css/basic.css'],
	complete: loadApp
});

</script>