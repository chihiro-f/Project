{"filter":false,"title":"2021_08_26_012133_create_records_table.php","tooltip":"/site/database/migrations/2021_08_26_012133_create_records_table.php","undoManager":{"mark":60,"position":60,"stack":[[{"start":{"row":16,"column":12},"end":{"row":17,"column":33},"action":"remove","lines":["$table->bigIncrements('id');","            $table->timestamps();"],"id":2}],[{"start":{"row":16,"column":12},"end":{"row":27,"column":28},"action":"insert","lines":["<!-- id INT -->","      $table->increments('id');","      <!-- title varchar(20) -->","      $table->string('title',20);","      <!-- person varchar(20) -->","      $table->string('person',20);","      <!-- url varchar(20) -->","      $table->string('url',65535);","      <!-- created_atとupdated_atの追加 -->","      $table->timestamps();","      <!-- deleted_at　論理削除 -->","      $table->softDeletes();"],"id":3}],[{"start":{"row":16,"column":12},"end":{"row":16,"column":13},"action":"insert","lines":["/"],"id":4},{"start":{"row":16,"column":13},"end":{"row":16,"column":14},"action":"insert","lines":["/"]},{"start":{"row":16,"column":14},"end":{"row":16,"column":15},"action":"insert","lines":["/"]}],[{"start":{"row":16,"column":14},"end":{"row":16,"column":15},"action":"remove","lines":["/"],"id":5}],[{"start":{"row":18,"column":6},"end":{"row":18,"column":7},"action":"insert","lines":["/"],"id":6},{"start":{"row":18,"column":7},"end":{"row":18,"column":8},"action":"insert","lines":["/"]}],[{"start":{"row":20,"column":6},"end":{"row":20,"column":7},"action":"insert","lines":["/"],"id":7},{"start":{"row":20,"column":7},"end":{"row":20,"column":8},"action":"insert","lines":["/"]}],[{"start":{"row":22,"column":6},"end":{"row":22,"column":7},"action":"insert","lines":["/"],"id":8},{"start":{"row":22,"column":7},"end":{"row":22,"column":8},"action":"insert","lines":["/"]}],[{"start":{"row":24,"column":6},"end":{"row":24,"column":7},"action":"insert","lines":["/"],"id":9},{"start":{"row":24,"column":7},"end":{"row":24,"column":8},"action":"insert","lines":["/"]}],[{"start":{"row":26,"column":6},"end":{"row":26,"column":7},"action":"insert","lines":["/"],"id":10},{"start":{"row":26,"column":7},"end":{"row":26,"column":8},"action":"insert","lines":["/"]}],[{"start":{"row":26,"column":11},"end":{"row":26,"column":12},"action":"remove","lines":["-"],"id":11},{"start":{"row":26,"column":10},"end":{"row":26,"column":11},"action":"remove","lines":["-"]},{"start":{"row":26,"column":9},"end":{"row":26,"column":10},"action":"remove","lines":["!"]},{"start":{"row":26,"column":8},"end":{"row":26,"column":9},"action":"remove","lines":["<"]}],[{"start":{"row":26,"column":27},"end":{"row":26,"column":28},"action":"remove","lines":[">"],"id":12},{"start":{"row":26,"column":26},"end":{"row":26,"column":27},"action":"remove","lines":["-"]},{"start":{"row":26,"column":25},"end":{"row":26,"column":26},"action":"remove","lines":["-"]},{"start":{"row":26,"column":24},"end":{"row":26,"column":25},"action":"remove","lines":[" "]}],[{"start":{"row":22,"column":11},"end":{"row":22,"column":12},"action":"remove","lines":["-"],"id":13},{"start":{"row":22,"column":10},"end":{"row":22,"column":11},"action":"remove","lines":["-"]},{"start":{"row":22,"column":9},"end":{"row":22,"column":10},"action":"remove","lines":["!"]},{"start":{"row":22,"column":8},"end":{"row":22,"column":9},"action":"remove","lines":["<"]}],[{"start":{"row":24,"column":11},"end":{"row":24,"column":12},"action":"remove","lines":["-"],"id":14},{"start":{"row":24,"column":10},"end":{"row":24,"column":11},"action":"remove","lines":["-"]},{"start":{"row":24,"column":9},"end":{"row":24,"column":10},"action":"remove","lines":["!"]},{"start":{"row":24,"column":8},"end":{"row":24,"column":9},"action":"remove","lines":["<"]}],[{"start":{"row":20,"column":11},"end":{"row":20,"column":12},"action":"remove","lines":["-"],"id":15},{"start":{"row":20,"column":10},"end":{"row":20,"column":11},"action":"remove","lines":["-"]},{"start":{"row":20,"column":9},"end":{"row":20,"column":10},"action":"remove","lines":["!"]},{"start":{"row":20,"column":8},"end":{"row":20,"column":9},"action":"remove","lines":["<"]},{"start":{"row":20,"column":7},"end":{"row":20,"column":8},"action":"remove","lines":["/"]}],[{"start":{"row":20,"column":7},"end":{"row":20,"column":8},"action":"insert","lines":["/"],"id":16}],[{"start":{"row":18,"column":11},"end":{"row":18,"column":12},"action":"remove","lines":["-"],"id":17},{"start":{"row":18,"column":10},"end":{"row":18,"column":11},"action":"remove","lines":["-"]},{"start":{"row":18,"column":9},"end":{"row":18,"column":10},"action":"remove","lines":["!"]},{"start":{"row":18,"column":8},"end":{"row":18,"column":9},"action":"remove","lines":["<"]}],[{"start":{"row":16,"column":16},"end":{"row":16,"column":17},"action":"remove","lines":["-"],"id":18},{"start":{"row":16,"column":15},"end":{"row":16,"column":16},"action":"remove","lines":["!"]},{"start":{"row":16,"column":14},"end":{"row":16,"column":15},"action":"remove","lines":["<"]}],[{"start":{"row":16,"column":8},"end":{"row":16,"column":12},"action":"remove","lines":["    "],"id":19},{"start":{"row":16,"column":4},"end":{"row":16,"column":8},"action":"remove","lines":["    "]},{"start":{"row":16,"column":0},"end":{"row":16,"column":4},"action":"remove","lines":["    "]},{"start":{"row":15,"column":63},"end":{"row":16,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":15,"column":63},"end":{"row":16,"column":0},"action":"insert","lines":["",""],"id":20},{"start":{"row":16,"column":0},"end":{"row":16,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":17,"column":5},"end":{"row":17,"column":6},"action":"remove","lines":[" "],"id":21},{"start":{"row":17,"column":4},"end":{"row":17,"column":5},"action":"remove","lines":[" "]},{"start":{"row":17,"column":0},"end":{"row":17,"column":4},"action":"remove","lines":["    "]},{"start":{"row":16,"column":26},"end":{"row":17,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":16,"column":26},"end":{"row":17,"column":0},"action":"insert","lines":["",""],"id":22},{"start":{"row":17,"column":0},"end":{"row":17,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":18,"column":5},"end":{"row":18,"column":6},"action":"remove","lines":[" "],"id":23},{"start":{"row":18,"column":4},"end":{"row":18,"column":5},"action":"remove","lines":[" "]},{"start":{"row":18,"column":0},"end":{"row":18,"column":4},"action":"remove","lines":["    "]},{"start":{"row":17,"column":37},"end":{"row":18,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":17,"column":37},"end":{"row":18,"column":0},"action":"insert","lines":["",""],"id":24},{"start":{"row":18,"column":0},"end":{"row":18,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":19,"column":5},"end":{"row":19,"column":6},"action":"remove","lines":[" "],"id":25},{"start":{"row":19,"column":4},"end":{"row":19,"column":5},"action":"remove","lines":[" "]},{"start":{"row":19,"column":0},"end":{"row":19,"column":4},"action":"remove","lines":["    "]},{"start":{"row":18,"column":36},"end":{"row":19,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":18,"column":36},"end":{"row":19,"column":0},"action":"insert","lines":["",""],"id":26},{"start":{"row":19,"column":0},"end":{"row":19,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":20,"column":5},"end":{"row":20,"column":6},"action":"remove","lines":[" "],"id":27},{"start":{"row":20,"column":4},"end":{"row":20,"column":5},"action":"remove","lines":[" "]},{"start":{"row":20,"column":0},"end":{"row":20,"column":4},"action":"remove","lines":["    "]},{"start":{"row":19,"column":39},"end":{"row":20,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":19,"column":39},"end":{"row":20,"column":0},"action":"insert","lines":["",""],"id":28},{"start":{"row":20,"column":0},"end":{"row":20,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":21,"column":5},"end":{"row":21,"column":6},"action":"remove","lines":[" "],"id":29},{"start":{"row":21,"column":4},"end":{"row":21,"column":5},"action":"remove","lines":[" "]},{"start":{"row":21,"column":0},"end":{"row":21,"column":4},"action":"remove","lines":["    "]},{"start":{"row":20,"column":37},"end":{"row":21,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":20,"column":37},"end":{"row":21,"column":0},"action":"insert","lines":["",""],"id":30},{"start":{"row":21,"column":0},"end":{"row":21,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":22,"column":5},"end":{"row":22,"column":6},"action":"remove","lines":[" "],"id":31},{"start":{"row":22,"column":4},"end":{"row":22,"column":5},"action":"remove","lines":[" "]},{"start":{"row":22,"column":0},"end":{"row":22,"column":4},"action":"remove","lines":["    "]},{"start":{"row":21,"column":40},"end":{"row":22,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":21,"column":40},"end":{"row":22,"column":0},"action":"insert","lines":["",""],"id":32},{"start":{"row":22,"column":0},"end":{"row":22,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":23,"column":5},"end":{"row":23,"column":6},"action":"remove","lines":[" "],"id":33},{"start":{"row":23,"column":4},"end":{"row":23,"column":5},"action":"remove","lines":[" "]},{"start":{"row":23,"column":0},"end":{"row":23,"column":4},"action":"remove","lines":["    "]},{"start":{"row":22,"column":34},"end":{"row":23,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":22,"column":34},"end":{"row":23,"column":0},"action":"insert","lines":["",""],"id":34},{"start":{"row":23,"column":0},"end":{"row":23,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":24,"column":5},"end":{"row":24,"column":6},"action":"remove","lines":[" "],"id":35},{"start":{"row":24,"column":4},"end":{"row":24,"column":5},"action":"remove","lines":[" "]},{"start":{"row":24,"column":0},"end":{"row":24,"column":4},"action":"remove","lines":["    "]},{"start":{"row":23,"column":40},"end":{"row":24,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":23,"column":40},"end":{"row":24,"column":0},"action":"insert","lines":["",""],"id":36},{"start":{"row":24,"column":0},"end":{"row":24,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":25,"column":5},"end":{"row":25,"column":6},"action":"remove","lines":[" "],"id":37},{"start":{"row":25,"column":4},"end":{"row":25,"column":5},"action":"remove","lines":[" "]},{"start":{"row":25,"column":0},"end":{"row":25,"column":4},"action":"remove","lines":["    "]},{"start":{"row":24,"column":43},"end":{"row":25,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":24,"column":43},"end":{"row":25,"column":0},"action":"insert","lines":["",""],"id":38},{"start":{"row":25,"column":0},"end":{"row":25,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":26,"column":5},"end":{"row":26,"column":6},"action":"remove","lines":[" "],"id":39},{"start":{"row":26,"column":4},"end":{"row":26,"column":5},"action":"remove","lines":[" "]},{"start":{"row":26,"column":0},"end":{"row":26,"column":4},"action":"remove","lines":["    "]},{"start":{"row":25,"column":33},"end":{"row":26,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":25,"column":33},"end":{"row":26,"column":0},"action":"insert","lines":["",""],"id":40},{"start":{"row":26,"column":0},"end":{"row":26,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":27,"column":5},"end":{"row":27,"column":6},"action":"remove","lines":[" "],"id":41},{"start":{"row":27,"column":4},"end":{"row":27,"column":5},"action":"remove","lines":[" "]},{"start":{"row":27,"column":0},"end":{"row":27,"column":4},"action":"remove","lines":["    "]},{"start":{"row":26,"column":30},"end":{"row":27,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":26,"column":30},"end":{"row":27,"column":0},"action":"insert","lines":["",""],"id":42},{"start":{"row":27,"column":0},"end":{"row":27,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":38,"column":40},"end":{"row":39,"column":0},"action":"insert","lines":["",""],"id":43},{"start":{"row":39,"column":0},"end":{"row":39,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":39,"column":8},"end":{"row":39,"column":36},"action":"insert","lines":["    Schema::drop('records');"],"id":44}],[{"start":{"row":39,"column":8},"end":{"row":39,"column":12},"action":"remove","lines":["    "],"id":45}],[{"start":{"row":39,"column":8},"end":{"row":39,"column":11},"action":"insert","lines":["// "],"id":46}],[{"start":{"row":23,"column":37},"end":{"row":23,"column":38},"action":"remove","lines":["5"],"id":47},{"start":{"row":23,"column":36},"end":{"row":23,"column":37},"action":"remove","lines":["3"]},{"start":{"row":23,"column":35},"end":{"row":23,"column":36},"action":"remove","lines":["5"]},{"start":{"row":23,"column":34},"end":{"row":23,"column":35},"action":"remove","lines":["5"]},{"start":{"row":23,"column":33},"end":{"row":23,"column":34},"action":"remove","lines":["6"]}],[{"start":{"row":23,"column":33},"end":{"row":23,"column":34},"action":"insert","lines":["1"],"id":48},{"start":{"row":23,"column":34},"end":{"row":23,"column":35},"action":"insert","lines":["9"]},{"start":{"row":23,"column":35},"end":{"row":23,"column":36},"action":"insert","lines":["1"]}],[{"start":{"row":23,"column":35},"end":{"row":23,"column":36},"action":"remove","lines":["1"],"id":49},{"start":{"row":23,"column":34},"end":{"row":23,"column":35},"action":"remove","lines":["9"]},{"start":{"row":23,"column":33},"end":{"row":23,"column":34},"action":"remove","lines":["1"]}],[{"start":{"row":23,"column":33},"end":{"row":23,"column":34},"action":"insert","lines":["6"],"id":50},{"start":{"row":23,"column":34},"end":{"row":23,"column":35},"action":"insert","lines":["5"]},{"start":{"row":23,"column":35},"end":{"row":23,"column":36},"action":"insert","lines":["5"]},{"start":{"row":23,"column":36},"end":{"row":23,"column":37},"action":"insert","lines":["3"]},{"start":{"row":23,"column":37},"end":{"row":23,"column":38},"action":"insert","lines":["5"]}],[{"start":{"row":17,"column":36},"end":{"row":17,"column":37},"action":"insert","lines":["-"],"id":51},{"start":{"row":17,"column":37},"end":{"row":17,"column":38},"action":"insert","lines":[">"]},{"start":{"row":17,"column":38},"end":{"row":17,"column":39},"action":"insert","lines":["u"]},{"start":{"row":17,"column":39},"end":{"row":17,"column":40},"action":"insert","lines":["n"]}],[{"start":{"row":17,"column":38},"end":{"row":17,"column":40},"action":"remove","lines":["un"],"id":52},{"start":{"row":17,"column":38},"end":{"row":17,"column":46},"action":"insert","lines":["unsigned"]}],[{"start":{"row":17,"column":46},"end":{"row":17,"column":48},"action":"insert","lines":["()"],"id":53}],[{"start":{"row":17,"column":47},"end":{"row":17,"column":48},"action":"remove","lines":[")"],"id":54},{"start":{"row":17,"column":46},"end":{"row":17,"column":47},"action":"remove","lines":["("]},{"start":{"row":17,"column":45},"end":{"row":17,"column":46},"action":"remove","lines":["d"]},{"start":{"row":17,"column":44},"end":{"row":17,"column":45},"action":"remove","lines":["e"]},{"start":{"row":17,"column":43},"end":{"row":17,"column":44},"action":"remove","lines":["n"]},{"start":{"row":17,"column":42},"end":{"row":17,"column":43},"action":"remove","lines":["g"]},{"start":{"row":17,"column":41},"end":{"row":17,"column":42},"action":"remove","lines":["i"]},{"start":{"row":17,"column":40},"end":{"row":17,"column":41},"action":"remove","lines":["s"]},{"start":{"row":17,"column":39},"end":{"row":17,"column":40},"action":"remove","lines":["n"]},{"start":{"row":17,"column":38},"end":{"row":17,"column":39},"action":"remove","lines":["u"]},{"start":{"row":17,"column":37},"end":{"row":17,"column":38},"action":"remove","lines":[">"]},{"start":{"row":17,"column":36},"end":{"row":17,"column":37},"action":"remove","lines":["-"]}],[{"start":{"row":17,"column":36},"end":{"row":17,"column":37},"action":"insert","lines":["-"],"id":55},{"start":{"row":17,"column":37},"end":{"row":17,"column":38},"action":"insert","lines":[">"]}],[{"start":{"row":17,"column":38},"end":{"row":17,"column":39},"action":"insert","lines":["u"],"id":56},{"start":{"row":17,"column":39},"end":{"row":17,"column":40},"action":"insert","lines":["n"]}],[{"start":{"row":17,"column":38},"end":{"row":17,"column":40},"action":"remove","lines":["un"],"id":57},{"start":{"row":17,"column":38},"end":{"row":17,"column":46},"action":"insert","lines":["unsigned"]}],[{"start":{"row":17,"column":46},"end":{"row":17,"column":48},"action":"insert","lines":["()"],"id":58}],[{"start":{"row":17,"column":45},"end":{"row":17,"column":46},"action":"remove","lines":["d"],"id":59},{"start":{"row":17,"column":44},"end":{"row":17,"column":45},"action":"remove","lines":["e"]},{"start":{"row":17,"column":43},"end":{"row":17,"column":44},"action":"remove","lines":["n"]},{"start":{"row":17,"column":42},"end":{"row":17,"column":43},"action":"remove","lines":["g"]},{"start":{"row":17,"column":41},"end":{"row":17,"column":42},"action":"remove","lines":["i"]},{"start":{"row":17,"column":40},"end":{"row":17,"column":41},"action":"remove","lines":["s"]}],[{"start":{"row":17,"column":40},"end":{"row":17,"column":41},"action":"insert","lines":["i"],"id":60},{"start":{"row":17,"column":41},"end":{"row":17,"column":42},"action":"insert","lines":["q"]},{"start":{"row":17,"column":42},"end":{"row":17,"column":43},"action":"insert","lines":["u"]},{"start":{"row":17,"column":43},"end":{"row":17,"column":44},"action":"insert","lines":["e"]}],[{"start":{"row":23,"column":36},"end":{"row":23,"column":37},"action":"remove","lines":["3"],"id":61},{"start":{"row":23,"column":35},"end":{"row":23,"column":36},"action":"remove","lines":["5"]},{"start":{"row":23,"column":34},"end":{"row":23,"column":35},"action":"remove","lines":["5"]},{"start":{"row":23,"column":33},"end":{"row":23,"column":34},"action":"remove","lines":["6"]}],[{"start":{"row":23,"column":33},"end":{"row":23,"column":34},"action":"insert","lines":["2"],"id":62},{"start":{"row":23,"column":34},"end":{"row":23,"column":35},"action":"insert","lines":["5"]}]]},"ace":{"folds":[],"scrolltop":49,"scrollleft":0,"selection":{"start":{"row":23,"column":36},"end":{"row":23,"column":36},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":12,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1630221415182,"hash":"d50fb9dc88826f948db3a5c13b6589fe5c7be761"}