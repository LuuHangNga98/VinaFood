@extends('layout_admin')
@section('main')
        <div class="">
          <div class="clearfix"></div>
          <div class="row">
            <div class="col-md-12 col-sm-12 ">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Quản lý khuyến mãi</h2>
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
                  <a href="http://127.0.0.1:8000/insert-coupon" class="btn-color" type="button">Thêm mã giảm giá</a>
                </div>
                <div class="x_content">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="card-box table-responsive">


                        <table class="table table-striped table-bordered">
                          <thead>
                            <tr>
                              <th>Tên mã giảm giá</th>
                              <th>Mã giảm giá</th>
                              <th>Số lượng giảm giá</th>
                              <th>Điều kiện giảm giá</th>

                              <th>ngày bắt đầu</th>
                              <th>Ngày kết thúc</th>
                              <th>Số giảm</th>
                              <th>Quản lý</th>

                              <th>Tình trạng</th>

                              <th>Gửi mã</th>
                              <th>xóa</th>
                            </tr>
                          </thead>


                          <tbody>
                            <tr>
                              <!-- <td>1</td> -->
                              <td>Giảm t1</td>
                              <td>abc</td>
                              <td>2</td>
                              <td><span class="text-ellipsis">
                                  Giảm theo %
                                </span>
                              </td>
                              <td>2023/01/02</td>
                              <td>2023/01/31</td>
                              <td><span class="text-ellipsis">
                                  Giảm 10 %
                                </span></td>

                              <td><span class="text-ellipsis">
                                  <span style="color:blue">Đang kích hoạt</span>
                                </span></td>

                              <td>

                                <span style="color:red">hết hạn</span>
                              </td>

                              <td>
                                <p><a style="font-size: 10px;" href="http://127.0.0.1:8000/send-coupon/1/10/abc/2" class="btn btn-primary">Gửi mã giảm giá khách hàng</a></p>
                              </td>

                              <td>

                                <a onclick="return confirm('Bạn có chắc là muốn xóa mã này ko?')" href="http://127.0.0.1:8000/delete-coupon/40" class="active styling-edit" ui-toggle-class="">
                                  <i class="fa fa-times text-danger text"></i>
                                </a>
                              </td>


                            </tr>
                          </tbody>
                        </table>
                        <div class="pagination">

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection