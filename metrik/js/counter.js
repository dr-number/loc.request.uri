setTimeout(function () {

  (function () {
    getResource(window.METRIK_JSON + 'metrics.json')
      .then(data => createViewCounter(data))
      .catch(err => console.log(err));
  }());

  async function getResource(url) {
    const res = await fetch(url);

    if (!res.ok) { // не 200
      throw new Error(`Не удалось получить ${url}, статус: ${res.status}`);
    }
    const result = await res.json();
    return result;
  }

  function createViewCounter(metrikaResponse) {

    const locationUrl = window.location.pathname; // определяем текущий URL без домена и http

    let patern = 'effeminate-beacon.000webhostapp.com';
    let summCountPeople = 0;

    if (locationUrl.slice(-1) == '/') {
      patern += locationUrl.substring(0, locationUrl.length - 1);
    }

    const data = metrikaResponse['data'];
    let str;

    data.forEach(function (item) {
      str = item['dimensions'][0]['name'];

      if (patern.indexOf(str)) {
        summCountPeople += item['metrics'][0];
      }
    });
    let countElem = document.createElement('span'); // создаём новый элемент для вставки на страницу
    countElem.className = 'countPeople';
    countElem.innerHTML = '👁' + summCountPeople;

    let view_counter = document.getElementById('view_counter');

    if (summCountPeople > 0) { // показываем счётчик, только если количество просмотров больше нуля
      view_counter.appendChild(countElem);
    }

  };

}, 1000);