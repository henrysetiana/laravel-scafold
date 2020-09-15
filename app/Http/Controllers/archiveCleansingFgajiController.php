<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Grids\ArchiveCleansingFgajiGridInterface;
use App\Grids\ArchiveCleansingFgajiGrid;
use App\ArchiveCleansingFgaji;

class archiveCleansingFgajiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index(ArchiveCleansingFgajiGridInterface $archiveCleansingFgajiGrid, Request $request)
     {
         // the 'query' argument needs to be an instance of the eloquent query builder
         // you can load relationships at this point
         if($request->sort_by == null){
           $query = ArchiveCleansingFgaji::orderBy('gapok', 'DESC');
         }else{
           $query = ArchiveCleansingFgaji::query();
         }
         return $archiveCleansingFgajiGrid
                     ->create(['query' => $query, 'request' => $request])
                     ->renderOn('welcome', ["title"=>"Data Archived - f_gaji"]); // render the grid on the welcome view

     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     public function show($id, Request $request, ArchiveCleansingFgajiGridInterface $archiveCleansingFgajiGrid)
     {
         //
         $archiveCleansingFgajiGrid->setColumns();
         $modal = [
             'model' => class_basename(ArchiveCleansingFgaji::class),
             'route' => route('archivecleansingfgaji.update',$id),
             'action' => 'update',
             'method' => 'PUT',
             'column' => $archiveCleansingFgajiGrid->columns,
             'stgreject' => ArchiveCleansingFgaji::where('id','=', $id)->firstOrFail()->toArray(),
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
       $archiveCleansingFgaji = ArchiveCleansingFgaji::find($id);
       $archiveCleansingFgaji->fill($request->all())->save();
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
