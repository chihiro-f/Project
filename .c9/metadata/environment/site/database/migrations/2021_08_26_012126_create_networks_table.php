{"filter":false,"title":"2021_08_26_012126_create_networks_table.php","tooltip":"/site/database/migrations/2021_08_26_012126_create_networks_table.php","undoManager":{"mark":79,"position":79,"stack":[[{"start":{"row":16,"column":12},"end":{"row":17,"column":33},"action":"remove","lines":["$table->bigIncrements('id');","            $table->timestamps();"],"id":2}],[{"start":{"row":16,"column":12},"end":{"row":33,"column":7},"action":"insert","lines":["      <!-- id INT -->","      $table->increments('id');","      <!-- title varchar(20) -->","      $table->string('title',20);","      <!-- content TEXT -->","      $table->text('content');","      <!-- created_atとupdated_atの追加 -->","      $table->timestamps();","      <!-- deleted_at　論理削除 -->","      $table->softDeletes();","","      <!-- user_id 設定 -->","      $table->increment('user_id');","      <!-- 外部キー制約 -->","      $table->foreign('user_id')","                    ->references('id')->on('users')","                    ->onDelete('set null');","    });"],"id":3}],[{"start":{"row":16,"column":18},"end":{"row":16,"column":19},"action":"insert","lines":["/"],"id":4},{"start":{"row":16,"column":19},"end":{"row":16,"column":20},"action":"insert","lines":["/"]}],[{"start":{"row":18,"column":6},"end":{"row":18,"column":7},"action":"insert","lines":["/"],"id":5},{"start":{"row":18,"column":7},"end":{"row":18,"column":8},"action":"insert","lines":["/"]}],[{"start":{"row":20,"column":6},"end":{"row":20,"column":7},"action":"insert","lines":["/"],"id":6},{"start":{"row":20,"column":7},"end":{"row":20,"column":8},"action":"insert","lines":["/"]}],[{"start":{"row":22,"column":6},"end":{"row":22,"column":7},"action":"insert","lines":["/"],"id":7},{"start":{"row":22,"column":7},"end":{"row":22,"column":8},"action":"insert","lines":["/"]}],[{"start":{"row":24,"column":6},"end":{"row":24,"column":7},"action":"insert","lines":["/"],"id":8},{"start":{"row":24,"column":7},"end":{"row":24,"column":8},"action":"insert","lines":["/"]}],[{"start":{"row":27,"column":6},"end":{"row":27,"column":7},"action":"insert","lines":["/"],"id":9},{"start":{"row":27,"column":7},"end":{"row":27,"column":8},"action":"insert","lines":["/"]}],[{"start":{"row":29,"column":6},"end":{"row":29,"column":7},"action":"insert","lines":["/"],"id":10},{"start":{"row":29,"column":7},"end":{"row":29,"column":8},"action":"insert","lines":["/"]}],[{"start":{"row":17,"column":5},"end":{"row":17,"column":6},"action":"remove","lines":[" "],"id":11},{"start":{"row":17,"column":4},"end":{"row":17,"column":5},"action":"remove","lines":[" "]},{"start":{"row":17,"column":0},"end":{"row":17,"column":4},"action":"remove","lines":["    "]},{"start":{"row":16,"column":35},"end":{"row":17,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":16,"column":35},"end":{"row":17,"column":0},"action":"insert","lines":["",""],"id":12},{"start":{"row":17,"column":0},"end":{"row":17,"column":18},"action":"insert","lines":["                  "]}],[{"start":{"row":16,"column":17},"end":{"row":16,"column":18},"action":"remove","lines":[" "],"id":13},{"start":{"row":16,"column":16},"end":{"row":16,"column":17},"action":"remove","lines":[" "]},{"start":{"row":16,"column":12},"end":{"row":16,"column":16},"action":"remove","lines":["    "]},{"start":{"row":16,"column":8},"end":{"row":16,"column":12},"action":"remove","lines":["    "]},{"start":{"row":16,"column":4},"end":{"row":16,"column":8},"action":"remove","lines":["    "]},{"start":{"row":16,"column":0},"end":{"row":16,"column":4},"action":"remove","lines":["    "]}],[{"start":{"row":15,"column":64},"end":{"row":16,"column":0},"action":"remove","lines":["",""],"id":14}],[{"start":{"row":15,"column":64},"end":{"row":16,"column":0},"action":"insert","lines":["",""],"id":15},{"start":{"row":16,"column":0},"end":{"row":16,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":17,"column":17},"end":{"row":17,"column":18},"action":"remove","lines":[" "],"id":16},{"start":{"row":17,"column":16},"end":{"row":17,"column":17},"action":"remove","lines":[" "]},{"start":{"row":17,"column":12},"end":{"row":17,"column":16},"action":"remove","lines":["    "]}],[{"start":{"row":18,"column":5},"end":{"row":18,"column":6},"action":"remove","lines":[" "],"id":17},{"start":{"row":18,"column":4},"end":{"row":18,"column":5},"action":"remove","lines":[" "]},{"start":{"row":18,"column":0},"end":{"row":18,"column":4},"action":"remove","lines":["    "]},{"start":{"row":17,"column":37},"end":{"row":18,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":17,"column":37},"end":{"row":18,"column":0},"action":"insert","lines":["",""],"id":18},{"start":{"row":18,"column":0},"end":{"row":18,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":19,"column":5},"end":{"row":19,"column":6},"action":"remove","lines":[" "],"id":19},{"start":{"row":19,"column":4},"end":{"row":19,"column":5},"action":"remove","lines":[" "]},{"start":{"row":19,"column":0},"end":{"row":19,"column":4},"action":"remove","lines":["    "]},{"start":{"row":18,"column":40},"end":{"row":19,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":18,"column":40},"end":{"row":19,"column":0},"action":"insert","lines":["",""],"id":20},{"start":{"row":19,"column":0},"end":{"row":19,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":20,"column":5},"end":{"row":20,"column":6},"action":"remove","lines":[" "],"id":21},{"start":{"row":20,"column":4},"end":{"row":20,"column":5},"action":"remove","lines":[" "]},{"start":{"row":20,"column":0},"end":{"row":20,"column":4},"action":"remove","lines":["    "]},{"start":{"row":19,"column":39},"end":{"row":20,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":19,"column":39},"end":{"row":20,"column":0},"action":"insert","lines":["",""],"id":22},{"start":{"row":20,"column":0},"end":{"row":20,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":21,"column":5},"end":{"row":21,"column":6},"action":"remove","lines":[" "],"id":23},{"start":{"row":21,"column":4},"end":{"row":21,"column":5},"action":"remove","lines":[" "]},{"start":{"row":21,"column":0},"end":{"row":21,"column":4},"action":"remove","lines":["    "]},{"start":{"row":20,"column":35},"end":{"row":21,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":20,"column":35},"end":{"row":21,"column":0},"action":"insert","lines":["",""],"id":24},{"start":{"row":21,"column":0},"end":{"row":21,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":22,"column":5},"end":{"row":22,"column":6},"action":"remove","lines":[" "],"id":25},{"start":{"row":22,"column":4},"end":{"row":22,"column":5},"action":"remove","lines":[" "]},{"start":{"row":22,"column":0},"end":{"row":22,"column":4},"action":"remove","lines":["    "]},{"start":{"row":21,"column":36},"end":{"row":22,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":21,"column":36},"end":{"row":22,"column":0},"action":"insert","lines":["",""],"id":26},{"start":{"row":22,"column":0},"end":{"row":22,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":23,"column":5},"end":{"row":23,"column":6},"action":"remove","lines":[" "],"id":27},{"start":{"row":23,"column":4},"end":{"row":23,"column":5},"action":"remove","lines":[" "]},{"start":{"row":23,"column":0},"end":{"row":23,"column":4},"action":"remove","lines":["    "]},{"start":{"row":22,"column":47},"end":{"row":23,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":22,"column":47},"end":{"row":23,"column":0},"action":"insert","lines":["",""],"id":28},{"start":{"row":23,"column":0},"end":{"row":23,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":24,"column":5},"end":{"row":24,"column":6},"action":"remove","lines":[" "],"id":29},{"start":{"row":24,"column":4},"end":{"row":24,"column":5},"action":"remove","lines":[" "]},{"start":{"row":24,"column":0},"end":{"row":24,"column":4},"action":"remove","lines":["    "]},{"start":{"row":23,"column":33},"end":{"row":24,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":23,"column":33},"end":{"row":24,"column":0},"action":"insert","lines":["",""],"id":30},{"start":{"row":24,"column":0},"end":{"row":24,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":25,"column":5},"end":{"row":25,"column":6},"action":"remove","lines":[" "],"id":31},{"start":{"row":25,"column":4},"end":{"row":25,"column":5},"action":"remove","lines":[" "]},{"start":{"row":25,"column":0},"end":{"row":25,"column":4},"action":"remove","lines":["    "]},{"start":{"row":24,"column":38},"end":{"row":25,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":24,"column":38},"end":{"row":25,"column":0},"action":"insert","lines":["",""],"id":32},{"start":{"row":25,"column":0},"end":{"row":25,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":25,"column":34},"end":{"row":26,"column":0},"action":"remove","lines":["",""],"id":33}],[{"start":{"row":26,"column":5},"end":{"row":26,"column":6},"action":"remove","lines":[" "],"id":34},{"start":{"row":26,"column":4},"end":{"row":26,"column":5},"action":"remove","lines":[" "]},{"start":{"row":26,"column":0},"end":{"row":26,"column":4},"action":"remove","lines":["    "]},{"start":{"row":25,"column":34},"end":{"row":26,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":25,"column":34},"end":{"row":26,"column":0},"action":"insert","lines":["",""],"id":35},{"start":{"row":26,"column":0},"end":{"row":26,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":27,"column":5},"end":{"row":27,"column":6},"action":"remove","lines":[" "],"id":36},{"start":{"row":27,"column":4},"end":{"row":27,"column":5},"action":"remove","lines":[" "]},{"start":{"row":27,"column":0},"end":{"row":27,"column":4},"action":"remove","lines":["    "]},{"start":{"row":26,"column":33},"end":{"row":27,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":26,"column":33},"end":{"row":27,"column":0},"action":"insert","lines":["",""],"id":37},{"start":{"row":27,"column":0},"end":{"row":27,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":28,"column":5},"end":{"row":28,"column":6},"action":"remove","lines":[" "],"id":38},{"start":{"row":28,"column":4},"end":{"row":28,"column":5},"action":"remove","lines":[" "]},{"start":{"row":28,"column":0},"end":{"row":28,"column":4},"action":"remove","lines":["    "]},{"start":{"row":27,"column":41},"end":{"row":28,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":27,"column":41},"end":{"row":28,"column":0},"action":"insert","lines":["",""],"id":39},{"start":{"row":28,"column":0},"end":{"row":28,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":29,"column":5},"end":{"row":29,"column":6},"action":"remove","lines":[" "],"id":40},{"start":{"row":29,"column":4},"end":{"row":29,"column":5},"action":"remove","lines":[" "]},{"start":{"row":29,"column":0},"end":{"row":29,"column":4},"action":"remove","lines":["    "]},{"start":{"row":28,"column":29},"end":{"row":29,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":28,"column":29},"end":{"row":29,"column":0},"action":"insert","lines":["",""],"id":41},{"start":{"row":29,"column":0},"end":{"row":29,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":30,"column":8},"end":{"row":30,"column":12},"action":"remove","lines":["    "],"id":42}],[{"start":{"row":31,"column":4},"end":{"row":31,"column":8},"action":"remove","lines":["    "],"id":43}],[{"start":{"row":32,"column":0},"end":{"row":32,"column":4},"action":"remove","lines":["    "],"id":44},{"start":{"row":31,"column":39},"end":{"row":32,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":31,"column":39},"end":{"row":33,"column":8},"action":"insert","lines":["","            ","        "],"id":45}],[{"start":{"row":33,"column":0},"end":{"row":33,"column":11},"action":"remove","lines":["        });"],"id":46},{"start":{"row":32,"column":12},"end":{"row":33,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":42,"column":5},"end":{"row":43,"column":0},"action":"insert","lines":["",""],"id":47},{"start":{"row":43,"column":0},"end":{"row":43,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":43,"column":8},"end":{"row":46,"column":29},"action":"insert","lines":["Schema::table('networks',function($table){","      $table->dropForeign(['user_id']);","    });","    Schema::drop('networks');"],"id":48}],[{"start":{"row":44,"column":5},"end":{"row":44,"column":6},"action":"remove","lines":[" "],"id":49},{"start":{"row":44,"column":4},"end":{"row":44,"column":5},"action":"remove","lines":[" "]},{"start":{"row":44,"column":0},"end":{"row":44,"column":4},"action":"remove","lines":["    "]},{"start":{"row":43,"column":50},"end":{"row":44,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":43,"column":50},"end":{"row":44,"column":0},"action":"insert","lines":["",""],"id":50},{"start":{"row":44,"column":0},"end":{"row":44,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":45,"column":0},"end":{"row":45,"column":4},"action":"remove","lines":["    "],"id":51},{"start":{"row":44,"column":45},"end":{"row":45,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":44,"column":45},"end":{"row":46,"column":8},"action":"insert","lines":["","            ","        "],"id":52}],[{"start":{"row":45,"column":8},"end":{"row":45,"column":12},"action":"remove","lines":["    "],"id":53},{"start":{"row":45,"column":4},"end":{"row":45,"column":8},"action":"remove","lines":["    "]},{"start":{"row":45,"column":0},"end":{"row":45,"column":4},"action":"remove","lines":["    "]},{"start":{"row":44,"column":45},"end":{"row":45,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":46,"column":0},"end":{"row":46,"column":4},"action":"remove","lines":["    "],"id":54},{"start":{"row":45,"column":11},"end":{"row":46,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":45,"column":11},"end":{"row":46,"column":0},"action":"insert","lines":["",""],"id":55},{"start":{"row":46,"column":0},"end":{"row":46,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":46,"column":8},"end":{"row":46,"column":11},"action":"insert","lines":["// "],"id":56}],[{"start":{"row":27,"column":29},"end":{"row":27,"column":30},"action":"insert","lines":["s"],"id":57}],[{"start":{"row":27,"column":29},"end":{"row":27,"column":30},"action":"remove","lines":["s"],"id":58},{"start":{"row":27,"column":28},"end":{"row":27,"column":29},"action":"remove","lines":["t"]},{"start":{"row":27,"column":27},"end":{"row":27,"column":28},"action":"remove","lines":["n"]},{"start":{"row":27,"column":26},"end":{"row":27,"column":27},"action":"remove","lines":["e"]},{"start":{"row":27,"column":25},"end":{"row":27,"column":26},"action":"remove","lines":["m"]},{"start":{"row":27,"column":24},"end":{"row":27,"column":25},"action":"remove","lines":["e"]},{"start":{"row":27,"column":23},"end":{"row":27,"column":24},"action":"remove","lines":["r"]},{"start":{"row":27,"column":22},"end":{"row":27,"column":23},"action":"remove","lines":["c"]}],[{"start":{"row":27,"column":22},"end":{"row":27,"column":23},"action":"insert","lines":["t"],"id":59},{"start":{"row":27,"column":23},"end":{"row":27,"column":24},"action":"insert","lines":["e"]},{"start":{"row":27,"column":24},"end":{"row":27,"column":25},"action":"insert","lines":["g"]},{"start":{"row":27,"column":25},"end":{"row":27,"column":26},"action":"insert","lines":["e"]},{"start":{"row":27,"column":26},"end":{"row":27,"column":27},"action":"insert","lines":["r"]}],[{"start":{"row":27,"column":38},"end":{"row":27,"column":39},"action":"insert","lines":["-"],"id":60},{"start":{"row":27,"column":39},"end":{"row":27,"column":40},"action":"insert","lines":[">"]}],[{"start":{"row":27,"column":40},"end":{"row":27,"column":41},"action":"insert","lines":["u"],"id":61},{"start":{"row":27,"column":41},"end":{"row":27,"column":42},"action":"insert","lines":["n"]},{"start":{"row":27,"column":42},"end":{"row":27,"column":43},"action":"insert","lines":["s"]},{"start":{"row":27,"column":43},"end":{"row":27,"column":44},"action":"insert","lines":["i"]}],[{"start":{"row":27,"column":44},"end":{"row":27,"column":45},"action":"insert","lines":["g"],"id":62},{"start":{"row":27,"column":45},"end":{"row":27,"column":46},"action":"insert","lines":["n"]},{"start":{"row":27,"column":46},"end":{"row":27,"column":47},"action":"insert","lines":["e"]},{"start":{"row":27,"column":47},"end":{"row":27,"column":48},"action":"insert","lines":["d"]}],[{"start":{"row":27,"column":48},"end":{"row":27,"column":50},"action":"insert","lines":["()"],"id":63}],[{"start":{"row":17,"column":36},"end":{"row":17,"column":37},"action":"insert","lines":["-"],"id":64},{"start":{"row":17,"column":37},"end":{"row":17,"column":38},"action":"insert","lines":[">"]},{"start":{"row":17,"column":38},"end":{"row":17,"column":39},"action":"insert","lines":["u"]},{"start":{"row":17,"column":39},"end":{"row":17,"column":40},"action":"insert","lines":["n"]}],[{"start":{"row":17,"column":38},"end":{"row":17,"column":40},"action":"remove","lines":["un"],"id":65},{"start":{"row":17,"column":38},"end":{"row":17,"column":46},"action":"insert","lines":["unsigned"]}],[{"start":{"row":17,"column":46},"end":{"row":17,"column":48},"action":"insert","lines":["()"],"id":66}],[{"start":{"row":25,"column":34},"end":{"row":26,"column":0},"action":"insert","lines":["",""],"id":67},{"start":{"row":26,"column":0},"end":{"row":26,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":17,"column":36},"end":{"row":17,"column":48},"action":"remove","lines":["->unsigned()"],"id":68}],[{"start":{"row":17,"column":36},"end":{"row":17,"column":37},"action":"insert","lines":["-"],"id":69},{"start":{"row":17,"column":37},"end":{"row":17,"column":38},"action":"insert","lines":[">"]},{"start":{"row":17,"column":38},"end":{"row":17,"column":39},"action":"insert","lines":["u"]},{"start":{"row":17,"column":39},"end":{"row":17,"column":40},"action":"insert","lines":["n"]}],[{"start":{"row":17,"column":40},"end":{"row":17,"column":41},"action":"insert","lines":["s"],"id":70}],[{"start":{"row":17,"column":38},"end":{"row":17,"column":41},"action":"remove","lines":["uns"],"id":71},{"start":{"row":17,"column":38},"end":{"row":17,"column":46},"action":"insert","lines":["unsigned"]}],[{"start":{"row":17,"column":46},"end":{"row":17,"column":48},"action":"insert","lines":["()"],"id":72}],[{"start":{"row":17,"column":45},"end":{"row":17,"column":46},"action":"remove","lines":["d"],"id":73},{"start":{"row":17,"column":44},"end":{"row":17,"column":45},"action":"remove","lines":["e"]},{"start":{"row":17,"column":43},"end":{"row":17,"column":44},"action":"remove","lines":["n"]},{"start":{"row":17,"column":42},"end":{"row":17,"column":43},"action":"remove","lines":["g"]},{"start":{"row":17,"column":41},"end":{"row":17,"column":42},"action":"remove","lines":["i"]},{"start":{"row":17,"column":40},"end":{"row":17,"column":41},"action":"remove","lines":["s"]}],[{"start":{"row":17,"column":40},"end":{"row":17,"column":41},"action":"insert","lines":["i"],"id":74},{"start":{"row":17,"column":41},"end":{"row":17,"column":42},"action":"insert","lines":["s"]}],[{"start":{"row":17,"column":41},"end":{"row":17,"column":42},"action":"remove","lines":["s"],"id":75}],[{"start":{"row":17,"column":41},"end":{"row":17,"column":42},"action":"insert","lines":["q"],"id":76},{"start":{"row":17,"column":42},"end":{"row":17,"column":43},"action":"insert","lines":["u"]},{"start":{"row":17,"column":43},"end":{"row":17,"column":44},"action":"insert","lines":["e"]}],[{"start":{"row":32,"column":35},"end":{"row":32,"column":36},"action":"remove","lines":["l"],"id":77},{"start":{"row":32,"column":34},"end":{"row":32,"column":35},"action":"remove","lines":["l"]},{"start":{"row":32,"column":33},"end":{"row":32,"column":34},"action":"remove","lines":["u"]},{"start":{"row":32,"column":32},"end":{"row":32,"column":33},"action":"remove","lines":["n"]},{"start":{"row":32,"column":31},"end":{"row":32,"column":32},"action":"remove","lines":[" "]},{"start":{"row":32,"column":30},"end":{"row":32,"column":31},"action":"remove","lines":["t"]},{"start":{"row":32,"column":29},"end":{"row":32,"column":30},"action":"remove","lines":["e"]},{"start":{"row":32,"column":28},"end":{"row":32,"column":29},"action":"remove","lines":["s"]}],[{"start":{"row":32,"column":28},"end":{"row":32,"column":29},"action":"insert","lines":["c"],"id":78},{"start":{"row":32,"column":29},"end":{"row":32,"column":30},"action":"insert","lines":["a"]}],[{"start":{"row":32,"column":29},"end":{"row":32,"column":30},"action":"remove","lines":["a"],"id":79}],[{"start":{"row":32,"column":29},"end":{"row":32,"column":30},"action":"insert","lines":["a"],"id":80},{"start":{"row":32,"column":30},"end":{"row":32,"column":31},"action":"insert","lines":["s"]}],[{"start":{"row":32,"column":31},"end":{"row":32,"column":32},"action":"insert","lines":["c"],"id":81},{"start":{"row":32,"column":32},"end":{"row":32,"column":33},"action":"insert","lines":["a"]},{"start":{"row":32,"column":33},"end":{"row":32,"column":34},"action":"insert","lines":["d"]},{"start":{"row":32,"column":34},"end":{"row":32,"column":35},"action":"insert","lines":["e"]}]]},"ace":{"folds":[],"scrolltop":156,"scrollleft":0,"selection":{"start":{"row":33,"column":12},"end":{"row":33,"column":12},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":9,"state":"php-doc-start","mode":"ace/mode/php"}},"timestamp":1630221118868,"hash":"6ba5abcf4d1fd208ae5d44bf57e245aa75d76ca7"}