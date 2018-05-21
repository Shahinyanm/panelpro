<?php

/**
 * Created by PhpStorm.
 * User: zaman
 * Date: 2/25/15
 * Time: 12:36 AM
 */
class Menu {

    public function dynamicMenu() {

        $CI = & get_instance();

        $user_id = $CI->session->userdata('employee_id');

        $user_type = $CI->session->userdata('user_flag');
        $ins = mysqli_connect('localhost','root','', 'panelpro_db');

        if ($user_type != 1) {// query for employee user role        
            $user_menu = mysqli_query($ins,"SELECT tbl_user_role.*,tbl_menu.*
                                        FROM tbl_user_role
                                        INNER JOIN tbl_menu
                                        ON tbl_user_role.menu_id=tbl_menu.menu_id
                                        WHERE tbl_user_role.user_id=$user_id
                                        ORDER BY sort;");
        } else { // get all menu for admin             
            $user_menu = mysqli_query($ins,"SELECT menu_id, label, link, icon, parent FROM tbl_menu ORDER BY sort");
        }


        // Create a multidimensional array to conatin a list of items and parents
        $menu = array(
            'items' => array(),
            'parents' => array()
        );

        // Builds the array lists with data from the menu table
        while ($items = mysqli_fetch_assoc($user_menu)) {

            // Creates entry into items array with current menu item id ie. $menu['items'][1]
            $menu['items'][$items['menu_id']] = $items;

            // Creates entry into parents array. Parents array contains a list of all items with children
            $menu['parents'][$items['parent']][] = $items['menu_id'];
        }

        return $output = $this->buildMenu(0, $menu);
    }

    public function buildMenu($parent, $menu, $sub = NULL) {

        $html = "";

        if (isset($menu['parents'][$parent])) {
            if (!empty($sub)) {
                $html .= "<ul class='treeview-menu'>\n";
            } else {
                $html .= "<ul class='sidebar-menu'>\n";
            }
            foreach ($menu['parents'][$parent] as $itemId) {
                $result = $this->active_menu_id($menu['items'][$itemId]['menu_id']);
                if ($result) {
                    $active = 'active';
                } else {
                    $active = '';
                }

                if (!isset($menu['parents'][$itemId])) { //if condition is false only view menu
                    $html .= "<li class='" . $active . "' >\n  <a href='" . base_url() . $menu['items'][$itemId]['link'] . "'> <i class='" . $menu['items'][$itemId]['icon'] . "'></i><span>" . lang($menu['items'][$itemId]['label']) . "</span></a>\n</li> \n";
                }

                if (isset($menu['parents'][$itemId])) { //if condition is true show with submenu
                    $html .= "<li class='treeview " . $active . "'>\n  <a href='" . base_url() . $menu['items'][$itemId]['link'] . "'> <i class='" . $menu['items'][$itemId]['icon'] . "'></i><span>" . lang($menu['items'][$itemId]['label']) . "</span><i class='fa fa-angle-right pull-right'></i></a>\n";
                    $html .= self::buildMenu($itemId, $menu, true);
                    $html .= "</li> \n";
                }
            }
            $html .= "</ul> \n";
        }
        return $html;
    }

    public function active_menu_id($id) {
        $CI = & get_instance();
        $activeId = $CI->session->userdata('menu_active_id');

        if (!empty($activeId)) {
            foreach ($activeId as $v_activeId) {
                if ($id == $v_activeId) {
                    return TRUE;
                }
            }
        }
        return FALSE;
    }

}
