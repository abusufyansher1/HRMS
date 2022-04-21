@extends('layouts.admin_layout')
@section('title','Clients')


@section('mainbody')
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
           <div class="col-12">
           
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">List of clients</h3>
                <button class='float-right btn btn-info btn-sm'>Add client</button>
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
                    @foreach($clients as $crow)
                    <tr>
                      <td>{{++$sn}}</td><td>{{$crow->company}}</td><td>{{$crow->address}}</td><td>{{$crow->phone}}</td>
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