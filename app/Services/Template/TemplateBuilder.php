<?php


namespace App\Services\Template;


class TemplateBuilder
{
    private $javascript = null;
    private $codeHeader = null;
    private $codeFooter = null;
    private $codeIndex = null;
    private $codeCategory = null;
    private $codeSearch = null;
    private $codePage = null;
    private $codeAbout = null;
    private $code404 = null;

    public function __construct()
    {
    }

    /**
     * @param null $javascript
     */
    public function setJavascript($javascript): void
    {
        $this->javascript = $javascript;
    }

    /**
     * @param null $codeHeader
     */
    public function setCodeHeader($codeHeader): void
    {
        $this->codeHeader = $codeHeader;
    }

    /**
     * @param null $codeFooter
     */
    public function setCodeFooter($codeFooter): void
    {
        $this->codeFooter = $codeFooter;
    }

    /**
     * @param null $codeIndex
     */
    public function setCodeIndex($codeIndex): void
    {
        $this->codeIndex = $codeIndex;
    }

    /**
     * @param null $codeCategory
     */
    public function setCodeCategory($codeCategory): void
    {
        $this->codeCategory = $codeCategory;
    }

    /**
     * @param null $codeSearch
     */
    public function setCodeSearch($codeSearch): void
    {
        $this->codeSearch = $codeSearch;
    }

    /**
     * @param null $codePage
     */
    public function setCodePage($codePage): void
    {
        $this->codePage = $codePage;
    }

    /**
     * @param null $codeAbout
     */
    public function setCodeAbout($codeAbout): void
    {
        $this->codeAbout = $codeAbout;
    }

    /**
     * @param null $code404
     */
    public function setCode404($code404): void
    {
        $this->code404 = $code404;
    }




}
