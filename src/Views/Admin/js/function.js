showProduct = () => {
    document.getElementById("show-product").style.display = "block";
    document.getElementById("show-user").style.display = "none";
    document.getElementById("show-type").style.display = "none";
    document.getElementById("show-size").style.display = "ône";

}
showUser = () => {
    document.getElementById("show-product").style.display = "none";
    document.getElementById("show-user").style.display = "block";
    document.getElementById("show-type").style.display = "none";
    document.getElementById("show-size").style.display = "none";
}
showType = () => {
    document.getElementById("show-product").style.display = "none";
    document.getElementById("show-user").style.display = "none";
    document.getElementById("show-type").style.display = "block";
    document.getElementById("show-size").style.display = "none";
}
showSize = () => {
    document.getElementById("show-product").style.display = "none";
    document.getElementById("show-user").style.display = "none";
    document.getElementById("show-type").style.display = "none";
    document.getElementById("show-size").style.display = "block";
}
showAddProduct = () => {
    document.getElementById("form-create").style.display = "block";
    document.getElementById("form-add-size").style.display = "none";
    document.getElementById("form-add-type").style.display = "none";
}
closeAddProduct = () => {
    document.getElementById("form-create").style.display = "none";
}
showAddType = () => {
    document.getElementById("form-create").style.display = "none";
    document.getElementById("form-add-size").style.display = "none";
    document.getElementById("form-add-type").style.display = "block";
}
closeAddType = () => {
    document.getElementById("form-add-type").style.display = "none";
}
showAddSize = () => {
    document.getElementById("form-create").style.display = "none";
    document.getElementById("form-add-size").style.display = "block";
    document.getElementById("form-add-type").style.display = "none";
}
closeAddSize = () => {
    document.getElementById("form-add-size").style.display = "none";
}