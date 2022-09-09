<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Clashes;

class ClashesController extends Controller
{
    private $clashes;

    public function __construct(Clashes $clashes){
        $this->clashes = $clashes;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->clashes->paginate();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $this->clashes->create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int $clashes_id
     * @return \Illuminate\Http\Response
     */
    public function show($clashes_id)
    {
        return $clashes = Clashes::findOrFail($clashes_id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int $clashes_id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $clashes_id)
    {
        $clashes = Clashes::findOrFail($clashes_id);
        $clashes->update($request->all());

        return $clashes;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $clashes_id
     * @return \Illuminate\Http\Response
     */
    public function destroy($clashes_id)
    {
        $clashes = Clashes::findOrFail($clashes_id);

        return $clashes->delete();
    }
}
