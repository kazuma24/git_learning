<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SampleController extends Controller
{
    //index
    public function test1(Request $request) {
        $url = $request->url();
        $name = $request->name;
        $age = $request->age;
        $a = $name . $age;
        return $a;
    }
    public function test2(Request $request, $hoge) {
        $value = $request->header('X-Header-Name', 'default');
        $v = 'X-Header-Name:'.$value." ".$hoge;
        return $v;
    }
    public function test3() {
        return "test3";
    }
    // main_branch_2で追加
    public function test4() {
        return "test3";
    }
}
