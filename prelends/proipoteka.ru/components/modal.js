jQuery(function($){
  $("#phone").mask("+7 (999) 999-9999");

  $("#name").on('input', function(){
    const oldValue = this.value;
    this.value = this.value.replace(/[^аА-яЯ]/g, '');
    const newValue = this.value;

    const errorElement = $("#error-form");

    if(oldValue.length != 0 && oldValue != newValue)
        errorElement.text("Разрешены только русские символы!");
    else
      errorElement.text("");
  });
});

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

    const phone = document.getElementById("phone");
    const name = document.getElementById("name");

    const nameValue = name.value;
    const phoneValue = phone.value;

    const errorElement = document.getElementById("error-form");

    if(nameValue == "") {
      errorElement.innerText = "Введите имя!";
      return;
    }
    else if(phoneValue == "") {
      errorElement.innerText = "Введите номер телефона!";
      return;
    }
    else if(phoneValue.length != 17) {
      errorElement.innerText = "Некорректный номер телефона!";
      return;
    }
    else {
      errorElement.innerText = "";
    }

    setTimeout(function () {

      (function () {

        let path = document.documentURI.replace("index.php", "").replace(HREF_ID, "");
        path = path.split('?')[0];

        path = path + "prelends/proipoteka.ru/"

        getResource(path + 'php/mail/mail.php')
          .then(data => console.log(data))
          .catch(err => console.log(err));
      }());

      async function getResource(url) {

        const  postData = JSON.stringify({
          phone: phoneValue,
          name: nameValue
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