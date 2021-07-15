class Goal{
  constructor(data) {
    this.data = data.goal;
    this.conditions = this.data.conditions[0];
  }

  getId(){
    return this.data.id;
  }

  getName(){
    return this.data.name;
  }

  getType(){
    return this.data.type;
  }

  getDefaultPrice(){
    return this.data.default_price;
  }

  isRetargeting(){
    return this.data.is_retargeting;
  }

  getGoalSource(){
    return this.data.goal_source;
  }

  getPrevGoalId(){
    return this.data.prev_goal_id;
  }

  getConditionsType(){
    return this.conditions.type;
  }

  getConditionsUrl(){
    return this.conditions.url;
  }

}

setTimeout(function () { // выполнять функцию через 1000 ms

  (function () {
    getResource(window.METRIK_JSON + 'goal_order.json') //источник
      .then(data => parseGoal(data)) // передаём ответ от сервера
      .catch(err => console.log(err));
  }());

  async function getResource(url) {
    const res = await fetch(url); // ждём ответ, только тогда наш код пойдёт дальше

    if (!res.ok) { // не 200
      throw new Error(`Не удалось получить ${url}, статус: ${res.status}`);
    }
    const result = await res.json();
    return result;
  }

  function parseGoal(data){

    const goal = new Goal(data);

    console.log("Goal:");
    console.log("id: " + goal.getId());
    console.log("name: " + goal.getName());
    console.log("type: " + goal.getType());
    console.log("default price: " + goal.getDefaultPrice());
    console.log("is retargeting: " + goal.isRetargeting());
    console.log("goal source: " + goal.getGoalSource());
    console.log("prev goalId: " + goal.getPrevGoalId());

    console.log("Goal conditions:");
    console.log("type: " + goal.getConditionsType());
    console.log("url: " + goal.getConditionsUrl());

  }



}, 1000);