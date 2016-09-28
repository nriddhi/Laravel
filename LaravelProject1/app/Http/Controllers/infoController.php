<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\infomodel;

class infoController extends Controller
{
    
 public function index()

 {

 
   $alldata = infomodel::paginate(4);

   return view('userinfo.index', compact('alldata'));


 }


 public function create()

 {


return view('userinfo.create');


 }


 public function store(Request $request)

 {

 	$input = $request->all();

 	infomodel:: create($input);

    return redirect('userinfo');


 }

 public function show ()

 {


 }


 public function edit($id)
 {

  
  $updateinfo = infomodel::findorfail($id);

  return view('userinfo.edit', compact('updateinfo'));



 }


 public function update(Request $request, $id)

 {

     $input = $request -> all();

     $data = infomodel::findorfail($id);

     $data -> update($input);

     return redirect('userinfo');



 }



 public function destroy ($id)

 {
     
     $data = infomodel::findorfail($id);

     $data -> delete();

     return redirect('userinfo');

 }




}
