<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 26.02.15
 * Time: 22:14
 */

class OrganizationsController extends BaseController {


    public function __construct() {
        $this->setupParamsLayout();
    }


    public function general_category() {

        $this->data['general_category'] = Organizations_categories::find(1);
        $this->data['list_categories'] = Organizations_categories::where('parent', 1)->get();



        return View::make('organizations\general_category')->with('data', $this->data);


    }

}