<!-- Add and Edit customer modal -->
<div class="modal fade" id="new-customer" aria-hidden="true" data-backdrop="static" data-keyboard="false" >
    <div class="modal-dialog modal-dialog-centered" >
    <div class="modal-content">
    <div class="modal-header">
    <h4 class="modal-title" id="customerCrudModal"></h4>
    </div>
    <div class="modal-body">
    <form name="custForm" action="" method="POST">
    <input type="hidden" name="cust_id" id="cust_id" >
    @csrf
    <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
    <strong>Name:</strong>
    <input type="text" name="name" id="name" class="form-control" placeholder="Name" onchange="validate()" >
    </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
    <strong>Email:</strong>
    <input type="text" name="email" id="email" class="form-control" placeholder="Email" onchange="validate()">
    </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
    <strong>Address:</strong>
    <input type="text" name="address" id="address" class="form-control" placeholder="Address" onchange="validate()" onkeypress="validate()">
    </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
    <button type="submit" id="btn-save" name="btnsave" class="btn btn-primary" disabled>Submit</button>
    <a href="#" class="btn btn-danger">Cancel</a>
    </div>
    </div>
    </form>
    </div>
    </div>
    </div>
    </div>



    <!-- Show customer modal -->
<div class="modal fade" id="crud-modal-show" aria-hidden="true" >
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
    <h4 class="modal-title" id="customerCrudModal-show"></h4>
    </div>
    <div class="modal-body">
    <div class="row">
    <div class="col-xs-2 col-sm-2 col-md-2"></div>
    <div class="col-xs-10 col-sm-10 col-md-10 ">
    @if(isset($customer->name))

    <table>
    <tr><td><strong>Name:</strong></td><td><input  readonly="readonly" type="" name="" id="jina" style="border:0;" ></td></tr>
    <tr><td><strong>Email:</strong></td><td><input  readonly="readonly" type="" name="" id="mail" style="border:0;" ></td></tr>
    <tr><td><strong>Address:</strong></td><td><input  readonly="readonly" type="" name="" id="anwani" style="border:0;" ></td></tr>
    <tr><td colspan="2" style="text-align: right "><a href="{{ route('customers.index') }}" class="btn btn-danger">OK</a> </td></tr>
    </table>
    @endif
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>

