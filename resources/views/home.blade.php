@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

                    <?php echo $k; ?>

        </div>
    </div>
    <!-- Modal -->


    <div id="satModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 id="modal-title" class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to schedule this shift?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Confirm</button>

                </div>
            </div>

        </div>
    </div>
    <div id="ptoModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 id="modal-title" class="modal-title">Request Paid Time Off</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class='col-sm-6'>
                            <p>Start</p>
                            <div class="form-group">
                                <div class='input-group date' id='datetimepicker4'>
                                    <input type='text' class="form-control" />
                                    <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-time"></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class='col-sm-6'>
                            <p>End</p>
                            <div class="form-group">
                                <div class='input-group date' id='datetimepicker3'>
                                    <input type='text' class="form-control" />
                                    <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-time"></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                </div>
                    <div class="row">
                        <div class='col-sm-6'>
                        <p>
                            Available PTO Hours:
                        </p>
                        </div>
                        <div class='col-sm-6'>
                            <p>
                                PTO Hours Reqeusted:
                            </p>
                        </div>
                    </div>
                <div class="modal-footer">
                    <button id="close" type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button id="confirm" type="button" class="btn btn-default" data-dismiss="modal">Confirm</button>

                </div>
            </div>

        </div>
        </div>
</div>

<script>
    $("#calendar ul.dates li" ).click(function() {
        $('#ptoModal').modal('show');
    });
    $("#confirm" ).click(function() {
    alert("confirm");
    });
    $("#close" ).click(function() {
        $('#ptoModal').modal('hide');
    });

        $(function () {
            $('#datetimepicker3').datetimepicker({
                format: 'LT'
            });
        });
    $(function () {
        $('#datetimepicker4').datetimepicker({
            format: 'LT'
        });
    });

</script>

@endsection
