<?php
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

function route_list() : array
{
    return [
            [
                'title' => 'Home',
                'url' => 'home'
            ],
            [
                'title' => 'Home',
                'url' => 'home'
            ]
        ];
}
function upload($file,$name='',$folder='media'){
    if(!$name){
        $upload = Storage::putFile('public/'.$folder, new File($file));
    }
    else{
        $upload = Storage::putFileAs('public/'.$folder, new File($file),$name);
    }
    return $folder.'/'.last(explode('/',$upload));
}
function storageMedia($url){
    return asset('storage/'.$url);
}

?>