<?php

namespace FollicallyFeral\Http\Controllers\Modules;

use Illuminate\Http\Request;

use FollicallyFeral\Http\Requests;
use FollicallyFeral\Models\Module;
use FollicallyFeral\Http\Transformers\ModuleTransformer;
use FollicallyFeral\Http\Controllers\Controller;

class ModuleController extends Controller {

    private $_moduleTransformer;

    function __construct() {
        $this->_moduleTransformer = new ModuleTransformer();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

        $modules = Module::all();

        return $this->respond([
            'data' => $this->_moduleTransformer->transformCollection($modules)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }
}
