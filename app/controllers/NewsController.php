<?php


/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 23.02.15
 * Time: 23:54
 */
class NewsController extends BaseController {


    public function __construct() {
        $this->setupParamsLayout();
    }

    public function general_category($news_categories) {

        $this->data['news_list'] = News::where('category_id', $news_categories->id)->take(10)->get();
        $this->data['second_category_list'] = News_categories::where('parent', $news_categories->id)->get();
        $this->data['curr_category'] = $news_categories;




        return View::make('news\general_category')->with('data', $this->data);


    }

}
