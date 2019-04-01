<h1>Xác thực tài khoản </h1>


Chào bạn {{$name}}. Chúc mừng bạn đã đăng ký tài khoản thành công. Nhấn vào đây để xác thực.
<form id="commentForm" action="{{route('site.user.verification',$id)}}" method="POST" enctype="multipart/form-data" class="form-horizontal" >
                                    <!-- CSRF Token -->
                                    {{csrf_field()}}
                                       <fieldset>
                                        <!-- Name input-->
               
                                        
                                        <!-- Form actions -->
                                        <div class="form-group">
                                            <div class="col-md-12 text-right">
                                                <button type="submit" name="btnAddAppointment"class="btn btn-responsive btn-primary btn-sm">Xác thực</button>
                                            </div>
                                        </div>
                                    </fieldset>
                                </form>
