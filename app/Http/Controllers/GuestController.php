<?php
/**
 * Created by PhpStorm.
 * User: thomassoares
 * Date: 09/08/2018
 * Time: 23:30
 */

namespace App\Http\Controllers;


class GuestController extends Controller
{
    public function boasVindas() {
        return view('home/index');
    }
}
