var listAllCompanies = document.getElementsByClassName("company");

console.log(listAllCompanies);

for(let company of listAllCompanies){
    console.log(company);
    company.addEventListener("click", function () {
        document.getElementById("department").style.visibility = "visible";

        var listAllDepartments = document.getElementsByClassName("department");
        console.log(listAllDepartments);
        for (let department of listAllDepartments){
            console.log(department);
            if(department.getAttribute("company") === company.getAttribute("value")){
                // why use display css property and not visibility property?
                // because with visibility property doesn't work in a select box for some reason
                department.style.display = "inline";
            }
            else{
                department.style.display = "none";
            }
        }
    })
}
