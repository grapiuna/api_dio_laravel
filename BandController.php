<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BandController extends Controller
{
    public function getAll(){
        $bands = $this->getBands();
        return response()->json($bands);
    }

    public function getByGender($gender){
        $band = null;
        foreach($this->getBands() as $_band) {
        if ($_band['gender']==$gender)
            $band[] = $_band;
        }
        return $band ? response()->json($band): abort(404);;
    }

    public function getById($id){
        $band = null;
        foreach($this->getBands() as $_band) {
            if($_band['id'] == $id)
                $band = $_band;
        }
        return $band ? response()->json($band) : abort(404);

    }

    public function store(Request $request){
        $validate = $request->validate([
            'name' => 'required'
            //ter name é obrigatório
        ]);
        return response()->json($request->all());
    }
    protected function getBands(){
        return [
            ['id'=>1, 'name' => 'Green Day', 'gender' => 'punk'],
            ['id'=>2, 'name' => 'Beatles', 'gender' => 'rock'],
            ['id'=>3, 'name' => 'Michael Jackson', 'gender' => 'pop'],
            ['id'=>4, 'name' => 'The Offspring', 'gender' => 'punk'],
        ];
    }
}
