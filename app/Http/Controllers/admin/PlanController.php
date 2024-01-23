<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Plan;
use File;

class PlanController extends Controller
{
    public function index()
    {
        $searchTerm = request()->get('s');
           $plans = Plan::orWhere('plan_type', 'LIKE', "%$searchTerm%")->latest()->paginate(15);
        return view('admin.plan.index')->with(compact('plans'));
            
    }
     public function create()
    {
        return view('admin.plan.create_plan');
            
    }

    Public function store(Request $request)
    {
        $fileName = null;
        if (request()->hasFile('plan_img'));
        {
            $file = request()->file('plan_img');
            $fileName = md5($file->getClientOriginalName()) . time() . "." . $file->getClientOriginalExtension();
            $file->move('./uploads/', $fileName);
        }
      Plan::create([
        'plan_type' => request()->get('plan_type'),
        'daily_earning' => request()->get('daily_earning'),
        'total_product' => request()->get('total_product'),
        'price' => request()->get('price'),
        'perday_balance' => request()->get('perday_balance'),
        'plan_img' => $fileName,
        'status' => 'DEACTIVE',
    ]);
        return redirect()->to('/admin/plan');
        
   }


     public function edit($id)
    {
        $plan = Plan::find($id);
        return view('admin.plan.edit_plan')
          ->with(compact('plan'));
        
    }

    public function update(Request $request, $id)
    {
        $plan = Plan::find($id);


        $currentImage = $plan->plan_img;
         $fileName = null;
        if (request()->hasFile('plan_img'));
        {
            $file = request()->file('plan_img');
            $fileName = md5($file->getClientOriginalName()) . time() . "." . $file->getClientOriginalExtension();
            $file->move('./uploads/', $fileName);
        }
      Plan::create([
        'plan_type' => request()->get('plan_type'),
        'daily_earning' => request()->get('daily_earning'),
        'total_product' => request()->get('total_product'),
        'price' => request()->get('price'),
        'perday_balance' => request()->get('perday_balance'),
        'plan_img' => ($fileName) ? $fileName : $currentImage,
        'status' => 'DEACTIVE'
        
    ]);
      if ($fileName) {
            File::delete('./uploads/' . $currentImage);
        }
        return redirect()->to('/admin/plan');

    }

    public function destroy($id)
    {
        $plan = Plan::find($id);
        $currentImage = $plan->plan_img;
        $plan->delete();
        file::delete('./uploads/' . $currentImage);
        return redirect()->back();
    }

    public function status($id)
    {
        $plan = Plan::find($id);
             $newStatus = ($plan->status == 'DEACTIVE') ? 'ACTIVE' : 'DEACTIVE';
             $plan->update([
                'status' => $newStatus

            ]);
            return redirect()->back();
    }
}
