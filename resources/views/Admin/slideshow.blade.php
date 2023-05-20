@extends('layout_admin')
@section('main')
        <div class="">
          <div class="clearfix"></div>
          <div class="row">
            <div class="col-md-12 col-sm-12 ">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Quản lý slideshow</h2>
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
                  <a href="http://127.0.0.1:8000/add-slider" class="btn-color" type="button">Thêm slideshow</a>
                </div>
                <div class="x_content">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="card-box table-responsive">


                        <table class="table table-striped table-bordered">
                          <thead>
                            <tr>
                              <th>STT</th>
                              <th>Tên slide</th>
                              <th>Hình ảnh</th>
                              <th>Mô tả</th>
                              <th>Tình trạng</th>
                              <th>xóa</th>
                            </tr>
                          </thead>


                          <tbody>
                            <tr>
                              <td>1</td>
                              <td>slide 2</td>
                              <td><img src="uploads/slider/banner120.jpg" height="120" width="300"></td>
                              <td>
                                <p>gà giòn vui vẻ</p>
                              </td>
                              <td><span class="text-ellipsis">

                                  <a href="http://127.0.0.1:8000/active-slide/19">
                                    <span class="fa-thumb-styling fa fa-thumbs-up"></span></a>
                                </span></td>

                              <td>
                                <a onclick="return confirm('Bạn có chắc là muốn xóa slide này ko?')" href="http://127.0.0.1:8000/delete-slide/19" class="active styling-edit" ui-toggle-class="">
                                  <i class="fa fa-times text-danger text"></i>
                                </a>
                              </td>
                            </tr>
                            <tr>
                              <td>2</td>
                              <td>slide 1</td>
                              <td><img src="uploads/slider/banner324.jpeg" height="120" width="300"></td>
                              <td>
                                <p>ngon bổ rẻ</p>
                              </td>
                              <td><span class="text-ellipsis">

                                  <a href="http://127.0.0.1:8000/active-slide/18">
                                    <span class="fa-thumb-styling fa fa-thumbs-up"></span></a>
                                </span></td>

                              <td>
                                <a onclick="return confirm('Bạn có chắc là muốn xóa slide này ko?')" href="http://127.0.0.1:8000/delete-slide/18" class="active styling-edit" ui-toggle-class="">
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