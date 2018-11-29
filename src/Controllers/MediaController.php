<?php
/**
 * Created by PhpStorm.
 * User: hcenter
 * Date: 11/29/18
 * Time: 17:59
 */

namespace ThaiLe\FileManager\Controllers;


use App\Http\Controllers\Controller;

class MediaController extends Controller
{
    public function media()
    {
        return view('media::media');
    }
}