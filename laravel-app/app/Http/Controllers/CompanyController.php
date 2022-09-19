<?php

namespace App\Http\Controllers;

    use Illuminate\Support\carbon;
    use Illuminate\Http\Request;
    use App\Models\Company;
    use Illuminate\Support\Facades\Validator;

    class CompanyController extends Controller
    {
        public function index() 
        {
            $result   = Company::all();
        
            $response = [
                'error'   => false,
                'message' => 'Daftar perusahaan',
                'data'    => !empty($result) ? $result : (object)[],
            ];

            return response()->json($response, 200);  
            
        }
        public function store(Request $request)
        {
            try {
                // membuat validasi semua field wajib diisi
                $result = validator::make($request->all(), [
                    'image'             => 'required',
                    'companyName'       => 'required',
                    'category'          => 'required',
                    'rating'            => 'required',
                    'adress'            => 'required',
                    'vacancy'           => 'required',   
                ]);
            
                //jika validasi gagal maka kirim pesan error
                if($result->fails()){
                    //mengembalikan pesan error dengan menggunakan json
                    return response()->json( $result->errors() );
                }else{
                    
                    //melakukan insert data 
                    $dataCompany = [
                        'image'          => $request->image,
                        'companyName'    => $request->companyName,
                        'category'       => $request->category,
                        'rating'         =>$request->rating ,
                        'adress'         => $request->adress,
                        'vacancy'        =>$request->vacancy ,
                        'date'           => Carbon::now()
                    ];
                    
                    $saveData = Company::create($dataCompany);
                
                    //jika berhasil maka simpan data dengan savedata
                    
                    $response = [
                        'error'   => false,
                        'message' => 'Daftar perusahaan',
                        'data'    => !empty($saveData) ? $saveData : (object)[],
                    ];
            
                    return response()->json($response, 200);
                
                }       
            } catch (\Throwable $th) {
                return response()->json($th);   
            }
        }
        public function update($id, Request $request){

            try {
                // membuat validasi semua field wajib diisi
            $result = validator::make($request->all(), [
                'image'             => 'required',
                'companyName'       => 'required',
                'category'          => 'required',
                'rating'            => 'required',
                'adress'            => 'required',
                'vacancy'           => 'required',   
            ]);

            //jika validasi gagal maka kirim pesan error
            if($result->fails()){
                //mengembalikan pesan error dengan menggunakan json
                return response()->json( $result->errors() );
            }else{
                //melakukan update data berdasarkan $id
                $dataCompany           = company::find($id);
                $dataCompany->image    = $request->image;
                $dataCompany->companyName      = $request->companyName;
                $dataCompany->category  = $request->category;
                $dataCompany->rating  = $request->rating;
                $dataCompany->adress  = $request->adress;
                $dataCompany->vacancy  = $request->vacancy;
                
            
                //jika berhasil maka simpan data dengan methode $post->save()
                if($dataCompany->save()){
                    return response()->json( 'Post Berhasil Diupdate');
                }else{
                    return response()->json('Post Gagal Diupdate');
                }
            }
        } catch (\Throwable $th) {
            return response()->json($th);   
        }
        }
        public function destroy($id){
            //mencari data sesuai $id
            $dataCompany = company::findOrFail($id);
        
            // jika data berhasil didelete maka tampilkan pesan json 
            if($dataCompany->delete()){
                return response([
                    'Berhasil Menghapus Data'
                ]);
            }else{
                return response([
                    'Tidak Berhasil Menghapus Data'
                ]);
            }
        }
    }