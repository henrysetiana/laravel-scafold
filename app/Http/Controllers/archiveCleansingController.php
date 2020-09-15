<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Grids\ArchiveCleansingGridInterface;
use App\Grids\ArchiveCleansingGrid;
use App\ArchiveCleansing;

class archiveCleansingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index(ArchiveCleansingGridInterface $archiveCleansingGrid, Request $request)
     {
         // the 'query' argument needs to be an instance of the eloquent query builder
         // you can load relationships at this point
                              // dd($request);exit;
         if($request->sort_by == null){
           $query = ArchiveCleansing::orderBy('penpok', 'DESC');
         }else{
           $query = ArchiveCleansing::query();
         }
         // $query = stgReject::query();
         return $archiveCleansingGrid
                     ->create(['query' => $query, 'request' => $request])
                     ->renderOn('welcome', ["title"=>"Data Archived - dapem_b"]); // render the grid on the welcome view

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
     public function show($id, Request $request, ArchiveCleansingGridInterface $archiveCleansingGrid)
     {
         //
         $archiveCleansingGrid->setColumns();
         $modal = [
             'model' => class_basename(ArchiveCleansing::class),
             'route' => route('archivecleansing.update',$id),
             'action' => 'update',
             'method' => 'PUT',
             'column' => $archiveCleansingGrid->columns,
             'stgreject' => ArchiveCleansing::where('unique_key','=', $id)->firstOrFail()->toArray(),
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
       $archiveCleansing = ArchiveCleansing::find($id);
       $archiveCleansing->fill($request->all())->save();
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
