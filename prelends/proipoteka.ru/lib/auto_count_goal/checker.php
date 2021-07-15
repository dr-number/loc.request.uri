<?php
    include_once $_SERVER['DOCUMENT_ROOT']."/php/metric-api.php";

    $FILE_JSON = "settings.json";
    $json = json_decode(file_get_contents($FILE_JSON));

    $projects = $json->projects;
    $oldProjects = $json->oldProjects;

    $countProjects = count($projects);

    $old_MD5 = $json->md5;
    $current_md5 = md5(json_encode($projects, JSON_UNESCAPED_UNICODE));

    //$newProjects = array();

    if($countProjects != 0){

        if($old_MD5 != $current_md5) {
            foreach ($projects as $item) {

                //Найден новый проект
                if(!in_array($item->name, $oldProjects)){

                    $name = $item->name;
                    $counterId = createCounter($item->url, $item->counterName);

                    if($counterId != -1)
                        $goalId = createGoal($counterId, "Проход по ссылке 2temp", "url", 0, "user", "", "contain", "#q1");

                    //array_push($newProjects, $name);
                    array_push($oldProjects, $name);
                }
            }

            $json->oldProjects = $oldProjects;
            $json->md5 = $current_md5;
            file_put_contents($FILE_JSON, json_encode($json, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
        }
    }
    else if($old_MD5 == ""){
        $json->md5 = $current_md5;
        file_put_contents($FILE_JSON, json_encode($json, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
    }


    //$data = array("md5" => $md5);
    $result = json_encode($json);
    echo $result;


    /*
        {
  "projects": [
    {"name": "", "url": "", "counterName": ""}
  ],
  "md5": "",
  "news": ""
}
     */