@extends('admin.layout.master');
@section('page-title')
    Edit Plan
@endsection
@section('main-content')
<section class="content">

      <!-- SELECT2 EXAMPLE -->
      <!-- form start -->
       <form name="formEdit" id="formEdit" method="POST" enctype="multipart/form-data" action="/admin/plan/{{ $plan->id }}/">
    @csrf
    @method('put')
      <div class="box box-primary">
        <!-- /.box-header -->
        <div class="box-body">
          <!-- row start -->
          <div class="row"> 
                <div class="col-xs-6">
                  <div class="form-group">
                   <label for="plan_type">Plan Type <span class="text text-red">*</span></label>
                      <input type="text" name="plan_type" class="form-control" id="plan_type" placeholder="Plan Type" value="{{ $plan->plan_type }}">
                    </div>
                    <div class="form-group">
                      <label for="daily_earning">Daily Earning</label>
                      <input type="text" name="daily_earning" class="form-control" id="daily_earning" placeholder="Daily Earning" value="{{ $plan->daily_earning }}">
                    </div>
                     <div class="form-group">
                      <label for="total_product">Total Product</label>
                      <input type="text" name="total_product" class="form-control" id="total_product" placeholder="Total Product" value="{{ $plan->total_product }}">
                    </div>
                  </div>
                  <div class="col-xs-6">
                   <div class="form-group">
                      <label for="price">Price</label>
                      <input type="text" name="price" class="form-control" id="price" placeholder="Price" value="{{ $plan->price }}">
                    </div>
                     <div class="form-group">
                      <label for="perday_balance">Perday Balance</label>
                      <input type="text" name="perday_balance" class="form-control" id="perday_balance" placeholder="Perday Balance" value="{{ $plan->perday_balance }}">
                    </div>
                     <div class="form-group">
                      <label for="plan_img">Plan Image <span class="text text-red">*</span></label>
                      <input type="file" name="plan_img" class="form-control" id="plan_img">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
                  

        <!-- /.box-body -->
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-danger">Cancel</button>
          </div>
      </div>
      <!-- /.box -->
      </form>
      <!-- form end -->

    </section>
    
@endsection