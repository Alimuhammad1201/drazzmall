@extends('admin.layout.master');
@section('page-title')
    View Plan
@endsection
@section('main-content')
 <section class="content">
                <!-- /.row -->
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">
                            <a class="btn btn-danger btn-xm"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-danger btn-xm"><i class="fa fa-eye-slash"></i></a>
                            <a class="btn btn-danger btn-xm"><i class="fa fa-trash"></i></a>
                            <a href="/admin/plan/create/" class="btn btn-default btn-xm"><i class="fa fa-plus"></i></a>
                        </h3>
                        <div class="box-tools">
                            <form action="/admin/plan" method="get">
                                <div class="input-group input-group-sm" style="width: 250px;">
                                    <input type="text" name="s" value="{{ request()->get('s') ? request()->get('s') : null }}" class="form-control pull-right" placeholder="Search">
                                    <div class="input-group-btn">
                                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                    </form>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table class="table table-bordered">
                            <thead style="background-color: #F8F8F8;">
                                <tr>
                                    <th width="4%"><input type="checkbox" name="" id="checkAll"></th>
                                    <th width="20%">Plan Type</th>
                                    <th width="20%">Daily Earning</th>
                                    <th width="20%">Plan Image</th>
                                    <th width="10%">Status</th>
                                    <th width="10%">Manage</th>
                                </tr>
                            </thead>
                            @foreach($plans as $plan)
                            <tr>
                                <td><input type="checkbox" name="" id="" class="checkSingle"></td>
                                <td>{{ $plan->plan_type }}</td>
                                <td>{{ $plan->daily_earning }}</td>
                                <td>
                                       @if($plan->plan_img == 'No img found')
                                        <img src="/admin/assets//no-img.jpg" width="80" height="80" class="img-thumbnail" alt="No image found">
                                       @else
                                        <img src="/uploads/{{ $plan->plan_img }}" width="80" height="80" class="img-thumbnail" alt="{{ $plan->plan_type }}">
                                       @endif
                                  </form>
                                </td>
                                <td>
                                   <form method="POST" action="/admin/plan/{{ $plan->id
                                      }}/status">
                                    @csrf
                                    @method('put')
                                        @if($plan->status == 'DEACTIVE')
                                        <button class="btn btn-danger btn-sm"><i class="fa fa-thumbs-down"></i></button>
                                        @else
                                        <button class="btn btn-info btn-sm"><i class="fa fa-thumbs-up"></i></button>
                                        @endif
                                    </form>
                                </td>
                                <td>
                                 <form method="POST" action="/admin/plan/{{ $plan->id }}" >
                                    @csrf
                                    @method('delete')
                                    <a href="/admin/plan/edit/{{ $plan->id }}" class="btn btn-info btn-flat btn-sm"> <i class="fa fa-edit"></i></a>
                                    <button class="btn btn-danger btn-flat btn-sm" onclick="return confirm('Are You Paka You Want To Delete Thiss')"> <i class="fa fa-trash-o"></i></button>
                                </form>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer clearfix">
                        <div class="row">
                            <div class="col-sm-6">
                                <span style="display:block;font-size:15px;line-height:34px;margin:20px 0;">
                           Showing {{($plans->currentpage()-1)*$plans->perpage()+1}} to {{$plans->currentpage()*$plans->perpage()}}
    of  {{$plans->total()}} entrie
                        </span>
                            </div>
                            <div class="col-sm-6 text-right">
                                <ul class="pagination">
                                    <li class="paginate_button previous"><a href="#" >Previous</a></li>
                                    <li class="paginate_button active"><a href="#" >1</a></li>
                                    <li class="paginate_button "><a href="#">2</a></li>
                                    <li class="paginate_button "><a href="#" >3</a></li>
                                    <li class="paginate_button "><a href="#">4</a></li>
                                    <li class="paginate_button "><a href="#">5</a></li>
                                    <li class="paginate_button "><a href="#">6</a></li>
                                    <li class="paginate_button next"><a href="#" >Next</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
        </div>
        </section>
@endsection

