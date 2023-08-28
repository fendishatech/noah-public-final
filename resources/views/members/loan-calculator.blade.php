@extends('master.layout')

@section('page_title')
    Loan Calculator
@endsection

@section('content')
    <div class="container mx-auto my-12 px-6">
        <div class="my-4 flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
            <div class="flex flex-col hiwua">
                <p class="text-2xl font-semi-bold text-green-600">ሰላም <span class="font-bold"> {{ $member->first_name }}
                        {{ $member->father_name }}</span></p>
                <h1 class="text-2xl font-bold text-yellow-800">እንኳን በደህና መጡ</h1>
            </div>
            <a href="{{ route('dashboard') }}"
                class="md:block p-3 px-8  text-white bg-green-600 rounded-full baseline hover:bg-green-800 text-xl hiwua">ተመለስ</a>
        </div>
        <div class="flex flex-col md:flex-row space-y-4 md:space-y-0">
            <div class="md:w-1/2">
                <form id="loan-calculator"
                    class="flex px-8 py-4 flex-col justify-center items-center self-center bg-slate-50 rounded space-y-4 text-yellow-600"
                    method="post">
                    <h1 class="my-4 font-semibold text-4xl  hiuwa">የብድር ካልኩሌተር</h1>
                    @csrf
                    <div class="w-full flex flex-col space-y-2">
                        <label class="text-xl" for="amount">የብድሩ መጠን</label>
                        <input type="number" name="amount" id="amount"
                            class="px-4 py-2 focus:outline-none border-gray-500 border-[1px] rounded text-gray-600">
                    </div>
                    <div class="w-full flex flex-col space-y-2">
                        <label class="text-xl" for="interest">ኢንተረስት</label>
                        <input type="number" name="interest" id="interest"
                            class="px-4 py-2 focus:outline-none border-gray-500 border-[1px] rounded text-gray-600">
                    </div>
                    <div class="w-full flex flex-col space-y-2">
                        <label class="text-xl" for="duration">የክፍያ ጊዜ (በወራት)</label>
                        <input type="number" name="duration" id="duration"
                            class="px-4 py-2 focus:outline-none border-gray-500 border-[1px] rounded text-gray-600">
                    </div>

                    <button id="calculate-btn"
                        class="md:block p-3 px-8  text-white bg-green-600 rounded-full baseline hover:bg-green-800 text-xl hiwua">ካልኩሌት</button>

                </form>
            </div>
            <div class="md:w-1/2 flex items-end md:px-8 justify-start">
                <span class="text-7xl text-yellow-700" id="monthly-payment">0.00 ብር / በወር</span>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        const calculateBtn = document.querySelector("#calculate-btn");

        calculateBtn.addEventListener('click', calculateLoan);

        function calculateLoan(e) {
            e.preventDefault();

            const loanAmount = document.getElementById("amount").value;
            const interestRate = document.getElementById("interest").value;
            const loanDuration = document.getElementById("duration").value;

            // Convert interest rate from percentage to decimal
            const monthlyInterestRate = interestRate / 100 / 12;

            // Calculate the number of monthly payments
            const numberOfPayments = loanDuration;

            // Calculate the monthly payment using the formula
            const monthlyPayment =
                (loanAmount *
                    monthlyInterestRate *
                    Math.pow(1 + monthlyInterestRate, numberOfPayments)) /
                (Math.pow(1 + monthlyInterestRate, numberOfPayments) - 1);

            document.getElementById("monthly-payment").innerHTML = `${monthlyPayment.toFixed(2)} ብር / በወር`;
        }
    </script>
@endsection
