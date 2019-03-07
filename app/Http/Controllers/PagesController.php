<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    // public function Homepage(){
    //     $data = array (
    //         'province' => ['Phnom Penh','Kandal']
    //     );
    //     return view('pages.homepage') -> with($data);
    // }

    public function index()
    {
        $data = array(
            'provices' => array(
                'Banteay Meanchey Province',
                'Battambang Province',
                'Kampong Cham Province',
                'Kampong Chhnang Province',
                'Kampong Speu Province',
                'Kampong Thom Province',
                'Kampot Province',
                'Kandal Province',
                'Koh Kong Province',
                'Kep Province',
                'Kratié Province',
                'Mondulkiri Province',
                'Oddar Meanchey Province',
                'Pailin Province',
                'Sihanoukville Province',
                'Preah Vihear Province',
                'Pursat Province',
                'Prey Veng Province',
                'Ratanakiri Province',
                'Siem Reap Province',
                'Stung Treng Province',
                'Svay Rieng Province',
                'Takéo Province',
                'Tbong Khmum Province',
            ),
            'type' => array('Resort', 'Temple', 'Beach', 'Restuarant', 'Mountaint', 'Island', 'River'),
    
        );

        return view('pages.home.index', ["data" => $data]);
    }

    public function blog()
    // $hello = array(
    //     'name' => 'bunly',
    //     'sex' => 'female');
    {

        return view('pages.blog');
    }

    public function about()
    {

        return view('pages.about');
    }

    // public function profile() {

    //     return view ('pages.profile' );
    // }

}
