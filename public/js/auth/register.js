
async function signup(){
    let name = document.querySelector("input[name='name']").value;
    let email = document.querySelector("input[name='email']").value;
    let password = document.querySelector("input[name='password']").value;
    let phone_number = document.querySelector("input[name='phone_number']").value;

    const url = `${window.location.origin}/api/auth/signup`;
    const data = { name, email, password, phone_number };


    try {
    const response = await fetch(url, {
    method: 'POST',
    body: JSON.stringify(data),
    headers: {
    'Content-Type': 'application/json'
    }
    });
    const json = await response.json();

    if(response.ok){
        location.href = `${window.location.origin}/login`
    }

    } catch (error) {
    console.error('Ошибка:', error);
    }
}
