<?php

namespace App\Http\Controllers\Companies;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CompanyCreateRequest;

use App\Models\Category;
use App\Models\Company;
use App\Models\City;

class CompaniesController extends Controller
{
    
    public function index()
    {
         $companies = Company::all();
         $categories =  Category::latest()
                           ->orderBy('title','asc')
                           ->get();
         return view('companies.index',compact('companies', 'categories'));
    }

    
    public function create()
    {
        $categories = Category::orderBy('title','asc')->get();
        $cities =  City::orderBy('name','asc')->get();

        return view('companies.create', compact(['categories','cities']));
    }


    public function store(CompanyCreateRequest $request)
    {
        //return $request->all();

         $company = new Company;
         $company->name = $request->input('name');
         $company->address = $request->input('address');
         $company->number = $request->input('number');
         $company->email = $request->input('email');
         $company->pib = $request->input('pib');
         $company->contact_person = $request->input('contact_person');
         $company->category_id = $request->input('category_id');
         $company->note = $request->input('note');
         $company->active = $request->input('active');
         $company->city_id = $request->input('city_id');
         $company->save();
    

        return redirect('companies')->with('status', 'Uspesno dodali novog saradnika  '.$company->name.'!');
       
    }

    public function show(Company $company)
    {    



          return view('companies.show',compact('company'));
    }


    public function edit($id)
    {
        $company = Company::find($id);
        $categories = Category::orderBy('title','asc')->get();
        $cities =  City::orderBy('name','asc')->get();
        return view('companies.edit', compact('company','categories','cities'));
    }

    
    public function update(CompanyCreateRequest $request, $id)
    {
        
         $company = Company::find($id);
         $company->name = $request->input('name');
         $company->address = $request->input('address');
         $company->number = $request->input('number');
         $company->email = $request->input('email');
         $company->pib = $request->input('pib');
         $company->contact_person = $request->input('contact_person');
         $company->category_id = $request->input('category_id');
         $company->note = $request->input('note');
         $company->active = $request->input('active');
         $company->city_id = $request->input('city_id');
         $company->save();

        return redirect('companies/'.$company->id)->with('status', 'Uspesno dodali novog saradnika  '.$company->name.'!');
    

    }

    
    public function destroy($id)
    {
         $company = Company::find($id);
         $company->delete();
         return redirect('companies')->with('status', 'Uspesno izbrisali '.$company->name.'!');
    }
}
