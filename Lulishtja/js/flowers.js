const box_container = document.querySelector('.box-container');
const searchBar = document.querySelector('.search');

let html = '';

if (flowers.length > 0) {
    flowers.forEach(flower => {
        html += flowerItem(flower);
    });
} else {
    html += '<h1 style="font-size: 6rem; color: #333; margin: auto;">Sorry, no flowers!</h1>'
}

box_container.innerHTML = html;

searchBar.addEventListener('keyup', (e) => {
    const flow = e.target.value;
    const filterFlowers = flowers.filter(flower => {
        return flower.name.toLowerCase().includes(flow.toLowerCase());
    })

    let html = '';
    
    if (filterFlowers.length > 0) {
        filterFlowers.forEach(flower => {
            html += flowerItem(flower);
        });
    } else {
        html += '<h1 style="font-size: 3rem; color: #333; margin: auto;">Sorry, we didnt find anything you searched!</h1>'
    }

    box_container.innerHTML = html;
})


function validateArr(form){

    var username = document.getElementById("username").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;


    if(username == ''){
        alert("Please enter your username");
    }

    if(email == ''){
        alert("Please enter an email");
    }
   
    if(password == ''){
        alert("Please enter a password");
    }

    if(password.length < 8){
        document.getElementById('password').innerHTML = alert("Please write 8 or more characters");
        return false;

    }if(password.length > 16){
        document.getElementById('password').innerHTML = alert("Please write 16 or less characters");
        return false;
    }

    else
        alert("Succesful register");
    }
     
