<?php

class PaginasController extends \BaseController {

    protected $pagina;

    public function __construct(Pagina $pagina) {
        $this->pagina = $pagina;
    }

    public function validarNombre() {
        Log::error('Something is really going wrong.');
        return Input::get("id") . " " . Input::get("nombre");
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        $paginas = $this->pagina->all();
        return View::make('paginas.index', ['paginas' => $paginas]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        $paginas = $this->pagina->all();
        return View::make('paginas.create', ['paginas' => $paginas]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {
        $this->pagina->nombre = Input::get('nombre');
        $this->pagina->descripcion = Input::get('descripcion');
        if(!$this->pagina->isValid()) {
            return Redirect::back()->withInput()->withErrors($this->pagina->errors);
        }
        $this->pagina->save();
        return Redirect::route('paginas.index');
    }


    /**
     * Display the specified resource.
     *
     * @param $nombre
     * @return Response
     */
    public function show($nombre) {
        $pagina = $this->pagina->whereNombre($nombre)->first();
        $paginas = $this->pagina->all();
        return View::make('paginas.show', ['pagina' => $pagina, 'paginas' => $paginas]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id) {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id) {
        //
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id) {
        //
    }


}
