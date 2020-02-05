<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

function list_menu() {
    $CIobj = & get_instance();
    $CIobj->db->order_by('ordering');
    $CIobj->db->join('cms b','a.cms_id=b.id','left');
    $q = $CIobj->db->get('menu a');
    $res = $q->result();
    $html = '';
    if ($res) {
        foreach ($res as $row) {
            if ($row->menu_type == "url") {
                $html .= '<li class="nav-item px-3"><a class="nav-link" href="'.$row->url.'">'.$row->menu_name.'</a></li>';
            } else if ($row->menu_type == "cms") {
                $html .= '<li class="nav-item px-3"><a class="nav-link" href="'.base_url().'pages/'.$row->slug.'">'.$row->menu_name.'</a></li>';
            }
        }
    }
    return $html;
}

function list_menu_left() {
    $CIobj = & get_instance();
    $CIobj->db->order_by('ordering');
    $q = $CIobj->db->get('menu');
    $res = $q->result();
    $html = '';
    if ($res) {
        foreach ($res as $row) {
            $html .= '<li class="nav-item nav-dropdown"><a class="nav-link" href="'.$row->url.'"><i class="'.$row->icon.'"></i> '.$row->menu_name.'</a></li>';
        }
    }
    return $html;
}


                    

function get_select_data($table,$sel_id,$sel_val,$dashboard,$start_val='') {
    $CIobj = & get_instance();
    
    $CIobj->db->order_by($sel_val);
    $results = $CIobj->db->get($table)->result();
    $sel_multiselect = array();

    if ($start_val != "") {
        $sel_multiselect[''] = $start_val;
    }
    foreach ($results as $result) {
        
        if ($result->dashboard =='1') {
            # code...
              $sel_multiselect[$result->$sel_id] = $result->$sel_val;
        }
      
    }

    return $sel_multiselect;
}

function get_select_data2($table,$sel_id,$sel_val,$dashboard,$start_val='') {
    $CIobj = & get_instance();
    
    $CIobj->db->order_by($sel_val);
    $results = $CIobj->db->get($table)->result();
    $sel_multiselect = array();

    if ($start_val != "") {
        $sel_multiselect[''] = $start_val;
    }
    foreach ($results as $result) {
            # code...
              $sel_multiselect[$result->$sel_id] = $result->$sel_val;  
    }

    return $sel_multiselect;
}

function folder_list_file($folder) {
    $entrys = array();
    if ($handle = opendir($folder)) {
        while (false !== ($entry = readdir($handle))) {
            if ($entry != "." && $entry != "..") {
                $entrys[] = $entry;
            }
        }
        closedir($handle);
    }
    arsort($entrys);
    return $entrys;
}

function create_excel_row($excel,$col,$text,$bold = '',$align='') {
    $excel->getActiveSheet()->setCellValue($col, $text);
    
    //bold
    if(isset($bold)){	
        if($bold){
            $excel->getActiveSheet()->getStyle($col)->getFont()->setBold(true);
        }
    }
    
    if(isset($align)){	
        if($align){
            $al = "";
            $al2 = "";
            if ($align == "center") {
                $al = PHPExcel_Style_Alignment::HORIZONTAL_CENTER;
                $al2 = PHPExcel_Style_Alignment::VERTICAL_CENTER;
            }
            $style = array(
                'alignment' => array(
                    'horizontal' => $al,
                    'vertical' => $al2
                )
            );
            $excel->getActiveSheet()->getStyle($col)->applyFromArray($style);
        }
    }
}

function slugify($text) {
  // replace non letter or digits by -
  $text = preg_replace('~[^\pL\d]+~u', '-', $text);

  // transliterate
  $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

  // remove unwanted characters
  $text = preg_replace('~[^-\w]+~', '', $text);

  // trim
  $text = trim($text, '-');

  // remove duplicate -
  $text = preg_replace('~-+~', '-', $text);

  // lowercase
  $text = strtolower($text);

  if (empty($text)) {
    return 'n-a';
  }

  return $text;
}

function get_table_row($table,$where,$id) {
    $CIobj = & get_instance();
    $CIobj->db->where($where,$id);
    $q = $CIobj->db->get($table);
    $res = $q->row();
    return $res;
}

function get_cms($id) {
    $CIobj = & get_instance();
    $CIobj->db->where('id',$id);
    $q = $CIobj->db->get('cms');
    $res = $q->row();
    $html = '<h2>'.$res->title.'</h2>';
    $html .= $res->content;
    return $html;
}

// Tested in PHP version 5.4.31
function get_mime_by_extension($filename)
{
  static $mimes;
  if ( ! is_array($mimes)) // <- Will only return TRUE on the first call
  {
    $mimes = get_mimes(); // <- By removing the &reference declaration
    // Any subsequent changes to `$_mimes` will not be accounted for
    if (empty($mimes))
    {
      return FALSE;
    }
  }
  $extension = strtolower(substr(strrchr($filename, '.'), 1));
  if (isset($mimes[$extension]))
  {
      return is_array($mimes[$extension])
          ? current($mimes[$extension])
          : $mimes[$extension];
  }
  return FALSE;
}