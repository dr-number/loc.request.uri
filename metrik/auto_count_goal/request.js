setInterval(function () {

  (function () {

    getResource(window.CURRNET_HOST + 'metrik/auto_count_goal/checker.php')
      .then(data => console.log(data))
      .catch(err => console.log(err));
  }());

  async function getResource(url) {
    const res = await fetch(url);

    if (!res.ok) { // не 200
      throw new Error(`Не удалось получить ${url}, статус: ${res.status}`);
    }
    const result = await res.text();
    return result;
  }

}, 1000);