<?php

namespace App\Http\Controllers;

use App\Models\Course_App;
use App\Models\Course;
use Illuminate\Http\Request;


class CourseAppController extends Controller
{
    // applicant kursus kahwin dashboard
    public function index()
    {
        //$mreg = MRegistration::with('user')->get() , , compact('mreg');

        $datas = Course_App::with('course')->paginate(15);
        return view('manageMCourse.statusApplication', compact('datas'));
    }

    //return register page
    public function createApp()
    {
        //array
        $courses = Course::All();
        // $courseApp = Course_App::All();
        return view('manageMCourse.courseRegisteration', compact('courses'));
    }

    //store function
    public function storeApp(Request $request)
    {
        // dd($request->all());
        $CPCount = Course_App::count();
        $request->merge([
            'user_id' => auth()->user()->id,
            'couApp_approveStatus' => "Draft",
            'couApp_attendance' => "Pending",
            'couApp_noApp' => 'CP' . date("Y") . sprintf("%'.05d\n", $CPCount + 1),
        ]);
        Course_App::create($request->all());
        return redirect()->route('manageMCourse.index');
    }

    //return page edit app
    public function editApp($courseApp)
    {
        $courses = Course::all();
        $data = Course_App::with('course')->find($courseApp);
        return view('manageMCourse.editApplication', compact('data', 'courses'));
    }

    //update application course
    public function updateApp(Request $request, $courseApp)
    {
        $data = Course_App::find($courseApp);
        $data->update($request->all());
        return redirect()->route('manageMCourse.index');
    }


    //return page view/submit status
    public function showApp($courseApp)
    {
        $data = Course_App::with('course')->find($courseApp);
        // dd($data);

        return view('manageMCourse.viewApplication', compact('data'));
    }

    //change status from draft to hantar
    public function updateAppStatus(Request $request, $courseApp)
    {
        $data = Course_App::find($courseApp);
        if ($data) {
            $data->couApp_approveStatus = $request->couApp_approveStatus;
            if ($request->couApp_approveStatus == "Draft") {
                $data->couApp_approveStatus == "Hantar";
            }
            $data->save();
        }
        return redirect()->route('manageMCourse.index', compact('data'));
    }

    //delete kursus kahwin
    public function destroyApp($courseApp)
    {
        Course_App::find($courseApp)->delete();
        return redirect()->route('manageMCourse.index');
    }

    //return page view/ list document
    public function showDoc($courseApp)
    {
        $data = Course_App::with('course')->find($courseApp);
        // dd($data);

        return view('manageMCourse.documentList', compact('data'));
    }
    public function showDocTab()
    {
        return view('manageMCourse.documentList');
    }

    //return  page course slip 
    public function showSlip($courseApp)
    {
        $data = Course_App::with('course')->find($courseApp);

        return view('manageMCourse.printSlip', compact('data'));
    }

    //show page certificate 
    public function showCert($courseApp)
    {
        $data = Course_App::with('course')->find($courseApp);

        return view('manageMCourse.printCert', compact('data'));
    }



    //return page staff
    public function indexStaff()
    {
        $courses = Course::All();
        $datas = Course_App::with('course')->paginate(15);
        return view('manageMCourse.searchListStaff', compact('datas','courses'));
    }

    //retrun page view applicant course form
    public function showAppStaff($courseApp)
    {
        $data = Course_App::with('course')->find($courseApp);

        return view('manageMCourse.viewAppStaff', compact('data'));
    }

    // public function showList($courseApp)
    // {
    //     $request->merge([
    //         'couApp_approveStatus' => "Draft"
    //     ]);
        
    //     $data = Course_App::with('course')->find($courseApp);
    //     // dd($data);

    //     return view('manageMCourse.viewApplication', compact('data'));
    // }



    public function createRegStaff(Course_App $courseApp)
    {
        $courses = Course::All();
        // $courseApp = Course_App::All();
        return view('manageMCourse.registerApplicant', compact('courses'));
    }

    public function storeRegStaff(Request $request)
    {
        $CPCount = Course_App::count();
        $request->merge([
            'user_id' => auth()->user()->id,
            'couApp_approveStatus' => "Untuk D",
            'couApp_attendance' => "Pending",
            'couApp_noApp' => 'CP' . date("Y") . sprintf("%'.05d\n", $CPCount + 1),
        ]);
        Course_App::create($request->all());
        return redirect()->route('manageMCourse.indexStaff');
    }




    //return staff page edit app
    public function editAppStaff($courseApp)
    {
        $courses = Course::all();
        $data = Course_App::with('course')->find($courseApp);
        return view('manageMCourse.editAppStaff', compact('data', 'courses'));
    }


    //update application course staff
    public function updateAppStaff(Request $request, $courseApp)
    {
        $data = Course_App::find($courseApp);
        $data->update($request->all());
        return redirect()->route('manageMCourse.indexStaff');
    }

    //delete kursus kahwin staff
    public function destroyAppStaff($courseApp)
    {
        Course_App::find($courseApp)->delete();
        return redirect()->route('manageMCourse.indexStaff');
    }

    //return page document List
    public function showDocStaff($courseApp)
    {
        $data = Course_App::with('course')->find($courseApp);
        // dd($data);

        return view('manageMCourse.documentListStaff', compact('data'));
    }
  

    //return  page course slip 
    public function showSlipStaff($courseApp)
    {
        $data = Course_App::with('course')->find($courseApp);

        return view('manageMCourse.printSlipStaff', compact('data'));
    }

    //show page certificate 
    public function showCertStaff($courseApp)
    {
        $data = Course_App::with('course')->find($courseApp);

        return view('manageMCourse.printCertStaff', compact('data'));
    }


    //edit function
    
    public function editPostpone(Course_App $courseApp)
    {
        return view('manageMCourse.postponeCourse');
    }

    //destroy function
    // public function destroyApp()
    // {
    // }



    public function getLocDistrict()
    {
        $loc = Course::all();

        return $loc;
    }
    public function getAddress(Request $request)
    {
        $address = Course::table('courses')
            ->where('cou_id', $request->cou_locDistrict)
            ->get();

        if (count($address) > 0) {
            return response()->json($address);
        }
    }

    public function getDate(Request $request)
    {
        $date = Course::table('courses')
            ->where('cou_id', $request->cou_adress)
            ->get();

        if (count($date) > 0) {
            return response()->json($date);
        }
    }
}