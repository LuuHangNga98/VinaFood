@extends('layout_admin')
@section('main')
        <div class="">
          <div class="clearfix"></div>
          <div class="row">
            <div class="col-md-12 col-sm-12 ">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Quản lý sản phẩm</h2>
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
                  <a href="http://127.0.0.1:8000/category/addcat" class="btn-color" type="button">Thêm loại sản phẩm</a>
                </div>
                <div class="x_content">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="card-box table-responsive">


                        <table class="table table-striped table-bordered">
                          <thead>
                            <tr>
                              <th>STT</th>
                              <th>Tên Loại</th>
                              <th>Mô tả</th>
                              <th>Trạng thái</th>
                              <th>Thao tác</th>
                            </tr>
                          </thead>


                          <tbody>
                            <tr>
                              <td>1</td>
                              <td>GÀ GIÒN VUI VẺ</td>
                              <td>
                                <p>GÀ GIÒN VUI VẺ</p>
                              </td>
                              <td>1</td>

                              <td>
                                <a href="http://127.0.0.1:8000/category/edit_cat/4" title="sữa sản phẩm"><i class="glyphicon glyphicon-pencil"></i></a>
                                <a onclick="return confirm('sản phẩm thuộc danh mục này sẽ bị xóa, bạn có chắc muốn xóa không?')" href="http://127.0.0.1:8000/category/delete/4" title="xóa sản phẩm"><i class="glyphicon glyphicon-trash"></i></a>
                              </td>
                            </tr>
                            <tr>
                              <td>2</td>
                              <td>GÀ SỐT CAY</td>
                              <td>
                                <p>GÀ SỐT CAY</p>
                              </td>
                              <td>1</td>

                              <td>
                                <a href="http://127.0.0.1:8000/category/edit_cat/5" title="sữa sản phẩm"><i class="glyphicon glyphicon-pencil"></i></a>
                                <a onclick="return confirm('sản phẩm thuộc danh mục này sẽ bị xóa, bạn có chắc muốn xóa không?')" href="http://127.0.0.1:8000/category/delete/5" title="xóa sản phẩm"><i class="glyphicon glyphicon-trash"></i></a>
                              </td>
                            </tr>
                            <tr>
                              <td>3</td>
                              <td>MỲ Ý</td>
                              <td>
                                <p>MỲ Ý</p>
                              </td>
                              <td>1</td>

                              <td>
                                <a href="http://127.0.0.1:8000/category/edit_cat/6" title="sữa sản phẩm"><i class="glyphicon glyphicon-pencil"></i></a>
                                <a onclick="return confirm('sản phẩm thuộc danh mục này sẽ bị xóa, bạn có chắc muốn xóa không?')" href="http://127.0.0.1:8000/category/delete/6" title="xóa sản phẩm"><i class="glyphicon glyphicon-trash"></i></a>
                              </td>
                            </tr>
                            <tr>
                              <td>4</td>
                              <td>HAMBURGER</td>
                              <td>
                                <p>HAMBURGER</p>
                              </td>
                              <td>1</td>

                              <td>
                                <a href="http://127.0.0.1:8000/category/edit_cat/7" title="sữa sản phẩm"><i class="glyphicon glyphicon-pencil"></i></a>
                                <a onclick="return confirm('sản phẩm thuộc danh mục này sẽ bị xóa, bạn có chắc muốn xóa không?')" href="http://127.0.0.1:8000/category/delete/7" title="xóa sản phẩm"><i class="glyphicon glyphicon-trash"></i></a>
                              </td>
                            </tr>
                            <tr>
                              <td>5</td>
                              <td>KHOAI TÂY CHIÊN</td>
                              <td>
                                <p>KHOAI TÂY CHIÊN</p>
                              </td>
                              <td>1</td>

                              <td>
                                <a href="http://127.0.0.1:8000/category/edit_cat/8" title="sữa sản phẩm"><i class="glyphicon glyphicon-pencil"></i></a>
                                <a onclick="return confirm('sản phẩm thuộc danh mục này sẽ bị xóa, bạn có chắc muốn xóa không?')" href="http://127.0.0.1:8000/category/delete/8" title="xóa sản phẩm"><i class="glyphicon glyphicon-trash"></i></a>
                              </td>
                            </tr>
                            <tr>
                              <td>6</td>
                              <td>MÓN TRÁNG MIỆNG</td>
                              <td>
                                <p>MÓN TRÁNG MIỆNG</p>
                              </td>
                              <td>1</td>

                              <td>
                                <a href="http://127.0.0.1:8000/category/edit_cat/9" title="sữa sản phẩm"><i class="glyphicon glyphicon-pencil"></i></a>
                                <a onclick="return confirm('sản phẩm thuộc danh mục này sẽ bị xóa, bạn có chắc muốn xóa không?')" href="http://127.0.0.1:8000/category/delete/9" title="xóa sản phẩm"><i class="glyphicon glyphicon-trash"></i></a>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                        <div class="Pagination d-flex justify-content-center">


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