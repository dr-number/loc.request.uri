class Counters{
  constructor(data) {
    this.data = data;
    this.counters = this.data.counters;
  }

  getCount(){
    return this.data.counters.length;
  }

  isExistId(id){
    const count = this.getCount();
    const counters = this.data.counters;

     for (let i = 0; i < count; ++i){
      if(counters[i].id == id)
        return i;
    }

    return -1;
  }

  isExistName(name){
    const count = this.getCount();
    const counters = this.data.counters;

    for (let i = 0; i < count; ++i){
      if(counters[i].name == name)
        return i;
    }

    return -1;
  }

  getCounterId(id){

    id = this.isExistId(id);
    if (id == 1)
      return -1

    return this.data.counters[id];

  }

  getCounterName(name){

    const id = this.isExistName(name);
    if (id == -1)
      return -1

    return this.data.counters[id];

  }

}

setTimeout(function () {

  (function () {
    getResource('counters_info.json')
      .then(data => parseCounters(data))
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

  function parseCounters(data){

    const counters = new Counters(data);

    console.log("================================================");
    console.log("Counters:");
    console.log("count: " + counters.getCount());

    const findId = "82871641";
    const findName = "Пройти по ссылке ВК";

    console.log("is exist id " + findId + " in index : " + counters.isExistId(findId));
    console.log("get find id " + findId + " : " + counters.getCounterId(findId));

    console.log("is exist name " + findName + " in index : " + counters.isExistName(findName));
    console.log("get find name " + findName + " : " + counters.getCounterName(findName));

  }

}, 1000);