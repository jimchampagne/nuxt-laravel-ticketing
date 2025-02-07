<?php

namespace App\Http\Controllers;

use App\Models\Board;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Gate;

class BoardController extends Controller implements HasMiddleware
{
    /**
     * Display a listing of the resource.
     */
    public static function middleware() {
        return [
            new Middleware('auth:sanctum', except: ['index', 'show']),
        ];
    }

    public function index()
    {
        return Board::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Project $project)
    {
        // Ensure the authenticated user owns the project
        $project = $request->user()->projects()->find($project->id);

        if (!$project) {
            return response('Project not found', 404);
        }
    
        // Validate request data
        $fields = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);
    
        // Create the board under the project
        $board = $project->boards()->create($fields);
    
        return response()->json($board, 201);
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Board $board)
    {
        return $board;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Board $board)
    {
        Gate::authorize('modify', $board);

        $fields = $request->validate([
            'title' => 'required',
        ]);

        $board = Board::without('project')->find($board->id);
        $board->update($fields);

        return $board;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Board $board)
    {
        Gate::authorize('modify', $board);

        $board->delete();

        return response('Board was deleted', 204);
    }
}
