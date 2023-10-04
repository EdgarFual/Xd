const inputs = document.querySelectorAll(".input");
const userField= document.querySelector("[name=user]")
const passField= document.querySelector("[name=pass]")

//event trans focus
function addcl(){
    let parent = this.parentNode.parentNode;
    parent.classList.add("focus");
}
function remcl(){
    let parent= this.parentNode.parentNode;
    if(this.value==""){
        parent.classList.remove("focus");
    }
}

inputs.forEach(input =>{
    input.addEventListener("focus",addcl);
    input.addEventListener("blur",remcl);
});

//event validacion
userField.addEventListener("blur", function()
    {
        console.log("saliste del campo")
    }
)