$(document).ready(inicio);

function inicio(){
    //$("body").fadeIn("slow");
	$("img").fadeIn("5000");
    $('#btnlogin').click(respLogin);
    $('[data-toggle="tooltip"]').tooltip();
    $('#mymodal').modal('toggle');
    $('#exampleModalCenterTitle').modal('toggle');
    $("#accordion").on("hide.bs.collapse show.bs.collapse", e => {
        $(e.target)
          .prev()
          .find("i:last-child")
          .toggleClass("fa-minus fa-plus");
      });
    /***********
     * ********** */
    
    /***************
     ************ */
    $("#accordion").on("click",".nano",function(e){
        $('.objeto').html('');
        rda = this.id;
        console.log("El id del boton es; "+rda);
        var cont = '<object ';
            //cont += 'type="application/pdf" ';
            cont += 'data="' + base_url()+ 'assets/uploads/files/cont/'+rda+'"';
            cont += ' style="width: 100%; height: 500px;">';
            cont += 'ERROR (no puede mostrarse el objeto)';
            cont += '</object>';
        console.log(cont);
        $('.objeto').html(cont);
    });

    $('#exampleModalCenter').on('hidden.bs.modal', function (e) {
        $('.objeto').html('');
      });
}

function respLogin(){
    var url = base_url() + "login/ingresar";
    $('.load').html('<img src="'+ base_url() + 'assets/img/load.gif">');
    $.post(url, $("#form_login").serialize(), function(res){
        $('.load').html('');
        if(res == 1){
            location.href = base_url() + "eduvit/regular";
        } else {
            $("#form_login")[0].reset();
            $('.error').html('Usuario no válido');
        }
    });
}

function isMobile() {
    try{ 
        document.createEvent("TouchEvent");
        return true;
    }
    catch(e){ 
        return false;
    }      
}

function base_url(){
	var base = window.location.href.split('/');
	var todo = window.location.href;
	return base[0]+ '//' + base[2] + '/' + base[3] + '/';
}


