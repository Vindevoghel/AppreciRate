var listAllCompanies = document.getElementsByClassName("company");

console.log(listAllCompanies);

document.getElementById("company").addEventListener("change", function () {
    document.getElementById("department").setAttribute("style", "visibility: visible");
    document.getElementById("submit").style.display = "none";

    console.log(document.getElementById("company").selectedOptions[0].getAttribute("value"));
    var listOfDepartments = document.getElementsByClassName("department");

    for (let department of listOfDepartments){
        if (department.getAttribute("company") === document.getElementById("company").selectedOptions[0].getAttribute("value")){
            department.style.display = "inline";
            document.getElementById("department").addEventListener("change", function () {
                document.getElementById("submit").style.display = "inline";
            })
        }
        else {
            department.style.display = "none";
        }
    }
});

/*
for (let company of listAllCompanies) {
    console.log(company);

    company.addEventListener("click", function () {

        var listAllDepartments = document.getElementsByClassName("department");
        console.log(listAllDepartments);
        for (let department of listAllDepartments) {
            console.log(department);
            console.log(department.getAttribute("company"));
            console.log(company.getAttribute("value"));
            if (department.getAttribute("company") === company.getAttribute("value")) {
                // why use display css property and not visibility property?
                // because with visibility property doesn't work in a select box for some reason
                department.style.display = "inline";
                department.addEventListener("click", function () {
                    document.getElementById("submit").style.display = "inline";
                })
            } else {
                department.style.display = "none";
            }
        }
    })
}
*/