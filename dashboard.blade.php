@extends ('AdminPage.admin')

@section('title')
    DashBoard MEDLAB
@endsection

@section('content')
 <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Records</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table id="datatable" class="table">
                    <thead class=" text-primary">
                      <th>Total Users</th>
                      <th>Total Applications</th>
                      <th>Status</th>
                      <th>Total Tests</th>
                      <th>A Button</th>

                    </thead>
                    <tbody>

                      <tr>

                        <td>
                            {{ $user->count()}}


                        </td>

                        <td>
                          {{-- {{$row->email}} --}} applicatopns from application tble
                        </td>
                        <td>
                         {{-- {{$row->phone}} --}} Webdite active
                        </td>
                        <td>
                            {{-- {{$row->phone}} --}} all tests from tests table
                           </td>
                        <td>
                        <form action="/user-delete/" method="post">
                          @csrf
                          {{ method_field('DELETE') }}
                         <button type="submit" class="btn btn-danger">Button</button>
                         </form>
                        </td>
                      </tr>
                      {{-- @endforeach --}}
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>




          <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Three charts -->
            <!-- ============================================================== -->
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-12">
                    <div class="white-box analytics-info">
                        <h3 class="box-title">Total Medicine Purchase</h3>
                        <ul class="list-inline two-part d-flex align-items-center mb-0">
                            <li>
                                <div id="sparklinedash"><canvas width="67" height="30"
                                        style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                                </div>
                            </li>
                            <li class="ms-auto"><span class="counter text-success">659</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="white-box analytics-info">
                        <h3 class="box-title">Total Medical Order Test</h3>
                        <ul class="list-inline two-part d-flex align-items-center mb-0">
                            <li>
                                <div id="sparklinedash2"><canvas width="67" height="30"
                                        style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                                </div>
                            </li>
                            <li class="ms-auto"><span class="counter text-purple">869</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="white-box analytics-info">
                        <h3 class="box-title">Total Donation</h3>
                        <ul class="list-inline two-part d-flex align-items-center mb-0">
                            <li>
                                <div id="sparklinedash3"><canvas width="67" height="30"
                                        style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                                </div>
                            </li>
                            <li class="ms-auto"><span class="counter text-info">911</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- PRODUCTS YEARLY SALES -->
            <!-- ============================================================== -->
            {{-- <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="white-box">
                        <h3 class="box-title">Yearly Statistics</h3>
                        <div class="d-md-flex">
                            <ul class="list-inline d-flex ms-auto">
                                <li class="ps-3">
                                    <h5><i class="fa fa-circle me-1 text-info"></i>Medicine</h5>
                                </li>
                                <li class="ps-3">
                                    <h5><i class="fa fa-circle me-1 text-inverse"></i>Medical Test</h5>
                                </li>
                            </ul>
                        </div>
                        <div id="ct-visits" style="height: 405px;">
                            <div class="chartist-tooltip" style="top: -17px; left: -12px;"><span
                                    class="chartist-tooltip-value">6</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <!-- ============================================================== -->
            <!-- RECENT SALES -->
            <!-- ============================================================== -->
            {{-- <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12">
                    <div class="white-box">
                        <div class="d-md-flex mb-3">
                            <h3 class="box-title mb-0">Recent sales</h3>
                            <div class="col-md-3 col-sm-4 col-xs-6 ms-auto">
                                <select class="form-select shadow-none row border-top">
                                    <option>March 2021</option>
                                    <option>April 2021</option>
                                    <option>May 2021</option>
                                    <option>June 2021</option>
                                    <option>July 2021</option>
                                </select>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table no-wrap">
                                <thead>
                                    <tr>
                                        <th class="border-top-0">#</th>
                                        <th class="border-top-0">Name</th>
                                        <th class="border-top-0">Status</th>
                                        <th class="border-top-0">Date</th>
                                        <th class="border-top-0">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td class="txt-oflo">Elite admin</td>
                                        <td>SALE</td>
                                        <td class="txt-oflo">April 18, 2021</td>
                                        <td><span class="text-success">$24</span></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td class="txt-oflo">Real Homes WP Theme</td>
                                        <td>EXTENDED</td>
                                        <td class="txt-oflo">April 19, 2021</td>
                                        <td><span class="text-info">$1250</span></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td class="txt-oflo">Ample Admin</td>
                                        <td>EXTENDED</td>
                                        <td class="txt-oflo">April 19, 2021</td>
                                        <td><span class="text-info">$1250</span></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td class="txt-oflo">Medical Pro WP Theme</td>
                                        <td>TAX</td>
                                        <td class="txt-oflo">April 20, 2021</td>
                                        <td><span class="text-danger">-$24</span></td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td class="txt-oflo">Hosting press html</td>
                                        <td>SALE</td>
                                        <td class="txt-oflo">April 21, 2021</td>
                                        <td><span class="text-success">$24</span></td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td class="txt-oflo">Digital Agency PSD</td>
                                        <td>SALE</td>
                                        <td class="txt-oflo">April 23, 2021</td>
                                        <td><span class="text-danger">-$14</span></td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td class="txt-oflo">Helping Hands WP Theme</td>
                                        <td>MEMBER</td>
                                        <td class="txt-oflo">April 22, 2021</td>
                                        <td><span class="text-success">$64</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div> --}}
            <!-- ============================================================== -->
            <!-- Recent Comments -->
            <!-- ============================================================== -->
            <div class="row">
                <!-- .col -->
                <div class="col-md-12 col-lg-8 col-sm-12">
                    <div class="card white-box p-0">
                        <div class="card-body">
                            <h3 class="box-title mb-0">Recent Comments</h3>
                        </div>
                        <div class="comment-widgets">
                            <!-- Comment Row -->
                            <div class="d-flex flex-row comment-row p-3 mt-0">
                                <div class="p-2"><img src="{{ url('assets/plugins/images/users/ritesh.jpg')}}" alt="user" width="50" class="rounded-circle"></div>
                                <div class="comment-text ps-2 ps-md-3 w-100">
                                    <h5 class="font-medium">Abrar Bhuiyan</h5>
                                    <span class="mb-3 d-block">I am looking for RH-ve blood and couldn't find anywhere, If theres any other source where i can look for, please someone let me know </span>
                                    <div class="comment-footer d-md-flex align-items-center">
                                         <span class="badge bg-primary rounded">Pending</span>

                                        <div class="text-muted fs-2 ms-auto mt-2 mt-md-0">Nov 14, 2022</div>
                                    </div>
                                </div>
                            </div>
                            <!-- Comment Row -->
                            <div class="d-flex flex-row comment-row p-3">
                                <div class="p-2"><img src="{{ url('assets/plugins/images/users/ritesh.jpg')}}" alt="user" width="50" class="rounded-circle"></div>
                                <div class="comment-text ps-2 ps-md-3 active w-100">
                                    <h5 class="font-medium">Rabeya Noor</h5>
                                    <span class="mb-3 d-block">The service from here is very convenient and i highly recommend everyone to purchase health care from here </span>
                                    <div class="comment-footer d-md-flex align-items-center">

                                        <span class="badge bg-success rounded">Approved</span>

                                        <div class="text-muted fs-2 ms-auto mt-2 mt-md-0">Nov 17, 2022</div>
                                    </div>
                                </div>
                            </div>
                            <!-- Comment Row -->
                            <div class="d-flex flex-row comment-row p-3">
                                <div class="p-2"><img src="{{ url('assets/plugins/images/users/ritesh.jpg')}}" alt="user" width="50" class="rounded-circle"></div>
                                <div class="comment-text ps-2 ps-md-3 w-100">
                                    <h5 class="font-medium">Sanjida Islam</h5>
                                    <span class="mb-3 d-block">Looking for a fund raiser Organization  as i need some fund donation for my father's treatment. I request the authority to find me a suitable fund </span>
                                    <div class="comment-footer d-md-flex align-items-center">

                                        <span class="badge rounded bg-danger">Rejected</span>

                                        <div class="text-muted fs-2 ms-auto mt-2 mt-md-0">Dec  11, 2022</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="card white-box p-0">
                        <div class="card-heading">
                            <h3 class="box-title mb-0">Chat Listing</h3>
                        </div>
                        <div class="card-body">
                            <ul class="chatonline">
                                <li>
                                    <div class="call-chat">
                                        <button class="btn btn-success text-white btn-circle btn" type="button">
                                            <i class="fas fa-phone"></i>
                                        </button>
                                        <button class="btn btn-info btn-circle btn" type="button">
                                            <i class="far fa-comments text-white"></i>
                                        </button>
                                    </div>
                                    <a href="javascript:void(0)" class="d-flex align-items-center"><img
                                            src="plugins/images/users/varun.jpg" alt="user-img" class="img-circle">
                                        <div class="ms-2">
                                            <span class="text-dark">Nafiza Akter<small
                                                    class="d-block text-success d-block">online</small></span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <div class="call-chat">
                                        <button class="btn btn-success text-white btn-circle btn" type="button">
                                            <i class="fas fa-phone"></i>
                                        </button>
                                        <button class="btn btn-info btn-circle btn" type="button">
                                            <i class="far fa-comments text-white"></i>
                                        </button>
                                    </div>
                                    <a href="javascript:void(0)" class="d-flex align-items-center"><img
                                            src="plugins/images/users/genu.jpg" alt="user-img" class="img-circle">
                                        <div class="ms-2">
                                            <span class="text-dark">Jennifer Islam<small class="d-block text-warning">Away</small></span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <div class="call-chat">
                                        <button class="btn btn-success text-white btn-circle btn" type="button">
                                            <i class="fas fa-phone"></i>
                                        </button>
                                        <button class="btn btn-info btn-circle btn" type="button">
                                            <i class="far fa-comments text-white"></i>
                                        </button>
                                    </div>
                                    <a href="javascript:void(0)" class="d-flex align-items-center"><img
                                            src="plugins/images/users/ritesh.jpg" alt="user-img" class="img-circle">
                                        <div class="ms-2">
                                            <span class="text-dark">Ashraf Khan <small class="d-block text-danger">Busy</small></span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <div class="call-chat">
                                        <button class="btn btn-success text-white btn-circle btn" type="button">
                                            <i class="fas fa-phone"></i>
                                        </button>
                                        <button class="btn btn-info btn-circle btn" type="button">
                                            <i class="far fa-comments text-white"></i>
                                        </button>
                                    </div>
                                    <a href="javascript:void(0)" class="d-flex align-items-center"><img
                                            src="plugins/images/users/arijit.jpg" alt="user-img" class="img-circle">
                                        <div class="ms-2">
                                            <span class="text-dark">Rihan Ahmed<small class="d-block text-muted">Offline</small></span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <div class="call-chat">
                                        <button class="btn btn-success text-white btn-circle btn" type="button">
                                            <i class="fas fa-phone"></i>
                                        </button>
                                        <button class="btn btn-info btn-circle btn" type="button">
                                            <i class="far fa-comments text-white"></i>
                                        </button>
                                    </div>
                                    <a href="javascript:void(0)" class="d-flex align-items-center"><img
                                            src="plugins/images/users/govinda.jpg" alt="user-img"
                                            class="img-circle">
                                        <div class="ms-2">
                                            <span class="text-dark">Anjum Ara <small class="d-block text-success">online</small></span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <div class="call-chat">
                                        <button class="btn btn-success text-white btn-circle btn" type="button">
                                            <i class="fas fa-phone"></i>
                                        </button>
                                        <button class="btn btn-info btn-circle btn" type="button">
                                            <i class="far fa-comments text-white"></i>
                                        </button>
                                    </div>
                                    <a href="javascript:void(0)" class="d-flex align-items-center"><img
                                            src="plugins/images/users/hritik.jpg" alt="user-img" class="img-circle">
                                        <div class="ms-2">
                                            <span class="text-dark">Kulsum kaisar<small class="d-block text-success">online</small></span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /.col -->
            </div>
        </div>

    @endsection

@section('scripts')
@section('scripts')
 <script>
  $(document).ready( function () {
    $('#datatable').DataTable({
      stateSave: true,
    });
    } );
 </script>
@endsection

@section('scripts')
<script type="text/javascript">
  $(document).ready(function()
  {
  setTimeout(function()
  {
    $("div.alert").remove();
  }, 5000);
  });
  </script>
 @endsection
