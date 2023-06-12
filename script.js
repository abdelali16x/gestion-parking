function updateDocMatricule() {
    var vehiculeMatricule = document.getElementById("vehiculeMatricule");
    var docMatricule = document.getElementById("docMatricule");
    docMatricule.value = vehiculeMatricule.value;
    var repMatricule = document.getElementById("repMatricule");
    repMatricule.value = vehiculeMatricule.value;
}

function showPopup(popupId) {
    var popup = document.getElementById("popup-" + popupId);
    popup.style.display = "block";
}

function hidePopup(popupId) {
    var popup = document.getElementById("popup-" + popupId);
    popup.style.display = "none";
}



/////////////////////////////////////////////////////////////////////////////////////////
function fetchveh() {
    fetch('display_data.php')
        .then(response => response.text())
        .then(data => {
            document.getElementById('dataveh').innerHTML = data;
        })
        .catch(error => console.error(error));
}

// Call the fetchData function to retrieve and display the data
fetchveh();

//---------------------------
function fetchdocData() {
    fetch('display_doc.php')
        .then(response => response.text())
        .then(data => {
            document.getElementById('datadoc').innerHTML = data;
        })
        .catch(error => console.error(error));
}

// Call the fetchData function to retrieve and display the data
fetchdocData();
//=============================================================
function fetchrepData() {
    fetch('display_rep.php')
        .then(response => response.text())
        .then(data => {
            document.getElementById('datarep').innerHTML = data;
        })
        .catch(error => console.error(error));
}

// Call the fetchData function to retrieve and display the data
fetchrepData();
//display all ---===--=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-==-==-=-=-=-=-===-=-
function fetchall() {
    fetch('display_all.php')
        .then(response => response.text())
        .then(data => {
            document.getElementById('alldata').innerHTML = data;
        })
        .catch(error => console.error(error));
}

// Call the fetchData function to retrieve and display the data
fetchall();












//ONE TABLE//////////////////////
function fetchData() {
    fetch('one_table.php')
        .then(response => response.json())
        .then(data => {
            const table = document.getElementById('dataContainer');
            data.forEach(item => {
                const row = table.insertRow();
                const matricule = item.Mat ? item.Mat : '';
                const marque = item.Marque ? item.Marque : '';
                const carb = item.Carb ? item.Carb : '';
                const p_p = item.P_P ? item.P_P : '';
                const type_doc = item.type_doc ? item.type_doc : '';
                const date_doc = item.date_doc ? item.date_doc : '';
                const d_exp = item.D_Exp ? item.D_Exp : '';
                const cout = item.Cout ? item.Cout : '';
                const date_r = item.Date_R ? item.Date_R : '';
                const type_r = item.type_R ? item.type_R : '';
                const observ = item.Observ ? item.Observ : '';

                row.insertCell().textContent = matricule;
                row.insertCell().textContent = marque;
                row.insertCell().textContent = carb;
                row.insertCell().textContent = p_p;
                row.insertCell().textContent = type_doc;
                row.insertCell().textContent = date_doc;
                row.insertCell().textContent = d_exp;
                row.insertCell().textContent = cout;
                row.insertCell().textContent = date_r;
                row.insertCell().textContent = type_r;
                row.insertCell().textContent = observ;
            });
        })
        .catch(error => console.error(error));
}

// Call the fetchData function to retrieve and display the data
fetchData();

