
@extends('layouts.backend.dashboard') 

@section('backend-content')


<div class="row">
                            <div class="col-lg-12">
                                <div class="card-box">
                                    <h4 class="m-t-0 header-title"></h4>


                                    <table class="table table-sm mb-0 table table-bordered">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>CV</th>
                                            <th>Protfolio</th>
                                            <th>Subject</th>
                                            <th>Message</th>
                                            <th class="text-center"> Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($news as $new)


                                        <tr>
                                            <th scope="row">{{$new->id}}</th>
                                            <td>{{$new->name}}</td>
                                            <td>{{$new->email}}</td>
                                            <td>{!! str_limit($new->up_cv,6) !!}</td>
                                            <td>{!! str_limit($new->up_protfolio,6) !!}</td>
                                            <td>{!! str_limit($new->subject,6) !!}</td>
                                            <td>{!! str_limit($new->mgs,6) !!}</td>


                                              {{--  <td><a href="{{route($editroute,$new->id)}}" class="btn btn-primary" style="margin-left: 26px;">Edit </a></td>
 --}}

                                            <td><a data-href="{{route($droute,$new->id)}}" class="btn btn-danger cat-delete" style="margin-left: 26px;"> Delete </a></td>



                                        </tr>
                                       @endforeach
                                        </tbody>
                                    </table>
                                </div> <!-- end card-box -->
                            </div> <!-- end col -->


                        </div>


 @endsection

 @section('scripts')

    <script>
        for(var els = document.getElementsByClassName("cat-delete"), i = els.length; i--;){
            els[i].href = 'javascript:void(0);';
            els[i].onclick = (function(el){
                return function(){
                    swal({
                      title: 'Are you sure?',
                      text: "You won't be able to revert this!",
                      type: 'warning',
                      showCancelButton: true,
                      confirmButtonColor: '#3085d6',
                      cancelButtonColor: '#d33',
                      confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                      if (result.value) {
                        window.location.href = el.getAttribute('data-href');
                        swal({
                          title: 'Deleting!',
                           text: 'Your file is being deleted.',
                          timer: 5000,
                          onOpen: () => {
                            swal.showLoading()
                            timerInterval = setInterval(() => {
                              swal.getContent().querySelector('strong')
                                .textContent = swal.getTimerLeft()
                            }, 200)
                          },
                          onClose: () => {
                            clearInterval(timerInterval)
                          }
                      }

                        )
                      }
                    })

                };
            })(els[i]);
        }
    </script>


  @endsection