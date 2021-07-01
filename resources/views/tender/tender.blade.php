@extends("home")
@section("body")
<div class="col-10" style="margin:0 auto;">
    <div class="card card-primary">
        <div class="card-header">
        <h3 class="card-title">User Management table</h3>

        <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

            <div class="input-group-append">
                <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
            </div>
            </div>
        </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>Department ID</th>
                <th>Catagory ID</th>
                <th>Tender_id</th>
                <th>Location</th>
                <th>Description</th>
                <th>Security_price</th>
                <th>Budget_price</th>
                <th>date_time</th>
                <th>capacity</th>
                <th>experience</th>
                <th>turnover</th>
                <th>credit_line</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($tenders as $tender)
            <tr style="width:900px">
                <td>{{$tender->id}}</td>
                <td>{{$tender->department_id}}</td>
                <td>{{$tender->catagory_id}}</td>
                <td>{{$tender->Tender_id}}</td>
                <td>{{$tender->location}}</td>
                <td>{{$tender->description}}</td>
                <td>{{$tender->security_price}}</td>
                <td>{{$tender->budget_price}}</td>
                <td>{{$tender->date_time}}</td>
                <td>{{$tender->capacity}}</td>
                <td>{{$tender->experience}}</td>
                <td>{{$tender->turnover}}</td>
                <td>{{$tender->credit_line}}</td>
                <td> 
                <div class="clearfix">
                        <a style="float:left;margin-right:5px" href="{{route('tenderup.show',$tender->id)}}"class="btn btn-success"> edit </a>
                        <!-- <a style="float:left; margin-right:5px" href="#" class="btn btn-success">  </a> -->
                        <form style="float:left; margin-right:5px;" onsubmit="return confirm('Are you sure?')" action="{{route('tenderup.destroy',$tender->id)}}" method="POST" class="btn btn-danger btn-sm rounded-5" type="button"> 
                            @csrf 
                            @method("delete")                      
                        <input type="submit" name="btnsubmit" value="delete">
                        </form>
                    </div>


                
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
        </div>
    </div>
</div>
@endsection