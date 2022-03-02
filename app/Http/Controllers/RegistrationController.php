<?php

namespace App\Http\Controllers;
use App\Models\Registration;
use Auth;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function create(Request $request){


        
        if (Auth::user()) {  

            $request->validate([
                'email' => 'required|email|unique:registrations',
                'password' => 'required',
                'retype_password' => 'required|same:password',
                'phone_number' => 'required|numeric',
                'last_name'=>'required',
                'first_name'=>'required',
                'city'=>'required',
                'province'=>'required',
                'country'=>'required',
                
                'address'=>'required',
                'school'=>'required',
                'educationlvl'=>'required',
                'edustat'=>'required',
                'grdate'=>'required',
                
                'program'=>'required'

            ]);

                
            Registration::create($request->all());
    
            return redirect()->route('crudpage');

        } else {
            return view('error');
        }
        
        




        
    
    
        }

        public function index()
        {
            if (Auth::user()) {   // Check is user logged in
                
                $data = Registration::latest()->paginate(5);
        
            return view('index',compact('data'))
                ->with('i', (request()->input('page', 1) - 1) * 5);

            } else {
                return view('error');
            }




            
        }

        public function destroy($email)
        {
            if(Auth::user()->email=='admin@example.com'){
            $aid =Registration::where('email',$email)->first();

            if ($aid != null) {
                $aid->delete();
            }
    
        return redirect()->route('crudpage')
                        ->with('success','Deleted successfully');
        }
        return redirect()->route('crudpage')
                        ->with('success','Deleted successfully');
        
        }


        public function update(Request $request,  Registration $reg,$email)
    {
        
        Registration::where('email', $email)->update($request->except(['_token','_method','files','submit']));
    
       
    
       return redirect()->route('crudpage')
                       ->with('success','Updated successfully');
    }

    public function update_form($email)
    {
        if(Auth::user()->email==$email){

        $aid =Registration::where('email',$email)->first();

             

        return view('edit',compact('aid'));

        }

        return redirect()->route('crudpage')
                        ->with('success','Deleted successfully');

    }


}
