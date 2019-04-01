<h1>Đặt lại mật khẩu </h1>


Chào bạn {{$name}}. Bạn nhấp vào đây để đặt lại mật khẩu của mình nhé. Cảm ơn bạn.
<form id="commentForm" action="{{route('site.user.setpassword',$id)}}" method="POST" enctype="multipart/form-data" class="form-horizontal" >
                                    <!-- CSRF Token -->
                                    {{csrf_field()}}
                                       <fieldset>
                                        <!-- Name input-->
                                        <!-- Form actions -->
                                        <div class="form-group">
                                            <div class="col-md-12 text-right">
                                                <button type="submit" name="btnsetpassword"class="btn btn-responsive btn-primary btn-sm">Đặt lại mật khẩu</button>
                                            </div>
                                        </div>
                                    </fieldset>
                                </form>
