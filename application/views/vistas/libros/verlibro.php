<script src="<?php echo base_url().'assets/js/modernizr.2.5.3.min.js'; ?>"></script>
<script src="<?php echo base_url().'assets/wow_book/wow_book.js'; ?>"></script>
<?php
	$this->load->helper('html');
	$link = array(
	'href' => 'assets/wow_book/wow_book.css',
	'rel' => 'stylesheet',
    'type' => 'text/css'
	);
	echo link_tag($link);?>
<?php
	$this->load->helper('html');
	$link = array(
	'href' => 'assets/wow_book/style.css',
	'rel' => 'stylesheet',
    'type' => 'text/css'
	);
	echo link_tag($link);?>
<?php
	$this->load->helper('html');
	$link = array(
	'href' => 'assets/wow_book/preview.css',
	'rel' => 'stylesheet',
    'type' => 'text/css'
	);
	echo link_tag($link);?>

<div id="container" class="container libro">

<nav class="my-1 py-1">
    <ul>
        <li><a id='first'     href="#" title='Ir a primera página'   >First page</a></li>
        <li><a id='back'      href="#" title='Atrás'  >Back</a></li>
        <li><a id='next'      href="#" title='Adelante'>Next</a></li>
        <li><a id='last'      href="#" title='Ir a última página'    >last page</a></li>
        <li><a id='zoomin'    href="#" title='Aumentar'           >Zoom In</a></li>
        <li><a id='zoomout'   href="#" title='Disminuir'          >Zoom Out</a></li>
        <li><a id='slideshow' href="#" title='Empezar slideshow'   >Slide Show</a></li>
        <li><a id='flipsound' href="#" title='Sonido' >Flip sound</a></li>
        <li><a id='fullscreen' href="#" title='Pantalla completa' >Fullscreen</a></li>
		<li><a id='thumbs'    href="#" title='Miniaturas'>Thumbs</a></li>
		<li><a id='pdf' href="<?php echo base_url().'assets/files/actaInde.pdf'?>" title='Descarga PDF' target="_blank">PDF File</a></li>
    </ul>
</nav>

	<div class="row">
		<div class="col-sm-12 col-md-12 col-ld-12 text-center">
			<div id="mybook">
                <div id='cover'></div>
                <div> <img src="<?php echo base_url().'assets/libros/actindep/pag0.png'?>" class="img-fluid">  </div>
				<div> <img src="<?php echo base_url().'assets/libros/actindep/pag1.png'?>" class="img-fluid">  </div>
				<div> <img src="<?php echo base_url().'assets/libros/actindep/pag2.png'?>" class="img-fluid"> </div>
				<div> <img src="<?php echo base_url().'assets/libros/actindep/pag3.png'?>" class="img-fluid"> </div>
				<div> <img src="<?php echo base_url().'assets/libros/actindep/pag4.png'?>" class="img-fluid"> </div>
				<div> <img src="<?php echo base_url().'assets/libros/actindep/pag5.png'?>" class="img-fluid"> </div>
				<div> <img src="<?php echo base_url().'assets/libros/actindep/pag6.png'?>" class="img-fluid"> </div>
				<div> <img src="<?php echo base_url().'assets/libros/actindep/pag7.png'?>" class="img-fluid"> </div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript"> 
  $(document).ready(function() {
    $('#mybook').wowBook({
      height : 600,
	  width  : 800
	  ,centeredWhenClosed : true
            ,hardcovers : true
            ,turnPageDuration : 1000
            ,numberedPages : [1,0]
            ,controls : {
                zoomIn    : '#zoomin',
                zoomOut   : '#zoomout',
                next      : '#next',
                back      : '#back',
                first     : '#first',
                last      : '#last',
                slideShow : '#slideshow',
                flipSound : '#flipsound',
                thumbnails : '#thumbs',
                fullscreen : '#fullscreen'
            }
            ,scaleToFit: "#container"
            ,thumbnailsPosition : 'bottom'
            ,onFullscreenError : function(){
                var msg="Fullscreen failed.";
                if (self!=top) msg="El frame is blocking full screen mode. Click on 'remove frame' button above and try to go full screen again."
                alert(msg);
            }



    });
  });
</script>