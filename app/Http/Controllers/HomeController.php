<?php

namespace App\Http\Controllers;

use App\Models\Tim;
use App\Models\About;
use App\Models\Slider;
use App\Models\Unggul;
use App\Models\buktitf;
use App\Models\Contact;
use App\Models\Service;
use App\Models\Portofol;
use App\Models\Testimon;
use App\Models\Deskripsi;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
      $sliders = Slider::all();
      $about = About::first();
      $unggul = Unggul::all();
      $service = Service::all();
      $portofol = Portofol::all();
      $contact = Contact::first();
      $testimon = Testimon::all();
      $deskripsi = Deskripsi::first();
      

      return view('home.index', compact(
        'sliders',
        'about',
        'unggul',
        'service',
        'portofol',
        'testimon',
        'contact',
        'deskripsi',
    ));
    }
    public function profil(){
      $about = About::first();
      $contact = Contact::first();
      $unggul = Unggul::all();
      $deskripsi = Deskripsi::first();

      return view('home.profil',compact(
        'about',
        'unggul',
        'contact',
        'deskripsi',
      ));
    }
    public function team(){
      $teams = Tim::all();
      $about = About::first();
      $contact = Contact::first();
      $deskripsi = Deskripsi::first();

      return view('home.team',compact(
        'teams',
        'about',
        'contact',
        'deskripsi',
      ));
    }
    public function service(){
      $about = About::first();
      $service = Service::all();
      $portofol = Portofol::all();
      $buktitf = buktitf::all();
      $testimon = Testimon::all();
      $contact = Contact::first();
      $deskripsi = Deskripsi::first();
      
      return view('home.service',compact(
        'about',
        'service',
        'portofol',
        'testimon',
        'buktitf',
        'contact',
        'deskripsi',
      ));
    }
    public function kontak(){
      $about = About::first();
      $contact = Contact::first();
      return view('home.kontak',compact(
        'about',
        'contact',

      ));
    }
    
    

}
