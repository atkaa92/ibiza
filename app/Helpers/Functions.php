<?php

    function getPropByLang($obj,$prop,$lang=null)
    {
        if($lang){
            return $obj->{$lang.'_'.$prop};
        }
        return $obj->{currentLanguage().'_'.$prop};
    }

    function currentLanguage()
    {
        return app()->getLocale();
    }