<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreComplaintRequest;
use App\Http\Requests\UpdateComplaintRequest;
use App\Models\Complaint;
use App\Models\computer;
use Maatwebsite\Excel\Facades\Excel;
use Symfony\Component\HttpFoundation\Request;
use App\Exports\ExportComplaint;
use Illuminate\Support\Facades\DB;


class ComplaintController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        // $search = $request->input('search');
        // $complaints = Complaint::when($search, function($query, $search){

        //     return $query->where('problem', 'like', '%'. $search . '%')
        //                  ->orWhere('content', 'like', '%' . $search . '%');
        // });
        $complaints = Complaint::all();


        return view('complaint.index', compact('complaints'));
        
    }

    /**
     * Show the form for creating a new resource.
     */


    public function create(Complaint $complaints)
    {
        //
        
        return view('complaint.create', compact('complaints'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreComplaintRequest $request)
    {
        //

        $complaint = new Complaint();
        $complaint->no = $request->no;
        $complaint->department = $request->department;
        $complaint->problem = $request->problem;
        $complaint->types_of_maintenance = $request->types_of_maintenance;
        $complaint->complaint_date = $request->complaint_date;
        $complaint->complaint_by = $request->complaint_by;
        $complaint->maintenance_require = $request->maintenance_require;
        $complaint->edp_maintenance_supervisor = $request->edp_maintenance_supervisor;
        $complaint->maintained_by = $request->maintained_by;
        $complaint->completed_at = $request->completed_at;
        $complaint->remark = $request->remark;
        $complaint->save();

        return redirect()->route('complaints.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Complaint $complaint)
    {
        //

        // return view('complain.show', compact('complaint')); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Complaint $complaint)
    {
        //
        return view('complaint.edit', compact('complaint'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateComplaintRequest $request, Complaint $complaint)
    {
        //
        // dd($request->all());

        $complaint->update([
            'no'  => $request->no,
            'department'  => $request->department,
            'problem'  => $request->problem,
            'types_of_maintenance'  => $request->types_of_maintenance,
            'complaint_date'  => $request->complaint_date,
            'complaint_by'  => $request->complaint_by,
            'maintenance_require'  => $request->maintenance_require,
            'edp_maintenance_supervisor'  => $request->edp_maintenance_supervisor,
            'maintained_by'  => $request->maintained_by,
            'completed_at'  => $request->completed_at,
            'remark'  => $request->remark,
        ]);

             
        return redirect()->route('complaints.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Complaint $complaint)
    {
        //

        $complaint->delete();
       
        
       
        return redirect()->route('complaints.index');
        
    }




    
}
