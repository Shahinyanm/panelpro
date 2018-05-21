<?php

class Breadcrumbs {

    public function build_breadcrumbs() {

        $CI = & get_instance();
        $id = $CI->session->userdata('menu_active_id');
        $menu_id=  array_reverse($id);
        $breadcrumbs = "";
        $ins = mysqli_connect('localhost','root','', 'panelpro_db');

        foreach ($menu_id as $v_id) {

            $menu = mysqli_query($ins,"SELECT tbl_menu.*
                                        FROM tbl_menu
                                        WHERE tbl_menu.menu_id=$v_id ;");

            while ($items = mysqli_fetch_assoc($menu)) {
               
                $breadcrumbs .= "<li>\n  <a href='" . base_url() . $items['link'] . "'>" .lang($items['label']) . "</a>\n</li> \n";

            }
        }
        
        return $breadcrumbs;
    }

}
