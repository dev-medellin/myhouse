<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <h3 class="modal-title" id="ModalLabel">Register</h3>
</div>
<div class="modal-body">
    <form>
        <div class="form-group">
            <label for="recipient-name" class="col-form-label">Username</label>
            <input type="text" class="form-control" id="recipient-name">
        </div>
        <div class="form-group">
            <label for="recipient-name" class="col-form-label">Password</label>
            <input type="text" class="form-control" id="recipient-name">
        </div>
        <div class="form-group">
            <label for="recipient-name" class="col-form-label">Confirm Password</label>
            <input type="text" class="form-control" id="recipient-name">
        </div>
    </form>
    <span>Already have an account? <a href="javascript:void(0)" class="loginBtn" style="color:blue">Login Here!</a></span>
</div>
<div class="modal-footer">
<button type="button" type="submit" id="checkData" class="btn btn-lg btn-success">Register</button>
<!-- <button type="button" class="btn btn-light" data-dismiss="modal">Close</button> -->
</div>

<script>
$('#checkData').on('click', function(e){
    e.preventDefault();
    alert();
})

$('.loginBtn').on('click',function(event){
    event.preventDefault();
    var  url ='modal/loginModal';

    var posting = $.get( url );
 
        // Put the results in a div
        posting.done(function( data ) {
            $('#exampleModal-4').modal('show');
            $("#modalBody").html(data).show();
        });
   });
</script>