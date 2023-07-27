
async function login(){
    let email = document.querySelector("input[name='email']").value;
    let password = document.querySelector("input[name='password']").value;

    const url = `${window.location.origin}/api/auth/login`;
    const data = { email, password };

    try {
    const response = await fetch(url, {
    method: 'POST',
    body: JSON.stringify(data),
    headers: {
    'Content-Type': 'application/json'
    }
    });
    const json = await response.json().then(json => {
        if(response.ok){
            document.cookie = `token=${json.access_token}`;
            location.href = `${window.location.origin}/user_profile`
        }
    });


    } catch (error) {
    console.error('Ошибка:', error);
    }
}
