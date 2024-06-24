<?php
namespace Aman5537jains\AbnCmsTheme;
use Aman5537jains\AbnCms\Lib\Theme\ScriptLoader;
use Aman5537jains\AbnCms\Lib\Theme\StylesheetLoader;
use Aman5537jains\AbnCms\Lib\Theme\Theme;

class AbnCmsTheme extends Theme{


    protected $layout="AbnCmsTheme::index";

    function __construct()
    {
        parent::__construct();

        $this->addStylesheets([
            new StylesheetLoader(asset('public/vendor/bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css') ),

        ]);

        $this->addScripts([
            new ScriptLoader(asset('public/assets-ebyoon/js/jquery-3.2.1.min.js')),
            new ScriptLoader(asset('public/vendor/bootstrap-5.3.0-alpha1-dist/js/bootstrap.bundle.min.js')),
         ]);
    }

    public function mixinStylesheet()
    {
        $primary  = $this->getSetting("PRIMARY_COLOR");
        $secondry = $this->getSetting("SECONDRY_COLOR");
        return ".nav-section{ background : $primary !important }";
    }

    function getHeader()
    {
        return $this->view("AbnCmsTheme::header");
    }
    function getFooter()
    {
        return $this->view("AbnCmsTheme::footer");
    }





}
