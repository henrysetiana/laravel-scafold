<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Grids\StgRejectFgajiGridInterface;
use App\Grids\StgRejectFgajiGrid;
use App\stgRejectFgaji;

class stgRejectFgajiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index(StgRejectFgajiGridInterface $stgRejectFgajiGrid, Request $request)
     {
         // the 'query' argument needs to be an instance of the eloquent query builder
         // you can load relationships at this point
                              // dd($request);exit;

         if($request->sort_by == null){
           $query = stgRejectFgaji::orderBy('gapok', 'DESC');
         }else{
           $query = stgRejectFgaji::query();
         }


         // $query = stgReject::query();
         return $stgRejectFgajiGrid
                     ->create(['query' => $query, 'request' => $request])
                     ->renderOn('welcome', ["title"=>"Data Reject - f_gaji"]); // render the grid on the welcome view

     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      //
      $modal = [
          'model' => class_basename(stgRejectFgaji::class),
          'route' => route('stgrejectfgaji.store'),
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
     public function show($id, Request $request, StgRejectFgajiGridInterface $stgRejectFgajiGrid)
     {
         //
         $stgRejectFgajiGrid->setColumns();
         $modal = [
             'model' => class_basename(stgRejectFgaji::class),
             'route' => route('stgrejectfgaji.update',$id),
             'action' => 'update',
             'method' => 'PUT',
             'column' => $stgRejectFgajiGrid->columns,
             'stgreject' => stgRejectFgaji::where('id','=', $id)->firstOrFail()->toArray(),
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
       $stgRejectFgaji = stgRejectFgaji::find($id);
       $stgRejectFgaji->fill($request->all())->save();
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
