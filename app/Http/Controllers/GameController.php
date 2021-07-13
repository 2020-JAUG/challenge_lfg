<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\User;
use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //CONFIRMAMOS QUE EXISTA
        $games = auth()->user()->games;

        return response()->json(['success' => true, 'data' => $games], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function createGame(Request $request) {
        if($request->isJson()) {
            $data = $request->json()->all();

            //CONFIRMACIÓN PARA SABER SI EL USUARIO EXISTE
            $userExists = User::where("id", $data['user_id'])->exists();

            if($userExists === false) {
                return response()->json(['error' => 'Invalid parameters'], status:406);
            }

            $datatoBeSaved = [
                'user_id' => $data['user_id'],
                'title' => $data['title'],
                'thumbnail_url' => $data['thumbnail_url'],
            ];
            //Aqui ejecutamos la variable datatosaved, para que se guarde el juego
            $game = Game::create($datatoBeSaved);

            return response()->json($game, status:200);
        } else {
            return response()->json(['error' => 'Error not a valid JSON!!!'], status:406,);
        }
    }
    // public function store(Request $request)
    // {
    //     $this->validate($request, [
    //         'title' => 'required',
    //         'thumbnail_url' => 'required',
    //     ]);

    //     $game = new Game();
    //     $game->title = $request->title;
    //     $game->thumbnail_url = $request->thumbnail_url;

    //     if(auth()->user()->games()->save($game))
    //         return response()->json([
    //             'success' => true,
    //             'data' => $game->toArray()
    //         ]);
    //         else
    //             return response()->json([
    //                 'success' => false,
    //                 'message' => 'Game not added'
    //             ], 500);
    // }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function show(Game $game)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Game $game)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function destroy(Game $game)
    {
        //
    }
}
