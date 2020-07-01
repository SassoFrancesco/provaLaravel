function insert(e){
    e.preventDefault();

    var cognome=document.getElementById('cognome_form').value;
    var nome=document.getElementById('nome').value;
    var citta=document.getElementById('citta').value
    var indirizzo=document.getElementById('indirizzo').value;
    var cap=document.getElementById('cap_form').value;
    var email=document.getElementById('email').value;
    var cellulare=document.getElementById('cellulare').value;


    fetchData(cognome,nome,citta,indirizzo,cap,email,cellulare);
}

function fetchData(cognome,nome,citta,indirizzo,cap,email,cellulare) {


    fetch(`/api/dati`, {
        body: JSON.stringify({
            cognome:cognome,
            nome:nome,
            citta:citta,
            indirizzo:indirizzo,
            cap:cap,
            email:email,
            cellulare:cellulare,
        }),
        headers: {
            'Content-Type': 'application/json'
            // 'Content-Type': 'application/x-www-form-urlencoded',
        },
        method: "POST"
    })
        .then(response => response.json())
        .then(data => {
            const alertEl = document.getElementById("alert")

            if(data.success) {
                alertEl.innerHTML = `<br><br><p>Success</p>`
            } else {
                alertEl.innerHTML = `<br><br><p>Denied</p>`
            }
        })
}

export function Form() {
    const insertEl = document.getElementById('inserimento_dati');

    console.log(insertEl);

    insertEl.addEventListener("submit", insert);

}
