@include('admin.header')
<style>
    .form-label {
        font-weight: 600;
    }
</style>
<nav aria-label="breadcrumb" class="mt-3">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Wedding Info</li>
    </ol>
</nav>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                Wedding Info Table

                <div style="float: right;">
                    <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#myModal">Add</button>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>John</td>
                            <td>Doe</td>
                            <td>john@example.com</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- The Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
        <form id="weddin_form" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add Wedding Info</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6 mb-3">
                            <select class="form-select" name="from_side" id="from_side" aria-label="Default select example">
                                <option value="">Select</option>
                                <option value="BRIDE">Bride</option>
                                <option value="GROOM">Groom</option>
                            </select>
                        </div>
                        <div class="col-lg-6 mb-3">
                           <input type="file" name="pre-wedding-img" class="form-control" >
                        </div>
                    </div>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-success btn-sm " name="submit" id="submit" value="submit">
                    </div>
                </div>
        </form>
    </div>
</div>
@include('admin.footer')

<script>
    $(document).ready(function() {

        $('#weddin_form').on('submit', function(event) {
            event.preventDefault();
            $.ajax({
                url: "{{ route('ajaxupload.action') }}",
                method: "POST",
                data: new FormData(this),
                dataType: 'JSON',
                contentType: false,
                cache: false,
                processData: false,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(data) {
                    console.log(data);
                    $('#message').css('display', 'block');
                    $('#message').html(data.message);
                    $('#message').addClass(data.class_name);
                    $('#uploaded_image').html(data.uploaded_image);
                }
            })
        });

    });
</script>