<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Adminuni extends CI_Controller {
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
        redirect(base_url().'administrar');
    }

    public function departamento()
    {
        $crud = new grocery_CRUD();
        $crud->set_table('departamento');
        $crud->set_subject('Departamento');
        $crud->display_as('nom_dep','Departamento');
        $crud->display_as('img_dep','Imagen');
        $crud->set_field_upload('img_dep', 'assets/uploads/files/img');
        $crud->display_as('des_dep','Descripción');
        $crud->required_fields('nom_dep','des_dep', 'img_dep');
        $output = $crud->render();
        $this->_example_output($output);
    }
    public function tipouni()
    {
        $crud = new grocery_CRUD();
        $crud->set_table('tipo_uni');
        $crud->set_subject('Tipo de Universidad');
        $crud->display_as('des_tipouni','Descripcion de Tipo de Universidad');
        $crud->required_fields('des_tipouni');
        $output = $crud->render();
        $this->_example_output($output);
    }
    public function universidad()
    {
        $crud = new grocery_CRUD();
        $crud->set_table('universidad');
        $crud->set_subject('Universidades a nivel Nacional');
        $crud->display_as('nom_uni','Nombre de Universidad');
        $crud->display_as('des_uni','Descripción de Universidad');
        $crud->display_as('img_uni','Imagen');
        $crud->set_field_upload('img_uni', 'assets/uploads/files/img');
        $crud->required_fields('nom_uni','des_uni','img_uni');
        $crud->set_relation_n_n('Departamentos', 'dep_uni', 'departamento', 'cod_uni', 'cod_dep', 'nom_dep',null);
        $crud->display_as('cod_tipouni','Tipo de Institución');
        $crud->set_relation('cod_tipouni','tipo_uni','des_tipouni');
        $output = $crud->render();
        $this->_example_output($output);
    }

    public function dep_uni(){
        $crud = new grocery_CRUD();
        $crud->set_table('dep_uni');
        $crud->set_relation_n_n('universidades', 'dep_uni', 'universidad', 'cod_dep', 'cod_uni', 'des_uni',null);
        $output = $crud->render();
        $this->_example_output($output);
    }

    public function carrera()
    {
        $crud = new grocery_CRUD();
        $crud->set_table('carrera');
        $crud->set_subject('Carreras');
        $crud->display_as('nom_car','Nombre de Carrera');
        $crud->display_as('des_car','Descripción');
        $crud->display_as('img_car','Ícono o Imágen');
        $crud->display_as('cod_uni','Universidad');
        $crud->set_relation('cod_uni','universidad','nom_uni');
        $crud->set_field_upload('img_car', 'assets/uploads/files/img');
        $crud->required_fields('nom_car','des_car','img_car','cod_uni');
        $output = $crud->render();
        $this->_example_output($output); 
    }

    public function materia()
    {
        $crud = new grocery_CRUD();
        $crud->set_table('materia');
        $crud->set_subject('Materias');
        $crud->display_as('des_mat','Descripción');
        $crud->display_as('img_mat','Ícono o Imágen');
        $crud->display_as('txt_mat','Detalle de Materia');
        $crud->set_field_upload('img_mat', 'assets/uploads/files/img');
        $crud->display_as('cod_car','Carrera');
        $crud->set_relation('cod_car','carrera','des_car');
        $crud->required_fields('des_mat','img_mat', 'cod_car', 'txt_mat');
        $output = $crud->render();
        $this->_example_output($output);
    }
    public function contenido()
    {
        $crud = new grocery_CRUD();
        $crud->set_table('cont_univ');
        $crud->set_subject('Contenido Universitario');
        $crud->display_as('des_cont_uni','Descripción');
        $crud->display_as('cod_mat','Materia');
        $crud->display_as('txt_cont_uni','Detalle');
        $crud->set_relation('cod_mat','materia','des_mat');
        $output = $crud->render();
        $this->_example_output($output);
    }

    

    // public function tema(){
    //     $crud = new grocery_CRUD();
    //     $crud->set_table('tema');
    //     $crud->set_subject('Temas');
    //     $crud->display_as('tit_tema','Título');
    //     $crud->display_as('con_tema','Subtítulos del Tema');
    //     $crud->display_as('txt_tema','Resumen');
    //     $crud->display_as('cod_area','Área de conocimiento');
    //     $crud->set_relation('cod_area','area','des_area');
    //     $crud->display_as('cod_gra','Grado');
    //     $crud->set_relation('cod_gra','grado','des_gra');
    //     $crud->display_as('cod_niv','Nivel');
    //     $crud->set_relation('cod_niv','nivel','des_niv');
    //     $crud->display_as('cod_sis','Subsistema');
    //     $crud->set_relation('cod_sis','subsistema','desc_sis');

    //     $crud->columns('tit_tema','cod_area','cod_gra','cod_niv','cod_sis');

    //     $this->load->library('gc_dependent_select');
    //     // settings

    //     $fields = array(

    //     // first field:
    //     'cod_sis' => array( // first dropdown name
    //     'table_name' => 'subsistema', // table of country
    //     'title' => 'desc_sis', // country title
    //     'relate' => null // the first dropdown hasn't a relation
    //     ),
    //     // second field
    //     'cod_niv' => array( // second dropdown name
    //     'table_name' => 'nivel', // table of state
    //     'title' => 'des_niv', // state title
    //     'id_field' => 'cod_niv', // table of state: primary key
    //     'relate' => 'cod_sis', // table of state:
    //     'data-placeholder' => 'Selecione Nivel' //dropdown's data-placeholder:

    //     ),
    //     // third field. same settings
    //     'cod_gra' => array(
    //     'table_name' => 'grado',
    //     /*'where' =>"",  // string. It's an optional parameter.*/
    //     'order_by'=>"cod_gra",  // string. It's an optional parameter.
    //     'title' => '{des_gra}',  // now you can use this format )))
    //     'id_field' => 'cod_gra',
    //     'relate' => 'cod_niv',
    //     'data-placeholder' => 'select Grado'
    //     ),
    //     // third field. same settings
    //     'cod_area' => array(
    //         'table_name' => 'area',
    //         /*'where' =>"",  // string. It's an optional parameter.*/
    //         'order_by'=>"cod_area",  // string. It's an optional parameter.
    //         'title' => '{des_area}',  // now you can use this format )))
    //         'id_field' => 'cod_area',
    //         'relate' => 'cod_gra',
    //         'data-placeholder' => 'Seleccione Area'
    //         ), 
    //     );

    //     $config = array(
    //         'main_table' => 'tema',
    //         'main_table_primary' => 'cod_tema',
    //         "url" => base_url() . __CLASS__ . '/' . __FUNCTION__ . '/', //path to method
    //         'ajax_loader' => base_url() . 'assets/img/ajax-loader.gif', // path to ajax-loader image. It's an optional parameter
    //         'segment_name' =>'Your_segment_name' // It's an optional parameter. by default "get_items"
    //         );

    //     $crud->required_fields('tit_tema','con_tema', 'cod_niv', 'cod_sis', 'cod_gra', 'cod_area');
    //     $categories = new gc_dependent_select($crud, $fields, $config);
    //     $js = $categories->get_js();

    //     $output = $crud->render();
    //     $output->output.= $js;
    //     $this->_example_output($output);
    // }
    // public function periodo()
    // {
    //     $crud = new grocery_CRUD();
    //     $crud->set_table('periodo');
    //     $crud->set_subject('Periodicidad');
    //     $crud->display_as('des_per','Descripción');
    //     $crud->display_as('img_per','Ícono o Imágen');
    //     $crud->display_as('txt_per','Detalle');
    //     $crud->set_field_upload('img_per', 'assets/uploads/files/img');
    //     $crud->required_fields('des_per','img_per');
    //     $output = $crud->render();
    //     $this->_example_output($output);
    // }

    // public function contenido2()
    // {
    //     $crud = new grocery_CRUD();
    //     $crud->set_table('contenido');
    //     $crud->set_subject('Contenido');
    //     $crud->display_as('des_con','Descripción');
    //     $crud->display_as('res_con','Resumen');
    //     $crud->display_as('img_con','Imagen de contenido');
    //     $crud->set_field_upload('img_con', 'assets/uploads/files/img');
    //     $crud->display_as('arch_con','Archivo de contenido');
    //     $crud->set_field_upload('arch_con', 'assets/uploads/files/cont');
    //     $crud->display_as('cod_tipo','Tipo contenido');
    //     $crud->set_relation('cod_tipo','tipo_contenido','{tipo_cont} - {tipo_arch}');
    //     $crud->display_as('cod_per','Periodicidad');
    //     $crud->set_relation('cod_per','periodo','des_per');
    //     $crud->display_as('cod_area','Área de conocimiento');
    //     $crud->set_relation('cod_area','area','des_area');
    //     $crud->display_as('cod_gra','Grado');
    //     $crud->set_relation('cod_gra','grado','des_gra');
    //     $crud->display_as('cod_niv','Nivel');
    //     $crud->set_relation('cod_niv','nivel','des_niv');
    //     $crud->display_as('cod_tema','Tema');
    //     $crud->set_relation('cod_tema','tema','tit_tema');
    //     $crud->display_as('cod_sis','Subsistema');
    //     $crud->set_relation('cod_sis','subsistema','desc_sis');


    //     $this->load->library('gc_dependent_select');
    //     // settings

    //     $fields = array(

    //     // first field:
    //     'cod_sis' => array( // first dropdown name
    //     'table_name' => 'subsistema', // table of country
    //     'title' => 'desc_sis', // country title
    //     'relate' => null // the first dropdown hasn't a relation
    //     ),
    //     // second field
    //     'cod_niv' => array( // second dropdown name
    //     'table_name' => 'nivel', // table of state
    //     'title' => 'des_niv', // state title
    //     'id_field' => 'cod_niv', // table of state: primary key
    //     'relate' => 'cod_sis', // table of state:
    //     'data-placeholder' => 'Selecione Nivel' //dropdown's data-placeholder:

    //     ),
    //     // third field. same settings
    //     'cod_gra' => array(
    //     'table_name' => 'grado',
    //     /*'where' =>"",  // string. It's an optional parameter.*/
    //     'order_by'=>"cod_gra",  // string. It's an optional parameter.
    //     'title' => '{des_gra}',  // now you can use this format )))
    //     'id_field' => 'cod_gra',
    //     'relate' => 'cod_niv',
    //     'data-placeholder' => 'select Grado'
    //     ),
    //     // third field. same settings
    //     'cod_area' => array(
    //         'table_name' => 'area',
    //         /*'where' =>"",  // string. It's an optional parameter.*/
    //         'order_by'=>"cod_area",  // string. It's an optional parameter.
    //         'title' => '{des_area}',  // now you can use this format )))
    //         'id_field' => 'cod_area',
    //         'relate' => 'cod_gra',
    //         'data-placeholder' => 'Seleccione Area'
    //         ), 
    //     'cod_tema' => array(
    //         'table_name' => 'tema',
    //         /*'where' =>"",  // string. It's an optional parameter.*/
    //         'order_by'=>"cod_tema",  // string. It's an optional parameter.
    //         'title' => '{tit_tema}',  // now you can use this format )))
    //         'id_field' => 'cod_tema',
    //         'relate' => 'cod_area',
    //         'data-placeholder' => 'Seleccione Tema'
    //         ), 
    //     );

    //     $config = array(
    //     'main_table' => 'contenido',
    //     'main_table_primary' => 'cod_con',
    //     "url" => base_url() . __CLASS__ . '/' . __FUNCTION__ . '/', //path to method
    //     'ajax_loader' => base_url() . 'assets/img/ajax-loader.gif', // path to ajax-loader image. It's an optional parameter
    //     'segment_name' =>'Your_segment_name' // It's an optional parameter. by default "get_items"
    //     );
    //     $categories = new gc_dependent_select($crud, $fields, $config);




    //     $js = $categories->get_js();

    //     $crud->required_fields('des_con','img_con', 'arch_con', 'cod_tipo','resumen_con','cod_per','cod_area','cod_gra','cod_niv','cod_sis');
    //     $output = $crud->render();
    //     $output->output.= $js;

    //     $this->_example_output($output);
    // }

    // public function material()
    // {
    //     $crud = new grocery_CRUD();
    //     $crud->set_table('material_area');
    //     $crud->set_subject('Material de área');
    //     $crud->display_as('des_mat','Descripción o título');
    //     $crud->display_as('img_mat','Imagen del material');
    //     $crud->set_field_upload('img_mat', 'assets/uploads/files/img');
    //     $crud->display_as('arch_mat','Archivo de material');
    //     $crud->set_field_upload('arch_mat', 'assets/uploads/files/cont');
    //     $crud->display_as('txt_mat','Resumen');
    //     $crud->display_as('cod_tipo','Tipo contenido');
    //     $crud->set_relation('cod_tipo','tipo_contenido','{tipo_cont} - {tipo_arch}');
        
    //     $crud->display_as('cod_area','Área de conocimiento');
    //     $crud->set_relation('cod_area','area','des_area');
    //     $crud->display_as('cod_gra','Grado');
    //     $crud->set_relation('cod_gra','grado','des_gra');
    //     $crud->display_as('cod_niv','Nivel');
    //     $crud->set_relation('cod_niv','nivel','des_niv');
        
    //     $crud->display_as('cod_sis','Subsistema');
    //     $crud->set_relation('cod_sis','subsistema','desc_sis');


    //     $this->load->library('gc_dependent_select');
    //     // settings

    //     $fields = array(

    //     // first field:
    //     'cod_sis' => array( // first dropdown name
    //     'table_name' => 'subsistema', // table of country
    //     'title' => 'desc_sis', // country title
    //     'relate' => null, // the first dropdown hasn't a relation
    //     'data-placeholder' => 'Selecione subsistema'
    //     ),
    //     // second field
    //     'cod_niv' => array( // second dropdown name
    //     'table_name' => 'nivel', // table of state
    //     'title' => 'des_niv', // state title
    //     'id_field' => 'cod_niv', // table of state: primary key
    //     'relate' => 'cod_sis', // table of state:
    //     'data-placeholder' => 'Selecione nivel' //dropdown's data-placeholder:

    //     ),
    //     // third field. same settings
    //     'cod_gra' => array(
    //     'table_name' => 'grado',
    //     /*'where' =>"",  // string. It's an optional parameter.*/
    //     'order_by'=>"cod_gra",  // string. It's an optional parameter.
    //     'title' => '{des_gra}',  // now you can use this format )))
    //     'id_field' => 'cod_gra',
    //     'relate' => 'cod_niv',
    //     'data-placeholder' => 'Seleccione grado'
    //     ),
    //     // third field. same settings
    //     'cod_area' => array(
    //         'table_name' => 'area',
    //         /*'where' =>"",  // string. It's an optional parameter.*/
    //         'order_by'=>"cod_area",  // string. It's an optional parameter.
    //         'title' => '{des_area}',  // now you can use this format )))
    //         'id_field' => 'cod_area',
    //         'relate' => 'cod_gra',
    //         'data-placeholder' => 'Seleccione Area'
    //         ), 
    //     );

    //     $config = array(
    //     'main_table' => 'material_area',
    //     'main_table_primary' => 'cod_mat',
    //     "url" => base_url() . __CLASS__ . '/' . __FUNCTION__ . '/', //path to method
    //     'ajax_loader' => base_url() . 'assets/img/ajax-loader.gif', // path to ajax-loader image. It's an optional parameter
    //     'segment_name' =>'Your_segment_name' // It's an optional parameter. by default "get_items"
    //     );

    //     $categories = new gc_dependent_select($crud, $fields, $config);

    //     $js = $categories->get_js();

    //     $crud->required_fields('des_mat','img_mat', 'arch_mat', 'cod_tipo','txt_mat','cod_area','cod_gra','cod_niv','cod_sis');
    //     $output = $crud->render();
    //     $output->output.= $js;

    //     $this->_example_output($output);
    // }

}

/* End of file Administrar.php */

?>
