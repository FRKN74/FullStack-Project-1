<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use File;
use Illuminate\Support\Str;

use App\Models\Slider;

use App\Http\Requests\imageCreateRequest;
use App\Http\Requests\ImageUpdateRequest;

class SliderController extends Controller
{
    public function slider()
    {
        $slider = Slider::all();
        return view('layouts.back.slider.create',compact('slider'));
    }
    public function sliderCreate(imageCreateRequest  $request)
    {
        $slider = new Slider;
        $slider->name = $request->name;
        if ($request->hasFile('image')) {
            
            $imageName = Str::slug($request->name).".".$request->image->getClientOriginalExtension(); //resmin adın ve uzantısını alıp birleştirdik.
            $request->image->move(public_path('slider/'),$imageName);

            $slider->image = 'slider/'.$imageName;
        }
        $slider->save();
        
        toastr()->info('Fotoğraf eklendi');
        return redirect()->route('admin.slider');
    }
    public function update($id)
    {
        $slider = Slider::whereId($id)->get();
        return view('layouts.back.slider.update',compact('slider'));
    }
    public function updatePost(ImageUpdateRequest $request,$id)
    {
        $slider =Slider::findOrFail($id);
        $slider->name = $request->name;
        if ($request->hasFile('image')) {
            
            $imageName = Str::slug($request->name).".".$request->image->getClientOriginalExtension(); //resmin adın ve uzantısını alıp birleştirdik.
            $request->image->move(public_path('slider/'),$imageName);

            $slider->image = 'slider/'.$imageName;
        }
        $slider->update();
        
        toastr()->info('Fotoğraf güncellendi');
        return redirect()->route('admin.slider');
    }
    public function delete($id)
    {
        Slider::whereId($id)->delete();

        toastr()->success('Resim silindi.');
        return redirect()->route('admin.sliderCreate');
        
    }
    public function switch(Request $request)
    {
            $slider = Slider::findOrFail($request->id);
            $slider->status = $request->statu == "true" ? 1 : 0;
            $slider->save();
    }
}
