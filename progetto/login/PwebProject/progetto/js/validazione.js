let signUp = document.getElementById("form1");

signUp.addEventListener("submit",(e) =>
{
    e.preventDefault();
    console.log(new FormData(signUp))
        fetch("php/controlSignUp.php", {
            method: 'POST',
            body: new FormData(signUp)
        })
        .then(response => response.json())
        .then(data => {
            if(!data['result']){
                errorMessage.style.display = "block";
                errorMessage.innerHTML = data['text'];
            }
            else{
                window.location.replace('nuova_partita.php');
            }
        });
})