<?php
namespace App\Table;

class Article{

    public function __get($key)
    {
        // TODO: Implement __get() method.

        $method = 'get' . ucfirst($key);
        return $this -> $method();
    }

    public function getUrl(){
        return 'index.php?p=article&id='.$this->id;
    }

    public function getExtrait(){
        $html = '<p>'.substr($this->contenu,0,100).'...</p>';
        $html .= '<p><a href="'.$this->getURL().'">voir la suite</a></p>';
        return $html;
    }
}