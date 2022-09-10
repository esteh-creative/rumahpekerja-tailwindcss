<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = Article::all();
        $response = [
            'error'    => false,
            'message'  => 'Data Artikel',
            'data'     => !empty($result) ? $result : (object)[],
        ];

        return response()->json($response, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        try {
            $insert_data  = new Article;
            $insert_data->image       = $request -> image;
            $insert_data->writer      = $request -> writer;
            $insert_data->title       = $request -> title;
            $insert_data->description = $request -> description;
            $insert_data->date        = $request -> date;
            $insert_data -> save();
            return response([
                'error'    => false,
                'message' => 'Data disimpan',
                'data'    => $insert_data
            ], 200);

        } catch (\Throwable $th) {
            return response([
                'error'    => true,
                'message' => 'Gagal disimpan',
                'data'    => $th
            ], 500);
        }

           
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
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
        $check_data = Article::firstWhere('id', $id);
        if($check_data)
        {
            $data_Article = Article::find($id);
            $data_Article->image       = $request->image;
            $data_Article->writer      = $request->writer;
            $data_Article->title       = $request->title;
            $data_Article->description = $request->description;
            $data_Article->date        = $request->date;
            $data_Article -> save();
            return response([
                'error'    => false,
                'message' => 'Data Berhasil Diubah',
                'data'    => $data_Article
            ], 200);
        }
        else
        {
            return response([
                'error'    => true,
                'message' => 'Id Article Tidak Ditemukan',
            ], 500);
        }
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

    public function insert_data(Request $request) {

    }

    public function delete_data($id)
    {
        $check_data = Article::firstWhere('id', $id);
        if($check_data)
        {
            Article::destroy($id);
            return response([
                'error'    => false,
                'message' => 'Data Dihapus',
            ], 200);
        }
        else
        {
            return response([
                'error'    => true,
                'message' => 'Id Article Tidak Ditemukan',
            ], 500);
        }
    }
}



