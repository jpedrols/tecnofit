<?php

namespace App\Http\Controllers;

use DB;

class ApiController extends Controller
{
    public function getUsersRankByMovement($id) {
        $movimento_dados = DB::table('personal_records')
        ->join('users', 'users.id', '=', 'personal_records.user_id')
        ->select('users.name as user_name', DB::raw('max(value) as value'), 'personal_records.date')
        ->whereMovementId($id)
        ->orderByDesc('value')
        ->groupBy('user_id')
        ->get();

        if($movimento_dados->count() > 0){
            return response($movimento_dados, 200);
        } else {
            return response()->json([], 404);
        }
    }
}
