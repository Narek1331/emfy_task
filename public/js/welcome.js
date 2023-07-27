const productsDiv = document.getElementById("products")

async function get_products(){
    const url = `${window.location.origin}/api/product/only_names`;


    try {
    const response = await fetch(url, {
    method: 'GET',
    headers: {
    'Content-Type': 'application/json',
    }
    });

    const json = await response.json().then(json => {
        if(response.ok){
            let products = json.data;
            let p = 'No Product';

            if(products.length){
                p = '';
                for(let prod=0;prod<products.length;prod++){
                    p+=`<div class="card" onclick="open_modal('${products[prod].id}')" data-toggle="modal" data-target="#exampleModal">
                    <div class="card-body">
                        <h5 class="card-title">${products[prod].name}</h5>
                        </a>
                    </div>
                </div>`
                }
            }

            productsDiv.innerHTML = p;

        }
    });

    } catch (error) {
    console.error('Ошибка:', error);
    }
}


get_products()

function getCookie(cname) {
    let name = cname + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for(let i = 0; i <ca.length; i++) {
      let c = ca[i];
      while (c.charAt(0) == ' ') {
        c = c.substring(1);
      }
      if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
      }
    }
    return "";
}


async function open_modal(id){

    const token =  getCookie('token')


    if(!token){
        location.href = `${window.location.origin}/login`
    }

    const name = document.getElementById("prod_name");
    const desc = document.getElementById("prod_desc");
    const count = document.getElementById("prod_count");

    const url = `${window.location.origin}/api/product/${id}`;


    try {
    const response = await fetch(url, {
    method: 'GET',
    headers: {
    'Content-Type': 'application/json',
    }
    });

    const json = await response.json().then(json => {
        if(response.ok){
            name.innerHTML = json.data.name;
            desc.innerHTML = json.data.description;
            count.innerHTML = json.data.count;
        }
    });

    } catch (error) {
    console.error('Ошибка:', error);
    }
}
