@extends('layouts.app')

@section('content')
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit User Info</div>
                <div class="card-body">
                    @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<!-- Admin Create User Form -->
<form action="" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <!-- First Column -->
        <div class="col-md-6">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" value="{{ $userinfo->name }}" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="code">Code:</label>
                <input type="text" name="code" id="code" class="form-control" required>
                
            </div>
            <div class="form-group">
                <label for="passport_number">Passport Number:</label>
                <input type="text" name="passportnumber" id="passport_number" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="job_allocation">Job Allocation:</label>
                <input type="text" name="joballocation" id="job_allocation" class="form-control" required>
            </div>
            
            <div class="mb-3">
            <label for="application_number">Application Number:</label>
            <input type="text" name="application_number" id="application_number" class="form-control">
        </div>

        <div class="mb-3">
            <label for="sex">Sex:</label>
            <select name="sex" id="sex" class="form-control">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
        </div>
        
        <div class="mb-3">
            <label for="relationship">Relationship:</label>
            <input type="text" name="relationship" id="relationship" class="form-control">
        </div>

        <div class="mb-3">
            <label for="visa_no">Visa No.:</label>
            <input type="text" name="visa_no" id="visa_no" class="form-control">
        </div>

        <div class="mb-3">
            <label for="name_arabic">Name in Arabic:</label>
            <input type="text" name="name_arabic" id="name_arabic" class="form-control">
        </div>
        
        <div class="mb-3">
            <label for="passport_details">Passport Details:</label>
            <input type="text" name="passport_details" id="passport_details" class="form-control">
        </div>
        
         <!-- Picture Upload -->
        <div class="mb-6">
            <label for="picture">Picture:</label>
            <input type="file" name="picture" id="picture" class="form-control-file">
        </div>
        
    </div>

        <!-- Second Column -->
        <div class="col-md-6">
            
            <div class="form-group">
                <label for="nationality">Nationality:</label>
                <input type="text" name="nationality" id="nationality" class="form-control" required>
            </div>
            
            <div class="form-group">
                <label for="location">Location:</label>
                <input type="text" name="location" id="location" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="visa_type">Visa Type:</label>
                <input type="text" name="visatype" id="visa_type" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="issue_date">Issue Date:</label>
                <input type="date" name="issuedate" id="issue_date" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="expiry_date">Expiry Date:</label>
                <input type="date" name="expdate" id="expiry_date" class="form-control" required>
            </div>
            
            <div class="mb-3">
            <label for="visa_status">Visa Status:</label>
            <input type="text" name="visa_status" id="visa_status" class="form-control">
        </div>

        <div class="mb-3">
            <label for="profession">Profession:</label>
            <input type="text" name="profession" id="profession" class="form-control">
        </div>
        
        <div class="mb-3">
            <label for="date_of_birth">Date of Birth:</label>
            <input type="date" name="date_of_birth" id="date_of_birth" class="form-control">
        </div>

        <div class="mb-3">
            <label for="phone">Phone:</label>
            <input type="tel" name="phone" id="phone" class="form-control">
        </div>

        <div class="mb-3">
            <label for="place_of_birth">Place of Birth:</label>
            <input type="text" name="place_of_birth" id="place_of_birth" class="form-control">
        </div>
        
        

        <div class="mb-3">
            <label for="passport_expiry_date">Passport Expiry Date:</label>
            <input type="date" name="passport_expiry_date" id="passport_expiry_date" class="form-control">
        </div>

       
            
            
            <!-- Add other necessary fields -->
        </div>
    </div>
    <hr>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Create User</button>
    </div>
</form>
</div>
</div>
</div>
</div>
</div>

</body>
<!--<script>-->
    
    
<!--    $(document).ready(function() {-->
<!--        generateUniqueCode();-->
<!--    });-->

<!--    function generateUniqueCode() {-->
        
<!--        $('#code').val(uniqueCode);-->
<!--    }-->

<!--    function generateRandomCode(length) {-->
<!--        var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';-->
<!--        var result = '';-->
<!--        var charactersLength = characters.length;-->
<!--        for (var i = 0; i < length; i++) {-->
<!--            result += characters.charAt(Math.floor(Math.random() * charactersLength));-->
<!--        }-->
<!--        return result;-->
<!--    }-->
<!--</script>-->

</html>
@endsection