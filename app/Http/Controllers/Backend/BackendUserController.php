<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\SdcUser;
use Input;

class BackendUserController extends Controller
{

    public function __construct(){
        $this->page_name = 'User';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){

        $data['heading_title'] = "Directory Page";
        $data['heading_status'] = "user directory";
        $data['alphabet'] = range('a', 'z');        

        $users = new SdcUser;
        $data['page_name'] = $this->page_name;

        if ( $request->skey ){
            $skey = $request->skey;
        }else{
            $skey = 'all';
        }
        $data['skey'] = $skey;

        $data['users'] = $users->getAllPaginate($skey,10);

        return view('backend.user.sdc_user_list',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        $data['heading_title'] = "Add Page";
        $data['heading_status'] = "new user";

        return view('backend.user.sdc_user_store',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(){
        $data['heading_title'] = "View Page";
        $data['heading_status'] = "user information";

        $user = new SdcUser;
        $data['user'] = $user->getFirstView(Input::get('slug'));
        return view('backend.user.sdc_user_profile',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(){
        $data['heading_title'] = "Edit Page";
        $data['heading_status'] = "user information";

        $user = new SdcUser;
        $data['user'] = $user->getFirstEdit(Input::get('slug'));
        return view('backend.user.sdc_user_store',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        //
    }
}
