@extends('layouts/admin')

@section('productadmin')
<section class="content-header">
  <h1>
    Sản Phẩm
    <small></small>
  </h1>
</section>
<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <!-- /.box-header -->
        <div class="box-body">
          <div class="container" style="margin: 10px 0;">
            <span class="btn btn-primary glyphicon glyphicon-plus btn-sm" id="addBtn1"></span>          
          </div>
          <div class="container" id="addArea" style="width: 100%; display: none; padding-bottom: 10px;">
            <form action="" method="POST" role="form">
              <legend>Thêm sản phẩm</legend>
              <i id="addError" style="color: red"></i>
              <div class="form-group">
                <label for="">Tên sản phẩm</label>
                <input type="text" class="form-control" id="tensp">
              </div>
              <div class="form-group">
                <label for="">Tên danh mục</label>
                <select name="madm" id ="input" class="form-control" required="required">
                <option value="">Tên danh mục </option>
                @foreach ($cate as $cate => $data)
                  <option value='{{$data->madm}}{{$data->tendm}}'> </option>
                @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="">Giá</label>
                <input type="text" class="form-control" id="gia">
              </div>
              <div class="form-group">
                <label for="">Bảo hành</label>
                <input type="text" class="form-control" id="baohanh">
              </div>
              <div class="form-group">
                <label for="">Trọng lượng</label>
                <input type="text" class="form-control" id="trongluong">
              </div>
              <div class="form-group">
                <label for="">Chất liệu</label>
                <input type="text" class="form-control" id="chatlieu">
              </div>
              <div class="form-group">
                <label for="">Chống nước</label>
                <input type="text" class="form-control" id="chongnuoc">
              </div>
              <div class="form-group">
                <label for="">Năng lượng</label>
                <input type="text" class="form-control" id="nangluong">
              </div>
              <div class="form-group">
                <label for="">Loại bảo hành</label>
                <input type="text" class="form-control" id="loaibh">
              </div>
              <div class="form-group">
                <label for="">Kích thước</label>
                <input type="text" class="form-control" id="kichthuoc">
              </div>
              <div class="form-group">
                <label for="">Màu</label>
                <input type="text" class="form-control" id="mau">
              </div>
              <div class="form-group">
                <label for="">Dành cho</label>
                <input type="text" class="form-control" id="danhcho">
              </div>
              <div class="form-group">
                <label for="">Phụ kiện đi kèm</label>
                <input type="text" class="form-control" id="phukien">
              </div>
              <div class="form-group">
                <label for="">Khuyến mãi</label>
                <input type="text" class="form-control" id="khuyenmai">
              </div>
              <div class="form-group">
                <label for="">Tình trạng</label>
                <input type="text" class="form-control" id="tinhtrang">
              </div>
              <div class="form-group">
                <label for="">Ảnh</label>
                <input type="file" class="form-control" id="anhchinh">
              </div>
              <div class="form-group">
                <label for="">Lượt mua</label>
                <input type="text" class="form-control" id="luotmua">
              </div>
              <div class="form-group">
                <label for="">Lượt xem</label>
                <input type="text" class="form-control" id="luotxem">
              </div>
              <span class="btn btn-success" id="add2Btn">Thêm</span>
              <span class="btn btn-default" id="cancelAddBtn">Hủy</span>
            </form>
          </div>
          <div class="container" id="editArea" style="width: 100%; display: none; padding-bottom: 10px;">
            <form action="" method="POST" role="form">
              @csrf
              <legend>Sửa sản phẩm</legend>
              <i id="addError" style="color: red"></i>
              <div class="form-group">
              <label for="">Tên sản phẩm</label>
                <input type="text" class="form-control" id="tenspEdit">
              </div>
              <div class="form-group">
                <label for="">Giá</label>
                <input type="text" class="form-control" id="giaEdit">
              </div>
              <div class="form-group">
                <label for="">Bảo hành</label>
                <input type="text" class="form-control" id="baohanhEdit">
              </div>
              <div class="form-group">
                <label for="">Trọng lượng</label>
                <input type="text" class="form-control" id="trongluongEdit">
              </div>
              <div class="form-group">
                <label for="">Chất liệu</label>
                <input type="text" class="form-control" id="chatlieuEdit">
              </div>
              <div class="form-group">
                <label for="">Chống nước</label>
                <input type="text" class="form-control" id="chongnuocEdit">
              </div>
              <div class="form-group">
                <label for="">Năng lượng</label>
                <input type="text" class="form-control" id="nangluongEdit">
              </div>
              <div class="form-group">
                <label for="">Loại bảo hành</label>
                <input type="text" class="form-control" id="loaibhEdit">
              </div>
              <div class="form-group">
                <label for="">Kích thước</label>
                <input type="text" class="form-control" id="kichthuocEdit">
              </div>
              <div class="form-group">
                <label for="">Màu</label>
                <input type="text" class="form-control" id="mauEdit">
              </div>
              <div class="form-group">
                <label for="">Dành cho</label>
                <input type="text" class="form-control" id="danhchoEdit">
              </div>
              <div class="form-group">
                <label for="">Phụ kiện đi kèm</label>
                <input type="text" class="form-control" id="phukienEdit">
              </div>
              <div class="form-group">
                <label for="">Khuyến mãi</label>
                <input type="text" class="form-control" id="khuyenmaiEdit">
              </div>
              <div class="form-group">
                <label for="">Tình trạng</label>
                <input type="text" class="form-control" id="tinhtrangEdit">
              </div>
              <div class="form-group">
                <label for="">Ảnh</label>
                <input type="file" class="form-control" id="anhchinhEdit">
              </div>
              <div class="form-group">
                <label for="">Lượt mua</label>
                <input type="text" class="form-control" id="luotmuaEdit">
              </div>
              <div class="form-group">
                <label for="">Lượt xem</label>
                <input type="text" class="form-control" id="luotxemEdit">
              </div>
              <span class="btn btn-success" id="edit2Btn">Xong</span>
              <span class="btn btn-default" id="cancelEditBtn">Hủy</span>
            </form>
          </div>
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr id="tbheader">
                <th><input type="checkbox" id="check-all-gd"></th>
                <th>STT</th>
                <th>Mã sp</th>
                <th>Tên sản phẩm</th>
                <th>Ảnh</th>
                <th>Giá</th>
                <th>Bảo hành</th>
                <th>Lượt mua</th>
                <th>Lượt xem</th>
                <th>Ngày nhập</th>
                <th>Hành động</th>
              </tr>
            </thead>
            <tbody>
            <?php $i = 0 ?>
            @foreach($pro as $pro)
                  <tr>
                    <td><input type="checkbox" class="cbsp" value="{{$pro->masp}}"></td>
                    <td><?php echo $i = $i +1 ?></td>
                    <td>{{$pro->masp}}</td>
                    <td>{{$pro->tensp}}</td>
                    <td><img style="width: 50px" src="{{$pro->anhchinh}}"></td>
                    <td>{{$pro->gia}}</td>
                    <td>{{$pro->baohanh}} tháng</td>
                    <td>{{$pro->luotmua}}</td>
                    <td>{{$pro->luotxem}}</td>
                    <td>{{$pro->ngay_nhap}}</td>
                    <td class="text-center">
                      <span class="btn btn-primary editItemBtn" data-id='<{{$pro->masp}}'>Chỉnh sửa</span>
                      <span class="btn btn-danger delItemBtn" data-id='{{$pro->masp}}'>Xóa</span>
                    </td>
                  </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>
<!-- /.content -->

<!-- jQuery 3 -->
<script src="views/admin/AdminLTE/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="views/admin/AdminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="views/admin/AdminLTE/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="views/admin/AdminLTE/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="views/admin/AdminLTE/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="views/admin/AdminLTE/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="views/admin/AdminLTE/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="views/admin/AdminLTE/dist/js/demo.js"></script>
<!-- page script -->
<script>
  $('#sptab').addClass('active');
  $(document).ready(function(){
      $('#example1 tr').not($('#tbheader')).click(function(event){
        if (event.target.type !== 'checkbox') {
          $(':checkbox', this).trigger('click');
        }
      })
      $('#example1').addClass('active');
      $('#check-all-gd').click(function() {
       $('input:checkbox').not(this).prop('checked', this.checked);
     });
    })
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
<script>
  $('#addBtn1').on('click',function(){
    $('#addArea').toggle(300);
  })
  $('#cancelAddBtn').on('click',function(){
    $('#addArea').toggle(300);
  })
  $('#add2Btn').on('click',function(){
    action('add',);
  })
  $('#edit2Btn').on('click',function(){
    var id = $(this).data('id');
    action('edit',id);
  })
  $('.delItemBtn').on('click',function(){
    var cf = confirm('Bạn chắc chứ?');
    if(cf){
      var id = $(this).data('id');
      action('del', id);  
    }
  })
  $('.editItemBtn').on('click',function(){
    $('#edit2Btn').attr('data-id',$(this).data('id'));
    $('#example1').toggle();
    $('#editArea').toggle(300);
    $('#categoryName4Edit').val($(this).closest('tr').children('td:nth-child(3)').text());
    $('#categoryCountry4Edit').val($(this).closest('tr').children('td:nth-child(4)').text());
  })
  $('#cancelEditBtn').on('click',function(){
    $('#example1').toggle();
    $('#editArea').toggle(300);
  })
  function action(ten, id = null){
    var tenspedit = $('#tenspEdit').val();
    var giaedit = $('#giaEdit').val();
    var baohanhedit = $('#baohanhEdit').val();
    var trongluongedit = $('#trongluongEdit').val();
    var chatlieuedit = $('#chatlieuEdit').val();
    var chongnuocedit = $('#chongnuocEdit').val();
    var nangluongedit = $('#nangluongEdit').val();
    var loaibhedit = $('#loaibhEdit').val();
    var kichthuocedit = $('#kichthuocEdit').val();
    var mauedit = $('#mauEdit').val();
    var danhchoedit = $('#danhchoEdit').val();
    var phukienedit = $('#phukienEdit').val();
    var khuyenmaiedit = $('#khuyenmaiEdit').val();
    var tinhtrangedit = $('#tinhtrangEdit').val();
    var anhchinhedit = $('#anhchinhEdit').val();
    var luotmuaedit = $('#luotmuaEdit').val();
    var luotxemedit = $('#luotxemEdit').val();
    var cten = cgia = cbaohanh = ctrongluong = cchatlieu = cchongnuoc = cnangluong = cloaibh = ckichthuoc = cmau= cdanhcho= cphukien=ckhuyenmai= ctinhtrang=canhchinh= cluotmua=cluotxem= '';  '';
    if(ten == 'add'){
      cten = $('#tensp').val();
      cgia = $('#gia').val();
      cbaohanh = $('#baohanh').val();
      ctrongluong = $('#trongluong').val();
      cchatlieu = $('#chatlieu').val();
      cchongnuoc = $('#chongnuoc').val();
      cnangluong = $('#nangluong').val();
      cloaibh = $('#loaibh').val();
      ckichthuoc = $('#kichthuoc').val();
      cmau = $('#mau').val();
      cdanhcho = $('#danhcho').val();
      cphukien = $('#phukien').val();
      ckhuyenmai = $('#khuyenmai').val();
      ctinhtrang = $('#tinhtrang').val();
      canhchinh = $('#anhchinh').val();
      cluotmua = $('#luotmua').val();
      cluotxem = $('#luotxem').val();

      if(cten == ''){
        alert('Bạn chưa điền tên sản phẩm!');
        return;
      }
    }
    $.ajax({
      url: 'product/action',
      type: 'GET',
      dataType: 'text',
      data: {ten, id,cten, cgia, cbaohanh, ctrongluong, cchatlieu, cchongnuoc, cnangluong, cloaibh, ckichthuoc, cmau, cdanhcho, cphukien, ckhuyenmai, ctinhtrang,canhchinh, cluotmua, cluotxem,tenspedit, giaedit, baohanhedit, trongluongedit, chatlieuedit, chongnuocedit, nangluongedit, loaibhedit, kichthuocedit, mauedit, danhchoedit, phukienedit, khuyenmaiedit, tinhtrangedit, anhchinhedit, luotmuaedit, luotxemedit},
      success: function(result){
        if(result == 'OK'){
          alert("Successful!");
          location.reload();
        } else {
          $('#addError').html(result);
        }
      }
    })
  }
</script> 
@stop
