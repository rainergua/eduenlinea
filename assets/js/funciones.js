$(document).ready(inicio);

function inicio(){
	$("img").fadeIn("5000");
    $('#btnlogin').click(respLogin);
    $('#confVideo').click(envVideo);
    $('[data-toggle="tooltip"]').tooltip();
    //$('#mymodal').modal('toggle');
    $('#exampleModalCenterTitle').modal('toggle');
    $("#accordion").on("hide.bs.collapse show.bs.collapse", e => {
        $(e.target)
          .prev()
          .find("i:last-child")
          .toggleClass("fa-minus fa-plus");
      });
    /***********
     * ********** */
     $.validator.addMethod('filesize', function (value, element, param) {
        return this.optional(element) || (element.files[0].size <= param)
    }, 'El archivo es demasiado grande, el tamaño no debe superar los 100 MB');

     $("#video").validate({
        ignore: false,
        debug: true,
        rules: {
            'rude': {required: true, minlength: 5},
            'nombre': {required: true},
            'apellido': {required: true},
            'fono': {required: true, min:60000000, max: 79999999},
            'departamento': {required: true},
            'municipio': {required: true},
            'ue': {required: true},
            'titulo': {required: true},
            'userfile': {
                required: true,
                /*extension: "mp4,m4v",*/
                /*filesize: 40000000*/
                filesize: 104857600
            }
        },
        messages: {
            'rude': {required: "Ingresar codigo RUDE", minlength: "Debes ingresar un RUDE o Carnet válido."},
            'nombre': {required: "Ingresar Nombres"},
            'apellido': {required: "Ingresar Apellidos"},
            'fono': {required: "El Teléfono es  obligatorio", min: "Teléfono Celular Inválido", max: "Teléfono Celular Inválido"},
            'departamento': {required: "Ingresar Departamentos"},
            'municipio': {required: "Ingresar Municipio"},
            'ue': {required: "Ingresar Unidad Educativa"},
            'titulo': {required: "Debes ingresar un título de tu video"},
            'userfile': {required: "Debes elegir un video"}
            
        },
        submitHandler: function(form){
            //alert("Sus estan siendo enviados");
            /*url = base_url()+"cuestionario/guardar";
            $(location).attr("href", url);
            form.submit();
            return false;*/
            $('#mymodal').modal('toggle');
            return false;
        }
    });

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

    /*******Tutoriales******* */
    $("#video_sel").on("click", ".prueba", function(e){
        var vid_id = this.id;
        var arrvid = vid_id.split('-');
        console.log(arrvid[1]);
        var url = base_url() + "tutoriales/obtvideo";
        $.post(url, { cod_vid : arrvid[1] }, function(res){
            var video = JSON.parse(res);
            console.log(video);
            $("#repro").html('');
            //"Nombre = " + usuario.user_name + " | TelÃ©fono: " + usuario.user_fono + " <br />";
            //"Edad: " + usuario.user_edad + " | OcupaciÃ³n: " + usuario.user_ocupacion;
            datos = "<h5 class='card-header'>"+video.tit_video+"</h5>";
            datos +=  "<div class='card-body'>";
            datos +=  "<div class='embed-responsive embed-responsive-16by9'>";
            datos +=  "<video src="+base_url()+"/assets/img/video/"+video.arch_video+" controls></video>";
            datos +=  "</div>";
            datos +=  "</div>";
            $("#repro").html(datos);
        });
    });
    /*************/ 

    /*******Concurso******* */
    $("#video_selc").on("click", ".prueba", function(e){
        var vid_id = this.id;
        var arrvid = vid_id.split('-');
        console.log(arrvid[1]);
        var url = base_url() + "diadelmar/obtvideo";
        $.post(url, { cod_vid : arrvid[1] }, function(res){
            var video = JSON.parse(res);
            console.log(video);
            $("#repro").html('');
            //"Nombre = " + usuario.user_name + " | TelÃ©fono: " + usuario.user_fono + " <br />";
            //"Edad: " + usuario.user_edad + " | OcupaciÃ³n: " + usuario.user_ocupacion;
            datos = "<h5 class='card-header'>"+video.cod_diamar+ ' - ' +video.titulo+"</h5>";
            datos +=  "<div class='card-body'>";
            datos +=  "<div class='embed-responsive embed-responsive-16by9'>";
            datos +=  "<video src="+base_url()+"/assets/uploads/files/video/"+video.archivo+" controls></video>";
            datos +=  "</div>";
            datos +=  "</div>";
            datos += "<h5 class='card-header'>"+video.cod_diamar+ ' - ' +video.titulo+"<br>";
            datos += "Autor: "+video.nombres + " " +video.apellidos  + "<br>";
            datos += "Código: "+video.codigo+"<br>";
            datos += "Teléfono: "+video.fono+"<br>";
            datos += "Institución: "+video.ue+"<br>";
            datos += "Fecha: "+video.fecha+"<br>";
            datos += "Lugar: "+video.municipio+" - "+ video.departamento +"<br></h5>";
            $("#repro").html(datos);
        });
    });
    /*************/ 

}
function envVideo(){
    //console.log($('form')[0]);
    $('form')[0].submit();
    return false;
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
    //return base[0]+ '//' + base[2] + '/';
}


