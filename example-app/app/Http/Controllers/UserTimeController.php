<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Model\Tijd;

class UserTimeController extends Controller
{
    public function button_pressed(){
        $tijd = Tijd::first();
        $tijd->tijd1 += 1;
        $tijd->save();

        //return redirect('/');
    }
   /* public function showData()
    {
        // Haal de eerste tijd op uit de database
        $tijd = Tijd::first();
        
        // Geef de opgehaalde tijd door aan de view
        return view('home')->with('tijd', $tijd);
    }

    public function Submit_pressed(Request $request): RedirectResponse{

        $tijd = $request->input('Test_DatetimeLocal');
        Log::info($tijd);
        $tijd1 = Tijd::first();
        if ($tijd1){
            $tijd1->update([
                'Test_DatetimeLocal'=> $tijd,
                $tijd1->save();
            ]);
        }
        else{
            Tijd::create([
                'Test_DatetimeLocal'=> $tijd,
            ]);
        }
        
        return redirect('/');
        //return redirect('/');
    }*/

   

    //
}
