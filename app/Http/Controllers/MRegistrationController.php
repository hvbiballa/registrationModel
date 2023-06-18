<?php

namespace App\Http\Controllers;

use App\Models\MRegistration;
use App\Models\ApplicantDetail;
use App\Models\MApplication;
use App\Models\Wali;
use App\Models\Witness;
use Illuminate\Http\Request;

class MRegistrationController extends Controller
{
    /**
     * Index page of Applicant
     */
    public function index()
    {
        $datas = MRegistration::where('user_id', auth()->user()->id)->paginate(10);
        return view('manageMRegistration.viewMRegApplicant', compact('datas'));
    }

    /**
     * Show Applicant Info before go to mreg form
     */
    public function show()
    {
        $data = MApplication::where('user_id', auth()->user()->id)->latest()->first();
        $datas = MRegistration::where('user_id', auth()->user()->id)->latest()->first();
        return view('manageMRegistration.infoApplicant', compact('data', 'datas'));
    }

    /**
     * Show create marriage registration page
     */
    public function create(Request $request)
    {
        $data = collect()->first();
        $selectedCategory = ($request->category) ? $request->category : '2';
        if ($selectedCategory == '1') {
            $data = MApplication::where('user_id', auth()->user()->id)->latest()->first();
        }

        return view('manageMRegistration.createAppApplicant', compact('data', 'selectedCategory'));
    }

    /**
     * Store marriage registration applicant
     */
    public function store(Request $request)
    {
        $category = $request->input('mreg_category');

        if ($category == '1') {
            $applicant = ApplicantDetail::find($request->input('applicant_id'));
            $spouse = ApplicantDetail::find($request->input('spouse_id'));
            $wali = Wali::find($request->input('wali_id'));
            $witness = Witness::find($request->input('witness_id'));
        } else {
            $applicant = ApplicantDetail::create($request->applicant);
            $spouse = ApplicantDetail::create($request->spouse);
            $wali = Wali::create($request->wali);
            $witness = Witness::create($request->witness);
        }

        $destinationPath = 'uploads';
        if ($request->hasFile('mreg_resit')) {
            $receiptFile = $request->file('mreg_resit');
            $receiptPath = $receiptFile->getClientOriginalName();
            $receiptFile->move($destinationPath, $receiptPath);
        }

        $MRegCount = MRegistration::count();

        $request->merge([
            'user_id' => auth()->user()->id,
            'applicant_id' => $applicant->id,
            'spouse_id' => $spouse->id,
            'wali_id' => $wali->id,
            'witness_id' => $witness->id,
            'mreg_noApp' => 'MR' . date("Y") . sprintf("%'.05d\n", $MRegCount + 1),
            'mreg_resit' => $receiptPath ?? "",
            'mreg_status' => "Draft"
        ]);

        MRegistration::create($request->all());

        return redirect()->route('manageMRegistration.index');
    }

    /**
     * Edit Registration Form
     */
    public function edit($mregistration)
    {
        $data = MRegistration::with('applicant', 'spouse', 'wali', 'witness')->find($mregistration);
        return view('manageMRegistration.editAppApplicant', compact('data'));
    }

    /**
     * Update the Marriage Registration Form
     */
    public function update(Request $request, $mregistration)
    {
        $data = MRegistration::find($mregistration);
        $data->update($request->all());
        $data->applicant->update($request->applicant);
        $data->spouse->update($request->spouse);
        $data->wali->update($request->wali);
        $data->witness->update($request->witness);
        return redirect()->route('manageMRegistration.index');
    }

    /**
     * Show Applicant Info for their Application
     */
    public function showApp()
    {
        $data = MRegistration::where('user_id', auth()->user()->id)->first();
        return view('manageMRegistration.viewAppApplicant', compact('data'));
    }

    //update status applicant
    public function updateStatus($mRegistration)
    {
        $data = MRegistration::find($mRegistration);

        if ($data->mreg_status == "Draft") {
            $data->mreg_status = "Untuk Diluluskan";
            $data->save();
        }

        return redirect()->route('manageMRegistration.index');
    }


    /**
     * Show Applicant Info for their Application and print
     */
    public function showPrint()
    {
        $data = MRegistration::where('user_id', auth()->user()->id)->first();
        return view('manageMRegistration.printAppApplicant', compact('data'));
    }

    /**
     * Show Applicant Info for their cert
     */
    public function showCert()
    {
        $data = MRegistration::where('user_id', auth()->user()->id)->first();
        return view('manageMRegistration.viewCertificateApplicant', compact('data'));
    }

    /**
     * Delete Data
     */
    public function destroy($mregistration)
    {
        MRegistration::find($mregistration)->delete();
        return redirect()->route('manageMRegistration.index');
    }

    /* STAFFF SECTION */
    /**
     * Show Staff Index
     */
    public function indexStaff()
    {
        $datas = MRegistration::all();
        return view('manageMRegistration.viewMRegStaff', compact('datas'));
    }

    /**
     * Show Staff View Applicant Form
     */
    public function showAppStaff($mRegistration)
    {
        $data = MRegistration::find($mRegistration);
        return view('manageMRegistration.viewAppStaff', compact('data'));
    }

    public function showCertStaff($mRegistration)
    {
        $data = MRegistration::find($mRegistration);
        return view('manageMRegistration.viewCertificateStaff', compact('data'));
    }

    public function updateCetak($mRegistration, Request $request)
    {
        $data = MRegistration::find($mRegistration);
        $data->mreg_printStatus = $request->input('mreg_printStatus');
        $data->save();

        return redirect()->route('manageMRegistration.indexStaff');
    }

    public function  printAppStaff($mRegistration)
    {
        $data = MRegistration::find($mRegistration);
        return view('manageMRegistration.printAppStaff', compact('data'));
    }

    public function editStatus($mRegistration)
    {
        $data = MRegistration::with('applicant', 'spouse', 'wali', 'witness')->find($mRegistration);
        return view('manageMRegistration.editStatusStaff', compact('data'));
    }

    public function updateStatusApp($mRegistration, Request $request)
    {
        $data = MRegistration::find($mRegistration);

        if ($request->input('mreg_statusApp') == '1') {
            if ($data->mreg_status == "Untuk Diluluskan") {
                $data->mreg_statusApp == 'Terima';
                $data->mreg_status = "Lulus";
                $data->mreg_dateStatus = $request->input('mreg_dateStatus');
                $data->save();
            }
        }

        return redirect()->route('manageMRegistration.indexStaff');
    }


    public function editApp($mRegistration)
    {
        $data = MRegistration::with('applicant', 'spouse', 'wali', 'witness')->find($mRegistration);
        return view('manageMRegistration.editMRegStaff', compact('data'));
    }

    public function updateApp(Request $request, $mregistration)
    {
        $data = MRegistration::find($mregistration);
        $data->update($request->all());
        $data->applicant->update($request->applicant);
        $data->spouse->update($request->spouse);
        $data->wali->update($request->wali);
        $data->witness->update($request->witness);
        return redirect()->route('manageMRegistration.indexStaff');
    }
}
