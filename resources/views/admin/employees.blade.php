@extends('layouts.admin_layout')
@section('title','Employees')


@section('mainbody')
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
           <div class="col-12">
           
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">List of employees</h3>
                <button class='float-right btn btn-info btn-sm'>Add employee</button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-sm">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Company</th>
                    <th>Address</th>
                    <th>Phone</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                    <?php $sn=0;?>
                    @foreach($users as $urow)
                    <tr>
                      <td>{{++$sn}}</td><td>{{$urow->username}}</td><td>{{$urow->address}}</td><td>{{$urow->phone}}</td>
                    </tr>
                     @endforeach
                  </tbody>
                  
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
         
         <!-- ./col -->
        </div>
               <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  
  @endsection