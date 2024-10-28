<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use Auth;
use Illuminate\Support\Facades\URL;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     *
     *
     *
     */
    public function __construct()
    {
        //$this->middleware('auth');


    }



    public function boot()
    {
        //$url = explode('/',URL::current());

       // echo request()->route()->parameters['slug'];exit;

        View::composer('*', function($view) {

            $settings = DB::table('settings')->get();
            $about_us = DB::table('pages')->where('id',4)->first();
            $this->menu_reset();
            $this->main_menu = $this->fetch_menu($this->query(0, 1));

            $view->with(['main_menu'=>$this->main_menu,'settings'=>$settings,'about_us'=>$about_us]);
        });

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    /* dynamic menu start*/

    public function fetch_menu($q) {

        $number_parent = count($q);

        foreach ($q as $key=>$result) {
            $menu_id = $result->id;
            $menu_name = $result->title;
            $parent_id = $result->parent_id;
            $has_column = $result->has_column;
            if($result->target=='_self'){
                $target = '';
                if($menu_id!=1){
                    $menu_link = url($result->link);
                }else{
                    $menu_link = url($result->link);
                }
            }else{
                $target = '_blank';
                $menu_link = $result->link;
            }
            $MenuGroup = 1;



            if ($this->has_child($this->query($menu_id))){
                $this->menu.="<li class='menu-item--parent ds-menu__item'><a href='{$menu_link}' target='{$target}' class='ds-menu__dropdown'>{$menu_name}<i class='fa fa-angle-down'></i></a>";
            } else {
                $class = ($parent_id)?'':'ds-menu__item';
                $this->menu.="<li class='{$class}'><a href='{$menu_link}' target='{$target}'><span>{$menu_name}</span></a>";
            }
            if ($this->has_child($this->query($menu_id, $MenuGroup))) {
                $has_column = ($has_column=='Yes')?'has-column':'';
                $this->menu.="<div class='{$has_column} ds-menu__sub'>";

                if(($has_column)){
                    $this->menu.=    "<ul class=''>";
                    $this->fetch_menu($this->query($menu_id, $MenuGroup,'Left'));
                    $this->menu.= "</ul>";

                    $this->menu.=    "<ul class=''>";
                    $this->fetch_menu($this->query($menu_id, $MenuGroup,'Right'));
                    $this->menu.= "</ul>";

                }else{
                    $this->menu.=    "<ul class=''>";
                    $this->fetch_menu($this->query($menu_id, $MenuGroup));
                    $this->menu.= "</ul>";
                }



                $this->menu.="</div>";
            }
            $this->menu.="</li>";
        }
        return $this->menu;
    }

    public function has_child($query) {
        $rows = count($query);
        if ($rows > 0) {
            return true;
        } else {
            return false;
        }
    }


    public function query($x, $y=null,$position=null) {
        $query = DB::table('menu')->where(['parent_id'=>$x,'status'=>'Active'])->orderBy('priority');
        if($position){
            $query->where('position',$position);
        }
        $query= $query->get();
        return $query;
        //return $this->SiteModel->getlist('menu', '*', array('ParentID' => $x, 'IsActive'=>1, 'MenuGroup' => $y), 'Priority ASC', 100, 0);
    }

    public function menu_reset() {
        $this->menu = NULL;

    }

    /*dynemic menu end*/
}
