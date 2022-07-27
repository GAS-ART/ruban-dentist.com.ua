<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use mysql_xdevapi\Session;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;

class languagesController extends Controller
{

    public function changeLocale($locale) {

        
        $url = URL::previous();
        $domain = Str::before($url, '://') . "://" .  Str::between( $url, '://', '/') . "/";

        if($url == $domain && $locale == "ua"){
            return redirect($url);
        } else if ($url == $domain && $locale != "ua"){
            return redirect($url . $locale);
        }

        $urlPart = Str::of($url)->after($domain);
        $languages = ['ru', 'ua' ];

        if(Str::contains($urlPart, $languages) ){
            for ($i=0; $i < count($languages); $i++) {
                if (Str::contains($urlPart,  $languages[$i]) ) {
                    $url = $domain . str_replace($languages[$i],  $locale, $urlPart);
                    return redirect($url);
                }
            }
        }
    }
}
