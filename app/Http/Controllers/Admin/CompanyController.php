<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;
use File;
use Illuminate\Support\Facades\Gate;

class CompanyController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        abort_unless(Gate::allows('View Company Details'), 403);

        $company = Company::latest()->first();
        createLog('viewed company details'); // activity log

        return view('admin.company.index', compact('company'));
    }

    public function update(Request $request, Company $company)
    {
        abort_unless(Gate::allows('Edit Company Details'), 403);

        $input = $request->except('logo');
        $logo = $this->fileUpload($request, 'logo');
        if ($logo) {
            $this->removeFile($company->logo); //delete old file
            $input['logo'] = $logo;
        }
        $company->update($input);
        createLog('edited company details'); // activity log

        return redirect()->back()->with('message', 'Company Details Updated');
    }

    public function fileUpload(Request $request, $name)
    {
        $imageName = '';
        if ($image = $request->file($name)) {
            $destinationPath = public_path() . '/images/';
            $imageName = date('YmdHis') . $name . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $image = $imageName;
        }
        return $imageName;
    }

    public function removeFile($file)
    {
        $path = public_path() . '/images/' . $file;
        if (File::exists($path)) {
            File::delete($path);
        }
    }
}
