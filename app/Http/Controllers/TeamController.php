<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use Illuminate\Http\Request;
use Throwable;
use function in_array;

class TeamController extends Controller
{
    public function index()
    {
        try {
            $team = [];
            $teamBase = Employees::all();
            if ($teamBase->count() !== 0) {
                $playerTypes = [];
                foreach ($teamBase as $onePlayer) {
                    if (in_array($onePlayer->position, $playerTypes, true) === false) {
                        $playerTypes[] = $onePlayer->position;
                    }
                }
                $teamByTypeArr = [];
                foreach ($playerTypes as $oneType) {
                    $teamByTypeArr[] = $teamBase->filter(static function ($item) use($oneType){
                        return $item->position === $oneType;
                    });
                }
                $team = collect($teamByTypeArr);
            }
        } catch (Throwable $e) {
            $team = [];
        }

        return view('app.team', ['team' => $team]);

    }
}
