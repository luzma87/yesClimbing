<?php

class QuestionsController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @param int $userId
     *
     * @return Response
     */
    public function index($userId) {
        return "Displaying all questions for user " . $userId;
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        return "Displaying create form";
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {
        // POST /questions para el insert

//        return Redirect::to('/questions');
        return Redirect::route('questions.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  int $userId
     * @param  int $questionId
     * @return Response
     */
    public function show($userId, $questionId) {
        // GET -> questions/id
        return "show specific question " . $questionId . " from specific user " . $userId;
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id) {
        // GET -> /questions/id/edit
        return "display form to  edit existing record";
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id) {
        // PUT/PATCH /questions/id -> update record
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id) {
        // DELETE /questions/id -> delete record
    }


}
