<script src="<?php echo base_url().'assets/src-book/jquery.booklet.latest.js'; ?>"></script>
<script src="<?php echo base_url().'assets/src-book/jquery.easing.1.3.js'; ?>"></script>
<script src="<?php echo base_url().'assets/src-book/jquery-ui-1.10.4.min.js'; ?>"></script>
<?php
	$this->load->helper('html');
	$link = array(
	'href' => 'assets/src-book/jquery.booklet.latest.css',
	'rel' => 'stylesheet',
    'type' => 'text/css',
    'media' => 'screen, projection, tv'
	);
	echo link_tag($link);?>

<!--div class="container-fluid">
    <div class="container mt-4 pt-4">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-ld-12">
                
            </div>
        </div>
    </div>
</div-->

<div id="mybook">
    <div>
        <img src="<?php echo base_url().'assets/libros/actindep/pag1.png'?>" class="img-fluid">
    </div>
    <div>
        <img src="<?php echo base_url().'assets/libros/actindep/pag2.png'?>" class="img-fluid">
    </div>
    <div>
        <img src="<?php echo base_url().'assets/libros/actindep/pag3.png'?>" class="img-fluid">
    </div>
    <div>
        <img src="<?php echo base_url().'assets/libros/actindep/pag4.png'?>" class="img-fluid">
    </div>
</div>

<script type="text/javascript">
$(function() {
    //single book
    $('#mybook').booklet();

    //multiple books with ID's
    //$('#mybook1, #mybook2').booklet();

    //multiple books with a class
    //$('.mycustombooks').booklet();
});
</script>