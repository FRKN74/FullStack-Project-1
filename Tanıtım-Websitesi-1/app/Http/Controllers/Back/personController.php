<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use File;

use Illuminate\Support\Str;
use App\Models\Person;


//request
use App\Http\Requests\professionCreateRequest;
use App\Http\Requests\professionUpdateRequest;

class personController extends Controller
{
    public function profession()
    {
        $person = Person::all();
        return view('layouts.back.users.person',compact('person'));
    }
    public function professionCreate(professionCreateRequest $request)
    {
        $person = new Person;
        $person->fullname = $request->fullname;
        $person->profession = $request->profession;
        $person->job =  $request->job;

        if($request->hasFile('image')){
            $imageName = Str::slug($request->fullname).".".$request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads'),$imageName);

            $person->image='uploads/'.$imageName;
        }

        $person->save();

        toastr()->success('Kayıt eklendi,iyi çalışmalar.');
        return redirect()->route('admin.profession');
    }
    public function professionUpdate($id)
    {
        $person = Person::whereId($id)->get();
        return view('layouts.back.users.personUpdate',compact('person'));
    }
    public function professionUpdatePost(professionUpdateRequest $request , $id)
    {
        $person =Person::findOrFail($id);
        $person->fullname = $request->fullname;
        $person->profession = $request->profession;
        $person->job =  $request->job;

        if($request->hasFile('image')){
            $imageName = Str::slug($request->fullname).".".$request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads'),$imageName);

            $person->image='uploads/'.$imageName;
        }

        $person->update();

        toastr()->info('Kayıt başarılı bir şekilde güncellendi.');
        return redirect()->route('admin.profession');
    }
    public function professionDelete($id)
    {
        Person::whereId($id)->delete();

        toastr()->error('Bir arkadışınızı çıkardınız!!!');
        return redirect()->route('admin.profession');
    }
}
