function search(){
    var surname=document.getElementById('cognome').value;
    var cap=document.getElementById('CAP').value;

    fetchData(surname,cap);


}

function fetchData(surname,cap) {

    fetch(`/api/dati?cognome=${surname || ""}&cap=${cap || ""}`)
        .then(response => response.json())
        .then(data => {
            const body = document.getElementById("data");

            body.innerHTML = "";

            data.forEach((d) => {
                body.innerHTML += `
                    <tr>
                        <td>${d.id}</td>
                        <td>${d.cognome}</td>
                        <td>${d.nome}</td>
                        <td>${d.citta}</td>
                        <td>${d.indirizzo}</td>
                        <td>${d.CAP}</td>
                        <td>${d.email}</td>
                        <td>${d.cellulare}</td>
                    </tr>
                `
            })
        });

}


export function Lista() {
    const submit = document.getElementById('submit');

    console.log(submit);

    submit.addEventListener("click", search)


}

