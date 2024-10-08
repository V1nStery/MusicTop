<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class DbController extends Controller
{
    private string $table = 'courses';

    public function index(){
        $c = DB::table($this->table)->where('name','Pyton rules')->value('author');

        $courses = DB::select('SELECT * FROM top__courses WHERE programming_id = ?',[1]);
        $courses = DB::select('SELECT * FROM top_courses WHERE programing_id = :progid',[
            'progid' => 2
        ]);
    }

    $c = DB::table($this->table)->select('author as owner')->disctinct()->get();

    $c = DB::table($this->table)->where('options->cashback','>',10)->get();
    $c = DB::table($this->table)->whereJsonContains('option->documents','cerficate')->get();
    $c = DB::table($this->table)->whereJsonLength('options->documents',2)->get();


public function index() {
    return view("test.index",[
        "areas" => ["Asia",'Europe']
    ]);
}

// private function getAge( $user) {

//     return $age;
// }
// public function page( Request $request, string $id ) {
//     $url = 'https://jsonplaceholder.org/users';

//     $data = Http::timeout(5)->get($url)->json();
//     foreach( $data as $nu => $user) {
//         $data[$nu]['age'] = $this->getAge($user);
//         $birthDate = 'birthDate';
//         $date = new DateTime($birthDate);
//         $now = new DateTime();
//         $interval = $now->diff($date);
//         $age = $interval->y;


//     }
//     echo '<pre>';
//     print_r($request ->input('test','Nothing'));
//     echo '</pre>';
//     return view('test.page',[
//         'id' => $id,
//         'data' => $data

//     ]);
// }

// public function form( Request $request): RedirectResponse {
//     $request->validate( [
//         'search' => 'required'
//     ])
// }
// }

}

