<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customize;

class CustomizeController extends Controller
{
    public function getme(Request $request)
    {
        // return $request->input('name');
        $this->validate($request,
        [
            'address' => 'required | string | between: 11, 73',
            'city' => 'required | string | between: 2, 35',
            'state' => 'required',
            'zip' => 'required | integer | between: 6, 8',
            'describe' => 'required | string | between: 97, 345',
            'image' => 'nullable | image | max: 4999',
            'checkbox' => 'required',
        ]);

        // save image
        $customImages =  $request->file('image')->getClientOriginalName();
        $filename =  pathinfo($customImages, PATHINFO_FILENAME);
        $extension = $request->file('image');
        $savedImage = $filename . "_" . time() . "." . $extension;

        // upload custom images
        $path = $request->file('image')->storeAs('public/custom_images', $savedName);

        //create new message
        $customize = new Customize;
        $customize->address = $request->input('address');
        $customize->city = $request->input('city');
        $customize->state = $request->input('state');
        $customize->zip = $request->input('zip');
        $customize->describe = $request->input('describe');
        $customize->size = $request->file('image')->getClientSize;
        $customize->image = $savedImage;
        $customize->checkbox = $request->input('checkbox');

        //save message
        $customize->save();

        //Redirect
        return redirect('/')->with('success', 'We have received your message and should get back to you in some moments.');

    }

    public function getCustoms()
    {
        $customizes = Customize::all();
        return view('my_request')->with('customizes', '$customizes');
    }
}

?>