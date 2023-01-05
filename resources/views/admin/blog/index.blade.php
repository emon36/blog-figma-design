@extends('admin.layouts.master')


@section('content')

    <div class="row">
        <div class="col-12 mx-auto mt-3">
            <div class="card mb-md-0">
                <div class="card-body">
                    <div class="card-title">Employees</div>

                    <div class="table-responsive">
                        <table class="table text-center table-centered table-borderless table-hover w-100 dt-responsive nowrap" id="seller-datatable">
                            <thead class="table-light">
                            <tr>
                                <th>Post Title</th>
                                <th>Author Name</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($posts as $post)
                                <tr>
                                    <td>{{$post->title}}</td>
                                    <td>{{$post->user->name}}</td>
                                    <td>
                                        <a href="{{route('post.show',$post->id)}}"    class="view btn btn-info btn-sm">View</a>
                                        @if($post->status == 1)
                                        <a href="{{route('post.status',$post->id)}}" class="hide btn btn-danger btn-sm ">Unpublish</a>
                                        @else
                                            <a href="{{route('post.status',$post->id)}}" class="edit btn btn-success btn-sm">Publish</a>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection



@section('scripts')
    <script type="text/javascript">

        $(document).ready( function () {
            var table = $('#seller-datatable').DataTable({
                'columnDefs': [ {
                    'targets': [2],
                    'orderable': false,

                }]
            });

            $('body').on('click', '.deleteEmployee', function () {

                var id = $(this).data("id");
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: '/admin/delete/employee/'+id,
                            method: 'delete',
                            data: {
                                _token: '{{ csrf_token() }}'
                            },
                            success: function(response) {
                                console.log(response);
                                Swal.fire(
                                    'Deleted!',
                                    'Employee has been deleted.',
                                    'success'
                                )
                                setTimeout(() => {
                                    location.reload();
                                }, 2000)

                            }
                        });
                    }
                });

            });


        } );


    </script>


@endsection
