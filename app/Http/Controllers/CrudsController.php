<?php
namespace App\Http\Controllers;
use App\Crud;
use Illuminate\Http\Request;
class CrudsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Crud::latest()->paginate(5);
        return view('index', compact('data'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'place'    =>  'required',
            'info'     =>  'required',
            'image'         =>  'required|image|max:2048',
            'food'  =>   'required',
            'season'    =>  'required',
            'way'   =>   'required'

            ]);
       $image = $request->file('image');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);
        $form_data = array(
            'place'       =>   $request->place,
            'info'        =>   $request->info,
            'food'        =>   $request->food,
            'season'        =>   $request->season,
            'way'        =>   $request->way,
            'image'            =>   $new_name
        );
        Crud::create($form_data);
        return redirect('crud')->with('success', 'Data Added successfully.');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Crud::findOrFail($id);
        return view('view', compact('data'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Crud::findOrFail($id);
        return view('edit', compact('data'));
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
        $image_name = $request->hidden_image;
        $image = $request->file('image');
        if($image != '')
        {
            $request->validate([
                'place'    =>  'required',
                'info'     =>  'required',
                'food'      =>  'required',
                'season'    =>  'required',
                'way'   =>  'required',
                'image'         =>  'image|max:2048'
            ]);
            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $image_name);
        }
        else
        {
            $request->validate([
                'place'    =>  'required',
                'info'     =>  'required',
                'food'      =>  'required',
                'season'    =>  'required',
                'way'   =>  'required'
            ]);
        }
        $form_data = array(
            'place'    =>  $request->place,
            'info'     =>  $request->info,
            'food'     =>  $request->food,
            'season'     =>  $request->season,
            'way'     =>  $request->way,
            'image'         =>  $image_name
        );
        Crud::whereId($id)->update($form_data);
        return redirect('crud')->with('success', 'Data is successfully updated');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Crud::findOrFail($id);
        $data->delete();
        return redirect('crud')->with('success', 'Data is successfully deleted');
    }
}
