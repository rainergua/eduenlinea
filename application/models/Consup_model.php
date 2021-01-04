<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Consup_Model extends CI_Model {
    public function __construct() {
    	parent::__construct();
    }

    public function getdepto(){
        return $this->db->get('departamento')->result(); 
    }
    //Devuelve Departamento y su codigo
    public function getdeptoesp($depto){
        $this->db->select('cod_dep, nom_dep');
        $this->db->from('departamento');
        $this->db->where('cod_dep', $depto);
        return $this->db->get()->row(); 
    }
    //Devuelve Universidades del Departamento x
    public function getunis($depto){
        $this->db->select('u.cod_uni, u.nom_uni, u.des_uni, u.img_uni');
        $this->db->from('universidad u');
        $this->db->join('dep_uni d', 'u.cod_uni=d.cod_uni', 'inner');
        $this->db->where('d.cod_dep', $depto);
        $this->db->where('u.cod_tipouni', '1');
        return $this->db->get()->result(); 
    }
    //Devuelve ESFM del Departamento x
    public function getesfm($depto){
        $this->db->select('u.cod_uni, u.nom_uni, u.des_uni, u.img_uni');
        $this->db->from('universidad u');
        $this->db->join('dep_uni d', 'u.cod_uni=d.cod_uni', 'inner');
        $this->db->where('d.cod_dep', $depto);
        $this->db->where('u.cod_tipouni', '2');
        return $this->db->get()->result(); 
    }
    //
    public function getcarreras($uni){
        $this->db->where('cod_uni', $uni);
        return $this->db->get('carrera')->result(); 
    }
    public function getcarr($carrera){
        $this->db->select('cod_uni, nom_car');
        $this->db->where('cod_car', $carrera);
        return $this->db->get('carrera')->row(); 
    }
    public function getuni($uni){
        $this->db->select('u.cod_uni, u.nom_uni, u.des_uni');
        $this->db->from('universidad u');
        $this->db->where('cod_uni', $uni);
        return $this->db->get()->row(); 
    }
    public function getperiodos($carrera){
        $this->db->select('per_mat');
        $this->db->distinct();
        $this->db->where('cod_car', $carrera);
        return $this->db->get('materia')->result();
    }
    public function getmateria($carrera){
        $this->db->where('cod_car', $carrera);
        return $this->db->get('materia')->result();
    }



    public function getsisniv($nivel){
        $this->db->select('desc_sis, des_niv, txt_niv, cod_niv, link_sis');
        $this->db->from('nivel n');
        $this->db->join('subsistema s', 'n.cod_sis=s.cod_sis', 'inner');
        $this->db->where('n.cod_niv', $nivel);
        return $this->db->get()->row(); 
    }
    public function getsisnivgrarea($grado, $area){
        $this->db->select('desc_sis, des_niv, des_gra, txt_gra, des_area, cod_area, a.cod_area, g.cod_gra, link_sis, n.cod_niv');
        $this->db->from('area a');
        $this->db->join('grado g', 'a.cod_gra=g.cod_gra', 'inner');
        $this->db->join('nivel n', 'g.cod_niv=n.cod_niv', 'inner');
        $this->db->join('subsistema s', 'n.cod_sis=s.cod_sis', 'inner');
        $this->db->where('g.cod_gra', $grado);
        $this->db->where('a.cod_area', $area);
        return $this->db->get()->row(); 
    }
    public function getsisnivgrareatema($area, $tema){
        $this->db->select('desc_sis, des_niv, des_gra, txt_gra, des_area, tit_tema, con_tema, cod_tema, link_sis, n.cod_niv, g.cod_gra, a.cod_area');
        $this->db->from('tema t');
        $this->db->join('area a', 't.cod_area=a.cod_area', 'inner');
        $this->db->join('grado g', 'a.cod_gra=g.cod_gra', 'inner');
        $this->db->join('nivel n', 'g.cod_niv=n.cod_niv', 'inner');
        $this->db->join('subsistema s', 'n.cod_sis=s.cod_sis', 'inner');
        $this->db->where('t.cod_tema', $tema);
        $this->db->where('a.cod_area', $area);
        return $this->db->get()->row(); 
    }

    public function getlibroarea($grado, $area){
        $this->db->where('cod_area', $area);
        $this->db->where('cod_gra', $grado);
        $this->db->where('cod_tipo', '4');
        return $this->db->get('material_area')->result();
    }

    public function getvidearea($grado, $area){
        // Query #1
        $this->db->select('cod_mat codigo, des_mat titulo, img_mat imagen, arch_mat archivo, txt_mat texto');
        $this->db->where('cod_gra', $grado);
        $this->db->where('cod_area', $area);
        $this->db->where('cod_tipo', '3');
        $this->db->from('material_area');
        $query1 = $this->db->get()->result();
        // Query #2
        $this->db->select('cod_con codigo, des_con titulo, img_con imagen, arch_con archivo, res_con texto');
        $this->db->where('cod_gra', $grado);
        $this->db->where('cod_area', $area);
        $this->db->where('cod_tipo', '3');
        $this->db->from('contenido');
        $query2 = $this->db->get()->result();
        // Merge both query results
        $query = array_merge($query1, $query2);
        return $query;
    }
    
    public function getactearea($grado, $area){
        // Query #1
        $this->db->select('cod_mat codigo, des_mat titulo, img_mat imagen, arch_mat archivo, txt_mat texto');
        $this->db->where('cod_gra', $grado);
        $this->db->where('cod_area', $area);
        $this->db->where('cod_tipo', '1');
        $this->db->from('material_area');
        $query1 = $this->db->get()->result();
        // Query #2
        $this->db->select('cod_con codigo, des_con titulo, img_con imagen, arch_con archivo, res_con texto');
        $this->db->where('cod_gra', $grado);
        $this->db->where('cod_area', $area);
        $this->db->where('cod_tipo', '1');
        $this->db->from('contenido');
        $query2 = $this->db->get()->result();
        // Merge both query results
        $query = array_merge($query1, $query2);
        return $query;
    }


    public function getcontenidos($grado, $area){
        $this->db->where('cod_area', $area);
        $this->db->where('cod_gra', $grado);
        return $this->db->get('tema')->result();
    }

    public function getareas($grado){
        $this->db->where('cod_gra', $grado);
        return $this->db->get('area')->result();
    }
    public function getgrado($nivel){
        $this->db->where('cod_niv', $nivel);
        return $this->db->get('grado')->result();   
    }
    public function retnivel($cod_sis){
        $this->db->where('cod_sis', $cod_sis);
        return $this->db->get('nivel')->result();
    }

    public function gettipo($tema){
        $this->db->select('c.cod_tipo, tipo_cont');
        $this->db->distinct();
        $this->db->from('contenido c');
        $this->db->join('tipo_contenido t', 'c.cod_tipo=t.cod_tipo', 'inner');
        $this->db->where('cod_tema', $tema);
        return $this->db->get()->result();
    }
    public function getarchivoscon($tema){
        $this->db->where('cod_tema', $tema);
        return $this->db->get('contenido')->result();
    }

}

/* End of file Eduvit_Model.php */

?>