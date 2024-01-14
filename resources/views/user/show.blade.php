<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Information</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
    
</style>
</head>
<body>


<div class="container mt-5">
    <h2>Approval Details</h2>
    <hr>
    <h3> <svg xmlns="http://www.w3.org/2000/svg" height="16" width="12" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M0 128C0 92.7 28.7 64 64 64H320c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V128z"/></svg> Application Information</h3>
    <div class="row">
        <!-- User Information Column -->
        
        <div class="col-sm-3">
            <p><strong>Application No:</strong> {{ $user->application_number }}</p>
            <p><strong>Sex:</strong> {{ $user->sex }}</p>
            <p><strong>Visa Status:</strong> <span style="color: red;">{{ $user->visa_status }}</span></p>
            <!-- Add more fields as needed -->
        </div>
        
        <div class="col-sm-3">
            <p><strong>Visa Type:</strong> {{ $user->visatype }}</p>
            <p><strong>Profession:</strong> {{ $user->profession }}</p>
            <!-- Add more fields as needed -->
        </div>
        
        <div class="col-sm-3">
            <p><strong>Expiry Date:</strong> {{ $user->application_number }}</p>
            <p><strong>Relationship:</strong> {{ $user->sex }}</p>
            <!-- Add more fields as needed -->
        </div>
        
        <div class="col-sm-3">
            <p><strong>Nationality:</strong> {{ $user->application_number }}</p>
            <p><strong>Visa No:</strong> {{ $user->sex }}</p>
            <!-- Add more fields as needed -->
        </div>
    </div>
    
    <hr>

<h3> <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg> Personal Information</h3>
<div class="row">
        <!-- Personal -->
        
        <div class="col-sm-3">
            <p><strong>Name in Arabic:</strong> {{ $user->name_arabic }}</p>
            <p><strong>Date of Birth:</strong> {{ $user->date_of_birth }}</p>
            <p><strong>Phone:</strong> {{ $user->phone }}</p>
            <!-- Add more fields as needed -->
        </div>
        
        <div class="col-sm-3">
            <p><strong>Place of Birth:</strong> {{ $user->place_of_birth }}</p>
            
            <!-- Add more fields as needed -->
        </div>
        
        <div class="col-sm-3">
            <p><strong>Name in English:</strong> {{ $user->name }}</p>
            <p><strong>Passport Details:</strong> {{ $user->passport_details }}</p>
            <!-- Add more fields as needed -->
        </div>
        
        <div class="col-sm-3">
            <p><strong>Passport Expiry Date:</strong> {{ $user->passport_expiry_date }}</p>
            
            <!-- Add more fields as needed -->
        </div>
    </div>
    
    <hr>
    <h3> <svg xmlns="http://www.w3.org/2000/svg" height="16" width="12" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V160H256c-17.7 0-32-14.3-32-32V0H64zM256 0V128H384L256 0zM64 256a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm152 32c5.3 0 10.2 2.6 13.2 6.9l88 128c3.4 4.9 3.7 11.3 1 16.5s-8.2 8.6-14.2 8.6H216 176 128 80c-5.8 0-11.1-3.1-13.9-8.1s-2.8-11.2 .2-16.1l48-80c2.9-4.8 8.1-7.8 13.7-7.8s10.8 2.9 13.7 7.8l12.8 21.4 48.3-70.2c3-4.3 7.9-6.9 13.2-6.9z"/></svg> Attachments</h3>
<div class="row">
        <!-- Personal -->
        
        <div class="col-sm-4">
            
        </div>
        
        <div class="col-sm-4">
          
            <img src="{{ asset('storage/images/' . $user->picture) }}" alt="User Picture" class="img-fluid" height="200" width="200">
        </div>
        
        <div class="col-sm-4">
            
        </div>
        
    </div>
    <hr>
    <p><strong>Status:</strong> <span style="color: red;">Ready to be Printed</span></p>

</div>
</body>
</html>
