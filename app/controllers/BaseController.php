<?php

class BaseController extends Controller {

    var $data;


	public function setupParamsLayout()
	{

        $this->data['page_for_top_nav'] = News_categories::where('parent', 1)->get();



	}

}
