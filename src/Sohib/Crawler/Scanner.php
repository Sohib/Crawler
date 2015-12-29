<?php
/**
 * Created by PhpStorm.
 * User: sgotimal.c
 * Date: 12/29/2015
 * Time: 11:49 AM
 */

namespace Sohib\Crawler;

use PHPHtmlParser\Dom;

class Scanner
{

    private $urls;

    /**
     * UrlCrawler constructor.
     * @param $urls
     */
    public function __construct($urls)
    {
        $this->urls = $urls;
    }


    /**
     * @return mixed
     */
    public function getUrls()
    {
        return $this->urls;
    }

    /**
     * @param mixed $urls
     */
    public function setUrls($urls)
    {
        $this->urls = $urls;
    }



    public function scan(){
        $crawlerResult  = new Result(array());

        foreach ($this->urls as $url) {

            $dom = new Dom;
            $dom->load($url);
            $aTags = $dom->find("a");

            foreach($aTags as $a ){
                $href = $a->href;

                if (0 !== strpos($href, 'http')) {
                    // It starts with 'http'
                    continue;
                }

                $crawlerResult->result["urls"][] = $a->href;
            }


        }

        $crawlerResult->result["urls"] = array_values(array_unique($crawlerResult->result["urls"]));

        return $crawlerResult;
    }





}