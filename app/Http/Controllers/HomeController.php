<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Cards;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function list(){
        $cards = Cards::get();
        $card = NULL;
        return view('list', compact('cards'));
    }

    public function store(Request $request){
        $res = [];
        
        if ($request->hasFile('image') && $request->image_value) {
            $avatar = $request->file('image');
            $path = 'uploads/cards';
            $timestamp = Carbon::now()->timestamp;
            $image_name = $timestamp . '_' . strtolower($avatar->getClientOriginalName());
            $uploads = $avatar->move(public_path() . '/' . $path, $image_name);
       } else{
            $image_name = NULL;
       }

        $cards = new Cards;
        $cards['name'] = $request->name;
        $cards['slug'] = Str::slug($request->name, '-');
        $cards['email'] = $request->email;
        $cards['designation'] = $request->designation;
        $cards['business_name'] = $request->business_name;
        $cards['short_description'] = $request->short_description;
        $cards['profile'] = $image_name;
        $cards['whatsapp_number'] = (isset($request->whatsapp_number) && $request->whatsapp_number != '' ? $request->whatsapp_number : '');
        $cards['contacts'] = (isset($request->contacts) && $request->contacts != '' ? $request->contacts : '');
        $cards['address'] = (isset($request->address) && $request->address != '' ? $request->address : '');
        $cards->save();
        if ($cards->id) {
            $res['status'] = 1;
        }  else {
            $res['status'] = 0;
        }
        return $res;
    } 

    public function update(Request $request){
        
        $res = [];
        $cardExists = Cards::where('slug',$request->slug)->get()->first();
        // as user can not update email, Here i'm also not updating email as well
		$card_details = [
            'name' => $request->name,
            'slug' => Str::slug($request->name, '-'),
            'designation' => $request->designation,
            'business_name' => $request->business_name,
            'short_description' => $request->short_description,
            'whatsapp_number' => (isset($request->whatsapp_number) && $request->whatsapp_number != '' ? $request->whatsapp_number : ''),
            'contacts' => (isset($request->contacts) && $request->contacts != '' ? $request->contacts : ''),
            'address' => (isset($request->address) && $request->address != '' ? $request->address : ''),
            'updated_at' => Carbon::now()
        ];

        // Profile
        if ($request->hasFile('image') && $request->image_value) {
			if ($cardExists->profile !== null) {
				$remove_image_path = public_path('uploads/cards/' . $cardExists->profile);
				unlink($remove_image_path);
			}

            $avatar = $request->file('image');
            $path = 'uploads/cards';
            $timestamp = Carbon::now()->timestamp;
            $image_name = $timestamp . '_' . strtolower($avatar->getClientOriginalName());
            $uploads = $avatar->move(public_path() . '/' . $path, $image_name);
            $card_details['profile'] = $image_name;
		}

        $updateCards = Cards::where('id', $request->id)->update($card_details);

		if ($updateCards) {
            $res['status'] = 1;
        }  else {
            $res['status'] = 0;
        }
        return $res;
    }

    public function edit(Request $request){
        $cards = Cards::get();
        $card_slug = $request->slug;
        $card = Cards::where('slug', $card_slug)->first();
        return view('list', compact('cards', 'card'));
    }
}
