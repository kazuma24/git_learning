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
    // main_branch_2で追加
    public function test4() {
        return "test3";
    }
    // main_branc_1で追加
    public function test5() {
        return "test3";
    }
    // main_branc_1で追加
    public function test6() {
        return "test3";
    }
    public function test7() {
        return "test7";
    }
}
