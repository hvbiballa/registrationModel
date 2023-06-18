<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MApplication;
use App\Http\Requests\MApplicationRequest;
use App\Http\Requests\UpdateMApplicationRequest;
use App\Models\ApplicantDetail;
use App\Models\Wali;
use App\Models\Witness;

class MApplicationController extends Controller
{
    public function index()
    {
        //$mreg = MRegistration::with('user')->get() , , compact('mreg');
        $datas = MApplication::all();
        return view('manageMRequest.statusRequest', compact('datas'));
    }

    //return page request form
    public function createRequestForm(Request $request)
    {
        $data = $request->category;
        return view('manageMRequest.regRequestApplication', compact('data'));
    }

    //store request form data
    public function store(Request $request)
    {
        $applicant = ApplicantDetail::create($request->applicant);
        $spouse = ApplicantDetail::create($request->spouse);
        $wali = Wali::create($request->wali);
        $witness = Witness::create($request->witness);

        $MAPPCount = MApplication::count();

        $request->merge([
            'user_id' => auth()->user()->id,
            'applicant_id' => $applicant->id,
            'spouse_id' => $spouse->id,
            'wali_id' => $wali->id,
            'witness_id' => $witness->id,
            'mapp_noApp' => 'MA' . date("Y") . sprintf("%'.05d\n", $MAPPCount + 1),
            'mapp_status' => "Draft"
        ]);

        MApplication::create($request->all());

        return redirect()->route('manageMRequest.statusRequest');
    }


    //return page borang permohonan
    public function showApp()
    {
        $data = MApplication::where('user_id', auth()->user()->id)->first();

        return view('manageMRequest.viewApplication', compact('data'));
    }

    //update status borang permohonan from draft to hantar
    public function updateStatus($mapplication)
    {
        $data = MApplication::find($mapplication);
        if ($data) {
            if ($data->mapp_status == "Draft") {
                $data->mapp_status = "Untuk Diluluskan";
                $data->save();
            }
        }
        return redirect()->route('manageMRequest.statusRequest');
    }

    //return page edit borang permohonan
    public function editApp($mapplication)
    {
        $data = MApplication::with('applicant', 'spouse', 'wali', 'witness')->find($mapplication);
        return view('manageMRequest.editApplication', compact('data'));
    }

    //save data edit borang permohonan
    public function update(Request $request, $mapplication)
    {
        $data = MApplication::find($mapplication);
        $data->update($request->all());
        $data->applicant->update($request->applicant);
        $data->spouse->update($request->spouse);
        $data->wali->update($request->wali);
        $data->witness->update($request->witness);
        return redirect()->route('manageMRequest.statusRequest');
    }

    //padam borang permohonan
    public function destroy($mapplication)
    {
        MApplication::find($mapplication)->delete();
        return redirect()->route('manageMRequest.statusRequest');
    }

    //return page edit borang HIV
    public function editHIV($mapplication)
    {
        $data = MApplication::with('applicant', 'spouse', 'wali', 'witness')->find($mapplication);
        return view('manageMRequest.editHIVForm', compact('data'));
    }

    //save data edit borang permohonan
    public function updateHIV(Request $request, $mapplication)
    {
        $data = MApplication::find($mapplication);
        $data->update($request->all());
        return redirect()->route('manageMRequest.statusRequest');
    }

    //view borang HIV
    public function showHIV()
    {

        $data = MApplication::where('user_id', auth()->user()->id)->first();

        return view('manageMRequest.viewHIVForm', compact('data'));
    }

    //edit borang wakalah
    public function editWakalah($mapplication)
    {
        $data = MApplication::with('applicant', 'spouse', 'wali', 'witness')->find($mapplication);
        return view('manageMRequest.editWakalahForm', compact('data'));
    }

    //view borang Wakalah
    public function showWakalah()
    {
        $data = MApplication::where('user_id', auth()->user()->id)->first();

        return view('manageMRequest.viewWakalahForm', compact('data'));
    }

    //save data edit borang permohonan
    public function updateWakalah(Request $request, $mapplication)
    {
        $data = MApplication::find($mapplication);
        $data->update($request->all());
        return redirect()->route('manageMRequest.statusRequest');
    }
    
    //print App
    public function showPrintApp($mapplication)
    {
        $data = MApplication::find($mapplication);
        // dd($data);

        return view('manageMRequest.printRequestApp', compact('data'));
    }

    //print hiv
    public function showPrintHIV($mapplication)
    {
        $data = MApplication::find($mapplication);
        // dd($data);

        return view('manageMRequest.printHIVForm', compact('data'));
    }
    //print wakalah
    public function showPrintWakalah($mapplication)
    {
        $data = MApplication::find($mapplication);
        // dd($data);

        return view('manageMRequest.printWakalahForm', compact('data'));
    }





    

//return page list
    public function indexStaff()
    {
        $datas = MApplication::All();
        return view('manageMRequest.searchListStaff', compact('datas'));
    }

    //return page view
    public function showAppStaff()
    {
        
        $datas = MApplication::All();
        return view('manageMRequest.viewAppStaff', compact('datas'));
    }


    //return page request form
    public function createRegStaff(Request $request)
    {
        $data = $request->category;
        return view('manageMRequest.registerApplicant',  compact('data'));
    }

    public function storeRegStaff(Request $request)
    {
        $applicant = ApplicantDetail::create($request->applicant);
        $spouse = ApplicantDetail::create($request->spouse);
        $wali = Wali::create($request->wali);
        $witness = Witness::create($request->witness);

        $MAPPCount = MApplication::count();

        $request->merge([
            'user_id' => auth()->user()->id,
            'applicant_id' => $applicant->id,
            'spouse_id' => $spouse->id,
            'wali_id' => $wali->id,
            'witness_id' => $witness->id,
            'mapp_noApp' => 'MA' . date("Y") . sprintf("%'.05d\n", $MAPPCount + 1),
            'mapp_status' => "Draft"
        ]);

        MApplication::create($request->all());

        return redirect()->route('manageMRequest.indexStaff');
    }


    //padam borang permohonan
    public function destroyStaff($mapplication)
    {
        MApplication::find($mapplication)->delete();
        return redirect()->route('manageMRequest.indexStaff');
    }


//return page edit
    public function editAppStaff($mapplication)
    {
        $data = MApplication::with('applicant', 'spouse', 'wali', 'witness')->find($mapplication);
        return view('manageMRequest.editAppStaff', compact('data'));
    }

    //save data edit borang permohonan
    public function updateStaff(Request $request, $mapplication)
    {
        $data = MApplication::find($mapplication);
        $data->update($request->all());
        $data->applicant->update($request->applicant);
        $data->spouse->update($request->spouse);
        $data->wali->update($request->wali);
        $data->witness->update($request->witness);
        return redirect()->route('manageMRequest.indexStaff');
    }

    //print App
    public function showDocStaff($mapplication)
    {
        $data = MApplication::find($mapplication);
        // dd($data);

        return view('manageMRequest.documentList', compact('data'));
    }

    //print App
    public function showPrintStaff($mapplication)
    {
        $data = MApplication::find($mapplication);
        // dd($data);

        return view('manageMRequest.printRequestAppStaff', compact('data'));
    }

    //print hiv
    public function showHIVStaff($mapplication)
    {
        $data = MApplication::find($mapplication);
        // dd($data);

        return view('manageMRequest.printHIVFormStaff', compact('data'));
    }
    //print wakalah
    public function showWakalahStaff($mapplication)
    {
        $data = MApplication::find($mapplication);
        // dd($data);

        return view('manageMRequest.printWakalahFormStaff', compact('data'));
    }
}
    
    
