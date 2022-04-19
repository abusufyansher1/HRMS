@extends('layouts.admin_layout')
@section('title','Dashboard')


@section('mainbody')
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3></h3>

                <p>Customers</p>
              </div>
              <div class="icon">
                <i class="fas fa-users"></i>
              </div>
              <a href="userslist/3" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><sup style="font-size: 20px"></sup></h3>

                <p>Vendors</p>
              </div>
              <div class="icon">
                <i class="fas fa-user-tag"></i>
              </div>
              <a href="userslist/2" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3></h3>

                <p>Product (Registered)</p>
              </div>
              <div class="icon">
                <i class="fas fa-cubes"></i>
              </div>
              <a href="products" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          
             <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>OUT</h3>

                <p>New Sale</p>
              </div>
              <div class="icon">
                <i class="fas fa-shopping-cart"></i>
              </div>
              
              <a  type="button"  data-toggle="modal" data-target="#myModal1" class="small-box-footer">Click here <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          
          
             <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>IN</h3>

                <p>New Purchase</p>
              </div>
              <div class="icon">
                <i class="fas fa-shopping-cart"></i>
              </div>
              <a  type="button"  data-toggle="modal" data-target="#myModal2" class="small-box-footer">Click here <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          
         
         <!-- ./col -->
        </div>
               <!-- /.row (main row) -->
        <div class='row'>
            <div class='col-lg-12'>
                <div id="barchart_material" style="width: 900px; height: 500px;"></div>
            </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  
    @endsection
  