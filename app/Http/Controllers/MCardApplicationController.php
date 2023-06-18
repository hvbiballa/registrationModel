<?php

namespace App\Http\Controllers;

use App\Models\MCard;
use App\Http\Requests\StoreMCard_ApplicationRequest;
use App\Http\Requests\UpdateMCard_ApplicationRequest;
use App\Models\ApplicantDetail;
use App\Models\MRegistration;
use Illuminate\Http\Request;

class MCardApplicationController extends Controller
{
    /**
     * Index page of Applicant.
     */
    public function index()
    {
        $datas = MCard::where('user_id', auth()->user()->id)->paginate(10);
        return view('manageMCard.viewMCardApplicant', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = MRegistration::where('user_id', auth()->user()->id)->first();
        return view('manageMCard.cardAppApplicant', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $applicant = ApplicantDetail::find($request->input('applicant_id'));
        $spouse = ApplicantDetail::find($request->input('spouse_id'));
        $mregistration = MRegistration::find($request->input('mregistration_id'));

        $destinationPath = 'uploads';
        if ($request->hasFile('mcard_ApplicantPhoto')) {
            $receiptFile = $request->file('mcard_ApplicantPhoto');
            $receiptPath = $receiptFile->getClientOriginalName();
            $receiptFile->move($destinationPath, $receiptPath);
        }

        if ($request->hasFile('mcard_SpousePhoto')) {
            $receiptFile1 = $request->file('mcard_SpousePhoto');
            $receiptPath1 = $receiptFile1->getClientOriginalName();
            $receiptFile1->move($destinationPath, $receiptPath1);
        }

        if ($request->hasFile('mcard_receipt')) {
            $receiptFile2 = $request->file('mcard_receipt');
            $receiptPath2 = $receiptFile2->getClientOriginalName();
            $receiptFile2->move($destinationPath, $receiptPath2);
        }

        $MCardCount = MCard::count();

        $request->merge([
            'user_id' => auth()->user()->id,
            'applicant_id' => $applicant->id,
            'spouse_id' => $spouse->id,
            'mregistration_id' => $mregistration->id,
            'mcard_noApp' => 'MC' . date("Y") . sprintf("%'.05d\n", $MCardCount + 1),
            'mcard_ApplicantPhoto' => $receiptPath ?? "",
            'mcard_receipt' => $receiptPath2 ?? "",
            'mcard_SpousePhoto' => $receiptPath1 ?? "",
            'mcard_status' => "Draft"
        ]);

        MCard::create($request->all());

        return redirect()->route('manageMCard.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($mCard)
    {
        $data = MCard::with('applicant', 'spouse')->find($mCard);
        return view('manageMCard.editCardApplicant', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $mcard)
    {
        $data = MCard::find($mcard);
        $data->update($request->all());
        $data->applicant->update($request->applicant);
        $data->spouse->update($request->spouse);
        return redirect()->route('manageMCard.index');
    }

    public function showApp()
    {
        $data = MCard::where('user_id', auth()->user()->id)->first();
        return view('manageMCard.viewAppApplicant', compact('data'));
    }

    public function updateStatus($mcard)
    {
        $data = MCard::find($mcard);

        if ($data->mcard_status == "Draft") {
            $data->mcard_status = "Untuk Diluluskan";
            $data->save();
        }

        return redirect()->route('manageMCard.index');
    }

    public function showPrint()
    {
        $data = MCard::where('user_id', auth()->user()->id)->first();
        return view('manageMCard.printAppApplicant', compact('data'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($mCard)
    {
        MCard::find($mCard)->delete();
        return redirect()->route('manageMCard.index');
    }



    /* STAFFF */

    public function indexStaff()
    {
        $datas = MCard::all();
        return view('manageMCard.viewMCardStaff', compact('datas'));
    }

    public function showAppStaff($mcard)
    {
        $data = MCard::find($mcard);
        return view('manageMCard.viewAppStaff', compact('data'));
    }

    public function showCardStaff($mcard)
    {
        $data = MCard::find($mcard);
        return view('manageMCard.viewCardStaff', compact('data'));
    }

    public function updateCetak($mcard, Request $request)
    {
        $data = MCard::find($mcard);
        $data->mcard_printStatus = $request->input('mcard_printStatus');
        $data->save();

        return redirect()->route('manageMCard.indexStaff');
    }


    public function editStatus($mcard)
    {
        $data = MCard::with('applicant', 'spouse')->find($mcard);
        return view('manageMCard.editStatusStaff', compact('data'));
    }

    public function updateStatusApp($mcard, Request $request)
    {
        $data = MCard::find($mcard);
        if ($request->input('mcard_terima') == '1') {
        if ($data->mcard_status == "Untuk Diluluskan") {
            $data->mcard_status = "Lulus";
            $data->mcard_dateApproval = $request->input('mcard_dateApproval');
            $data->save();
        }
    }

        return redirect()->route('manageMCard.indexStaff');
    }
}
