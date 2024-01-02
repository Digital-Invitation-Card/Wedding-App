<?php

namespace App\Http\Controllers;

use App\Models\WeddingInfo;
use App\Traits\UploadTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Str;


class Weddininfo extends Controller
{
    use UploadTrait;
    public function getWeddingInfo(Request $request)
    {
        $sort_by = $request->get('id');
        $sort_type = $request->get('desc');
        $query = $request->get('query');
        $query = str_replace(" ", "%", $query);
        $data = DB::table('wedding_infos')
            // ->orderBy($sort_by, $sort_type)
            ->paginate(10);
        if ($request->ajax()) {
            $sort_by = $request->get('sortby');
            $sort_type = $request->get('sorttype');
            $query = $request->get('query');
            $query = str_replace(" ", "%", $query);
            $data = DB::table('wedding_infos')
                ->where('id', 'like', '%' . $query . '%')
                ->orWhere('groom_first_name', 'like', '%' . $query . '%')
                ->orWhere('bride_first_name', 'like', '%' . $query . '%')
                ->orderBy('$sort_by', $sort_type)
                ->paginate(10);
            return view('admin.wedding-table', compact('data'))->render();
        }
        return view('admin.add-wedding-info', compact('data'))->render();
    }
    public function addPreWeddingInfo()
    {
        return view('admin.add-prewedding-photo');
    }
    public function store(Request $request)
    {
        dd($request);
        $uuid = Str::uuid()->toString();
        if ($request->has('background_img')) {
            $image = $request->file('background_img');
            $name = Str::slug($request->input('groom_full_name')) . '_' . time();
            $folder = '/images/';
            $background_img_path = $folder . $name . '.' . $image->getClientOriginalExtension();
            $this->uploadOne($image, $folder, 'public', $name);
        }
        if ($request->has('groom_img')) {
            $image = $request->file('groom_img');
            $name = Str::slug($request->input('groom_full_name')) . '_' . time();
            $folder = '/images/';
            $groom_img = $folder . $name . '.' . $image->getClientOriginalExtension();
            $this->uploadOne($image, $folder, 'public', $name);
        }
        if ($request->has('bride_img')) {
            $image = $request->file('bride_img');
            $name = Str::slug($request->input('groom_full_name')) . '_' . time();
            $folder = '/images/';
            $bride_img = $folder . $name . '.' . $image->getClientOriginalExtension();
            $this->uploadOne($image, $folder, 'public', $name);
        }
        if ($request->has('meeting_first_img')) {
            $image = $request->file('meeting_first_img');
            $name = Str::slug($request->input('groom_full_name')) . '_' . time();
            $folder = '/images/';
            $meeting_first_img = $folder . $name . '.' . $image->getClientOriginalExtension();
            $this->uploadOne($image, $folder, 'public', $name);
        }
        if ($request->has('meeting_second_img')) {
            $image = $request->file('meeting_second_img');
            $name = Str::slug($request->input('groom_full_name')) . '_' . time();
            $folder = '/images/';
            $meeting_second_img = $folder . $name . '.' . $image->getClientOriginalExtension();
            $this->uploadOne($image, $folder, 'public', $name);
        }
        if ($request->has('groom_fathar_img')) {
            $image = $request->file('groom_fathar_img');
            $name = Str::slug($request->input('groom_full_name')) . '_' . time();
            $folder = '/images/';
            $groom_fathar_img = $folder . $name . '.' . $image->getClientOriginalExtension();
            $this->uploadOne($image, $folder, 'public', $name);
        }
        if ($request->has('grrom_mother_img')) {
            $image = $request->file('grrom_mother_img');
            $name = Str::slug($request->input('groom_full_name')) . '_' . time();
            $folder = '/images/';
            $grrom_mother_img = $folder . $name . '.' . $image->getClientOriginalExtension();
            $this->uploadOne($image, $folder, 'public', $name);
        }
        if ($request->has('bride_fathar_img')) {
            $image = $request->file('bride_fathar_img');
            $name = Str::slug($request->input('groom_full_name')) . '_' . time();
            $folder = '/images/';
            $bride_fathar_img = $folder . $name . '.' . $image->getClientOriginalExtension();
            $this->uploadOne($image, $folder, 'public', $name);
        }
        if ($request->has('bride_mother_img')) {
            $image = $request->file('bride_mother_img');
            $name = Str::slug($request->input('groom_full_name')) . '_' . time();
            $folder = '/images/';
            $bride_mother_img = $folder . $name . '.' . $image->getClientOriginalExtension();
            $this->uploadOne($image, $folder, 'public', $name);
        }
        if ($request->has('bride_cousin_first_img')) {
            $image = $request->file('bride_cousin_first_img');
            $name = Str::slug($request->input('groom_full_name')) . '_' . time();
            $folder = '/images/';
            $bride_cousin_first_img = $folder . $name . '.' . $image->getClientOriginalExtension();
            $this->uploadOne($image, $folder, 'public', $name);
        }
        if ($request->has('bride_cousin_second_img')) {
            $image = $request->file('bride_cousin_second_img');
            $name = Str::slug($request->input('groom_full_name')) . '_' . time();
            $folder = '/images/';
            $bride_cousin_second_img = $folder . $name . '.' . $image->getClientOriginalExtension();
            $this->uploadOne($image, $folder, 'public', $name);
        }
        if ($request->has('bride_cousin_third_img')) {
            $image = $request->file('bride_cousin_third_img');
            $name = Str::slug($request->input('groom_full_name')) . '_' . time();
            $folder = '/images/';
            $bride_cousin_third_img = $folder . $name . '.' . $image->getClientOriginalExtension();
            $this->uploadOne($image, $folder, 'public', $name);
        }
        if ($request->has('bride_cousin_fourth_img')) {
            $image = $request->file('bride_cousin_fourth_img');
            $name = Str::slug($request->input('groom_full_name')) . '_' . time();
            $folder = '/images/';
            $bride_cousin_fourth_img = $folder . $name . '.' . $image->getClientOriginalExtension();
            $this->uploadOne($image, $folder, 'public', $name);
        }
        if ($request->has('bride_cousin_fifth_img')) {
            $image = $request->file('bride_cousin_fifth_img');
            $name = Str::slug($request->input('groom_full_name')) . '_' . time();
            $folder = '/images/';
            $bride_cousin_fifth_img = $folder . $name . '.' . $image->getClientOriginalExtension();
            $this->uploadOne($image, $folder, 'public', $name);
        }
        if ($request->has('prewedding_img_1')) {
            $image = $request->file('prewedding_img_1');
            $name = Str::slug($request->input('groom_full_name')) . '_' . time();
            $folder = '/images/';
            $prewedding_img_1 = $folder . $name . '.' . $image->getClientOriginalExtension();
            $this->uploadOne($image, $folder, 'public', $name);
        }
        if ($request->has('prewedding_img_2')) {
            $image = $request->file('prewedding_img_2');
            $name = Str::slug($request->input('groom_full_name')) . '_' . time();
            $folder = '/images/';
            $prewedding_img_2 = $folder . $name . '.' . $image->getClientOriginalExtension();
            $this->uploadOne($image, $folder, 'public', $name);
        }
        if ($request->has('prewedding_img_3')) {
            $image = $request->file('prewedding_img_3');
            $name = Str::slug($request->input('groom_full_name')) . '_' . time();
            $folder = '/images/';
            $prewedding_img_3 = $folder . $name . '.' . $image->getClientOriginalExtension();
            $this->uploadOne($image, $folder, 'public', $name);
        }
        if ($request->has('prewedding_img_4')) {
            $image = $request->file('prewedding_img_4');
            $name = Str::slug($request->input('groom_full_name')) . '_' . time();
            $folder = '/images/';
            $prewedding_img_4 = $folder . $name . '.' . $image->getClientOriginalExtension();
            $this->uploadOne($image, $folder, 'public', $name);
        }
        if ($request->has('prewedding_img_5')) {
            $image = $request->file('prewedding_img_5');
            $name = Str::slug($request->input('groom_full_name')) . '_' . time();
            $folder = '/images/';
            $prewedding_img_5 = $folder . $name . '.' . $image->getClientOriginalExtension();
            $this->uploadOne($image, $folder, 'public', $name);
        }
        if ($request->has('prewedding_img_6')) {
            $image = $request->file('prewedding_img_6');
            $name = Str::slug($request->input('groom_full_name')) . '_' . time();
            $folder = '/images/';
            $prewedding_img_6 = $folder . $name . '.' . $image->getClientOriginalExtension();
            $this->uploadOne($image, $folder, 'public', $name);
        }
        if ($request->has('prewedding_img_7')) {
            $image = $request->file('prewedding_img_7');
            $name = Str::slug($request->input('groom_full_name')) . '_' . time();
            $folder = '/images/';
            $prewedding_img_7 = $folder . $name . '.' . $image->getClientOriginalExtension();
            $this->uploadOne($image, $folder, 'public', $name);
        }
        if ($request->has('prewedding_img_8')) {
            $image = $request->file('prewedding_img_8');
            $name = Str::slug($request->input('groom_full_name')) . '_' . time();
            $folder = '/images/';
            $prewedding_img_8 = $folder . $name . '.' . $image->getClientOriginalExtension();
            $this->uploadOne($image, $folder, 'public', $name);
        }
        $form_data = array(
            'uid'       =>   $uuid,
            'from_side'       =>   $request->from_side,
            'sample_teamplate'       =>   $request->sample_teamplate,
            'background_img'       =>   $background_img_path,
            'welcome_text'       =>   $request->welcome_text,
            'wedding_tag_line'       =>   $request->wedding_tag_line,
            'groom_full_name'        =>   $request->groom_full_name,
            'bride_full_name'        =>   $request->bride_full_name,
            'groom_family_info_with_address'        =>   $request->groom_family_info_with_address,
            'bride_family_info_with_address'        =>   $request->bride_family_info_with_address,
            'groom_img'            =>   $groom_img,
            'bride_img'            =>   $bride_img,

            'groom_fathar_full_name'            =>   $request->groom_fathar_full_name,
            'groom_fathar_img'            =>   $groom_fathar_img,
            'grrom_mother_full_name'            =>   $request->grrom_mother_full_name,
            'grrom_mother_img'            =>   $grrom_mother_img,

            'meeting_title_first'            =>   $request->meeting_title_first,
            'meeting_first_date'            =>   $request->meeting_first_date,
            'meeting_first_description'            =>   $request->meeting_first_description,
            'meeting_first_img'            =>   $meeting_first_img,
            'meeting_title_second'            =>   $request->meeting_title_second,
            'meeting_second_date'            =>   $request->meeting_second_date,
            'meeting_second_description'            =>   $request->meeting_second_description,

            'meeting_second_img'            =>   $request->meeting_second_img,
            'bride_fathar_full_name'            =>   $request->bride_fathar_full_name,
            'bride_fathar_img'            =>   $request->bride_fathar_img,

            'bride_mother_full_name'            =>   $request->bride_mother_full_name,
            'bride_mother_img'            =>   $request->bride_mother_img,
            'bride_cousin_first_name'            =>   $request->bride_cousin_first_name,

            'bride_cousin_second_name'            =>   $request->bride_cousin_second_name,
            'bride_cousin_third_name'            =>   $request->bride_cousin_third_name,
            'bride_cousin_fourth_name'            =>   $request->bride_cousin_fourth_name,

            'bride_cousin_fifth_name'            =>   $request->bride_cousin_fifth_name,

            'bride_cousin_first_img'            =>   $bride_cousin_first_img,
            'bride_cousin_second_img'            =>   $bride_cousin_second_img,
            'bride_cousin_third_img'            =>   $bride_cousin_third_img,
            'bride_cousin_fourth_img'            =>   $bride_cousin_fourth_img,
            'bride_cousin_fifth_img'            =>   $bride_cousin_fifth_img,

            'prewedding_img_1'            =>   $prewedding_img_1,
            'prewedding_img_2'            =>   $prewedding_img_2,
            'prewedding_img_3'            =>   $prewedding_img_3,
            'prewedding_img_4'            =>   $prewedding_img_4,
            'prewedding_img_5'            =>   $prewedding_img_5,
            'prewedding_img_6'            =>   $prewedding_img_6,
            'prewedding_img_7'            =>   $prewedding_img_7,
            'prewedding_img_8'            =>   $prewedding_img_8,
            'prewedding_video_link'            => $request->prewedding_video_link,
            'haldi_address'            =>   $request->haldi_address,
            'haldi_date'            =>   $request->haldi_date,
            'wedding_date'            =>   $request->wedding_date,
            'add_start_date'            =>   $request->add_start_date,
            'add_end_date'            =>   $request->add_end_date,
            'wedding_address'            =>   $request->wedding_address,
            'wedding_address'            =>   $request->wedding_address,
            'google_map_link'            =>   $request->google_map_link,
            'status'            =>   'Inactive',
        );

        $reult = WeddingInfo::create($form_data);
        return redirect('addWeddingInfo')->with('success', 'Data Added successfully.');
    }
}
