<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin4765 extends CI_Controller {
    public function __construct(){
        parent::__construct();
		$this->load->model('admin_model');
		$this->load->library('form_validation');
        $this->load->database('default');
        $this->load->library('grocery_CRUD');
    }
    public function _example_output($output = null)
	{
		$this->load->view('template/header_admin',(array)$output);
		$this->load->view('example.php');

    }
    public function index(){
        $this->load->view('template/header');
        $this->load->view('vistas/admin_panel');

    }

    public function tipocont()
    {
        $crud = new grocery_CRUD();
        $crud->set_table('tipo_contenido');
        $crud->set_subject('Tipo de contenido');
        $crud->display_as('tipo_cont','Tipo de Contenido');
        $crud->display_as('tipo_arch','Extensiones');
        $crud->required_fields('tipo_cont','tipo_arch');
        $output = $crud->render();
        $this->_example_output($output);
    }

    public function usuario()
    {
        $crud = new grocery_CRUD();
        $crud->set_table('usuario');
        $crud->set_subject('Usuarios');
        $crud->display_as('nom_usu','Nombre Completo');
        $crud->display_as('carnet','Número de Carnet');
        $crud->display_as('fono','Teléfono');
        $crud->display_as('dependencia','dependencia');
        $crud->display_as('perfil','Perfil');
        $crud->required_fields('nom_usu','carnet','fono','dependencia','perfil');
        $output = $crud->render();
        $this->_example_output($output);
    }


    public function subsistema()
    {
        $crud = new grocery_CRUD();
        $crud->set_table('subsistema');
        $crud->set_subject('Subsistema de Educación');
        $crud->display_as('desc_sis','Descripción');
        $crud->display_as('img_sis','Ícono o Imágen');
        $crud->display_as('link_sis','Enlace');
        $crud->display_as('txt_sis','Detalle');
        $crud->set_field_upload('img_sis', 'assets/uploads/files/img');
        $crud->required_fields('id_sis','desc_sis','img_sis');
        $output = $crud->render();
        $this->_example_output($output);
    }

    public function nivel()
    {
        $crud = new grocery_CRUD();
        $crud->set_table('nivel');
        $crud->set_subject('Niveles');
        $crud->display_as('des_niv','Descripción');
        $crud->display_as('img_niv','Ícono o Imágen');
        $crud->display_as('txt_niv','Detalle');
        $crud->set_field_upload('img_niv', 'assets/uploads/files/img');
        $crud->display_as('cod_sis','Subsistema');
        $crud->set_relation('cod_sis','subsistema','desc_sis');
        $crud->required_fields('des_niv','img_niv', 'cod_sis');
        $output = $crud->render();
        $this->_example_output($output);
    }

    public function grado()
    {
        $crud = new grocery_CRUD();
        $crud->set_table('grado');
        $crud->set_subject('Grados');
        $crud->display_as('des_gra','Descripción');
        $crud->display_as('img_gra','Ícono o Imágen');
        $crud->display_as('txt_gra','Detalle');
        $crud->set_field_upload('img_gra', 'assets/uploads/files/img');
        $crud->display_as('cod_niv','Nivel');
        $crud->set_relation('cod_niv','nivel','des_niv');
        $crud->required_fields('des_gra','img_gra', 'cod_niv');
        $output = $crud->render();
        $this->_example_output($output);
    }
    public function area()
    {
        $crud = new grocery_CRUD();
        $crud->set_table('area');
        $crud->set_subject('Áreas de conocimiento');
        $crud->display_as('des_area','Descripción');
        $crud->display_as('img_area','Ícono o Imágen');
        $crud->display_as('txt_area','Detalle');
        $crud->set_field_upload('img_area', 'assets/uploads/files/img');

        $crud->display_as('cod_niv','Nivel');
        $crud->set_relation('cod_niv','nivel','des_niv');
        $crud->display_as('cod_gra','Grado');
        $crud->set_relation('cod_gra','grado','des_gra');
        $this->load->library('gc_dependent_select');
        $fields = array(
            'cod_niv' => array(// first dropdown name
            'table_name' => 'nivel', // table of country
            'id_field' => 'cod_niv',
            'title' => 'des_niv', // country title
            'data-placeholder' => 'Seleccionar Nivel',
            'relate' => null // the first dropdown hasn't a relation
            ),
            'cod_gra' => array(// second dropdown name
            'table_name' => 'grado', // table of state
            'title' => 'des_gra', // state title
            'id_field' => 'cod_gra', // table of state: primary key
            'relate' => 'cod_niv', // table of state:
            'data-placeholder' => 'Seleccionar Grado' //dropdown's data-placeholder:
            )
        );
        $config = array(
            'main_table' => 'area',
            'main_table_primary' => 'cod_area',
            "url" => base_url() . __CLASS__ . '/' . __FUNCTION__ . '/',
            );
        $categories = new gc_dependent_select($crud, $fields, $config);
        $js = $categories->get_js();

        $crud->required_fields('des_area','img_area', 'cod_gra', 'cod_niv');
        $output = $crud->render();
        $output->output.= $js;
        $this->_example_output($output);
    }


    public function periodo()
    {
        $crud = new grocery_CRUD();
        $crud->set_table('periodo');
        $crud->set_subject('Periodicidad');
        $crud->display_as('des_per','Descripción');
        $crud->display_as('img_per','Ícono o Imágen');
        $crud->display_as('txt_per','Detalle');
        $crud->set_field_upload('img_per', 'assets/uploads/files/img');
        $crud->required_fields('des_per','img_per');
        $output = $crud->render();
        $this->_example_output($output);
    }
    

    public function tema(){
        $crud = new grocery_CRUD();
        $crud->set_table('tema');
        $crud->set_subject('Temas');
        $crud->display_as('tit_tema','Título');
        $crud->display_as('con_tema','Subtítulos del Tema');
        $crud->display_as('txt_tema','Logro de aprendizaje');
        $crud->display_as('cod_area','Área de conocimiento');
        $crud->set_relation('cod_area','area','des_area');
        $crud->display_as('cod_gra','Grado');
        $crud->set_relation('cod_gra','grado','des_gra');
        $crud->display_as('cod_niv','Nivel');
        $crud->set_relation('cod_niv','nivel','des_niv');
        $crud->display_as('cod_per','Periodo');
        $crud->set_relation('cod_per','periodo','des_per');
        $crud->display_as('cod_sis','Subsistema');
        $crud->set_relation('cod_sis','subsistema','desc_sis');

        $crud->columns('tit_tema', 'cod_per','cod_area','cod_gra','cod_niv','cod_sis');

        $this->load->library('gc_dependent_select');
        // settings

        $fields = array(

        // first field:
        'cod_sis' => array( // first dropdown name
        'table_name' => 'subsistema', // table of country
        'title' => 'desc_sis', // country title
        'relate' => null // the first dropdown hasn't a relation
        ),
        // second field
        'cod_niv' => array( // second dropdown name
        'table_name' => 'nivel', // table of state
        'title' => 'des_niv', // state title
        'id_field' => 'cod_niv', // table of state: primary key
        'relate' => 'cod_sis', // table of state:
        'data-placeholder' => 'Selecione Nivel' //dropdown's data-placeholder:

        ),
        // third field. same settings
        'cod_gra' => array(
        'table_name' => 'grado',
        /*'where' =>"",  // string. It's an optional parameter.*/
        'order_by'=>"cod_gra",  // string. It's an optional parameter.
        'title' => '{des_gra}',  // now you can use this format )))
        'id_field' => 'cod_gra',
        'relate' => 'cod_niv',
        'data-placeholder' => 'Selecione Grado'
        ),
        // third field. same settings
        'cod_area' => array(
            'table_name' => 'area',
            /*'where' =>"",  // string. It's an optional parameter.*/
            'order_by'=>"cod_area",  // string. It's an optional parameter.
            'title' => '{des_area}',  // now you can use this format )))
            'id_field' => 'cod_area',
            'relate' => 'cod_gra',
            'data-placeholder' => 'Seleccione Area'
            ), 
        );

        $config = array(
            'main_table' => 'tema',
            'main_table_primary' => 'cod_tema',
            "url" => base_url() . __CLASS__ . '/' . __FUNCTION__ . '/', //path to method
            'ajax_loader' => base_url() . 'assets/img/ajax-loader.gif', // path to ajax-loader image. It's an optional parameter
            'segment_name' =>'Your_segment_name' // It's an optional parameter. by default "get_items"
            );

        $crud->required_fields('tit_tema','con_tema', 'cod_niv', 'cod_sis', 'cod_gra', 'cod_area', 'cod_per');
        $categories = new gc_dependent_select($crud, $fields, $config);
        $js = $categories->get_js();

        $output = $crud->render();
        $output->output.= $js;
        $this->_example_output($output);
    }
    

    public function contenido()
    {
        $crud = new grocery_CRUD();
        $crud->set_table('contenido');
        $crud->set_subject('Contenido');
        $crud->display_as('des_con','Descripción');
        $crud->display_as('res_con','Resumen');
        $crud->display_as('img_con','Imagen de contenido');
        $crud->set_field_upload('img_con', 'assets/uploads/files/img');
        $crud->display_as('arch_con','Archivo de contenido');
        $crud->set_field_upload('arch_con', 'assets/uploads/files/cont');
        $crud->display_as('cod_tipo','Tipo contenido');
        $crud->set_relation('cod_tipo','tipo_contenido','{tipo_cont} - {tipo_arch}');
        $crud->display_as('cod_per','Periodicidad');
        $crud->set_relation('cod_per','periodo','des_per');
        $crud->display_as('cod_area','Área de conocimiento');
        $crud->set_relation('cod_area','area','des_area');
        $crud->display_as('cod_gra','Grado');
        $crud->set_relation('cod_gra','grado','des_gra');
        $crud->display_as('cod_niv','Nivel');
        $crud->set_relation('cod_niv','nivel','des_niv');
        $crud->display_as('cod_tema','Tema');
        $crud->set_relation('cod_tema','tema','tit_tema');
        $crud->display_as('cod_sis','Subsistema');
        $crud->set_relation('cod_sis','subsistema','desc_sis');


        $this->load->library('gc_dependent_select');
        // settings

        $fields = array(

        // first field:
        'cod_sis' => array( // first dropdown name
        'table_name' => 'subsistema', // table of country
        'title' => 'desc_sis', // country title
        'relate' => null // the first dropdown hasn't a relation
        ),
        // second field
        'cod_niv' => array( // second dropdown name
        'table_name' => 'nivel', // table of state
        'title' => 'des_niv', // state title
        'id_field' => 'cod_niv', // table of state: primary key
        'relate' => 'cod_sis', // table of state:
        'data-placeholder' => 'Selecione Nivel' //dropdown's data-placeholder:

        ),
        // third field. same settings
        'cod_gra' => array(
        'table_name' => 'grado',
        /*'where' =>"",  // string. It's an optional parameter.*/
        'order_by'=>"cod_gra",  // string. It's an optional parameter.
        'title' => '{des_gra}',  // now you can use this format )))
        'id_field' => 'cod_gra',
        'relate' => 'cod_niv',
        'data-placeholder' => 'select Grado'
        ),
        // third field. same settings
        'cod_area' => array(
            'table_name' => 'area',
            /*'where' =>"",  // string. It's an optional parameter.*/
            'order_by'=>"cod_area",  // string. It's an optional parameter.
            'title' => '{des_area}',  // now you can use this format )))
            'id_field' => 'cod_area',
            'relate' => 'cod_gra',
            'data-placeholder' => 'Seleccione Area'
            ), 
        'cod_tema' => array(
            'table_name' => 'tema',
            /*'where' =>"",  // string. It's an optional parameter.*/
            'order_by'=>"cod_tema",  // string. It's an optional parameter.
            'title' => '{tit_tema}',  // now you can use this format )))
            'id_field' => 'cod_tema',
            'relate' => 'cod_area',
            'data-placeholder' => 'Seleccione Tema'
            ), 
        );

        $config = array(
        'main_table' => 'contenido',
        'main_table_primary' => 'cod_con',
        "url" => base_url() . __CLASS__ . '/' . __FUNCTION__ . '/', //path to method
        'ajax_loader' => base_url() . 'assets/img/ajax-loader.gif', // path to ajax-loader image. It's an optional parameter
        'segment_name' =>'Your_segment_name' // It's an optional parameter. by default "get_items"
        );
        $categories = new gc_dependent_select($crud, $fields, $config);




        $js = $categories->get_js();

        $crud->required_fields('des_con','img_con', 'arch_con', 'cod_tipo','resumen_con','cod_per','cod_area','cod_gra','cod_niv','cod_sis');
        $output = $crud->render();
        $output->output.= $js;

        $this->_example_output($output);
    }

    public function material()
    {
        $crud = new grocery_CRUD();
        $crud->set_table('material_area');
        $crud->set_subject('Material de área');
        $crud->display_as('des_mat','Descripción o título');
        $crud->display_as('img_mat','Imagen del material');
        $crud->set_field_upload('img_mat', 'assets/uploads/files/img');
        $crud->display_as('arch_mat','Archivo de material');
        $crud->set_field_upload('arch_mat', 'assets/uploads/files/cont/secar');
        $crud->display_as('txt_mat','Resumen');
        $crud->display_as('cod_tipo','Tipo contenido');
        $crud->set_relation('cod_tipo','tipo_contenido','{tipo_cont} - {tipo_arch}');
        
        $crud->display_as('cod_area','Área de conocimiento');
        $crud->set_relation('cod_area','area','des_area');
        $crud->display_as('cod_gra','Grado');
        $crud->set_relation('cod_gra','grado','des_gra');
        $crud->display_as('cod_niv','Nivel');
        $crud->set_relation('cod_niv','nivel','des_niv');
        
        $crud->display_as('cod_sis','Subsistema');
        $crud->set_relation('cod_sis','subsistema','desc_sis');

        $crud->display_as('cod_per','Trimestre');
        $crud->set_relation('cod_per','periodo','des_per');


        $this->load->library('gc_dependent_select');
        // settings

        $fields = array(

        // first field:
        'cod_sis' => array( // first dropdown name
        'table_name' => 'subsistema', // table of country
        'title' => 'desc_sis', // country title
        'relate' => null, // the first dropdown hasn't a relation
        'data-placeholder' => 'Selecione subsistema'
        ),
        // second field
        'cod_niv' => array( // second dropdown name
        'table_name' => 'nivel', // table of state
        'title' => 'des_niv', // state title
        'id_field' => 'cod_niv', // table of state: primary key
        'relate' => 'cod_sis', // table of state:
        'data-placeholder' => 'Selecione nivel' //dropdown's data-placeholder:

        ),
        // third field. same settings
        'cod_gra' => array(
        'table_name' => 'grado',
        /*'where' =>"",  // string. It's an optional parameter.*/
        'order_by'=>"cod_gra",  // string. It's an optional parameter.
        'title' => '{des_gra}',  // now you can use this format )))
        'id_field' => 'cod_gra',
        'relate' => 'cod_niv',
        'data-placeholder' => 'Seleccione grado'
        ),
        // third field. same settings
        'cod_area' => array(
            'table_name' => 'area',
            /*'where' =>"",  // string. It's an optional parameter.*/
            'order_by'=>"cod_area",  // string. It's an optional parameter.
            'title' => '{des_area}',  // now you can use this format )))
            'id_field' => 'cod_area',
            'relate' => 'cod_gra',
            'data-placeholder' => 'Seleccione Area'
            ), 
        );

        $config = array(
        'main_table' => 'material_area',
        'main_table_primary' => 'cod_mat',
        "url" => base_url() . __CLASS__ . '/' . __FUNCTION__ . '/', //path to method
        'ajax_loader' => base_url() . 'assets/img/ajax-loader.gif', // path to ajax-loader image. It's an optional parameter
        'segment_name' =>'Your_segment_name' // It's an optional parameter. by default "get_items"
        );

        $categories = new gc_dependent_select($crud, $fields, $config);

        $js = $categories->get_js();

        $crud->required_fields('des_mat', 'arch_mat', 'cod_tipo','txt_mat','cod_area','cod_gra','cod_niv','cod_sis');
        $output = $crud->render();
        $output->output.= $js;

        $this->_example_output($output);
    }

    public function inicial()
    {
        $crud = new grocery_CRUD();
        $crud->set_table('material_area');
        $crud->set_subject('Material de área');
        $crud->display_as('des_mat','Descripción o título');
        $crud->display_as('img_mat','Imagen del material');
        $crud->set_field_upload('img_mat', 'assets/uploads/files/img');
        $crud->display_as('arch_mat','Archivo de material');
        $crud->set_field_upload('arch_mat', 'assets/uploads/files/cont/ini');
        $crud->display_as('txt_mat','Resumen');
        $crud->display_as('cod_tipo','Tipo contenido');
        $crud->set_relation('cod_tipo','tipo_contenido','{tipo_cont} - {tipo_arch}');
        
        $crud->display_as('cod_area','Área de conocimiento');
        $crud->set_relation('cod_area','area','des_area');
        $crud->display_as('cod_gra','Grado');
        $crud->set_relation('cod_gra','grado','des_gra');
        $crud->display_as('cod_niv','Nivel');
        $crud->set_relation('cod_niv','nivel','des_niv');
        
        $crud->display_as('cod_sis','Subsistema');
        $crud->set_relation('cod_sis','subsistema','desc_sis');
        $crud->display_as('cod_per','Trimestre');
        $crud->set_relation('cod_per','periodo','des_per');

        $this->load->library('gc_dependent_select');
        // settings

        $fields = array(

        // first field:
        'cod_sis' => array( // first dropdown name
        'table_name' => 'subsistema', // table of country
        'title' => 'desc_sis', // country title
        'relate' => null, // the first dropdown hasn't a relation
        'data-placeholder' => 'Selecione subsistema'
        ),
        // second field
        'cod_niv' => array( // second dropdown name
        'table_name' => 'nivel', // table of state
        'title' => 'des_niv', // state title
        'id_field' => 'cod_niv', // table of state: primary key
        'relate' => 'cod_sis', // table of state:
        'data-placeholder' => 'Selecione nivel' //dropdown's data-placeholder:

        ),
        // third field. same settings
        'cod_gra' => array(
        'table_name' => 'grado',
        /*'where' =>"",  // string. It's an optional parameter.*/
        'order_by'=>"cod_gra",  // string. It's an optional parameter.
        'title' => '{des_gra}',  // now you can use this format )))
        'id_field' => 'cod_gra',
        'relate' => 'cod_niv',
        'data-placeholder' => 'Seleccione grado'
        ),
        // third field. same settings
        'cod_area' => array(
            'table_name' => 'area',
            /*'where' =>"",  // string. It's an optional parameter.*/
            'order_by'=>"cod_area",  // string. It's an optional parameter.
            'title' => '{des_area}',  // now you can use this format )))
            'id_field' => 'cod_area',
            'relate' => 'cod_gra',
            'data-placeholder' => 'Seleccione Area'
            ), 
        );

        $config = array(
        'main_table' => 'material_area',
        'main_table_primary' => 'cod_mat',
        "url" => base_url() . __CLASS__ . '/' . __FUNCTION__ . '/', //path to method
        'ajax_loader' => base_url() . 'assets/img/ajax-loader.gif', // path to ajax-loader image. It's an optional parameter
        'segment_name' =>'Your_segment_name' // It's an optional parameter. by default "get_items"
        );

        $categories = new gc_dependent_select($crud, $fields, $config);

        $js = $categories->get_js();

        $crud->required_fields('des_mat', 'arch_mat', 'cod_tipo','txt_mat','cod_area','cod_gra','cod_niv','cod_sis');
        $output = $crud->render();
        $output->output.= $js;

        $this->_example_output($output);
    }

    public function matcampo()
    {
        $crud = new grocery_CRUD();
        $crud->set_table('mat_campo');
        $crud->set_subject('Material de Campo');
        $crud->display_as('des_concam','Descripción o título');
        $crud->display_as('img_concam','Imagen del material');
        $crud->set_field_upload('img_concam', 'assets/uploads/files/img');
        $crud->display_as('arch_concam','Archivo de material');
        $crud->set_field_upload('arch_concam', 'assets/uploads/files/cont/pri2');
        $crud->display_as('txt_concam','Resumen');
        //RELACIONES
        $crud->display_as('cod_tipo','Tipo contenido');
        $crud->set_relation('cod_tipo','tipo_contenido','{tipo_cont} - {tipo_arch}');
        
        $crud->display_as('cod_cam','Campo de conocimiento');
        $crud->set_relation('cod_cam','campo','desc_cam');
        
        $crud->display_as('cod_gra','Grado');
        $crud->set_relation('cod_gra','grado','des_gra');
        
        $crud->display_as('cod_niv','Nivel');
        $crud->set_relation('cod_niv','nivel','des_niv');
        
        $crud->display_as('cod_sis','Subsistema');
        $crud->set_relation('cod_sis','subsistema','desc_sis');

        $crud->display_as('cod_per','Trimestre');
        $crud->set_relation('cod_per','periodo','des_per');

        $this->load->library('gc_dependent_select');
        // settings

        $fields = array(

        // first field:
        'cod_sis' => array( // first dropdown name
        'table_name' => 'subsistema', // table of country
        'title' => 'desc_sis', // country title
        'relate' => null, // the first dropdown hasn't a relation
        'data-placeholder' => 'Selecione subsistema'
        ),
        // second field
        'cod_niv' => array( // second dropdown name
        'table_name' => 'nivel', // table of state
        'title' => 'des_niv', // state title
        'id_field' => 'cod_niv', // table of state: primary key
        'relate' => 'cod_sis', // table of state:
        'data-placeholder' => 'Selecione nivel' //dropdown's data-placeholder:

        ),
        // third field. same settings
        'cod_gra' => array(
        'table_name' => 'grado',
        /*'where' =>"",  // string. It's an optional parameter.*/
        'order_by'=>"cod_gra",  // string. It's an optional parameter.
        'title' => '{des_gra}',  // now you can use this format )))
        'id_field' => 'cod_gra',
        'relate' => 'cod_niv',
        'data-placeholder' => 'Seleccione grado'
        ),
        // third field. same settings
        /*'cod_cam' => array(
            'table_name' => 'campo',
            /*'where' =>"",  // string. It's an optional parameter./
            'order_by'=>"cod_cam",  // string. It's an optional parameter.
            'title' => '{desc_cam}',  // now you can use this format )))
            'id_field' => 'cod_cam',
            'relate' => 'cod_gra',
            'data-placeholder' => 'Seleccione Campo'
            ), */
        );

        $config = array(
        'main_table' => 'material_area',
        'main_table_primary' => 'cod_mat',
        "url" => base_url() . __CLASS__ . '/' . __FUNCTION__ . '/', //path to method
        'ajax_loader' => base_url() . 'assets/img/ajax-loader.gif', // path to ajax-loader image. It's an optional parameter
        'segment_name' =>'Your_segment_name' // It's an optional parameter. by default "get_items"
        );

        $categories = new gc_dependent_select($crud, $fields, $config);

        $js = $categories->get_js();

        $crud->required_fields('des_concam', 'arch_concam', 'cod_tipo','cod_cam','cod_gra','cod_niv','cod_sis');
        $output = $crud->render();
        $output->output.= $js;

        $this->_example_output($output);
    }
}

/* End of file Administrar.php */

?>
