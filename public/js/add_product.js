
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


async function add(){
    let name = document.querySelector("input[name='name']").value;
    let description = document.querySelector("input[name='description']").value;
    let count = document.querySelector("input[name='count']").value;

    const url = `${window.location.origin}/api/product`;
    const data = { name, description, count };


    try {
    const response = await fetch(url, {
    method: 'POST',
    body: JSON.stringify(data),
    headers: {
    'Content-Type': 'application/json',
    'Authorization': `Bearer ${token}`
    }
    });

    const json = await response.json();

    if(response.ok){
        location.href = `${window.location.origin}/user_profile`
    }

    } catch (error) {
    console.error('Ошибка:', error);
    }
}
