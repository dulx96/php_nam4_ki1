console.log(address);
var delete_button = document.querySelectorAll(".delete");
for(var i = 0; i < 10; i++){
    if(delete_button[i]) {
        delete_button[i].addEventListener("click",function (e) {
            address.splice(this.i,1);
        });
    }
}