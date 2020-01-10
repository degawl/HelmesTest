<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Sector;
use Illuminate\Support\Facades\DB;

class FormController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Form Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling handling all
    | form related functions such as populating select box values
    | and sending form data to DB.
    |
    */


    /**
     * Populate name input and select box with data from sectors table
     *
     * @return Response
     */
    public function populateFormInputs()
    {
        $user = Auth::user();
        $name = User::where('username', $user->username)->pluck('name');
        $sectors = Sector::get();
        $selectedSectorsObject = DB::table('user_sectors')->where('username',  $user->username)->get('sector_id');
        $selectedSectorsArray = [];
        foreach ($selectedSectorsObject as $object) 
        {
            $selectedSectorsArray[] = $object->sector_id;
        }

        $data = [
            'name'            => $name[0], 
            'sectors'         => $sectors,
            'selectedSectors' => $selectedSectorsArray
        ];

        return view('form', ['data' => $data]);
    }


    /**
     * Update user table with data from form
     * @param User $user
     * @param Request $req
     * @return void
     */
    public function updateUser(User $user, Request $req)
    {
        $user->name = $req->name;
        $updateDetails = ['name' => $req->name, 'agreement_to_terms' => 1];
        User::where('username', $user->username)->update($updateDetails);
    }


    /**
     * Add data to user_serctors table with data from form
     * 
     * @param User $user
     * @param Request $req
     * 
     * @return void
     */
    public function addUserSectors(User $user, Request $req)
    {
        foreach ($req->sectors as $sector_id) 
        {
            DB::table('user_sectors')->insert([
                'username'  => $user->username,
                'sector_id' => $sector_id
            ]);
        }
    }


    /**
     * Delete all sectors connected to user
     * 
     * @param User $user
     *
     * @return void
     */
    public function deleteUserSectors(User $user)
    {
        DB::table('user_sectors')->where('username', $user->username)->delete();
    }


    /**
     * Check if the user already has selected sectors in DB
     * 
     * @param User $user
     *
     * @return boolean
     */
    public function userHasSectors(User $user)
    {
        return !empty(DB::table('user_sectors')->where('username', $user->username));
    }


    /**
     * Submit all data from form to databases.
     * 
     * @param Request $req
     *
     * @return Response
     */
    public function submitForm(Request $req)
    {
        $req->validate([
            'name' => 'required',
            'sectors' => 'required',
            'agreement_to_terms' => 'required'
        ]);

        $user = Auth::user();
        $this->updateUser($user, $req);

        if ($this->userHasSectors($user)) 
        {
            $this->deleteUserSectors($user);
        }

        $this->addUserSectors($user, $req);
        return redirect()->action('FormController@populateFormInputs')->with('message', 'Your data has been updated.');
    }
}
