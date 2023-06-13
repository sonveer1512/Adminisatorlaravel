<div class="row g-3">
    <div class="col-md-12">
        <div class="form-floating  mb-2 mt-2">
            <input class="form-control" id="new_pass" type="password" name="new_pass"  placeholder="Enter Mobile" />
            <label for="mobile">New Password </label>
            <span id="new_pass_error" class="error"></span>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-floating  mb-2 mt-2">
            <input class="form-control" id="confirm_pass" type="password" name="confirm_pass"  placeholder="Enter Mobile" />
            <label for="mobile">Cofirm  password </label>
            <span id="confirm_pass_error" class="error"></span>
        </div>
        <input class="form-control" id="id" type="hidden" name="id"  value="{{$pass->id}}"/>
    </div>
</div>