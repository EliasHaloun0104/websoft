// Please see documentation at https://docs.microsoft.com/aspnet/core/client-side/bundling-and-minification
// for details on configuring this project to bundle and minify static web assets.

// Write your JavaScript code.

const url = "https://localhost:44311/api/Accounts";
function next() {
	var num = document.getElementById('navNum').innerText;
	fetch(`${url}/${num}`, {
		method: 'POST'
	})
		.then(response => response.json())
		.then(data => displayAccountRecord(data))
		.catch(error => {
			console.error('Unable to get Account.', error);
			currentRecord = 0;
		});


}

function previous() {

}

function displayAccountRecord(json) {
	document.getElementById('navNum').innerText = json.number;
	document.getElementById('navBalance').innerText = json.balance;
	document.getElementById('navLabel').innerText = json.label;
	document.getElementById('navOwner').innerText = json.owner;
}




//Using REST FULL API
function transfer() {
	var from = getUserOption('from');
	var to = getUserOption('to');
	var amount = document.getElementById("amount").value;

	fetch(`${url}/${from}/${to}/${amount}`, {
		method: 'POST'
	})
		.then(response => response.text())
		.then(data => {
			alert(data);
			location.reload();
		})
		.catch(error => console.error('Unable to get Account.', error));
}

function GetAccount(fromOrTo) {	
	var itemId = getUserOption(fromOrTo);

	fetch(`${url}/${itemId}`, {
		method: 'GET'
	})
		.then(response => response.json())
		.then(data => DisplayData(data, fromOrTo))
		.catch(error => console.error('Unable to get Account.', error));	
}

function DisplayData(json, fromOrTo) {
	document.getElementById(fromOrTo + "Balance").value = json.balance;
	document.getElementById(fromOrTo + "Label").value = json.label;
	document.getElementById(fromOrTo + "Owner").value = json.owner;
}

function getUserOption(formOrTo) {
	var elem = document.getElementById(formOrTo);
	return elem.options[elem.selectedIndex].text;
}

