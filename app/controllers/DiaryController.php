<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class DiaryController extends BaseController{
    public function display(){
        $entries = Diary::all();
        return View::make('diary_list',array('entries'=>$entries))
                ->nest('navbar_view','navbar')
                ->nest('includes_view','includes');
    }
    
    public function display_entry($id){
        $entry = Diary::find($id);
        return View::make('diary_entry',array('entry'=>$entry))
                ->nest('navbar_view','navbar')
                ->nest('includes_view','includes');
    }
    
    public function new_entry(){
        $entry = new Diary;
        $entry->id = Input::get('id');
        $entry->content = Input::get('content');
        $entry->save();
        
        return Redirect::route('diary');
    }
}