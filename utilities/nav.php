<?php
class nav
{
    public $prefix;
    public $hasSave;
    public $activePage;

    public function __constructor($prefix, $hasSave, $activePage)
    {
        this->$prefix = $prefix;
        this->$hasSave = $hasSave;
        this->$activePage = $activePage;
    }

    public function getNav()
    {
        $pagesPre = "pages/";
        $homePre = "";
        $pandoraPre = "pages/pandora"
        if($prefix == "../")
        {
            $pagesPre = "";
            $homePre = "../";
            $pandoraPre = "pandora/"
        }
        else if($prefix ==="pages/pandora/")
        {
            $pagesPre = "../";
            $homePre = "../../"
            $pandoraPre = "";
        }
        <img src="LOGO GOES HERE" href="LOGO GOES HERE">
            <a href="">Home</a>
            <a href="pages/adventures.html">Adventures</a>
            <a href="pages/links.html">Links</a>
            <a href="pages/login.html">Login</a>
    }
}