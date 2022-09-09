<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Clashes;
use App\Models\Logs;

class LogsController extends Controller
{
    private $logs;

    public function __construct(Logs $logs){
        $this->logs = $logs;
    }
    /**
     * Display a listing of the resource.
     * @param  int  $clashes_id
     * @return \Illuminate\Http\Response
     */
    public function index($clashes_id)
    {   
        
        return $this->logs->paginate();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $clashes_id )
    {
        $clashes = Clashes::findOrFail($clashes_id);
        return $clashes->logs()->create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $clashes_id
     * @param  int  $logs_id
     * @return \Illuminate\Http\Response
     */
    public function show($clashes_id, $logs_id)
    {
        $logs = Logs::findOrFail($logs_id);

        if($logs->clashes_id == $clashes_id)
            return $logs;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $logs_id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $logs_id)
    {
        $logs = Logs::findOrFail($logs_id);
        $logs->update($request->all());

        return $logs;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $logs_id
     * @return \Illuminate\Http\Response
     */
    public function destroy($logs_id)
    {
        $logs = Logs::findOrFail($logs_id);

        return $logs->delete();
    }
}
