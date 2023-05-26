<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Person;
use App\Models\Board;
use Illuminate\Support\Facades\Storage;
use App\MyClasses\MyService;

class Sample2Controller extends Controller
{
    //
    public function test4(Request $request) {
        //$sample = config('sample.message');
        $sample = env('APP_NAME');
        return $sample;
    }
    public function test5(Request $request, $hoge) {
        $value = $request->header('X-Header-Name', 'default');
        $v = 'X-Header-Name:'.$value." ".$hoge;
        return $v;
    }
    public function test6(Request $request, Person $person) {
        $persons = Person::all();
        $text = '';
        foreach ($persons as $person){
            $text .= $person->name;
        }
        Storage::put('person_name.txt', $text);
        return response()->json($persons);
    }

    public function test7(Request $request) {
        $hasPaeson = Person::has('boards')->get();
        $doesntPerson = Person::doesntHave('boards')->get();
        $item = [
            'hasPerson'=>$hasPaeson,
            'doesntPerson'=>$doesntPerson,
        ];
        return response()->json($item);
    }

    public function test8(Request $request, Person $person) {
        // $this->validate($request, Person::$rules);
        $person = Person::find($request->id)->boards;
        return response()->json($person);
    }

    public function test9(Request $request) {
        // $person = Board::find($request->id)->person;
        $person = Person::simplePaginate(1);
        return $person;
    }
}
