<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Grids\StgRejectGridInterface;
use App\Grids\StgRejectGrid;
use App\stgReject;

class stgRejectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index(StgRejectGridInterface $stgRejectGrid, Request $request)
     {
         // the 'query' argument needs to be an instance of the eloquent query builder
         // you can load relationships at this point
          if($request->sort_by == null){
            $query = stgReject::orderBy('penpok', 'DESC');
          }else{
            $query = stgReject::query();
          }

         // $query = stgReject::query();
         return $stgRejectGrid
                     ->create(['query' => $query, 'request' => $request])
                     ->renderOn('welcome', ["title"=>"Data Reject - dapem_b"]); // render the grid on the welcome view

     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        $modal = [
            'model' => class_basename(User::class),
            'route' => route('stgreject.store'),
            'action' => 'create',
            'pjaxContainer' => $request->get('ref'),
        ];

        // modal
        return view('modal', compact('modal'))->render();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, Request $request, StgRejectGridInterface $stgRejectGrid)
    {
        //
        $stgRejectGrid->setColumns();
        $modal = [
            'model' => class_basename(stgReject::class),
            'route' => route('stgreject.update',$id),
            'action' => 'update',
            'method' => 'PUT',
            'column' => $stgRejectGrid->columns,
            'stgreject' => stgReject::where('unique_key','=', $id)->firstOrFail()->toArray(),
            'pjaxContainer' => $request->get('ref'),
        ];

        // modal
        return view('modal', compact('modal'))->render();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $stgReject = stgReject::find($id);
      $stgReject->fill($request->all())->save();
      return response()->json(['message' => 'record '.$id.' is updated' , 'success' => true]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
