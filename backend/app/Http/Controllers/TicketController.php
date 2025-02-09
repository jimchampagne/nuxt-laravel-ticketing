<?php

namespace App\Http\Controllers;

use App\Models\Board;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Gate;

class TicketController extends Controller implements HasMiddleware
{
    /**
     * Display a listing of the resource.
     */

    public static function middleware()
    {
        return [
            new Middleware('auth:sanctum', except: ['index', 'show']),
        ];
    }

    public function index()
    {
        return Ticket::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Board $board)
    {
        // Ensure the authenticated user owns the board and it belongs to the project
        $board = $request->user()->projects()->findOrFail($board->project_id)->boards()->findOrFail($board->id);

        // Validate the ticket data
        $fields = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required|string|in:open,closed,in-progress',
        ]);

        // Create the ticket under the board
        $ticket = $board->tickets()->create($fields);

        return response()->json($ticket, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Ticket $ticket)
    {
        return $ticket;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ticket $ticket)
    {
        Gate::authorize('modify', $ticket);

        $fields = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'status' => 'in:open,in_progress,closed',
            'priority' => 'integer',
        ]);

        $ticket = Ticket::without('board')->find($ticket->id);
        $ticket->update($fields);

        return $ticket;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Ticket $ticket)
    {
        Gate::authorize('modify', $ticket);

        $ticket->delete();

        return response('Ticket was deleted', 204);
    }
}
