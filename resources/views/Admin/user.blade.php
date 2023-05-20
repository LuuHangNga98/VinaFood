@extends('layout_admin')
@section('main')
        <div class="">
          <div class="clearfix"></div>
          <div class="row">
            <div class="col-md-12 col-sm-12 ">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Quản lý User</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Settings 1</a>
                        <a class="dropdown-item" href="#">Settings 2</a>
                      </div>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="button">
                  <a href="http://127.0.0.1:8000/add-users" class="btn-color" type="button">Thêm User</a>
                </div>

                <div class="x_content">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="card-box table-responsive">


                        <table class="table table-striped table-bordered">
                          <thead>

                            <tr>
                              <th>STT</th>
                              <th>Tên user</th>
                              <th>Email</th>
                              <th>Phone</th>
                              <th>Password</th>
                              <th>Admin</th>
                              <th>User</th>
                              <th>Chức năng</th>
                            </tr>
                          </thead>


                          <tbody>
                            <form action="http://127.0.0.1:8000/assign-roles" method="POST" class="has-validation-callback"></form>
                            <input type="hidden" name="_token" value="AjV09vHVgepEuTTThX0wlATGKPwKkbeDEEPnqMpC">
                            <tr>
                              <td>1</td>
                              <td>Phan Võ An Vinh</td>
                              <td>
                                admin@gmail.com
                                <input type="hidden" name="admin_email" value="admin@gmail.com">
                                <input type="hidden" name="admin_id" value="5">
                              </td>
                              <td>092345678</td>
                              <td>$2y$10$EQEqaY0mtni5ZCLKsc2E.ee2P5h7w1wDZgd2cRrCOgMNtff/eOv0K</td>
                              <td><input type="checkbox" name="admin_role" checked=""></td>
                              <td><input type="checkbox" name="user_role"></td>
                              <td>
                                <p><input type="submit" value="Phân quyền" class="btn btn-sm btn-warning"></p>
                                <p><a style="margin:5px 0;font-size:13px" class="btn btn-sm btn-info" href="http://127.0.0.1:8000/delete-user-roles/5" onclick="return confirm('Cbạn có chắc muốn xóa user này không')">Xóa user</a></p>
                                <p><a style="margin:5px 0;font-size:13px" class="btn btn-sm btn-success" href="http://127.0.0.1:8000/impersonate/5">Chuyển quyền</a></p>

                              </td>
                            </tr>

                          </tbody>
                        </table>
                        <!-- <div class="pagination">
                    
                  </div> -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection