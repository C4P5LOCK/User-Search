
    @extends('layouts.navbar')

    @section('content')
   
    <div class="row">
        <div class ="col-md-6">
    <div class="bg-color2 rounded-md shadow lg:px-24 px-4 py-4"><h1 class="text-center font-bold">( Verification )</h1><br>
        <p class="my-3">Candidates can go to verify page to verify their status</p>
        <p class="underline font-bold mb-3 text-orange-500">Important Notes:</p>
            <ol class="list-decimal pl-5">
                    <li class="mb-1">Applicant must  </li>
                    <li class="mb-1">Applicant must be at least 18 years of age.</li>
                    <li>Applicant must not already be a beneficiary of the </li>
            </ol>
            <div class="w-full my-5 flex flex-col">
                <a class="hover:animate-upAndDown flex justify-center items-center p-3 bg-color1 text-center mb-2 text-white rounded-md text-bold" href="/user-validation">Click to Apply</a>
                <a class="hover:animate-upAndDown flex mt-2 justify-center items-center p-3 bg-orange-500 text-center text-white rounded-md text-bold" href="/examination">Click to Take Examination</a><br></div></div>
           </div>

        <div class ="col-md-6">
            <img src={{asset('storage/images/bgg.jpg')}} height="425" width="780">
                </div>

    </div>
    @endsection

