window.onload = function() {

  const HREF_ID = "#ulp-wwxxhOM6JtVDZgco";

  const modalOrder = document.getElementById('modal-order');
  const modalInfo = document.getElementById('modal-status');

  function closeStatus() {
    modalInfo.style.display = "none";
  }

  function openStatus() {
    modalInfo.style.display = "block";
  }

  function openModal() {
    modalOrder.style.display = "block";
  }

  function closeModal() {
    modalOrder.style.display = "none";
  }

  if (modalInfo && modalInfo.style.display != "none")
    setTimeout(closeStatus, 1000);

  document.querySelectorAll('a')
    .forEach(a => a.addEventListener('click', ev => {

      const href = a.getAttribute('href');

      if (href == HREF_ID) {
        openModal();
        ev.preventDefault();
      }
    }));

  document.getElementById("send-order").onclick = function () {
    setTimeout(function () {

      (function () {

        const  path = document.documentURI.replace("index.php", "").replace(HREF_ID, "");

        getResource(path + 'php/mail/mail.php')
          .then(data => console.log(data))
          .catch(err => console.log(err));
      }());

      async function getResource(url) {
        const phone = document.getElementById("phone");
        const name = document.getElementById("name");

        const  postData = JSON.stringify({
          phone: phone.value,
          name: name.value
        });

        const res = await fetch(url, {
          method: 'post',
          body: postData,
          headers: new Headers({
            'Content-Type': 'application/json; charset=utf-8'
          }),
        });

        if (!res.ok) { // не 200
          throw new Error(`Не удалось получить сделать отправку статус: ${res.status}`);
        }

        const result = await res.text()
        document.getElementById("status-message").innerText = result;
        name.value = "";
        phone.value = "";

        closeModal();
        openStatus();

      }

    }, 1000);
  }


  const span = document.getElementById("close-modal");
  span.onclick = function () {
    closeModal();
  }

  const closeStatusBtn = document.getElementById("close-status");
  closeStatusBtn.onclick = function () {
    closeStatus();
  }


  window.onclick = function (event) {
    const target = event.target.id;
    if (target == 'modal-order')
      closeModal();
    else if(target == 'modal-status'){
      closeStatus();
    }
  }
}