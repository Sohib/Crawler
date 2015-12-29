<?php
/**
 * Created by PhpStorm.
 * User: sgotimal.c
 * Date: 12/29/2015
 * Time: 11:57 AM
 */

namespace Sohib\Crawler;

use Spatie\ArrayToXml\ArrayToXml;

class Result
{

    public $result;

    /**
     * CrawlerResult constructor.
     * @param $result
     */

    public function toJson()
    {

        return json_encode($this->result);

    }

    public function toXml(){
        return ArrayToXml::convert($this->result);
    }


    public function toArray(){
        return $this->result;
    }



}