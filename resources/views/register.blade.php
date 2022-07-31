<h2><strong>Student Registration</strong></h2>
<form method="post" action="{{ route('students.save') }}">
    @csrf
    <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" class="form-control p_input" required="required">
    </div><br>
    <div class="form-group">
        <label>Mobile number</label>
        <input type="number"  name="mobile_number" class="form-control p_input" required="required">
    </div>
    <br>
    <div class="text-center">
        <button type="submit" class="btn btn-primary btn-block enter-btn">Register</button>
        <a href="{{('/')}}" class="btn btn-default">Cancel</a>
    </div>

</form>
