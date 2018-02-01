<?php
// +----------------------------------------------------------------------
// | xiazh [ WHATEVER YOU SHOULD BE DOING RIGHT NOW. GO FUCKING DO IT. ]
// +----------------------------------------------------------------------
// | Copyright (c) 2018 .
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: Bird Shark <birdmanangle@gmail.com>
// +----------------------------------------------------------------------
// | Date: 1/25/2018 2:34 PM
// +----------------------------------------------------------------------
use Phalcon\Mvc\Model;

class News extends Model{
    public $id;

    public $title;

    public $content;

    public $url;
}