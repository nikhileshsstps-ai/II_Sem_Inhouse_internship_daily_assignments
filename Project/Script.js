function convertCurrency(){

    let amount = document.getElementById("amount").value;

    let from = document.getElementById("from").value;

    let to = document.getElementById("to").value;

    let result = document.getElementById("result");

    let rates = {

       

        USD: 1,
        INR: 92,
        CAD: 1.37,
        EUR: 0.85,
        GBP: 0.74,
        JPY: 147,
        CNY: 7.18,
        RUB: 78.50,
        PKR: 284,
        NPR: 137.60,
        BDT: 122.50


    };

    let amountInUSD = amount / rates[from];

    let converted = amountInUSD * rates[to];

    result.innerHTML = amount + " " + from + " = " + converted.toFixed(2) + " " + to;

}