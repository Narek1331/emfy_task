
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

const token =  getCookie('token')


if(!token){
    location.href = `${window.location.origin}/login`
}

const productsDiv = document.getElementById("products")


async function get_products(){
    const url = `${window.location.origin}/api/product`;


    try {
    const response = await fetch(url, {
    method: 'GET',
    headers: {
    'Content-Type': 'application/json',
    'Authorization': `Bearer ${token}`
    }
    });

    const json = await response.json().then(json => {
        if(response.ok){
            let products = json.data;
            let p = 'No Product';

            if(products.length){
                p = '';
                for(let prod=0;prod<products.length;prod++){
                    p+=`<div class="card">
                    <div class="card-body">
                        <h5 class="card-title">${products[prod].name}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">${products[prod].description}</h6>
                        <p class="card-text">${products[prod].count}</p>
                        <a href="" class="card-link">
                        <i class="fa fa-trash-o" onclick="delete_prod('${products[prod].id}')"></i>
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

async function delete_prod(id){
    const url = `${window.location.origin}/api/product/${id}`;

    const response = await fetch(url, {
    method: 'DELETE',
    headers: {
    'Content-Type': 'application/json',
    'Authorization': `Bearer ${token}`
    }
    });

}

get_products()

