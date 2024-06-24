<?php

use Aman5537jains\AbnCms\Lib\AbnCms;

\Route::any("/cpadmin",function(){
    return  AbnCms::getActiveTheme("BACKEND_ACTIVE_THEME")->render();
});
