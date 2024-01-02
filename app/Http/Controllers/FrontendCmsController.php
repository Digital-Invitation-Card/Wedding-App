<?php

namespace App\Http\Controllers;

use App\Models\WeddingInfo;
use Illuminate\Http\Request;

class FrontendCmsController extends Controller
{
    public function index($uid)
    {
        $data = WeddingInfo::where('uid', $uid)->firstOrFail();
        return view('frontend-cms.index', compact('data'));
    }
    public function getInfoFromClinet()
    {
        return view('frontend-cms.get-info');
    }
    public function staticContent()
    {
        return view('frontend-cms.sample-teampalte');
    }
    public function sampleTwo()
    {
        return view('frontend-cms.sample-2');
    }
    public function sampleThree()
    {
        return view('frontend-cms.sample-3');
    }
}
