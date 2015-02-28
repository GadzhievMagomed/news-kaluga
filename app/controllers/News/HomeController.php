<?php namespace News;
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 14.02.15
 * Time: 22:35
 */

class HomeController extends BaseController {

    function index() {
        $this->layout->content = View::make('user.profile');
    }

} 