<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request  $request)
    {
        //
        info("request");
        \Log::info("ClassController: getAllClass");
        $user = AuthController::getUser();
        info($user);
        try {
            return response()->json([
                'success' => true,
                'message' => 'Thành công',
                'message_title' => "Lấy dữ liệu thành công"
            ], 200);

        } catch (\Exception $e) {
            \Log::error("ClassController: getAllClass Failed !", ['eror message' => $e->getMessage()]);
            report($e);
            return response()->json([
                'success' => false,
                'message' => 'Không thể lấy dữ liệu, vui lòng liên hệ admin',
                'message_title' => "Lấy dữ liệu thất bại"
            ], 400 );
        }
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
        //
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
