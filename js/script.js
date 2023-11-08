const search =() => {
    // const searchbox = document.getElementById("search-item").value.toUpperCase();
    const storeitems = document.getElementById("newest")
    const product =   document.querySelectorAll(".product-fade")
    const pname = storeitems.getElementsByName("a")

    for(var i = 0; i > pname.length; i++){
        let match = product[i].getElementsByName("a")[0];
        if(match){
            let textvalue= match.textContent || match.innerHTML

            if(textvalue.toUpperCase().indexof(searchbox) > -1){
                product[i].style.display = "";
            }else{
                product[i].style.display = "none"; 
            }
        }
    }
}