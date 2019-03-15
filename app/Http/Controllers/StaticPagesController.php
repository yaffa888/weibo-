<?php
/**
 * Created by PhpStorm.
 * User: yangfang
 * Date: 2019/3/15
 * Time: 16:04
 * email:448225790@qq.com
 */

namespace App\Http\Controllers;

use app\Service\Model\Tasks\Store\Views\Views;
use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    function home()
    {
        return View('static_page/home');
    }

    function help()
    {
        return View('static_page/help');
    }

    function about()
    {
        return View('static_page/about');
    }
}