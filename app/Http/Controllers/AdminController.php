<?php

namespace App\Http\Controllers;
use App\Models\UserInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    
public function AllUsers(){
    $users = UserInfo::all();
    return view('admin.users',[
        'users' => $users
    ]);
}

public function show(UserInfo $user){
    //$user = Userinfo::find($id);
        return view('admin.show',[
            'user' => $user
        ]);
}

public function createUserForm()
{
    return view('admin.create');
}

public function storeUser(Request $request)
{
    // Validate and store user information
    $user = new UserInfo();
    $user->name = $request->input('name');
    // $user->email = $request->input('email');
    $user->passportnumber = $request->input('passportnumber');
    $user->joballocation = $request->input('joballocation');
    $user->location = $request->input('location');
    $user->visatype = $request->input('visatype');
    $user->nationality = $request->input('nationality');
    $user->issuedate = $request->input('issuedate');
    $user->application_number = $request->input('application_number');
    $user->sex = $request->input('sex');
   
    $user->relationship = $request->input('relationship');
     $user->visa_no = $request->input('visa_no');
      $user->name_arabic = $request->input('name_arabic');
      $user->passport_details = $request->input('passport_details');
      $user->name_arabic = $request->input('name_arabic');
      $user->picture = $request->input('picture');
      $user->profession = $request->input('profession');
      $user->visatype = $request->input('visatype');
      $user->issuedate = $request->input('issuedate');
      $user->visa_status = $request->input('visa_status');
      $user->date_of_birth = $request->input('date_of_birth');
      $user->phone = $request->input('phone');
      $user->passport_expiry_date = $request->input('passport_expiry_date');
      $user->place_of_birth = $request->input('place_of_birth');
       $user->expdate = $request->input('expdate');
     

// if ($request->hasFile('picture')) {
//         // Get the file name with the extension
//         $fileNameWithExt = $request->file('picture')->getClientOriginalName();

//         // Get just the file name
//         $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

//         // Get just the extension
//         $extension = $request->file('picture')->getClientOriginalExtension();

//         // Filename to store (unique name + timestamp)
//         $fileNameToStore = $fileName . '_' . time() . '.' . $extension;

//         // Store the image in the storage/app/public directory
//         $path = $request->file('picture')->storeAs('public/images', $fileNameToStore);

//         // Save the image path to the database
//         $request['picture'] = $fileNameToStore;
//     }

// Validate and store the user data

    $validatedData = $request->validate([
        // Validation rules
        'picture' => 'nullable|image|max:2048', // Max 2MB
    ]);

    if ($request->hasFile('picture')) {
        $fileNameWithExt = $request->file('picture')->getClientOriginalName();
        $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        $extension = $request->file('picture')->getClientOriginalExtension();
        $fileNameToStore = $fileName . '_' . time() . '.' . $extension;
        
        // Store the image in the public directory
        $path = $request->file('picture')->storeAs('public/images', $fileNameToStore);
    } else {
        $fileNameToStore = 'noimage.jpg'; // Default image or handle as needed
    }

    // Save the filename to the database
    $request['picture'] = $fileNameToStore;
    
    $user->picture = $request->input('picture');
    
if (UserInfo::where('email', $request['email'])->exists()) {
        return redirect()->back()->with('error', 'Email already exists.'); // Redirect back with an error message
    }
    
     $user->email = $request->input('email');
    // Generate a unique code
    $uniqueCode = Str::random(10); // Adjust the length as needed
    while (UserInfo::where('code', $uniqueCode)->exists()) {
        $uniqueCode = Str::random(10); // Regenerate if the code already exists
    }
    
   // $user->code = $uniqueCode; // Assign the unique code
    $user->code = $request->input('code'); // Generate unique code as needed
    $user->save();

    return redirect('/admin/create')->with(['success' => 'User Succesfully Created']);
}

public function edit(UserInfo $user){
    $userinfo = UserInfo::findOrFail($user);
    return view ('admin.edit', ['userinfo' => $userinfo]);
}


}
